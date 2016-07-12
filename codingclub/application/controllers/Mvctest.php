<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MvcTest extends CI_Controller {

    public function __construct()
    {
      parent::__construct();
      $this->model = cc_get_instance('mvctest/mvctest_model', 'model'); 
    }

    public function index()
    {
      // test setting    
      $this->load->view('mvctest/client');  
    }
    public function login()/*{{{*/
    {
      if(!$this->_chkParam($_POST))
      {
        echo "Input Data Check";
        die; 
      }
      if(!$this->_loginprocess($_POST))
      {
        echo "Input Data Check";
        die; 
      }
      else
      {
        $this->calendar(); 
      }
    }/*}}}*/
    public function calendar()/*{{{*/
    {
      $this->load->view('mvctest/calendar');  
    }/*}}}*/
    private function _chkParam($aParam)/*{{{*/
    {
      foreach($aParam as $key=>$val)
      {
        if(!trim($val))
          return false;
      }
      return true;
    }/*}}}*/
    private function _loginprocess($aParam)/*{{{*/
    {
      $aRtn = $this->model->loginProcess($aParam['user_id'], $aParam['user_pwd']);
     
      if( $aRtn['rtn'] == 1  )
        return true;
        
      return false;
    }/*}}}*/
    
}
    
    
    
    
?>
