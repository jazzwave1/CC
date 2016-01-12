<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

    public function __construct()
    {
      parent::__construct();
      $this->user_model = cc_get_instance('member/user_model', 'model'); 
    }

    public function index()
    {
      $this->load->view('member/login');  
    }
    public function memberjoin()
    {
      $this->load->view('member/join');  
    }
    public function mypage()
    {
      $this->load->view('member/mypage');  
    }


}
    
    
    
    
?>
