<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Membership_model extends CI_model
{
  public function __construct()/*{{{*/
  {
    $this->user_dao   = cc_get_instance('member/user_dao', 'model'); 
    $this->course_dao = cc_get_instance('course/course_dao', 'model'); 
    $this->log_model  = cc_get_instance('log/log_model', 'model'); 
  }/*}}}*/
   
  public function loginprocess($accountID, $passwd)/*{{{*/
  {
    if(!$accountID || !$passwd) return false;

    if(!$usn = $this->_chkPWD($accountID, $passwd))
    {
      return false; 
    }
    else
    {
      // chk cookie
      if(getCookieInfo())
      {
        $this->load->helper('cookie');
        delete_cookie("codingclub_MemberInfo");
      }

      // set cookie
      $this->sCookie($usn, $accountID); 

      // set loginlog
      $this->_setLoginLog($usn, $accountID); 
      return true;
    }
  }/*}}}*/
  public function sCookie($usn, $accountID)/*{{{*/
  {
    $this->load->helper('cookie');
    $cookie = array(
      'name'   => 'MemberInfo',
      'value'  => json_encode(array('accountID' => $accountID, 'usn' => $usn)),
      'expire' => '86500',
      'prefix' => 'codingclub_', 
      'domain' => CKDOMAIN,
    );
    set_cookie($cookie); 
    return; 
  }/*}}}*/
  public function chkID($accountID)/*{{{*/
  {
    if(!$accountID) return false;
    
    if($this->_getIDCount($accountID) == 0)
      return true;
    else
      return false;
  }/*}}}*/
 
// 리팩토링 필요한 부분 --// 
  public function sendJoinMail($accountID, $courseIDX)/*{{{*/
  {
    if(!$accountID || !$courseIDX) return false;

    $this->load->helper('email');

    if (! valid_email($accountID))
      return false;
    else
      $this->_sendMail($accountID, $courseIDX);
    return;
  }/*}}}*/
  public function sendJoinEmail($accountID, $type)/*{{{*/
  {
    if(!$accountID || !$type) return false;

    $this->load->helper('email');
    
    if (! valid_email($accountID))
      return false;
    else
    {
      $aEmailInfo['type'] = $type;
      $this->_sendEmail($accountID, $aEmailInfo);
    }
    return; 
  }/*}}}*/
// -----------------------//

  public function setConfirm($usn)/*{{{*/
  {
    if(!$usn) return false;
    
    $this->user_dao->updateAccountConfirm(array('regdate'=>date('YmdHis'),'usn'=>$usn));
  }/*}}}*/
  public function chkConfirm($usn, $fingerprint)/*{{{*/
  {
    $mkFingerPrint = $this->_getFingerPrint($usn); 
    if($mkFingerPrint == $fingerprint)
      return true;
    else
      return false;
  }/*}}}*/
  public function getConfirm($accountID)/*{{{*/
  {
    if(!$accountID) return false; 
  
    $oResult = $this->_getConfirm($accountID);
   
    if($oResult->confirm == null || !$oResult->confirm)
      return false;
    
    return true;
  }/*}}}*/

  private function _getFingerPrint($usn)/*{{{*/
  {
    return md5("codingclub".$usn); 
  }/*}}}*/
  private function _getIDCount($accountID)/*{{{*/
  {
    if(!$accountID) return false;
  
    $aInput = array('account_id' => $accountID);
  
    $aResult = $this->user_dao->getID($aInput);
    return $aResult[0]->cnt; 
  } /*}}}*/
  private function _getPwdDB($accountID)/*{{{*/
  {
    if(!$accountID) return false;
    
    $aInput = array('account_id' => $accountID);
    
    $aResult = $this->user_dao->getPwd($aInput);
    return $aResult[0]; 
  }/*}}}*/
  private function _getConfirm($accountID)/*{{{*/
  {
    if(!$accountID) return false;
    
    $aInput = array('account_id' => $accountID);
   
    $aResult = $this->user_dao->getConfirm($aInput);
    return $aResult[0]; 
  }/*}}}*/
  private function _chkPWD($accountID, $passwd)/*{{{*/
  {
    if(!$accountID || !$passwd) return false;
   
    if(! $oAccountInfo= $this->_getPwdDB($accountID))
      return false;
    
    $user = cc_get_instance('MemberLibClass');
    $sMkPWD = MemberLibClass::getMKPwd($passwd);
  
    if($oAccountInfo->pwd == $sMkPWD)
      return $oAccountInfo->usn;
    else
      return false;
    
    return false;
  }/*}}}*/
  private function _setLoginLog($usn, $accountID)/*{{{*/
  {
    if(!$usn || !$accountID) return false;

    return $this->log_model->setLoginLog($usn, $accountID);
  }/*}}}*/

// 리팩토링 필요한 부분 --// 
  private function _sendMail($accountID, $courseIDX)/*{{{*/
  {
    if(!$accountID || !$courseIDX) return false;
    
    // get usn
    $aAccount = $this->user_dao->getUSN(array("account_id"=>$accountID));
    $usn = $aAccount[0]->usn; 
    // get course Info
    $aCourse = $this->course_dao->getCourseInfo(array("idx"=>$courseIDX));

    // make fingerprint
    $sFingerPrint = $this->_getFingerPrint($usn); 
    // make url sting
    $sURL = "http://member.codingclubs.org/Member/chkConfirm/".$usn."/".$sFingerPrint;
    
    $config['mailtype'] = "html"; 
    $config['charset'] = "utf-8"; 
    $config['protocol'] = "smtp"; 
    $config['smtp_host'] = "ssl://smtp.googlemail.com"; 
    $config['smtp_port'] = 465; 
    $config['smtp_user'] = "jazzwave14@gmail.com"; 
    $config['smtp_pass'] = "dlghwns0610()("; 
    $config['smtp_timeout'] = 10; 

    $content = "안녕하세요 코딩클럽입니다.";
    $content .= "<br>";
    $content .= "* 신청과목 : ".$aCourse[0]->name ;
    $content .= "<br>";
    $content .= "* 본인확인 인증 링크 :{unwrap} ".$sURL."{/unwrap}";

    $this->load->library('email', $config); 
    $this->email->set_newline("\r\n"); 
    $this->email->clear(); 
    $this->email->from("contact.codingclub@gmail.com,jazzwave14@gmail.com", "CodingClub"); 
    $this->email->to($accountID); 
    $this->email->subject("[코딩클럽] 가입 및 수강신청 확인"); 
    $this->email->message($content);

    $this->email->send(); 
     
    $this->email->set_newline("\r\n"); 
    return;
  }/*}}}*/
  private function _sendEmail($accountID, $aMailInfo=array())/*{{{*/
  {
    if(!$accountID || !$aMailInfo) return false;
    
    // get usn
    $aAccount = $this->user_dao->getUSN(array("account_id"=>$accountID));
    $usn = $aAccount[0]->usn; 
    $aMailInfo['usn'] = $usn;
    
    $aResult = $this->_getMailContent($aMailInfo['type'], $aMailInfo);

    $config['mailtype'] = "html"; 
    $config['charset'] = "utf-8"; 
    $config['protocol'] = "smtp"; 
    $config['smtp_host'] = "ssl://smtp.googlemail.com"; 
    $config['smtp_port'] = 465; 
    $config['smtp_user'] = "jazzwave14@gmail.com"; 
    $config['smtp_pass'] = "dlghwns0610()("; 
    $config['smtp_timeout'] = 10; 

    $this->load->library('email', $config); 
    $this->email->set_newline("\r\n"); 
    $this->email->clear(); 
    $this->email->from("contact.codingclub@gmail.com,jazzwave14@gmail.com", "CodingClub"); 
    $this->email->to($accountID); 
    $this->email->subject($aResult['subject']); 
    $this->email->message($aResult['sContent']);

    $this->email->send(); 
     
    $this->email->set_newline("\r\n"); 
    return;
  }/*}}}*/
  private function _getMailContent($type='', $aContentInfo)/*{{{*/
  {
    switch($type)
    {
      case 'AccountJoin': /*{{{*/
        $sFingerPrint = $this->_getFingerPrint($aContentInfo['usn']); 
        $sURL = HOSTURL."/Member/chkConfirm/".$aContentInfo['usn']."/".$sFingerPrint;
        
        $aRtn['subject'] = "[코딩클럽] 이메일 아이디 본인확인 메일입니다."; 
        $aRtn['sContent'] = "안녕하세요 코딩클럽입니다.<br><br>
          * 본인확인 인증 링크 :{unwrap} ".$sURL."{/unwrap}<br><br> 
          브라우저에서 위의 링크를 열어 주시기 바랍니다.<br>
          감사합니다.";
          break;/*}}}*/
    }  
    
    return $aRtn;
  }/*}}}*/
// -----------------------//
}

?>
