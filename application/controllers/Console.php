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
          $dataArray['number'] = $this->input->post('number');
          $dataArray["types"] = $this->input->post('categorys');
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
    if($this->input->post('rule') == "update"){

      $id = $this->input->post('m_id');
      $dataArray = array(
        "number" => $this->input->post('m_number'),
        "types" => $this->input->post('m_categorys'),
        "price" => $this->input->post('m_original_price'), // 原價
        "discount" => $this->input->post('m_discount'), // 折扣：整數 1-9
        "discount_price" => $this->input->post('m_after_discount') // 折扣後，整數四捨五入
      );
      $dp_date_column = array('up_date', 'up_time');
      $where = "id =".'"'.$id.'"';
      if($this->console_model->update('discount_program', $dataArray, $dp_date_column, $where)){
        $view_data['code'] = 200;
        $view_data['msg'] = "更新成功!!!";
      }else {
        $view_data['code'] = 404;
        $view_data['msg'] = "更新失敗!!!";
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
    $table = "in_and_out as io, member as m ";
    $where = "io.who = m.card_id";
    $view_data['data'] = $this->console_model->get_once_all($table, $where);

    $this->load->view('console/layout', $view_data);
  }

  // 登入紀錄
  public function login_history(){
    $view_data = array(
      'title' => "登入紀錄",
      'page' => 'login_history.php',
      'menu' => 'login_history'
    );
    $table = "login_history as lh, staff as s";
    $where = "lh.who = s.job_code";
    $view_data['data'] = $this->console_model->get_once_all($table, $where);
    $this->load->view('console/layout', $view_data);
  }

  // 會員專區
  public function member(){
    $view_data = array(
      'title' => "會員專區",
      'page' => 'member.php',
      'menu' => 'member'
    );
    $where = "status = 0";// 0表示此卡無人使用
    $view_data['card_id'] = $this->console_model->get_once_all('card_status', $where);
    $view_data['data'] = $this->console_model->get_all('member');

    if ($this->input->post('rule') == "insert") {

      $dataArray = array(
        'card_id' => $this->input->post('card_id'), // 卡號
        "name" => $this->input->post('name'), // 會員姓名
        "identity_card" => $this->input->post('identity_card'), // 會員身份證字號
        "birthday" => $this->input->post('birthday'), // 會員生日
        "phone" => $this->input->post('phone'), // 會員手機號碼
        "email" => $this->input->post('email'), // 會員身分
        "address" => $this->input->post('address'), // 地址
        "number" => $this->input->post('number'), // 會籍數字
        "categorys" => $this->input->post('categorys'), // 會籍種類
        "who" => $this->session->userdata('login_name'), // 那位員工更新
        "note" => $this->input->post('note'), // 備註
        "emergency_contact" => $this->input->post('emergency_contact'), // 緊急聯絡人
        "emergency_phone" => $this->input->post('emergency_phone'), // 聯絡人電話
        "start_contract" => $this->input->post('start_contract'), // 合約開始日
        "end_contract" => $this->input->post('end_contract') // 合約結束日
      );

      if (!empty($dataArray["card_id"])){
        if (!empty($dataArray["name"])){
          if (!empty($dataArray["identity_card"])){
            if (!empty($dataArray["phone"])){
              if (!empty($dataArray["emergency_phone"]) || !empty($dataArray["emergency_contact"])){

                $data = array(
                  "status" => 1
                );
                // 檔案上傳部分要重用
                if(isset($_FILES)) {
                  date_default_timezone_set("Asia/Taipei");

                  $dataArray['pics'] = date('YmdHis');
                  if($_FILES['pics']['type'] == 'image/png' ||
                  $_FILES['pics']['type'] == 'image/jpeg' ||
                  $_FILES['pics']['type'] == 'image/jpg') {
                    if($_FILES['pics']['type'] == 'image/png') {
                      $dataArray['pics'] = $dataArray['pics'] . '.png';
                    }else{
                      $dataArray['pics'] = $dataArray['pics'] . '.jpg';
                    }
                    if(!file_exists('assets/images/m_pics')) {
                      mkdir('assets/images/m_pics', 0777, true);
                    }
                    if(!copy($_FILES['pics']['tmp_name'], 'assets/images/m_pics/'.$dataArray['pics'])) {
                      $view_data['code'] = 500;
                      $view_data['msg'] = '圖片新增失敗...';
                    }
                  }else{
                    $view_data['code'] = 404;
                    $view_data['msg'] = '檔案格式不符合';
                  }
                }else{
                  $view_data['pics'] = '../assets/images/default.png';
                }

                $m_date_column = array('join_date', 'join_time');
                if($this->console_model->insert('member', $dataArray, $m_date_column)){
                  // cs = card_status
                  $cs_date_column = array('use_date', 'use_time');
                  $where = "card_id =".'"'.$dataArray['card_id'].'"';
                  if ($this->console_model->update('card_status', $data, $cs_date_column, $where)) {
                    // 員工加入時間欄位名;
                    $view_data['code'] = 200;
                    $view_data['msg'] = "新增成功!!!";
                  }else {
                    $view_data['code'] = 404;
                    $view_data['msg'] = "卡片未啟用成功!!!";
                  }
                }else {
                  $view_data['code'] = 404;
                  $view_data['msg'] = "新增失敗!!!";
                }

              }else {
                $view_data['code'] = 404;
                $view_data['msg'] = "緊急聯絡人或聯絡人電話不得為空!!!";
              }
            }else {
              $view_data['code'] = 404;
              $view_data['msg'] = "手機不得為空!!!";
            }
          }else {
            $view_data['code'] = 404;
            $view_data['msg'] = "身分證字號不得為空!!!";
          }
        }else {
          $view_data['code'] = 404;
          $view_data['msg'] = "姓名不得為空!!!";
        }
      }else {
        $view_data['code'] = 404;
        $view_data['msg'] = "卡號不得為空!!!";
      }

    }elseif ($this->input->post('rule') == "update") {
      $dataArray = array(
        'card_id' => $this->input->post('m_card_id'), // 卡號
        "name" => $this->input->post('m_name'), // 會員姓名
        "identity_card" => $this->input->post('m_identity_card'), // 會員身份證字號
        "birthday" => $this->input->post('m_birthday'), // 會員生日
        "phone" => $this->input->post('m_phone'), // 會員手機號碼
        "email" => $this->input->post('m_email'), // 會員身分
        "address" => $this->input->post('m_address'), // 地址
        "number" => $this->input->post('m_number'), // 會籍數字
        "categorys" => $this->input->post('m_categorys'), // 會籍種類
        "who" => $this->session->userdata('login_name'), // 那位員工更新
        "note" => $this->input->post('m_note'), // 備註
        "emergency_contact" => $this->input->post('m_emergency_contact'), // 緊急聯絡人
        "emergency_phone" => $this->input->post('m_emergency_phone'), // 聯絡人電話
        "start_contract" => $this->input->post('m_start_contract'), // 合約開始日
        "end_contract" => $this->input->post('m_end_contract') // 合約結束日
      );

      if (!empty($dataArray["card_id"])){
        if (!empty($dataArray["name"])){
          if (!empty($dataArray["identity_card"])){
            if (!empty($dataArray["phone"])){
              if (!empty($dataArray["emergency_phone"]) || !empty($dataArray["emergency_contact"])){

                $where = "card_id =".'"'.$dataArray['card_id'].'"';
                $m_date_column = array('up_date', 'up_time');
                if($this->console_model->update('member', $dataArray, $m_date_column, $where)){
                  $view_data['code'] = 200;
                  $view_data['msg'] = "更新成功!!!";
                }else {
                  $view_data['code'] = 404;
                  $view_data['msg'] = "更新失敗!!!";
                }

              }else {
                $view_data['code'] = 404;
                $view_data['msg'] = "緊急聯絡人或聯絡人電話不得為空!!!";
              }
            }else {
              $view_data['code'] = 404;
              $view_data['msg'] = "手機不得為空!!!";
            }
          }else {
            $view_data['code'] = 404;
            $view_data['msg'] = "身分證字號不得為空!!!";
          }
        }else {
          $view_data['code'] = 404;
          $view_data['msg'] = "姓名不得為空!!!";
        }
      }else {
        $view_data['code'] = 404;
        $view_data['msg'] = "卡號不得為空!!!";
      }
    }
    $view_data['pics'] = '../assets/images/default.png';

    $this->load->view('console/layout', $view_data);
  }

  // 員工專區
  public function staff(){
    $view_data = array(
      'title' => "員工專區",
      'page' => 'staff.php',
      'menu' => 'staff'
    );

    if ($this->session->userdata('login_identity') == 1) {
      $where = "identity =".'"'.$this->session->userdata('login_identity').'"';
      $view_data['data'] = $this->console_model->get_once_all('staff', $where);
    }else {
      $view_data['data'] = $this->console_model->get_all('staff');
    }

    if ($this->input->post('rule') == "insert") {
      $dataArray = array(
        'id' => uniqid(),
        "job_code" => $this->input->post('job_code'), // 員工編號
        "name" => $this->input->post('name'), // 員工姓名
        "password" => sha1($this->input->post('passwd')), // 員工登入密碼
        "birthday" => $this->input->post('birthday'), // 員工生日
        "phone" => $this->input->post('phone'), // 員工手機號碼
        "identity" => $this->input->post('identity'), // 員工身分
        "address" => $this->input->post('address'), // 地址
        "emergency_contact" => $this->input->post('emergency_contact'), // 緊急聯絡人
        "emergency_phone" => $this->input->post('emergency_phone') // 聯絡人電話
      );

      if (!empty($dataArray["job_code"])){
        if (!empty($dataArray["name"])){
          if (!empty($dataArray["password"])){
            // 員工加入時間欄位名;
            $st_date_column = array('join_date', 'join_time');

            if($this->console_model->insert('staff', $dataArray, $st_date_column)){
              $view_data['code'] = 200;
              $view_data['msg'] = "新增成功!!!";
            }else {
              $view_data['code'] = 404;
              $view_data['msg'] = "新增失敗~~~";
            }
          }else {
            $view_data['code'] = 404;
            $view_data['msg'] = "密碼不得為空!!!";
          }
        }else {
          $view_data['code'] = 404;
          $view_data['msg'] = "姓名不得為空!!!";
        }
      }else {
        $view_data['code'] = 404;
        $view_data['msg'] = "職編不得為空!!!";
      }
    }

    if($this->input->post('rule') == "update"){

      $id = $this->input->post('m_id');
      $dataArray = array(
        "job_code" => $this->input->post('m_job_code'), // 員工編號
        "name" => $this->input->post('m_name'), // 員工姓名
        "password" => sha1($this->input->post('m_passwd')), // 員工登入密碼
        "birthday" => $this->input->post('m_birthday'), // 員工生日
        "phone" => $this->input->post('m_phone'), // 員工手機號碼
        "identity" => $this->input->post('m_identity'), // 員工身分
        "address" => $this->input->post('m_address'), // 地址
        "emergency_contact" => $this->input->post('m_emergency_contact'), // 緊急聯絡人
        "emergency_phone" => $this->input->post('m_emergency_phone') // 聯絡人電話
      );
      $st_date_column = array('up_date', 'up_time');
      $where = "id =".'"'.$id.'"';
      if($this->console_model->update('staff', $dataArray, $st_date_column, $where)){
        $view_data['code'] = 200;
        $view_data['msg'] = "更新成功!!!";
      }else {
        $view_data['code'] = 404;
        $view_data['msg'] = "更新失敗!!!";
      }

    }
    $this->load->view('console/layout', $view_data);
  }
}
?>
