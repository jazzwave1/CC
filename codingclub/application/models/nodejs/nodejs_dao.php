<?php defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'models/Common_dao.php');
class nodejs_dao extends Common_dao
{
  public function __construct()
  {
    $this->load->database('codingclub');
    $this->queryInfo = cc_get_config('query', 'nodejs_query');  
  }
  
  public function getInfo($aParam='')
  {
    $aConfig = $this->queryInfo['test']['getInfo'];
    return $this->actModelFuc($aConfig, $aParam);
  }
}
?>
