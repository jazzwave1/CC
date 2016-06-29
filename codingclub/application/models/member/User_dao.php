<?php defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'models/Common_dao.php');
class User_dao extends Common_dao
{
  public function __construct()
  {
    $this->load->database('codingclub');
    $aQueryInfo = cc_get_config('query', 'query');  
    $this->queryInfoMem = $aQueryInfo['membership'];  
  }
  
  public function getAccountInfo($aParam='')/*{{{*/
  {
    $aConfig = $this->queryInfoMem['getAccountInfo'];
    return $this->actModelFuc($aConfig, $aParam);
  }/*}}}*/
  public function getUserInfo($aParam='')/*{{{*/
  {
    $aConfig = $this->queryInfoMem['getUserInfo'];
    return $this->actModelFuc($aConfig, $aParam);
  }/*}}}*/
  public function setAccount($aParam='')/*{{{*/
  {
    $aConfig = $this->queryInfoMem['setAccountInfo'];
    return $this->actModelFuc($aConfig, $aParam);
  }/*}}}*/
  public function setUser($aParam='')/*{{{*/
  {
    $aConfig = $this->queryInfoMem['setUserInfo'];
    return $this->actModelFuc($aConfig, $aParam);
  }/*}}}*/


  public function getPwd($aParam='')/*{{{*/
  {
    $aConfig = $this->queryInfoMem['getPwd'];
    return $this->actModelFuc($aConfig, $aParam);
  }/*}}}*/
  


}
?>
