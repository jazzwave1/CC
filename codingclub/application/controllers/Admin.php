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
    $this->userlist();
  }/*}}}*/
  public function login()/*{{{*/
  { 
    $data = array();
    $this->load->view('admin/adminlogin', $data);  
  }/*}}}*/
  public function logout()/*{{{*/
  {
    $this->load->helper('cookie');
    
    delete_cookie("AdminInfo",'.codingclubs.org', '/', 'codingclub_');      
    header('Location: http://codingclubs.org'); 
   
    // test code
    //delete_cookie("AdminInfo",'localhost', '/', 'codingclub_');      
    //header('Location: http://localhost/~leehojun/CC/codingclub/admin/login'); 
  }/*}}}*/
  public function chkCookie($oAdminInfo)/*{{{*/
  {
    if(!$oAdminInfo)
    {
      echo "로그인이 필요한 서비스 입니다.<br>"; 
      echo '<a href="http://member.codingclubs.org/admin/login" >Admin Login</a>'; 
      
      // test code
      //echo '<a href="http://localhost/~leehojun/CC/codingclub/admin/login" >Admin Login</a>'; 
      die;
    }
  }/*}}}*/
  public function userlist($courseIdx='')/*{{{*/
  {
    $this->load->helper('cookie');
    $oAdminInfo = json_decode( get_cookie('codingclub_AdminInfo') );
    
    $this->chkCookie($oAdminInfo) ;
    
    $data = array();
    $data['aCourse']  = $this->admin_model->getCourse();
    $data['courseName'] = '';
    $data['aRowData'] = false;
    
    if($courseIdx)
    {
      $aResult = $this->admin_model->getUserList($courseIdx) ; 
      $data['courseName'] = $data['aCourse'][$courseIdx];
      $data['courseIdx']  = $courseIdx;
       
      if(!$aResult)
      {
        $data['aRowData'] = false;
      }
      else
      {
        $data['aRowData']   = $aResult;
      }
    }
 
    $this->load->view('admin/admin', $data);  
  }/*}}}*/
  public function rpcAdminLogin()/*{{{*/
  {
    $accountID = trim($this->input->post('account_id')); 
    $passwd    = trim($this->input->post('passwd')); 
    
    if(!$accountID || !$passwd)
      response_json(array("code"=>999,"msg"=>"input pwd fail"));
    
    if( $this->_chkAdminLogin($accountID,$passwd) )
      response_json(array("code"=>1,"msg"=>"OK"));
    else
      response_json(array("code"=>0,"msg"=>"Fail"));
  }/*}}}*/
  public function rpcUpdateState()/*{{{*/
  {
    $usn   = trim($this->input->post('usn')); 
    $state = trim($this->input->post('state')); 
    $courseIDX = trim($this->input->post('course_idx')); 
  
    if($this->_updateState($usn, $state, $courseIdx)) 
      response_json(array("code"=>1,"msg"=>"OK"));
    else
      response_json(array("code"=>0,"msg"=>"fail"));
  }/*}}}*/
  private function _updateState($usn, $state, $courseIdx)/*{{{*/
  {
    if(!$usn || !$state) return false;
    
    return $this->admin_model->updateState($usn, $state , $courseIdx); 
  }/*}}}*/
  private function _chkAdminLogin($accountID, $passwd)/*{{{*/
  {
    if(!$accountID || !$passwd) return false;
    
    return $this->admin_model->chkAdminLogin($accountID, $passwd);
  }/*}}}*/
}
?>
