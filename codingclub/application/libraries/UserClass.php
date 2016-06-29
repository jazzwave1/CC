<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class UserClass {

    public function __construct()/*{{{*/
    {
      $this->user_model       = cc_get_instance('member/user_model', 'model');
      
      $a = func_get_args(); 
      $i = func_num_args(); 
      if (method_exists($this,$f='__construct'.$i)) 
      { 
          call_user_func_array(array($this,$f),$a); 
      } 
    }/*}}}*/
    public function  __construct1($accountID)/*{{{*/
    {
      $sMemInfo = getCookieInfo();
      
      if(!$sMemInfo)
        return false;
      else
      {
        $oMemInfo = json_decode($sMemInfo);
        
        if($oMemInfo->accountID != $accountID)
          return false;
      }
      
      $this->accountID = $accountID; 
      $this->usn = $oMemInfo->usn; 
      
      $this->oAccountInfo = $this->getAccountInfo($this->usn);
      $this->oUserInfo    = $this->getUserInfo($this->usn);
    }/*}}}*/
 
    public function getAccountInfo($usn)/*{{{*/
    {
      if(!$usn) return false;
      
      $result = $this->user_model->getAccountInfo($usn);
      return $result[0];
    }/*}}}*/
    public function getUserInfo($usn)/*{{{*/
    {
      if(!$usn) return false;
      
      $result = $this->user_model->getUserInfo($usn);
      return $result[0];
    }/*}}}*/
    public function setUserInfo($aParam=array())/*{{{*/
    {
      return $this->user_model->setUserInfo($aParam);
    }/*}}}*/
    public function setAccountInfo($aParam=array())/*{{{*/
    {
      return $this->user_model->setAccountInfo($aParam);
    }/*}}}*/
 
} 
?>
