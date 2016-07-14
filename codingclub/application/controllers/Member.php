<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

    public function __construct()
    {
      parent::__construct();
      $this->user_model = cc_get_instance('member/user_model', 'model'); 
      $this->membership_model = cc_get_instance('member/membership_model', 'model'); 
    }

    public function index()/*{{{*/
    {
      $this->load->view('member/mypage');  
    }/*}}}*/
   
    public function memberJoinAccount()/*{{{*/
    {
      $aContents = array();
      $data = array(
         'contents' => $this->load->view('member/join_account', $aContents, true) 
        ,'pagename' => 'Join Account Info' 
      );

      $this->load->view('member/member_layout', $data);
    }/*}}}*/
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

    
    public function mypage()/*{{{*/
    {
      $aContents = array();
      $data = array(
         'contents' => $this->load->view('member/mypage', $aContents, true) 
        //,'pagename' => 'Join Account Info' 
      );

      $this->load->view('member/member_my_layout', $data);
    }/*}}}*/

    public function summercamp()/*{{{*/
    {
         
    }/*}}}*/
    public function summercampJoin()/*{{{*/
    {
      $data = array();
      $this->load->view('summercamp/campjoin', $data);
    }/*}}}*/

  public function chkConfirm($usn, $fingerprint)
  {
    if( $this->membership_model->chkConfirm($usn, $fingerprint) )
    {
      echo "코딩클럽 본인확인이 완료 되었습니다. <br> 감사합니다.";
      $this->membership_model->setConfirm($usn);  
    }
    else
    {
      echo "코딩클럽 본인확인이 실패하였습니다";
    }
  }

    public function rpcJoin()/*{{{*/
    {
      $aAccount['account_id'] = trim($this->input->post('account_id')); 
      $aAccount['pwd1']       = trim($this->input->post('passwd1')); 
      $aAccount['pwd2']       = trim($this->input->post('passwd2')); 
      
      $aAccount['pwd']        = trim($this->input->post('passwd2')); 
      $aAccount['regdate']    = date('YmdHis'); 
      
      if($aAccount['pwd1'] != $aAccount['pwd2'])    
      {
        response_json(array("code"=>999,"msg"=>"input pwd fail"));
        die;
      }
      // set account info
      if( ! $usn = $this->_setAccountInfo($aAccount) )
      {
        response_json(array("code"=>999,"msg"=>"input pwd fail"));
        die;
      }
     
      // set user info
      $aUser['usn']       = $usn;
      $aUser['name']      = trim($this->input->post('name')); 
      $aUser['school']    = trim($this->input->post('school')); 
      $aUser['grde']      = trim($this->input->post('grde')); 
      $aUser['addrcode']  = trim($this->input->post('addrcode')); 
      $aUser['pname']     = trim($this->input->post('pname')); 
      $aUser['php']       = trim($this->input->post('php')); 
      $aUser['pemail']    = trim($this->input->post('pemail')); 
      $aUser['pjob']      = trim($this->input->post('pjob')); 
      $aUser['pschool']   = trim($this->input->post('pschool')); 
      $aUser['regdate']   = date('YmdHis'); 
      
      if(! $this->_setUserInfo($aUser) )
      {  
        response_json(array("code"=>0,"msg"=>"Fail"));
        die;
      }
     
      // set member_svc
      $course_idx  = trim($this->input->post('course_idx')); 
      $aCurse = explode("|", $course_idx);
      $course_idx = ''; 
      foreach($aCurse as $key=>$val)
      {
        if($val != 'undefined')
          $course_idx .= $val."|"; 
        
      }
      $course_idx = substr($course_idx,0,-1); 
      
      $aMemberSVC['usn']         = $usn;
      $aMemberSVC['course_idx']  = $course_idx; 
      $aMemberSVC['state']       = "REQ";
      $aMemberSVC['regdate']     = date('YmdHis');
     
      if(! $this->_setMemberSVC($aMemberSVC) )
      {  
        response_json(array("code"=>0,"msg"=>"Fail"));
        die;
      }
      
      $exprogram  = trim($this->input->post('exprogram')); 
      $aExprogram = explode("|", $exprogram);
      $exprogram = ''; 
      foreach($aExprogram as $key=>$val)
      {
        if($val != 'undefined')
          $exprogram .= $val."|"; 
        
      }
      $exprogram  = substr($exprogram,0,-1); 

      $aQuestion['usn']        = $usn;
      $aQuestion['course_idx'] = $course_idx; 
      $aQuestion['recommend']  = trim($this->input->post('recommend')); 
      $aQuestion['motive']     = trim($this->input->post('motive')); 
      $aQuestion['like_tf']    = trim($this->input->post('like_tf')); 
      $aQuestion['experience'] = trim($this->input->post('experience')); 
      $aQuestion['nature']     = trim($this->input->post('nature')); 
      $aQuestion['favor']      = trim($this->input->post('favor')); 
      $aQuestion['jr_hope']    = trim($this->input->post('jr_hope')); 
      $aQuestion['channel']    = trim($this->input->post('channel')); 
      $aQuestion['club_hope']  = trim($this->input->post('club_hope')); 
      $aQuestion['inquiry']    = trim($this->input->post('inquiry')); 
      $aQuestion['exprogram']  = $exprogram; 
     
      if(! $this->_setQuestionInfo($aQuestion) )
      {  
        response_json(array("code"=>0,"msg"=>"Fail"));
        die;
      }
     
      // send mail
      $this->membership_model->sendJoinMail($aAccount['account_id'],$aQuestion['course_idx']);
      response_json(array("code"=>1,"msg"=>"OK"));
      die;
    
    }/*}}}*/
    public function rpcIdCheck()/*{{{*/
    {
      $accountID = trim($this->input->post('account_id')); 
   
      if( $this->user_model->chkID($accountID) ) 
        response_json(array("code"=>1,"msg"=>"OK"));
      else
        response_json(array("code"=>999,"msg"=>"Fail"));
      
      die; 
    } /*}}}*/
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
    public function rpcSetMemberSVC()/*{{{*/
    {
      $usn= trim($this->input->post('usn')); 
      $courseIDX = trim($this->input->post('course_idx')); 

      if(!$usn|| !$courseIDX)
      {
        response_json(array("code"=>0,"msg"=>"Fail"));
        die;
      }

      $aInput = array(
         'usn' => $usn
        ,'course_idx'  => $courseIDX
        ,'state'      => 'REQ' // REQ : 신청 , ING : 수강중, END : 완료 
        ,'regdate'    => date('YmdHis') 
      );

      if( $this->_setMemberSVC($aInput) )
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
    private function _setQuestionInfo($aInput)/*{{{*/
    {
      $user = cc_get_instance('UserClass');
      $oUser = new $user();
      return $oUser->setQuestionInfo($aInput); 
    }/*}}}*/
    private function _setMemberSVC($aInput)/*{{{*/
    {
      $user = cc_get_instance('UserClass');
      $oUser = new $user();
      return $oUser->setMemberSVCInfo($aInput); 
    }/*}}}*/
}
?>
