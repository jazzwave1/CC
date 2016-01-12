<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

    public function __construct()
    {
      parent::__construct();
      $this->load->model('Test_model');
      $this->aMenu = array(
            array( 'title' => 'title1'
                  ,'active'=> true  
                  ,'child' => array( array('link' => '/ci/index.php/Test/getList', 'title' => 'Menu1-1')
                                    ,array('link' => '/ci/index.php/Test/getList', 'title' => 'Menu1-2')
                    )
              )
           ,array( 'title' => 'title2'
                  ,'active'=> false 
                  ,'child' => array( array('link' => '/ci/index.php/Test/getList', 'title' => 'Menu2-1')
                                    ,array('link' => '/ci/index.php/Test/getList', 'title' => 'Menu2-2')
                    )
              )
          );
    }

    public function index()
    {
        $this->load->view('welcome_message');
    }

    public function getList()
    {
        $aResult = $this->Test_model->getTestALL();
        
        $aMenu = array('aMenu'=>$this->aMenu);
        $aContentHeader= array( 'bTitle' => 'Dashboard'
                               ,'sTitle' => 'Control panel'
                               ,'navi' => array('Home', 'Dashboard')
            );
        $temp = "";

        $data = array(
               'menu'   => $this->load->view('menu', $aMenu , true)
              ,'content_header' => $this->load->view('content_header', $aContentHeader , true)
              ,'main'   => $this->load->view('data_table_with_full_features', $aResult, true)
              ,'footer' => $this->load->view('footer', $temp, true)
            );
        
        $this->load->view('layout', $data);
    }
    public function getTestInfo($idx='')
    {
        if(!$idx)
        {
            echo "Check Param";
            die;
        }

        $aInput = array('idx'=>$idx);  // ==> POST 를 그대로 넘길수 있음
        
        $aResult = $this->Test_model->getTest($aInput);
        
        $aMenu = array('aMenu'=>$this->aMenu);
        $aContentHeader= array( 'bTitle' => 'User Info'
                               ,'sTitle' => 'User Info & Log'
                               ,'navi' => array('Home', 'userinfo')
            );
        $temp = "";

        $aMain_info_display = array(
               'info_display'   => $this->load->view('info_display', $aResult, true)
              ,'table'   => $this->load->view('data_table_with_full_features', $aResult, true)
            );
        $data = array(
               'menu'   => $this->load->view('menu', $aMenu , true)
              ,'content_header' => $this->load->view('content_header', $aContentHeader , true)
              ,'main'   => $this->load->view('main_info_display', $aMain_info_display , true) 
              ,'footer' => $this->load->view('footer', $temp, true)
            );
 
        $this->load->view('layout', $data);
    }
    public function setTest()
    {
        $aInput = array(
                     'val1' => 3
                    ,'val2' => 3
                    ,'contents' => 'CI Test'
                    ,'regdate'  => $this->getDate() 
                );
        $this->Test_model->setTest($aInput); 
    }
    private function getDate()
    {
        return date('YmdHis');
    }
}
?>

