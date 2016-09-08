<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Course_model extends CI_model
{
  public function __construct()
  {
    $this->course_dao = cc_get_instance('course/course_dao', 'model'); 
  }
 
  public function getCourseInfo($courseIDX)
  {
    if(!$courseIDX) return false;;
    
    $aInput = array('idx' => $courseIDX); 
    
    $aResult = $this->_getCourseInfo($aInput);
    $oRtn = $this->_setViewInfo($aResult[0]); 
   
    $oRtn->content_long = explode('|', $oRtn->content_long);
    $oRtn->target_long  = explode('|', $oRtn->target_long);
    $oRtn->guide_long   = explode('|', $oRtn->guide_long);
 
    return $oRtn;
  }

  private function _setViewInfo($oResult)
  {
    $aTmp = explode( ',' , $oResult->name );
    
    if(count($aTmp) > 1)
      $oResult->name = $aTmp[1];
    else 
      $oResult->name = $oResult->name;
    return $oResult;
  }
  private function _getCourseInfo($aParam)
  {
    return $this->course_dao->getCourseInfo($aParam); 
  }
}
?>
