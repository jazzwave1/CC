<?php defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_model
{
  public function __construct()
  {
    $this->user_dao = cc_get_instance('member/user_dao', 'model'); 
    $this->membership_model = cc_get_instance('member/membership_model', 'model'); 
  }
 
  public function getAccountInfo($usn)/*{{{*/
  {
    if(!$usn) return false;
    
    $aInput = array('usn' => $usn);

    return $this->user_dao->getAccountInfo($aInput); 
  }/*}}}*/
  public function getUSN($accountID)/*{{{*/
  {
    if(!$accountID) return false;
    
    $aInput = array('account_id' => $accountID);
    
    return $this->user_dao->getUSN($aInput); 
  }/*}}}*/
  public function setAccountInfo($aParam)/*{{{*/
  {
    $aParam['pwd'] = $this->membership_model->getMkPWD($aParam['pwd']);  

    if($this->user_dao->setAccount($aParam))
      return true;
    else
      return false;
  }/*}}}*/
  public function getUserInfo($usn)/*{{{*/
  {
    if(!$usn) return false;
    
    $aInput = array('usn' => $usn);

    return $this->user_dao->getUserInfo($aInput); 
  }/*}}}*/
  public function setUserInfo($aParam)/*{{{*/
  {
    if($this->user_dao->setUser($aParam))
      return true;
    else
      return false;
  }/*}}}*/
  public function setQuestionInfo($aParam)/*{{{*/
  {
    $aCourse = explode('|', $aParam['course_idx']);
    foreach($aCourse as $key=>$val)
    {
      $aParam['course_idx'] = $val;
      $this->user_dao->setQuestionInfo($aParam);
    }
    return true;
  }/*}}}*/

  public function setMemberSVCInfo($aParam)/*{{{*/
  {
    if(!$aParam['usn']) return false;  

    $aCourse = explode('|', $aParam['course_idx']);
    foreach($aCourse as $key=>$val)
    {
      $aParam['course_idx'] = $val;
      $this->user_dao->setMemberSVCInfo($aParam); 
    }
    return true; 
  }/*}}}*/

  public function chkID($accountID)/*{{{*/
  {
    if(!$accountID)
      return false;

    return $this->membership_model->chkID($accountID);
  }/*}}}*/
}
?>
