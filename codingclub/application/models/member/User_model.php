<?php defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_model
{
  public function __construct()
  {
    $this->user_dao = cc_get_instance('member/user_dao', 'model'); 
  }
 
  public function getUserInfo($aParam)
  {
    return $this->user_dao->getUserInfo($aParam); 
  }
  public function setMembership($aParam)
  {
    // sp 로 나중에 바꾸자 최소한 디비 트랜잭션이라도 걸어야함
    $this->user_dao->setAccount($aParam); 
    $this->user_dao->setUser($aParam); 
  }
  public function chkLogin($account_id, $passwd)
  {
    if(!$account_id || !$passwd) return false;

    return $this->_chkPWD($account_id, $passwd);
  }
  private function _chkPWD($account_id, $passwd)
  {
    if(!$account_id || !$passwd) return false;
   
    $aInput = array('account_id' => $account_id);
    if( $sPWD = $this->user_dao->getPwd($aInput) )
    {
      if($passwd == $sPWD)
        return true;
      else
        return false;
    }
    
    return false;
  }
}
?>
