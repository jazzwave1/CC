<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Log_model extends CI_model
{
  public function __construct()/*{{{*/
  {
    $this->log_dao = cc_get_instance('log/log_dao', 'model'); 
  }/*}}}*/

  public function setLoginLog($usn, $accountID)/*{{{*/
  {
    $aInput = array(
       'usn' => $usn
      ,'account_id' => $accountID
      ,'regdate' => date('YmdHis')
    );
    return $this->log_dao->setLoginLog($aInput);
  }/*}}}*/
}

?>
