<?php

class Console extends CI_Controller {

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
    $view_data = array(
      'title' => "優惠方案",
      'page' => 'offer.php',
      'menu' => 'offer'
    );

    $view_data['data'] = $this->console_model->get_all('discount_program');

    if ($this->input->post('rule') == "insert") {
      $dataArray = array(
        'id' => uniqid(),
        "price" => $this->input->post('original_price'), // 原價
        "discount" => $this->input->post('discount'), // 折扣：整數 1-9
        "discount_price" => $this->input->post('after_discount') // 折扣後，整數四捨五入
      );

      if ($this->input->post('number') >= 1 && $this->input->post('number') <= 11){
        if ($dataArray["discount"] >= 1 && $dataArray["discount"] <= 9) {

          // 會籍：number整數1-11; categorys=月、年
          $dataArray["types"] = $this->input->post('number').$this->input->post('categorys');
          // 此優惠方案加入時間欄位名; dp=discount_program 優惠方案
          $dp_date_column = array('join_date', 'join_time');

          if($this->console_model->insert('discount_program', $dataArray, $dp_date_column)){
            $view_data['code'] = 200;
            $view_data['msg'] = "恭喜新增此方案成功!!!";
          }else {
            $view_data['code'] = 404;
            $view_data['msg'] = "新增失敗~~~";
          }

        }else {
          $view_data['code'] = 404;
          $view_data['msg'] = "折扣範圍錯誤，請注意範圍是1-9哦!";
        }
      }else {
        $view_data['code'] = 404;
        $view_data['msg'] = "會籍範圍錯誤，請注意範圍是1-9哦!";
      }
    }
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
