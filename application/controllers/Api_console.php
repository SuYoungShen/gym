<?php

class Api_console extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('console_model'));
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

    if($this->input->post('rule') == "select"){
      $id = $this->input->post('id');
      $where = "id =".'"'.$id.'"';
      $data = $this->console_model->get_once('discount_program', $where);
      $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    if ($this->input->post('rule') == "delete") {
      $id = $this->input->post('id');
      $where = "id=".'"'.$id.'"';
      if($this->console_model->delete_once('discount_program', $where)){
        $view_data['code'] = 200;
        $view_data['msg'] = "刪除成功";
      }else {
        $view_data['code'] = 404;
        $view_data['msg'] = "刪除失敗";
      }
      $this->output->set_content_type('application/json')->set_output(json_encode($view_data));

    }
  }

  // 員工專區
  public function staff(){

    if($this->input->post('rule') == "select"){
      $id = $this->input->post('id');
      $where = "id =".'"'.$id.'"';
      $data = $this->console_model->get_once('staff', $where);
      $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    if ($this->input->post('rule') == "delete") {
      $id = $this->input->post('id');
      $where = "id=".'"'.$id.'"';
      if($this->console_model->delete_once('discount_program', $where)){
        $view_data['code'] = 200;
        $view_data['msg'] = "刪除成功";
      }else {
        $view_data['code'] = 404;
        $view_data['msg'] = "刪除失敗";
      }
      $this->output->set_content_type('application/json')->set_output(json_encode($view_data));

    }
  }

}
?>