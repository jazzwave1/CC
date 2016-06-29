<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Mvctest_dao extends CI_model 
{
  public function __construct()
  {
    $this->load->database('codingclub');
  }
  
  public function getUserInfo($in_user_id)
  {
    $query = "SELECT id, pwd
                FROM member_test 
               WHERE id = ?
    ";
    $aInputData = array('id' => $in_user_id);
    $bType = 's';

    if ($oResult = $this->db->query($query, $aInputData, true, $bType))
    {
       $result = $oResult->result();
        return $result;
    }
    else
    {
      print_r($this->db);
    }
    return false;

  }
}
?>
