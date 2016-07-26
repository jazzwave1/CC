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
  public function updateState($usn, $state, $courseIdx)/*{{{*/
  {
    if(!$usn || !$state || !$courseIdx) return false;
  
    $aInput = array('usn' => $usn, 'state'=>$state, 'course_idx'=>$courseIdx );
    return $this->admin_dao->updateState($aInput); 
  } /*}}}*/
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

  public function getSummerCampFull()/*{{{ 2016 07 SummerCampList*/
  {
    $aCourseIDX = array(
       'course_idx1'=>20
      ,'course_idx2'=>21
      ,'course_idx3'=>22);
    
    $aMemConfig = cc_get_config('Mem', 'code');
    $aResult = $this->_getExcelList($aCourseIDX) ;
    $temp = '';
    foreach($aResult as $key=>$val)
    {
      $val->course_idx  = $this->courseConfig[$val->course_idx];
      $val->state       = $this->memberSTATEConfig[$val->state];
      $val->grde        = $this->memberGRDEConfig[$val->grde];
      $aProgram = explode("|", $val->exprogram);
      $val->exprogram = ''; 
      
      foreach($aProgram as $k=>$v)
      {
        if(trim($v))
        {
          $val->exprogram .= $this->courseConfig[$v].", ";
        }
      }
    }
    return $aResult;
  }/*}}}*/
  
  private function _getExcelList($aCourseIDX)/*{{{*/
  {
    if(!is_array($aCourseIDX) || count($aCourseIDX) < 1) return false;

    return $this->admin_dao->getExcelList($aCourseIDX); 
  }/*}}}*/
  private function _sCookie($accountID)/*{{{*/
  {  
    $this->load->helper('cookie');
    $cookie = array(
      'name'   => 'AdminInfo',
      'value'  => json_encode(array('accountID' => $accountID)),
      'expire' => '1440',
      'prefix' => 'codingclub_', 
      'domain' => '.codingclubs.org',
      // test code 
      //'domain' => 'localhost',
    );
    set_cookie($cookie); 
    return; 
  }/*}}}*/
  private function _getAdminInfo()/*{{{*/
  {
    return array('accountID' => 'codingclub' , 'passwd' => 'codingclub2016');
  }/*}}}*/
}
?>
