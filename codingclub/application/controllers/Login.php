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
    $this->load->helper('cookie');
    if( get_cookie('userInputId') )
      $sChecked = 'checked';
    else
      $sChecked = '';

    $sBackURL = $this->input->get('burl');
    $aContents = array(
       'sBackURL' => $sBackURL 
      ,'isIdSave' => $sChecked
    );

    $this->load->view('member/login', $aContents);    
  }/*}}}*/
  public function Logout()/*{{{*/
  {
    $this->load->helper('cookie');
    delete_cookie("MemberInfo",'.codingclubs.org', '/', 'codingclub_');      
    header('Location: http://codingclubs.org'); 
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
    { 
      if(!$this->_getConfirm($account_id))
        response_json(array("code"=>998,"msg"=>"Not Confirm"));
      else
        response_json(array("code"=>1,"msg"=>"OK"));
    }
    else
      response_json(array("code"=>0,"msg"=>"Fail"));
  }/*}}}*/
 
 
  private function _getConfirm($account_id)/*{{{*/
  {
    if(!$account_id) return false;

    return $this->membership_model->getConfirm($account_id);
  }/*}}}*/
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
