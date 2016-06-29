<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nodejs extends CI_Controller {

    public function __construct()
    {
      parent::__construct();
      $this->nodejs_model = cc_get_instance('nodejs/nodejs_model', 'model'); 
    }

    public function index()
    {}
    public function getInfo()
    {
      print_r( $this->nodejs_model->getInfo(array('idx'=>1)) ); 
    }
    public function setUserInfo()
    {
     
    }
    public function myinfo()
    {
      
    }
}
    
    
    
    
?>
