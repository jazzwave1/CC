<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

    public function __construct()
    {
      parent::__construct();
      $this->user_model = cc_get_instance('member/user_model', 'model'); 
    }

    public function index()/*{{{*/
    {
      $this->load->view('member/mypage');  
    }/*}}}*/
   
    public function memberJoinAccount()
    {
      $aContents = array();
      $data = array(
         'contents' => $this->load->view('member/join_account', $aContents, true) 
        ,'pagename' => 'Join Account Info' 
      );

      $this->load->view('member/member_layout', $data);
    }
    public function memberJoinUser()/*{{{*/
    {
      // login check
      $sUserInfo = getCookieInfo();
      $oUserInfo = json_decode($sUserInfo);      

      if(!$oUserInfo->usn)
      {
        header('Location: http://localhost/~leehojun/CC/codingclub/Login'); 
      }
      else
      {
        $aContents = array('usn'=>$oUserInfo->usn);
        $data = array(
           'contents' => $this->load->view('member/join', $aContents, true) 
          ,'pagename' => 'Join UserInfo' 
        );

        $this->load->view('member/member_layout', $data);
      }
   }/*}}}*/
    
    public function mypage()
    {
      $this->load->view('member/mypage');  
    }


    public function rpcJoinAccount()/*{{{*/
    {
      $accountID = trim($this->input->post('account_id')); 
      $pwd1      = trim($this->input->post('passwd1')); 
      $pwd2      = trim($this->input->post('passwd2')); 

      if(!$accountID || !$pwd1|| !$pwd2)
      {
        response_json(array("code"=>0,"msg"=>"Fail"));
        die;
      }
      if($pwd1 != $pwd2)    
      {
        response_json(array("code"=>999,"msg"=>"input pwd fail"));
        die;
      }

      $aInput = array(
         'account_id' => $accountID
        ,'pwd'        => $pwd1 
        ,'regdate'    => date('YmdHis') 
      );

      if( $this->_setAccountInfo($aInput) )
        response_json(array("code"=>1,"msg"=>"OK"));
      else
        response_json(array("code"=>0,"msg"=>"Fail"));
    }/*}}}*/
    public function rpcJoinMember()/*{{{*/
    {
      $nUsn       = trim($this->input->post('usn')); 
      $sName      = trim($this->input->post('user_name')); 
      $sHp        = trim($this->input->post('hp')); 
      $sSchool    = trim($this->input->post('school')); 
      $sGrde      = trim($this->input->post('grde')); 
      $sAddrcode  = trim($this->input->post('addrcode')); 

      if(!$sName || !$sHp || !$sSchool || !$sGrde|| !$sAddrcode)
      {
        response_json(array("code"=>0,"msg"=>"Fail"));
        die;
      }
     
      $aInput = array(
         'usn'      => $nUsn 
        ,'name'     => $sName 
        ,'hp'       => $sHp
        ,'school'   => $sSchool
        ,'grde'     => $sGrde
        ,'addrcode' => $sAddrcode
        ,'pusn'     => 0 
        ,'regdate'  => date('YmdHis') 
      );

      if( $this->_setUserInfo($aInput) )
        response_json(array("code"=>1,"msg"=>"OK"));
      else
        response_json(array("code"=>0,"msg"=>"Fail"));
    }/*}}}*/

    
    private function _setAccountInfo($aInput)/*{{{*/
    {
      $user = cc_get_instance('UserClass');
      $oUser = new $user();
      return $oUser->setAccountInfo($aInput); 
    }/*}}}*/
    private function _setUserInfo($aInput)/*{{{*/
    {
      $user = cc_get_instance('UserClass');
      $oUser = new $user();
      return $oUser->setUserInfo($aInput); 
    }/*}}}*/
}
?>
