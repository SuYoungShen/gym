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

      //進場資料表
      $in_out_data = array(
        'id' => uniqid(),
        'types' => 0, //0=進場;1=出場
        'who' => $card_id
      );
      //進場的時間欄位名
      $in_out_date_column = array('in_date', 'in_time');
      //進場時間功能 in 20180615
      $this->pos_model->insert('in_and_out', $in_out_data, $in_out_date_column);
      //查詢member與進出場時間資料，取出最後一筆 in 20180615

      $where = "m.card_id ="."'".$card_id."' AND io.who="."'".$card_id."' Order By io.in_date DESC limit 1";
      // $where = "m.card_id ="."'".$card_id."' AND io.who="."'".$card_id."' Order By io.in_date DESC, io.in_time DESC limit 1";

      $data = $this->pos_model->get_once('member as m, in_and_out as io', $where);
      // $data = $this->pos_model->get_once('member as m, in_and_out as io', $where);
      $view_data['data'] = $data;
      $view_data['page'] = 'member_info.php';
    }
    $this->load->view('layout', $view_data);
  }

  // 會員出場
  // public function out()
  // {
  //   $view_data = array(
  //     "title" => "會員出場",
  //     "url" => "in",//返回進場連結用
  //     "url_name" => "會員進場"//返回進場連結用
  //   );
  //
  //   if(!empty($this->input->post("card_id"))){
  //
  //     $card_id = $this->input->post("card_id");
  //
  //     //進場資料表
  //     $in_out_data = array(
  //       'types' => 1, //0=進場;1=出場
  //       'who' => $card_id
  //     );
  //
  //
  //     //出場的時間欄位名
  //     $in_out_date_column = array('out_date', 'out_time');
  //     $where = "card_id ="."'".$in_out_data['who']."' AND Order By in_date DESC , in_time DESC limit 1";
  //     //出場時間功能 in 20180615
  //     $this->pos_model->update('in_and_out', $in_out_data, $in_out_date_column, $where);
  //     //查詢member與進出場時間資料，取出最後一筆 in 20180615
  //     $where = "m.card_id ="."'".$card_id."' AND io.who="."'".$card_id."'Order By io.out_date DESC , io.out_time DESC limit 1";
  //
  //     $data = $this->pos_model->get_once('member as m, in_and_out as io', $where);
  //     $view_data['data'] = $data;
  //     $view_data['page'] = 'member_info.php';
  //   }
  //
  //   $this->load->view('layout', $view_data);
  // }

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
