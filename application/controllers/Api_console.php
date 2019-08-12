<?php

class Api_console extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('console_model', 'pos_model'));
  }

  public function index(){
    $view_data = array(
      'title' => "首頁",
      'page' => 'index.php',
      'menu' => 'index'
    );
    $this->load->view('console/layout', $view_data);
  }

  /*****************************
          優惠方案
  *****************************/
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

  /*****************************
          會員專區
  *****************************/
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

    if($this->input->post('rule') == "m_s_ci"){
      $card_id = $this->input->post('card_id');

      if (!empty($card_id)) {
        $where = "card_id =".'"'.$card_id.'"';
        if ($this->console_model->num_rows('member', $where)) {
          $view_data['data'] = $this->console_model->get_once('member', $where);
        }else {
          $view_data['code'] = 404;
          $view_data['msg'] = "查無此人";
        }
      }else {
        $view_data['code'] = 404;
        $view_data['msg'] = "卡號不得為空";
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

  // 會員專區裡的方案價位;d_p = discount_program
  public function member_d_p(){

    $where = "id =".'"'.$this->input->post('id').'"';
    $data = $this->console_model->get_once_all('discount_program', $where);

    $this->output->set_content_type('application/json')->set_output(json_encode($data));

  }

  /*****************************
          當月繳款日
  *****************************/
  public function month_pay(){

    if($this->input->post('rule') == "select"){
      $id = $this->input->post('id');
      $where = "card_id =".'"'.$id.'"';
      $data = $this->console_model->get_once('member', $where);

      $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
  }

  /*****************************
          員工專區
  *****************************/
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

  /*****************************
          會員進出場
  *****************************/
  public function in_and_out(){

    date_default_timezone_set("Asia/Taipei");

    if ($this->input->post('year') != null && $this->input->post('year') != date('Y')) {
      $selectYear = $this->input->post('year');
    }else{
      $selectYear = date('Y');
    }

    if($this->pos_model->chk_login_status()) {
      // login_identity = 1 員工
      if ($this->session->userdata('login_identity') == 1) {
        $table = "in_and_out as io, member as m ";
        $where = "io.who = m.card_id AND io.staff=".'"'.$this->session->userdata('login_name').'" order by in_date desc';
        $view_data['data'] = $this->console_model->get_once_all($table, $where);
      } else {
        $select = "m.card_id, m.name, io.staff, IF(io.types=0, '進場', '出場') as types, ".
                  "io.in_date, io.in_time, io.out_date, io.out_time";
        $table = "in_and_out as io, member as m ";
        $where = "io.who =m.card_id and SUBSTR(io.in_date, 1, 4)='".$selectYear."' order by io.in_date desc";

        $view_data['data'] = $this->console_model->get_select_once_all($select, $table, $where);
      }

      $datas = array();

      foreach ($view_data['data'] as $key => $value) {
        array_push(
          $datas,
          [
            $value["card_id"],
            $value["name"],
            $value["staff"],
            $value["types"],
            $value["in_date"]!=null && $value["in_time"]?$value["in_date"]." ".$value["in_time"]:" ",
            $value["out_date"]!=null && $value["out_time"]?$value["out_date"]." ".$value["out_time"]:" "
          ]
        );
      }
      $this->output->set_content_type('application/json')->set_output(json_encode($datas));
    }
  }

}
?>
