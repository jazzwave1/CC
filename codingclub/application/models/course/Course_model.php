<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Course_model extends CI_model
{
  public function __construct()
  {
    $this->course_dao = cc_get_instance('course/course_dao', 'model'); 
  }
 
  public function getCourseInfoToday($aParam)
  {
    return $this->course_dao->getCourseInfoToday($aParam); 
  }
  
}
?>
