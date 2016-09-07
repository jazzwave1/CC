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
  public function getConfirm($aParam='')/*{{{*/
  {
    $aConfig = $this->queryInfoMem['getConfirm'];
    return $this->actModelFuc($aConfig, $aParam);
  }/*}}}*/
  public function getID($aParam='')/*{{{*/
  {
    $aConfig = $this->queryInfoMem['getIDCount'];
    return $this->actModelFuc($aConfig, $aParam);
  }/*}}}*/
  public function getUSN($aParam='')/*{{{*/
  {
    $aConfig = $this->queryInfoMem['getAccountInfoID'];
    return $this->actModelFuc($aConfig, $aParam);
  }/*}}}*/
  public function setQuestionInfo($aParam='')/*{{{*/
  {
    $aConfig = $this->queryInfoMem['setQuestionInfo'];
    return $this->actModelFuc($aConfig, $aParam);
  }/*}}}*/
  public function setMemberSVCInfo($aParam='')/*{{{*/
  {
    $aConfig = $this->queryInfoMem['setMemberSVC'];
    return $this->actModelFuc($aConfig, $aParam);
  }/*}}}*/
  public function getMemberSVCInfo($aParam='')/*{{{*/
  {
    $aConfig = $this->queryInfoMem['getMemberSVC'];
    return $this->actModelFuc($aConfig, $aParam);
  }/*}}}*/
  public function updateAccountConfirm($aParam='')/*{{{*/
  {
    $aConfig = $this->queryInfoMem['updateAccountConfirm'];
    return $this->actModelFuc($aConfig, $aParam);
  }/*}}}*/
  public function updateUserInfo($aParam='')/*{{{*/
  {
    $aConfig = $this->queryInfoMem['updateUserInfo'];
    return $this->actModelFuc($aConfig, $aParam);
  }/*}}}*/

}
?>
