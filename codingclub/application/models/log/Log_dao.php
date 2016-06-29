<?php defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'models/Common_dao.php');
class Log_dao extends Common_dao
{
  public function __construct()/*{{{*/
  {
    $this->load->database('codingclub');
    $aQueryInfo = cc_get_config('query', 'query');  
    $this->queryInfoLog = $aQueryInfo['log'];  
  }/*}}}*/

  public function setLoginLog($aParam='')/*{{{*/
  {
    $aConfig = $this->queryInfoLog['setLoginLog'];
    return $this->actModelFuc($aConfig, $aParam);
  }/*}}}*/
  


}
?>
