<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_model extends CI_model
{
  public function __construct()
  {
    $this->admin_dao = cc_get_instance('admin/admin_dao', 'model'); 
    $this->courseConfig = $this->getCourse();
    $this->memberSTATEConfig = cc_get_config('member_svc_state','member_config' );  
    $this->memberGRDEConfig  = cc_get_config('member_user_grde','member_config' );  
  }
  public function updateState($usn, $state, $courseIdx)
  {
    if(!$usn || !$state || !$courseIdx) return false;
  
    $aInput = array('usn' => $usn, 'state'=>$state, 'course_idx'=>$courseIdx );
    return $this->admin_dao->updateState($aInput); 
  } 
  public function getUserList($courseIdx)/*{{{*/
  {
    if(!$courseIdx) return false;
    
    $aInput = array('course_idx' => $courseIdx);

    $aResult = $this->admin_dao->getUserList($aInput);
    
    if($aResult)
    {
      foreach($aResult as $key=>$val)
      {
        $val->course_idx  = $this->courseConfig[$val->course_idx];
        $val->state       = $this->memberSTATEConfig[$val->state];
        $val->grde        = $this->memberGRDEConfig[$val->grde];
      }
    }
    return $aResult;
  }/*}}}*/
  public function getCourse()/*{{{*/
  {
    $aInput = array('idx' => 1);
    $aResult = $this->admin_dao->getCourse($aInput); 
    foreach($aResult as $key=>$val)
    {
      $aRtn[$val->idx] = $val->name;
    }
    return $aRtn;
  } /*}}}*/
  public function chkAdminLogin($accountID, $passwd)/*{{{*/
  {
    if(!$accountID || !$passwd) return false;
    
    $aAdminInfo = $this->_getAdminInfo();
    
    if($aAdminInfo['accountID'] == $accountID && $aAdminInfo['passwd'] == $passwd)
    {
      $this->_sCookie($accountID);
      return true;
    }
    else
      return false;
  }/*}}}*/
  private function _sCookie($accountID)/*{{{*/
  {
    $this->load->helper('cookie');
    $cookie = array(
      'name'   => 'AdminInfo',
      'value'  => json_encode(array('accountID' => $accountID)),
      'expire' => '1440',
      'domain' => '.codingclubs.org',
      'prefix' => 'codingclub_', 
      // test code 
      //'domain' => 'localhost',
    );
    set_cookie($cookie); 
    return; 
  }/*}}}*/
  private function _getAdminInfo()/*{{{*/
  {
    return array('accountID' => 'codingclub' , 'passwd' => 'coding2016');
  }/*}}}*/
}
?>
