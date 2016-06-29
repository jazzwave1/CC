<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {

    public function __construct()
    {
      parent::__construct();
      $this->course_model = cc_get_instance('course/course_model', 'model'); 
      $this->today = date("Ymd");
    }

    public function index()/*{{{*/
    {
      $this->load->view('course/course');  
    }/*}}}*/
    public function request_course()
    {
      // login check
      $sMemInfo = getCookieInfo();
      if(!$sMemInfo)
      {
        // login go
        header('Location: http://localhost/~leehojun/CC/codingclub/Login');
      }

      $oMemInfo = json_decode($sMemInfo);
      
      // chk member user info
      // get membserinfo
      $user = cc_get_instance('UserClass');
      $oUser = new $user($oMemInfo->accountID);

      if(!$oUser->oUserInfo->usn)
      {
        // user info input  
        $this->_setUserInfo($oUser->oUserInfo->usn);
      }
      else
      {
        // member_svc input
        // set member_svc call
      }

      //$this->load->view('course/request_course');  
    }
    private function _setUserInfo($usn) 
    {
      // member page call 
    }

    public function junior_course()
    {
      $aParam = array(
         'type'  => 'junior'    
        ,'sdate' => $this->today."000000"    
      );
      $oCourseList = $this->course_model->getCourseInfoToday($aParam);
      //print_r($oCourseList);
      //$this->load->view("course/request_course");
      $this->load->view("course/request_course2");
    }
    
}
