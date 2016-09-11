<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Club extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->course_model = cc_get_instance('course/course_model', 'model'); 
    $this->load->helper('url');
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
  public function juniorsoftware()/*{{{*/
  {
    $sUserInfo = getCookieInfo();
    $oUserInfo = json_decode($sUserInfo);      

    if($oUserInfo)
    {  
      $aLogin['login']  = 'display:none'; 
      $aLogin['logout'] = ''; 
    }
    else
    {
      $aLogin['login']  = '';
      $aLogin['logout'] = 'display:none'; 
    }

    $aCourse = $this->_getActiveCourse();
    $data = array(
      'aProgramURL' => array(
         'juniormaker'    => HOSTURL.'/club/junior/'.$aCourse['junior']['maker']
        ,'juniordesigner' => HOSTURL.'/club/junior/'.$aCourse['junior']['designer']
        ,'appmaker'       => HOSTURL.'/club/junior/'.$aCourse['app']['maker']
        ,'appdesigner'    => HOSTURL.'/club/junior/'.$aCourse['app']['designer']
        ,'iotmaker'       => HOSTURL.'/club/junior/'.$aCourse['iot']['maker']
      )
      ,'aLoginStyle' => $aLogin
    );
    $this->load->view('club/juniorsoftware', $data); 
  }/*}}}*/
  public function junior($courseIDX='')/*{{{*/
  { 
    $sUserInfo = getCookieInfo();
    $oUserInfo = json_decode($sUserInfo);      
    
    if(!$oUserInfo->usn)
    {
      header('Location: '.HOSTURL.'/Login?burl=club/junior'); 
    }
    else
    {
      $user = cc_get_instance('UserClass');
      $oUser = new $user($oUserInfo->accountID);
    }
 
    if(!$courseIDX)
    {
      // active 한 프로그램 리스트를 가지고 온다
      // 3개 메이커, 디자이너, 해커
      $aCourseIDX = $this->_getActiveCourse('junior');
      
      foreach($aCourseIDX as $key=>$val)
      {
        $aCourseInfo[$val] = $this->_getCourseInfo($val);
      }
      $data = array(
        'aJunior' => array(
            'maker' => array(
              'bSangse' => array('bTitle'=>'2016 가을학기 자세히 보기', 'bViewState'=>'', 'sTargetURL'=> HOSTURL.'/club/program/'.$aCourseIDX['maker'])
              ,'bReq'   => array('bTitle'=>'프로그램 신청하기', 'bViewState'=>'', 'sTargetURL'=> HOSTURL.'/member/reqprogram/'.$aCourseIDX['maker'])
              ,'oCourseInfo' => $aCourseInfo[$aCourseIDX['maker']]
            )
            ,'designer' => array(
               'bSangse' => array('bTitle'=>'2016 가을학기 자세히 보기', 'bViewState'=>'', 'sTargetURL'=> HOSTURL.'/club/program/'.$aCourseIDX['designer'])
              ,'bReq'    => array('bTitle'=>'프로그램 신청하기', 'bViewState'=>'', 'sTargetURL'=> HOSTURL.'/member/reqprogram/'.$aCourseIDX['designer'])
              ,'oCourseInfo' => $aCourseInfo[$aCourseIDX['designer']]
            )
            ,'hacker' => array(
               'bSangse' => array('bTitle'=>'준비중입니다', 'bViewState'=>'disabled', 'sTargetURL'=> HOSTURL.'/club/program/'.$aCourseIDX['hacker'])
              ,'bReq'    => array('bTitle'=>'프로그램 신청하기', 'bViewState'=>'disabled', 'sTargetURL'=> HOSTURL.'/member/reqprogram/'.$aCourseIDX['hacker'])
              ,'oCourseInfo' => $aCourseInfo[$aCourseIDX['hacker']]
            )
          )
      );
      $this->load->view('club/junior', $data); 
    }
    else
    {
      $this->program($courseIDX);
    }
  }/*}}}*/
  public function app($courseIDX='')/*{{{*/
  { 
    $sUserInfo = getCookieInfo();
    $oUserInfo = json_decode($sUserInfo);      
    
    if(!$oUserInfo->usn)
    {
      header('Location: '.HOSTURL.'/Login?burl=club/app'); 
    }
    else
    {
      $user = cc_get_instance('UserClass');
      $oUser = new $user($oUserInfo->accountID);
    }
 
    if(!$courseIDX)
    {
      // active 한 프로그램 리스트를 가지고 온다
      // 3개 메이커, 디자이너, 해커
      $aCourseIDX = $this->_getActiveCourse('app');
      
      foreach($aCourseIDX as $key=>$val)
      {
        $aCourseInfo[$val] = $this->_getCourseInfo($val);
      }
      $data = array(
        'aJunior' => array(
            'maker' => array(
              'bSangse' => array('bTitle'=>'2016 가을학기 자세히 보기', 'bViewState'=>'', 'sTargetURL'=> HOSTURL.'/club/program/'.$aCourseIDX['maker'])
              ,'bReq'   => array('bTitle'=>'프로그램 신청하기', 'bViewState'=>'', 'sTargetURL'=> HOSTURL.'/member/reqprogram/'.$aCourseIDX['maker'])
              ,'oCourseInfo' => $aCourseInfo[$aCourseIDX['maker']]
            )
            ,'designer' => array(
               'bSangse' => array('bTitle'=>'2016 가을학기 자세히 보기', 'bViewState'=>'', 'sTargetURL'=> HOSTURL.'/club/program/'.$aCourseIDX['designer'])
              ,'bReq'    => array('bTitle'=>'프로그램 신청하기', 'bViewState'=>'', 'sTargetURL'=> HOSTURL.'/member/reqprogram/'.$aCourseIDX['designer'])
              ,'oCourseInfo' => $aCourseInfo[$aCourseIDX['designer']]
            )
            ,'hacker' => array(
               'bSangse' => array('bTitle'=>'준비중입니다', 'bViewState'=>'disabled', 'sTargetURL'=> HOSTURL.'/club/program/'.$aCourseIDX['hacker'])
              ,'bReq'    => array('bTitle'=>'프로그램 신청하기', 'bViewState'=>'disabled', 'sTargetURL'=> HOSTURL.'/member/reqprogram/'.$aCourseIDX['hacker'])
              ,'oCourseInfo' => $aCourseInfo[$aCourseIDX['hacker']]
            )
          )
      );
      $this->load->view('club/app', $data); 
    }
    else
    {
      $this->program($courseIDX);
    }
  }/*}}}*/
  public function iot($courseIDX='')/*{{{*/
  { 
    $sUserInfo = getCookieInfo();
    $oUserInfo = json_decode($sUserInfo);      
    
    if(!$oUserInfo->usn)
    {
      header('Location: '.HOSTURL.'/Login?burl=club/iot'); 
    }
    else
    {
      $user = cc_get_instance('UserClass');
      $oUser = new $user($oUserInfo->accountID);
    }
 
    if(!$courseIDX)
    {
      // active 한 프로그램 리스트를 가지고 온다
      // 3개 메이커, 디자이너, 해커
      $aCourseIDX = $this->_getActiveCourse('iot');
      
      foreach($aCourseIDX as $key=>$val)
      {
        $aCourseInfo[$val] = $this->_getCourseInfo($val);
      }
      $data = array(
        'aJunior' => array(
            'maker' => array(
              'bSangse' => array('bTitle'=>'2016 가을학기 자세히 보기', 'bViewState'=>'', 'sTargetURL'=> HOSTURL.'/club/program/'.$aCourseIDX['maker'])
              ,'bReq'   => array('bTitle'=>'프로그램 신청하기', 'bViewState'=>'', 'sTargetURL'=> HOSTURL.'/member/reqprogram/'.$aCourseIDX['maker'])
              ,'oCourseInfo' => $aCourseInfo[$aCourseIDX['maker']]
            )
            ,'designer' => array(
               'bSangse' => array('bTitle'=>'2016 가을학기 자세히 보기', 'bViewState'=>'', 'sTargetURL'=> HOSTURL.'/club/program/'.$aCourseIDX['designer'])
              ,'bReq'    => array('bTitle'=>'프로그램 신청하기', 'bViewState'=>'', 'sTargetURL'=> HOSTURL.'/member/reqprogram/'.$aCourseIDX['designer'])
              ,'oCourseInfo' => $aCourseInfo[$aCourseIDX['designer']]
            )
            ,'hacker' => array(
               'bSangse' => array('bTitle'=>'준비중입니다', 'bViewState'=>'disabled', 'sTargetURL'=> HOSTURL.'/club/program/'.$aCourseIDX['hacker'])
              ,'bReq'    => array('bTitle'=>'프로그램 신청하기', 'bViewState'=>'disabled', 'sTargetURL'=> HOSTURL.'/member/reqprogram/'.$aCourseIDX['hacker'])
              ,'oCourseInfo' => $aCourseInfo[$aCourseIDX['hacker']]
            )
          )
      );
      $this->load->view('club/iot', $data); 
    }
    else
    {
      $this->program($courseIDX);
    }
  }/*}}}*/
  public function program($courseIDX)/*{{{*/
  {
    if(!$courseIDX) $this->junior();
 
    $oCourseInfo = $this->_getCourseInfo($courseIDX);
    
    $data = array(
       'oCourseInfo' => $oCourseInfo
    );
    $this->load->view('club/junior_program', $data); 
  }/*}}}*/

  private function _getActiveCourse($program='')
  {
    $aActiveProgram = array(
       'junior' => array('maker'=>23,'designer'=>24,'hacker'=>25)
      ,'app'    => array('maker'=>26,'designer'=>27,'hacker'=>'')
      ,'iot'    => array('maker'=>28,'designer'=>'','hacker'=>'')
    );
    if(!$program)
      return $aActiveProgram;
    else
      return $aActiveProgram[$program];
  }
  private function _getCourseInfo($courseIDX)/*{{{*/
  {
    if(!$courseIDX) return false;
  
    return $this->course_model->getCourseInfo($courseIDX);
  }/*}}}*/

}
?>
