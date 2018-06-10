<?php

class Pos extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    // $this->load->helper(array('form', 'url'));
    // $this->load->library('email');

  }

  public function index()
  {
    
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
