<?php defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'models/Common_dao.php');
class User_dao extends Common_dao
{
  public function __construct()
  {
    $this->load->database('codingclub');
    $this->queryInfo = cc_get_config('query', 'query');  
  }
  
  public function getUserInfo($aParam='')
  {
    $aConfig = $this->queryInfo['membership']['getUserInfo'];
    return $this->actModelFuc($aConfig, $aParam);
  }
  public function setAccount($aParam='')
  {
    $aConfig = $this->queryInfo['membership']['setAccountInfo'];
    return $this->actModelFuc($aConfig, $aParam);
  }
  public function setUser($aParam='')
  {
    $aConfig = $this->queryInfo['membership']['setUserInfo'];
    return $this->actModelFuc($aConfig, $aParam);
  }
  public function getPwd($aParam='')
  {
    $aConfig = $this->queryInfo['membership']['getPwd'];
    return $this->actModelFuc($aConfig, $aParam);
  }


}
?>
