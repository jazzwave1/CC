<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginTest extends CI_Controller {

    public function __construct()
    {
      parent::__construct();
      $this->user_model = cc_get_instance('member/membertest_model', 'model'); 
    }

    public function index()
    {
      // test setting    
      $this->load->view('member/logintest');  
    }

    public function rpcCheckLogin()
    {
      $account_id = trim($this->input->post('account_id')); 
      $passwd     = trim($this->input->post('passwd')); 
  
      if( $this->_chkLogin($account_id, $passwd) )
        response_json(array("code"=>1,"msg"=>"OK"));
      else
        response_json(array("code"=>0,"msg"=>"Fail"));
    }
    private function _chkLogin($account_id, $passwd)
    {
      if(!$account_id || !$passwd)
      {
        $aRtn = array('code'=>999, 'msg'=>'input param null');
        return $aRtn;
      }
      return $this->user_model->chkLobin($account_id, $passwd);
    }
}
    
    
    
    
?>
