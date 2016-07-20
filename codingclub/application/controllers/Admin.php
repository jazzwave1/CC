<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->admin_model = cc_get_instance('admin/admin_model', 'model'); 
  }

  public function index()/*{{{*/
  {
  }/*}}}*/
 
  public function userlist($courseIdx='')
  {
    $data = array();
    $data['aCourse']  = $this->admin_model->getCourse();
    if($courseIdx)
    {
      $aResult = $this->admin_model->getUserList($courseIdx) ; 
      
      if(!$aResult)
        $data['aRowData'] = false;
      else 
        $data['aRowData'] = $aResult;
    }
    else
    {
      $data['aRowData'] = false;
    }
    $this->load->view('admin/admin', $data);  
  }
  public function memberJoinAccount()/*{{{*/
  {
    $aContents = array();
    $data = array(
       'contents' => $this->load->view('member/join_account', $aContents, true) 
      ,'pagename' => 'Join Account Info' 
    );

    $this->load->view('member/member_layout', $data);
  }/*}}}*/

}
?>
