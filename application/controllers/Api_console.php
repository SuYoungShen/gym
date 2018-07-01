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
      if($this->console_model->delete_once('staff', $where)){
        $view_data['code'] = 200;
        $view_data['msg'] = "刪除成功";
      }else {
        $view_data['code'] = 404;
        $view_data['msg'] = "刪除失敗";
      }
      $this->output->set_content_type('application/json')->set_output(json_encode($view_data));

    }
  }

  // 會員專區
  public function member(){

    if($this->input->post('rule') == "select"){
      $id = $this->input->post('id');
      $where = "card_id =".'"'.$id.'"';
      $data = $this->console_model->get_once('member', $where);
      $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    if ($this->input->post('rule') == "delete") {
      $id = $this->input->post('id');
      $data = array(
        'status' => 0
      );

      $m_date_column = array('add_date', 'add_time');
      $where = "card_id=".'"'.$id.'"';
      $this->console_model->update('card_status', $data, $m_date_column, $where);

      if($this->console_model->delete_once('member', $where)){
        $view_data['code'] = 200;
        $view_data['msg'] = "刪除成功";
      }else {
        $view_data['code'] = 404;
        $view_data['msg'] = "刪除失敗";
      }
      $this->output->set_content_type('application/json')->set_output(json_encode($view_data));

    }

  }

  // 會員專區裡的月、年
  public function member_categorys(){

    $where = "types =".'"'.$this->input->post('categorys').'" Order By number';// 0表示此卡無人使用
    $data = $this->console_model->get_once_all('discount_program', $where);

    $this->output->set_content_type('application/json')->set_output(json_encode($data));

  }
}
?>
