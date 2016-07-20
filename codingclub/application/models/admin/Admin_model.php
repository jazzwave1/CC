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
}
?>
