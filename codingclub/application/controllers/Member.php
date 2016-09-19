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
    $sBackURL = $this->input->get('burl');
    $aContents = array(
      'sBackURL' => $sBackURL 
    );
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
      //header('Location: http://localhost/~leehojun/CC/codingclub/Login'); 
      //header('Location: http://member.codingclubs.org/Login'); 
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
    $sUserInfo = getCookieInfo();
    $oUserInfo = json_decode($sUserInfo);      
   
    if(!$oUserInfo->usn)
    {
      header('Location: '.HOSTURL.'/Login?burl=member/mypage'); 
    }
    else
    {
      $user = cc_get_instance('UserClass');
      $oUser = new $user($oUserInfo->accountID);
    }
   
    $aContents = array(
       'oAccount'   => $oUser->oAccountInfo
      ,'oUserInfo'  => $oUser->oUserInfo
      ,'aMemberSVC' => $oUser->aMemberSVC
      ,'login'      => 'display:none'
      ,'logout'     => ''
    );

//echo "<pre>";
//print_r($aContents);
//die;

    $this->load->view('member/mypage', $aContents); 

  }/*}}}*/
  public function privacy()/*{{{*/
  {
    $data = array();
    $this->load->view('member/privacy', $data);
  }/*}}}*/
  public function chkConfirm($usn, $fingerprint)/*{{{*/
  {
    if( $this->membership_model->chkConfirm($usn, $fingerprint) )
    {
      $this->membership_model->setConfirm($usn);  
      $sResult = "<strong>이메일 인증이 완료되었습니다.</strong><br>로그인하시면 코딩클럽을 이용하실 수 있습니다.";
    }
    else
    {
      $sResult = "<strong>이메일 인증이 실패하였습니다.</strong><br>관리자에게 문의 주시기 바랍니다.<br>(jazzwave14@gmail.com)";
    }
    
    $aContents = array( 'sResult' => $sResult );
    $data = array(
       'contents' => $this->load->view('member/confirm', $aContents, true) 
    );

    $this->load->view('member/member_layout', $data);
  }/*}}}*/

// 2016 8 SummerCamp
  public function summercamp()/*{{{*/
  {
    echo "<pre>";
    print_r($_SERVER);
   
    echo HOSTURL;
    die;    
  }/*}}}*/
  public function summercampJoin()/*{{{*/
  {
    $data = array();
    $this->load->view('summercamp/campjoin', $data);
  }/*}}}*/

// 정규학기 프로그램 신청
  public function reqprogram($courseIDX='')/*{{{*/
  {
//  if(!$courseIDX)
//  {
//    header('Location: '.HOSTURL.'/club/junior'); 
//  }
    $sUserInfo = getCookieInfo();
    $oUserInfo = json_decode($sUserInfo);      
    
    $aMemberGRDEConfig  = cc_get_config('member_user_grde','member_config' );

    if(!$oUserInfo->usn)
    {
      header('Location: '.HOSTURL.'/Login?burl=member/reqprogram/'.$courseIDX); 
    }
    else
    {
      $user = cc_get_instance('UserClass');
      $oUser = new $user($oUserInfo->accountID);
    }
   
    // 추후에 디비 정보를 가지로 와서 적용하는걸로 변경 해야함 -------- //
    $aCourse = array(
       'course_idx1' => array('value' => '23', 'name' => '주니어메이커')
      ,'course_idx2' => array('value' => '24', 'name' => '주니어디자이너')
      ,'course_idx3' => array('value' => '26', 'name' => '앱메이커')
      ,'course_idx4' => array('value' => '27', 'name' => '앱디자이너')
      ,'course_idx5' => array('value' => '28', 'name' => 'IoT메이커')
    );
    // ---------------------------------------------------------------- //
    
    $data = array(
       'oAccount'    => $oUser->oAccountInfo
      ,'oUserInfo'   => $oUser->oUserInfo
      ,'aMemberSVC'  => $oUser->aMemberSVC
      ,'aGrdeConfig' => $aMemberGRDEConfig
      ,'aCourse'     => $aCourse
      ,'courseIDX'   => $courseIDX
    );
    
    $this->load->view('member/req_program', $data);
  } /*}}}*/

/**
* rpcJoin 
* 썸머 캠프용으로 Account, user, questionnaire 테이블 정보를 
* 한번에 다 가입 하도록 되어 있는 함수 입니다.
* 특별한 이벤트가 아닌 일반적인 경우는 사용하지 않는것으로 ^^
* jazzwave14@gmail.com( Lee Ho Jun );
**/
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
 
    if( $this->membership_model->chkID($accountID) ) 
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
    {
      response_json(array("code"=>1,"msg"=>"OK"));
      $this->membership_model->sendJoinEmail($accountID, 'AccountJoin');
    }
    else
    {
      response_json(array("code"=>0,"msg"=>"Fail"));
    }
    die;
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
  public function rpcReqProgram()
  {
    // is user check 
    $accountID = trim($this->input->post('account_id')); 

    if( $this->membership_model->chkID($accountID) ) 
    {
      // 아이디가 없습니다.
      response_json(array("code"=>999,"msg"=>"Fail"));
      die;
    } 

    // set user info
    $usn = trim($this->input->post('usn')); 
   
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
    
    // set question info
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
   
    response_json(array("code"=>1,"msg"=>"OK"));
    die;
  }
  

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
