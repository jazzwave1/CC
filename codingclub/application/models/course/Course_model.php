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
    
    return $oRtn;
  }

  private function _setViewInfo($oResult)
  {
    $aTmp = explode( ',' , $oResult->name );
    $oResult->name = $aTmp[1];
    return $oResult;
  }
  private function _getCourseInfo($aParam)
  {
    return $this->course_dao->getCourseInfo($aParam); 
  }
}
?>
