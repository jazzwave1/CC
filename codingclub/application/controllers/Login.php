<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
      parent::__construct();
      $this->user_model = cc_get_instance('member/user_model', 'model'); 
    }

    public function index()
    {
      $this->load->view('member/login');  
    }

    public function rpcCheckLogin()
    {
      $account_id = trim($this->input->post('account_id')); 
      $passwd = trim($this->input->post('passwd')); 
   
      if( $this->_chkLogin($account_id, $passwd) )
        response_json(array("code"=>1,"msg"=>"OK"));
      else
        response_json(array("code"=>0,"msg"=>"Fail"));
    }
    private function _chkLogin($account_id, $passwd)
    {
      // test code 
      return true;
     


      return $this->user_model->chkLobin($account_id, $passwd);
    }
}
    
    
    
    
?>
