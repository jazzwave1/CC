<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Membership_model extends CI_model
{
  public function __construct()/*{{{*/
  {
    $this->user_dao = cc_get_instance('member/user_dao', 'model'); 
    $this->log_model = cc_get_instance('log/log_model', 'model'); 
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
