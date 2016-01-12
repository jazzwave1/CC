<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {

    public function __construct()
    {
      parent::__construct();
      $this->course_model = cc_get_instance('course/course_model', 'model'); 
      $this->today = date("Ymd");
    }

    public function index()
    {
      //$this->load->view('membership/login');  
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
