<?php defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'models/Common_dao.php');
class Admin_dao extends Common_dao
{
  public function __construct()
  {
    $this->load->database('codingclub');
    $aQueryInfo = cc_get_config('query', 'query');  
    $this->queryInfoAdmin = $aQueryInfo['admin'];  
  }
  
  public function getUserList($aParam='')/*{{{*/
  {
    $aConfig = $this->queryInfoAdmin['getUserList'];
    return $this->actModelFuc($aConfig, $aParam);
  }/*}}}*/
  public function getCourse($aParam='')/*{{{*/
  {
    $aConfig = $this->queryInfoAdmin['getCourse'];
    return $this->actModelFuc($aConfig, $aParam);
  }/*}}}*/

}
?>
