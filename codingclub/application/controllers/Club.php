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
 
//  echo "<pre>";
//  print_r($oUser);
//  die;
//   $aContents = array(
//     'oAccount'   => $oUser->oAccountInfo
//    ,'oUserInfo'  => $oUser->oUserInfo
//    ,'aMemberSVC' => $oUser->aMemberSVC
//    ,'login'      => 'display:none'
//    ,'logout'     => ''
//  );
//    
    if(!$courseIDX)
    {
      $data = array();
      $this->load->view('club/junior', $data); 
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

  private function _getCourseInfo($courseIDX)/*{{{*/
  {
    if(!$courseIDX) return false;
  
    return $this->course_model->getCourseInfo($courseIDX);
  }/*}}}*/
}
?>
