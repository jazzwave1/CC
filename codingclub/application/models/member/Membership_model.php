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
        delete_cookie("codingclub_MemberInfo");

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
      //'domain' => '.codingclubs.org',
      'domain' => 'localhost',
      'prefix' => 'codingclub_', 
    );
    set_cookie($cookie); 
    return; 
  }/*}}}*/
  public function getMkPWD($passwd)/*{{{*/
  {
    return $this->_getMkPwd($passwd);  
  }/*}}}*/
  public function chkID($accountID)/*{{{*/
  {
    if(!$accountID) return false;
    
    if($this->_getIDCount($accountID) == 0)
      return true;
    else
      return false;
  }/*}}}*/
  public function sendJoinMail($accountID, $courseIDX)/*{{{*/
  {
    if(!$accountID || !$courseIDX) return false;

    $this->load->helper('email');

    if (! valid_email('email@somesite.com'))
      return false;
    else
      $this->_sendMail($accountID, $courseIDX);
    return;
  }/*}}}*/
  public function setConfirm($usn)
  {
    if(!$usn) return false;
    
    $this->user_dao->updateAccountConfirm(array('regdate'=>date('YmdHis'),'usn'=>$usn));
  }
  public function chkConfirm($usn, $fingerprint)
  {
    $mkFingerPrint = $this->_getFingerPrint($usn); 
    if($mkFingerPrint == $fingerprint)
      return true;
    else
      return false;
  }
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
    
    $this->load->library('email');

    $this->email->from('contact.codingclub@gmail.com', 'CodingClub');
    $this->email->to('jazzwave14@gmail.com'); 
    //$this->email->cc('another@another-example.com'); 
    //$this->email->bcc('them@their-example.com'); 

    $this->email->subject('[코딩클럽] 가입 및 수강신청 확인');
    $this->email->message(
    '안녕하세요 코딩클럽입니다.
    * 신청과목 : '.$aCourse[0]->name.'
    * 본인확인 인증 링크 :{unwrap} '.$sURL.'{/unwrap}');  

    $this->email->send();
    return;
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
  private function _getMkPwd($passwd)/*{{{*/
  {
    if(!$passwd) return false;

    return md5("coding".$passwd."club");
  } /*}}}*/
  private function _getPwdDB($accountID)/*{{{*/
  {
    if(!$accountID) return false;
    
    $aInput = array('account_id' => $accountID);
    
    $aResult = $this->user_dao->getPwd($aInput);
    return $aResult[0]; 
  }/*}}}*/
  private function _chkPWD($accountID, $passwd)/*{{{*/
  {
    if(!$accountID || !$passwd) return false;
   
    if(! $oAccountInfo= $this->_getPwdDB($accountID))
      return false;

    if(! $sMkPWD = $this->_getMkPwd($passwd))
      return false;
   
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
}

?>
