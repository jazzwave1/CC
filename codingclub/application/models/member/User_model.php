<?php defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_model
{
  public function __construct()
  {
    $this->user_dao = cc_get_instance('member/user_dao', 'model'); 
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
    $user = cc_get_instance('MemberLibClass');
    $aParam['pwd'] = MemberLibClass::getMKPwd($aParam['pwd']);

    if($this->user_dao->setAccount($aParam))
      return true;
    else
      return false;
  }/*}}}*/
  public function getUserInfo($usn)/*{{{*/
  {
    if(!$usn) return false;
    
    $aInput = array('usn' => $usn);

    $aResult = $this->user_dao->getUserInfo($aInput); 
    
    if($aResult)
    {
      $aMemConfig = cc_get_config('Mem', 'code');
      foreach($aResult as $key=>$val)
      {
        $val->grde= $aMemConfig[$val->grde]; 
      }
    }
        
    return $aResult;
  
  }/*}}}*/
  public function setUserInfo($aParam)/*{{{*/
  {
    $aResult = $this->getUserInfo($aParam['usn']);
   
    if(!$aResult)
    {
      if($this->user_dao->setUser($aParam))
        return true;
      else
        return false;
    }
    else
    {
      if($this->user_dao->updateUserInfo($aParam))
        return true;
      else
        return false;
    }
  }/*}}}*/
  public function setQuestionInfo($aParam)/*{{{*/
  {
    $aCourse = explode('|', $aParam['course_idx']);
    
    $aParam['usn_up'] = $aParam['usn']; 
    $aParam['course_idx_up'] = $aParam['course_idx'];
    $aParam['recommend_up'] = $aParam['recommend'];
    $aParam['motive_up'] = $aParam['motive']; 
    $aParam['like_tf_up'] = $aParam['like_tf'];
    $aParam['experience_up'] = $aParam['experience'];
    $aParam['nature_up'] = $aParam['nature'];
    $aParam['favor_up'] = $aParam['favor'];
    $aParam['jr_hope_up'] = $aParam['jr_hope'];
    $aParam['channel_up'] = $aParam['channel'];
    $aParam['club_hope_up'] = $aParam['club_hope'];
    $aParam['inquiry_up'] = $aParam['inquiry'];
    $aParam['exprogram_up'] = $aParam['exprogram'];

    foreach($aCourse as $key=>$val)
    {
      $aParam['course_idx'] = $val;
      $aParam['course_idx_up'] = $val;
      $this->user_dao->setQuestionInfo($aParam);
    }
    return true;
  }/*}}}*/
  public function setMemberSVCInfo($aParam)/*{{{*/
  {
    if(!$aParam['usn']) return false;  

    $aCourse = explode('|', $aParam['course_idx']);
   
    $aParam['usn_up'] = $aParam['usn'];
    $aParam['course_idx_up'] = $aParam['course_idx'];
    $aParam['state_up'] = $aParam['state'];
    $aParam['regdate_up'] = $aParam['regdate'];
    
    foreach($aCourse as $key=>$val)
    {
      $aParam['course_idx'] = $val;
      $aParam['course_idx_up'] = $val;
      $this->user_dao->setMemberSVCInfo($aParam); 
    }
    return true; 
  }/*}}}*/
  public function getMemberSVCInfo($usn)/*{{{*/
  {
    if(!$usn) return false;
    
    $aInput = array('usn' => $usn);
    $aMemConfig = cc_get_config('Mem', 'code');
    $aResult = $this->user_dao->getMemberSVCInfo($aInput) ; 
    if($aResult)
    {
      foreach($aResult as $key=>$val)
      {
        $val->state = $aMemConfig[$val->state]; 
      }
    }
    
    return $aResult;
  }/*}}}*/
  
}
?>
