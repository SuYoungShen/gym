<?php

class Pos extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    // $this->load->helper(array('form', 'url'));
    // $this->load->library('email');
    $this->load->model(array('pos_model'));
  }

  // 會員進場
  public function in(){

    $view_data = array(
      "title" => "會員進場",
      "url" => "out",//返回出場連結用
      "url_name" => "會員出場"//返回出場連結用
    );

    if(!empty($this->input->post("card_id"))){
      $card_id = $this->input->post("card_id");
      $where = "card_id ="."'".$card_id."'";
      $data = $this->pos_model->get_once('member', $where);
      $view_data['data'] = $data;
      $view_data['page'] = 'member_info.php';
    }
    $this->load->view('layout', $view_data);
  }

  // 會員出場
  public function out()
  {
    $view_data = array(
      "title" => "會員出場",
      "url" => "in",//返回進場連結用
      "url_name" => "會員進場"//返回進場連結用
    );
    $this->load->view('layout', $view_data);
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
