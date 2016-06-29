<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Mvctest_model extends CI_model
{
  public function __construct()
  {
    $this->dao = cc_get_instance('mvctest/Mvctest_dao', 'model'); 
  }
  
  public function loginProcess($in_user_id, $in_user_pwd)
  {
    if(!$this->_chkIdType($in_user_id)) 
      return array("rtn"=>999, "msg"=>"error id");
    if(!$this->_chkPwdType($in_user_pwd)) 
      return array("rtn"=>998, "msg"=>"error pwd");
    if(!$this->_chkPwdLen($in_user_pwd)) 
      return array("rtn"=>998, "msg"=>"error pwd");
    if(!$this->_chkPWD($in_user_id, $in_user_pwd))
      return array("rtn"=>997, "msg"=>"fail pwd");
  
    return array("rtn"=>1, "msg"=>"OK");
  }
  private function _chkPWD($in_user_id, $in_user_pwd)
  {
    $make_pwd  = $this->_makePWD($in_user_pwd); 
    $aUserInfo = $this->_getUserInfo($in_user_id);
    
    if($make_pwd == $aUserInfo[0]->pwd)
      return true;
    else
      return false;
  }
  private function _getUserInfo($in_user_id)
  {
    return $this->dao->getUserInfo($in_user_id); 
  }
  private function _makePWD($in_user_pwd)
  {
    return md5("co".$in_user_pwd."de");
  }
  private function _chkIdType($in_user_id)
  {
    $check_email = preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $in_user_id);

    return $check_email; 
  }
  private function _chkPwdType($in_user_pwd)
  {
    $check_pwd = preg_match("/^[_\.0-9a-zA-Z-]/i", $in_user_pwd);
    return $check_pwd; 
  }
  private function _chkPwdLen($in_user_pwd)
  {
    if(strlen($in_user_pwd) < 8 && strlen($in_user_pwd) > 30)
      return false; 
    else
      return true; 
  }

}
?>
