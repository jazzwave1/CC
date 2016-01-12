<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
      parent::__construct();
      $this->user_model = cc_get_instance('member/user_model', 'model'); 
    }

    public function index()
    {}
    public function getUserInfo()
    {
      print_r( $this->user_model->getUserInfo(array('usn'=>1)) ); 
    }
    public function setUserInfo()
    {
     
    }
    public function myinfo()
    {
      
    }
}
    
    
    
    
?>
