<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->admin_model = cc_get_instance('admin/admin_model', 'model'); 
    $this->aMenu = array(/*{{{*/
      array( 
         'title' => '검색'
        ,'title_class'=> 'fa fa-search' 
        ,'active'=> true
        ,'child' => array( 
           array('link' => HOSTURL.'/admin/usersearch', 'title' => '유저검색')
          ,array('link' => HOSTURL.'/admin/userlist', 'title' => '과목별검색')
        )
      )
      ,array( 
         'title' => 'title2'
        ,'title_class'=> 'fa fa-files-o' 
        ,'active'=> false
        ,'child' => array( 
           array('link' => '/ci/index.php/Test/getList', 'title' => 'Menu2-1')
          ,array('link' => '/ci/index.php/Test/getList', 'title' => 'Menu2-2')
        )
      )
    );  /*}}}*/
  }

  public function index()/*{{{*/
  {
    $this->userlist();
//  빈공간 
//  $aMenu = array('aMenu'=>$this->aMenu);
//  $aContentHeader= array( 
//     'bTitle' => 'Dashboard'
//    ,'sTitle' => 'Control panel'
//    ,'navi'   => array('Home', 'Dashboard')
//  );
//  $temp = "";
//
//  $data = array(
//     'menu'   => $this->load->view('admin/menu', $aMenu , true)
//    ,'content_header' => $this->load->view('admin/content_header', $aContentHeader , true)
//    , 'main_content' => ''  
//    ,'footer' => $this->load->view('admin/footer', $temp, true)
//  );
//  
//  $this->load->view('admin/layout', $data);  
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
  public function chkCookie()/*{{{*/
  {
    $this->load->helper('cookie');
    $oAdminInfo = json_decode( get_cookie('codingclub_AdminInfo') );
 
    if(!$oAdminInfo)
    {
      echo "로그인이 필요한 서비스 입니다.<br>"; 
      echo '<a href="'.HOSTURL.'/admin/login" >Admin Login</a>'; 
      die;
    }
  }/*}}}*/
  public function userlist($courseIdx='')/*{{{*/
  {
    $this->chkCookie() ;
    
    $aMainData = array();
    $aMainData['aCourse']  = $this->admin_model->getCourse();
    $aMainData['courseName'] = '';
    $aMainData['aRowData'] = false;
    $aMainData['courseIdx']  = array();
   
    if($courseIdx)/*{{{*/
    {
      $courseIdx = substr($courseIdx , 0, -1);
      $aResult = $this->admin_model->getUserList($courseIdx) ; 
 
      $aCourseIdx = explode("_", $courseIdx);
      
      $sCourseName = '';
      foreach($aCourseIdx as $key=>$val)
      {
        $sCourseName .= $aMainData['aCourse'][$val]." , ";
      }
      
      $aMainData['courseName'] = $sCourseName;
      $aMainData['courseIdx']  = $aCourseIdx;
     
      if(!$aResult)
      {
        $aMainData['aRowData'] = false;
      }
      else
      {
        $aMainData['aRowData']   = $aResult;
      }
    }/*}}}*/
    
    $aMenu = array('aMenu'=>$this->aMenu);
    $aContentHeader= array( 
       'bTitle' => '강좌별검색 '
      ,'sTitle' => '[ Tip : 중복검색시 shift key를 누르고 선택하세요 ]' 
      ,'navi'   => array('검색', '강좌별검색')
    );
    $temp = "";
 
    $data = array(
       'menu'   => $this->load->view('admin/menu', $aMenu , true)
      ,'content_header' => $this->load->view('admin/content_header', $aContentHeader , true)
      ,'main_content' => $this->load->view('admin/admin', $aMainData, true) 
      ,'footer' => $this->load->view('admin/footer', $temp, true)
    );
    
    $this->load->view('admin/layout', $data);  
  }/*}}}*/
  public function usersearch($sParam='')/*{{{*/
  {
    $this->chkCookie() ;
    
    $sParam = trim($this->input->post('sAccountIDorName')); 
    // test code --------------------- //
    //$sParam = "jazzwave14@naver.com";
    //$sParam = urlencode($sParam); 
    
    //$sParam = "이지훈";
    // ------------------------------- // 
    $aUserInfo = array(); 
    $aMemberSVC = array(); 
    $notice = '';
   
    if($sParam)
    {
      if($this->_isEmailID($sParam))
      {
        // Email ID
        if( $aResult = $this->_getUserInfoFromEmailID($sParam) )
        { 
          $aUserInfo = $aResult; 
          $aMemberSVC = $this->_getMemberSVC($aUserInfo[0]->usn); 
        }
        else
        {
          $notice = '없는 정보 입니다.';
        }
      }
      else
      {
        // 이름
        if( $aResult = $this->_getUserInfoFromName($sParam) )
        { 
          $aUserInfo = $aResult; 
          foreach($aUserInfo as $key=>$val)
          {
            $result = $this->_getMemberSVC($val->usn); 
            array_push($aMemberSVC, $result);
          }
          foreach($aMemberSVC as $key=>$val)
          {
            foreach($val as $k=>$v)
            {
              $tmp[] = $v;
            }
          }
          $aMemberSVC = $tmp;
        }
        else
        {
          $notice = '없는 정보 입니다.';
        }
      }
    }

    $aMenu = array('aMenu'=>$this->aMenu);
    $aContentHeader= array( 
       'bTitle' => '유저검색 '
      ,'sTitle' => '[ Tip : Email ID 또는 학색이름을 입력하세요 ]' 
      ,'navi'   => array('검색', '유저검색')
    );
    $temp = "";
    $aMainData['userinfo']  = $aUserInfo;
    $aMainData['membersvc'] = $aMemberSVC;
    $aMainData['notice'] = $notice;

    $data = array(
       'menu'   => $this->load->view('admin/menu', $aMenu , true)
      ,'content_header' => $this->load->view('admin/content_header', $aContentHeader , true)
      ,'main_content' => $this->load->view('admin/usersearch', $aMainData, true) 
      ,'footer' => $this->load->view('admin/footer', $temp, true)
    );
    
    $this->load->view('admin/layout', $data);  

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
  
    if($this->_updateState($usn, $state, $courseIDX)) 
      response_json(array("code"=>1,"msg"=>"OK"));
    else
      response_json(array("code"=>0,"msg"=>"fail"));
  }/*}}}*/

  public function excelDownSummerCampFull()/*{{{*/
  {
    $data = array( "aUserList" => $this->admin_model->getSummerCampFull() );
    $this->load->view('admin/exceldown', $data);  
  }/*}}}*/
  public function adminsendmail($sMailList="")/*{{{*/
  {
    $this->admin_model->adminsendmail($sMailList); 
    die; 
  }/*}}}*/

  private function _getMemberSVC($usn)/*{{{*/
  {
    if(!$usn) return false; 
    return $this->admin_model->getMemberSVC($usn); 
  }/*}}}*/
  private function _getUserInfoFromEmailID($sEmailID)/*{{{*/
  {
    if(!$sEmailID) return false;
    $sEmailID = trim(urldecode($sEmailID));
    return $this->admin_model->getUserInfoFromEmailID($sEmailID); 
  }/*}}}*/
  private function _getUserInfoFromName($sName)/*{{{*/
  {
    if(!$sName) return false;
    $sName = trim($sName); 
    return $this->admin_model->getUserInfoFromName($sName); 
  }/*}}}*/
  private function _isEmailID($sParam)/*{{{*/
  {
    $sParam = urldecode($sParam);

    if (!filter_var($sParam, FILTER_VALIDATE_EMAIL)) 
      return false;
    else
      return true;
  }/*}}}*/
  private function _updateState($usn, $state, $courseIDX)/*{{{*/
  {
    if(!$usn || !$state) return false;
    
    return $this->admin_model->updateState($usn, $state , $courseIDX); 
  }/*}}}*/
  private function _sendConfMail()/*{{{*/
  {
     
  } /*}}}*/
  private function _chkAdminLogin($accountID, $passwd)/*{{{*/
  {
    if(!$accountID || !$passwd) return false;
    
    return $this->admin_model->chkAdminLogin($accountID, $passwd);
  }/*}}}*/
}
?>
