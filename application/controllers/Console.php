<?php

class Console extends CI_Controller {

  public function __construct()
  {
    parent::__construct();

  }

  public function index(){
    $view_data = array(
      'title' => "首頁",
      'page' => 'index.php',
      'menu' => 'index'
    );
    $this->load->view('console/layout', $view_data);
  }

  // 優惠方案
  public function offer(){
    $view_data = array(
      'title' => "優惠方案",
      'page' => 'offer.php',
      'menu' => 'offer'
    );
    $this->load->view('console/layout', $view_data);
  }

  // 會員進出場
  public function in_and_out(){
    $view_data = array(
      'title' => "會員進出場管理",
      'page' => 'in_and_out.php',
      'menu' => 'in_and_out'
    );
    $this->load->view('console/layout', $view_data);
  }

  // 登入紀錄
  public function login_history(){
    $view_data = array(
      'title' => "登入紀錄",
      'page' => 'login_history.php',
      'menu' => 'login_history'
    );
    $this->load->view('console/layout', $view_data);
  }

  // 會員專區
  public function member(){
    $view_data = array(
      'title' => "會員專區",
      'page' => 'member.php',
      'menu' => 'member'
    );
    $this->load->view('console/layout', $view_data);
  }

  // 員工專區
  public function staff(){
    $view_data = array(
      'title' => "員工專區",
      'page' => 'staff.php',
      'menu' => 'staff'
    );
    $this->load->view('console/layout', $view_data);
  }

  public function do_upload(){
    $config['upload_path']          = './image/';
    $config['allowed_types']        = 'gif|jpg|png';
    // $config['max_size']             = 100;
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('s')){
      $error = array('error' => $this->upload->display_errors());

      $this->load->view('upload_form', $error);
    }else{
      $data = array('upload_data' => $this->upload->data());

      $this->load->view('upload_success', $data);
    }
  }


}
?>
