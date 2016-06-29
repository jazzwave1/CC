<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nodejs_model extends CI_model
{
  public function __construct()
  {
    $this->nodejs_dao = cc_get_instance('nodejs/nodejs_dao', 'model'); 
  }
 
  public function getInfo($aParam)
  {
    return $this->nodejs_dao->getInfo($aParam); 
  }
}
?>
