<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
      parent::__construct();
      $this->membership_model = cc_get_instance('member/membership_model', 'model'); 
    }

    public function index()/*{{{*/
    {
      ///* test code
//    $accountID = 'jazzwave14@gmail.com';
//    $user = cc_get_instance('UserClass');
//    $oUser = new $user($accountID);
//    print_r($oUser);
//    $oUser->setUserInfo(array());
       
      $aContents = array();
      $data = array(
         'contents' => $this->load->view('member/login', $aContents, true) 
        ,'pagename' => 'Login' 
      );

      $this->load->view('member/member_layout', $data);
 
    }/*}}}*/
    public function rpcCheckLogin()/*{{{*/
    {
      $account_id = trim($this->input->post('account_id')); 
      $passwd     = trim($this->input->post('passwd')); 

      if(!$account_id || !$passwd)
      {
        response_json(array("code"=>0,"msg"=>"Fail"));
        die;
      }

      if( $this->_chkLogin($account_id, $passwd) )
        response_json(array("code"=>1,"msg"=>"OK"));
      else
        response_json(array("code"=>0,"msg"=>"Fail"));
    }/*}}}*/
    public function Logout()
    {
      $this->load->helper('cookie');
      delete_cookie("MemberInfo",'.codingclubs.org', '/', 'codingclub_');      
      header('Location: http://codingclubs.org'); 
    }
    private function _chkLogin($account_id, $passwd)/*{{{*/
    {
      if(!$account_id || !$passwd)
      {
        $aRtn = array('code'=>999, 'msg'=>'input param null');
        return $aRtn;
      }
      return $this->membership_model->loginprocess($account_id, $passwd);
    }/*}}}*/
}
    
    
    
    
?>
