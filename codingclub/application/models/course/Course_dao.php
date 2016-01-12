<?php defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'models/Common_dao.php');
class Course_dao extends Common_dao
{
  public function __construct()
  {
    $this->load->database('codingclub');
    $this->queryInfo = cc_get_config('query', 'query');  
  }
 
  public function getCourseInfoToday($aParam='')
  {
    $aConfig = $this->queryInfo['course']['getCourseInfoToday'];
    return $this->actModelFuc($aConfig, $aParam);
  }
  
  
}
?>
