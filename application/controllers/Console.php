<?php

class Console extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('console_model', 'pos_model'));
  }

  public function console(){
    $view_data = array(
      'title' => "首頁",
      'page' => 'console.php',
      'menu' => 'index'
    );
    if($this->pos_model->chk_login_status()) {
      $view_data["member_total"] = $this->console_model->count_all('member', 1);
      $where = "identity != 99";
      $view_data["staff_total"] = $this->console_model->count_all('staff', $where);
      $this->load->view('console/layout', $view_data);
    }else {
      redirect(base_url('login'));
    }
  }

  // 優惠方案
  public function offer(){
    $view_data = array(
      'title' => "優惠方案",
      'page' => 'offer.php',
      'menu' => 'offer'
    );
    if($this->pos_model->chk_login_status()) {
      $view_data['data'] = $this->console_model->get_all('discount_program');

      if ($this->input->post('rule') == "insert") {
        $dataArray = array(
          'id' => uniqid(),
          "price" => $this->input->post('original_price'), // 原價
          "discount" => $this->input->post('discount'), // 折扣：整數 1-9
          "discount_price" => $this->input->post('after_discount') // 折扣後，整數四捨五入
        );

        if ($this->input->post('number') >= 1 && $this->input->post('number') <= 11){
          if ($dataArray["discount"] >= 0 && $dataArray["discount"] <= 9) {

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
          $view_data['msg'] = "會籍範圍錯誤，請注意範圍是0-9哦!";
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
      }// update
      $this->load->view('console/layout', $view_data);

    }else {
      redirect(base_url('login'));
    }
  }

  // 卡片狀態
  public function card(){
    $view_data = array(
      'title' => "卡片狀態",
      'page' => 'card.php',
      'menu' => 'card'
    );
    if($this->pos_model->chk_login_status()) {
      $view_data['data'] = $this->console_model->get_all('card_status');

      if ($this->input->post('rule') == "insert") {

        foreach ($view_data['data'] as $key => $value) {
          $card_id[$key] = $value['card_id'];
        }

        $start = $this->input->post('start_number');
        $end = $this->input->post('end_number');

        $val_true = array();// 用於卡號已存在的存放位置
        for ($i = $start; $i <= $end ; $i++) {

          $i = str_pad($i, 6, '0', STR_PAD_LEFT);// 補0用

          if (isset($card_id) && !empty($card_id)) {

            $array_search = array_search($i, $card_id);// 用於判斷搜尋的值資料庫是否已存在

            if(isset($array_search) && $array_search != false){
              array_push($val_true, $i.",");
            }else {
              // 用於一開始新增卡片用
              $dataArray = array(
                // 'id' => uniqid(),
                'card_id' => $i
              );
              $dp_date_column = array('add_date', 'add_time');
              $How = $this->console_model->insert('card_status', $dataArray, $dp_date_column);
            }
          }else {
            // 用於一開始新增卡片用
            $dataArray = array(
              // 'id' => uniqid(),
              'card_id' => $i
            );

            $dp_date_column = array('add_date', 'add_time');
            $How = $this->console_model->insert('card_status', $dataArray, $dp_date_column);
          }// else
        }// for

        if($How){
          $view_data['code'] = 200;
          if(isset($val_true) && !empty($val_true)){
            $view_data['msg'] = "恭喜新增會員卡號成功，但是".implode($val_true)."有重複!!!";
          }else {
            $view_data['msg'] = "恭喜新增會員卡號成功!!!";
          }
        }else {
          $view_data['code'] = 404;
          $view_data['msg'] = "新增會員卡號失敗";
        }

      }// Insert

      // if($this->input->post('rule') == "update"){
      //
      //   $id = $this->input->post('m_id');
      //   $dataArray = array(
      //     "number" => $this->input->post('m_number'),
      //     "types" => $this->input->post('m_categorys'),
      //     "price" => $this->input->post('m_original_price'), // 原價
      //     "discount" => $this->input->post('m_discount'), // 折扣：整數 1-9
      //     "discount_price" => $this->input->post('m_after_discount') // 折扣後，整數四捨五入
      //   );
      //   $dp_date_column = array('up_date', 'up_time');
      //   $where = "id =".'"'.$id.'"';
      //   if($this->console_model->update('discount_program', $dataArray, $dp_date_column, $where)){
      //     $view_data['code'] = 200;
      //     $view_data['msg'] = "更新成功!!!";
      //   }else {
      //     $view_data['code'] = 404;
      //     $view_data['msg'] = "更新失敗!!!";
      //   }
      //
      // }
      $this->load->view('console/layout', $view_data);

    }else {
      redirect(base_url('login'));
    }
  }


  // 會員進出場
  public function in_and_out(){
    $view_data = array(
      'title' => "會員進出場管理",
      'page' => 'in_and_out.php',
      'menu' => 'in_and_out'
    );
    if($this->pos_model->chk_login_status()) {
      if ($this->session->userdata('login_identity') == 1) {
        $table = "in_and_out as io, member as m ";
        $where = "io.who = m.card_id AND io.staff=".'"'.$this->session->userdata('login_name').'" order by in_time desc';
        $view_data['data'] = $this->console_model->get_once_all($table, $where);
      }else {
        $table = "in_and_out as io, member as m ";
        $where = "io.who = m.card_id";
        $view_data['data'] = $this->console_model->get_once_all($table, $where);
      }
      $this->load->view('console/layout', $view_data);
    }else {
      redirect(base_url('login'));
    }
  }

  // 登入紀錄
  public function login_history(){
    $view_data = array(
      'title' => "登入紀錄",
      'page' => 'login_history.php',
      'menu' => 'login_history'
    );
    if($this->pos_model->chk_login_status()) {
      $table = "login_history as lh, staff as s";
      $where = "lh.who = s.job_code";
      $view_data['data'] = $this->console_model->get_once_all($table, $where);
      $this->load->view('console/layout', $view_data);
    }else {
      redirect(base_url('login'));
    }

  }

  // 會員專區
  public function member(){
    $view_data = array(
      'title' => "會員專區",
      'page' => 'member.php',
      'menu' => 'member'
    );
    if($this->pos_model->chk_login_status()) {
      $where = "status = 0";// 0表示此卡無人使用
      $view_data['card_id'] = $this->console_model->get_once_all('card_status', $where);

      $where = "status = 1";// 0表示此卡無人使用
      $view_data['m_s_ci'] = $this->console_model->get_once_all('card_status', $where);

      if ($this->session->userdata('login_identity') == 1) {
        $select = "m.card_id, m.pics, m.name, m.identity_card,
        m.birthday, m.phone, m.email, m.address,
        m.emergency_contact, m.emergency_phone,
        m.start_contract, m.end_contract, m.number,
        m.categorys, m.note, m.join_date,
        m.join_time, m.up_date,m.up_time, s.staff_name";
        $where = "m.who=s.job_code";
        $table = "member as m, staff as s";
        $view_data['data'] = $this->console_model->get_select_once_all($select, $table, $where);
      }else {
        $select = "m.card_id, m.pics, m.name, m.identity_card,
        m.birthday, m.phone, m.email, m.address,
        m.emergency_contact, m.emergency_phone,
        m.start_contract, m.end_contract, m.number,
        m.categorys, m.note, m.join_date,
        m.join_time, m.up_date,m.up_time, s.staff_name";
        $where = "m.who=s.job_code";
        $table = "member as m, staff as s";
        $view_data['data'] = $this->console_model->get_select_once_all($select, $table, $where);
      }

      if ($this->input->post('rule') == "insert") {
        if (empty($this->input->post('count'))) { // 如果為空表示是以票卷
          $where = "id=".'"'.$this->input->post('number').'"';// 裡面是放優惠方案的id
          $dp_data = $this->console_model->get_once('discount_program', $where);// 優惠方案的資料
        }

        $dataArray = array(
          'card_id' => $this->input->post('card_id'), // 卡號
          "name" => $this->input->post('name'), // 會員姓名
          "identity_card" => $this->input->post('identity_card'), // 會員身份證字號
          "birthday" => $this->input->post('birthday'), // 會員生日
          "phone" => $this->input->post('phone'), // 會員手機號碼
          "email" => $this->input->post('email'), // 會員身分
          "address" => $this->input->post('address'), // 地址
          "dp_id" => isset($dp_data->id) && !empty($dp_data->id)?$dp_data->id:" ", // 優惠方案id
          "number" => isset($dp_data->number) && !empty($dp_data->number)?$dp_data->number:$this->input->post("count"), // 會籍與張數數字
          "categorys" => isset($dp_data->types) && !empty($dp_data->types)?$dp_data->types:$this->input->post("categorys"), // 會籍種類
          "price" => isset($dp_data->discount_price) && !empty($dp_data->discount_price)?$dp_data->discount_price:0, // 會籍價位
          "who" => $this->session->userdata('login_id'), // 那位員工更新
          "note" => $this->input->post('note'), // 備註
          "emergency_contact" => $this->input->post('emergency_contact'), // 緊急聯絡人
          "emergency_phone" => $this->input->post('emergency_phone'), // 聯絡人電話
          "start_contract" => $this->input->post('start_contract'), // 合約開始日
          "end_contract" => $this->input->post('end_contract'), // 合約結束日
          "next_pay" => $this->input->post('next_pay') // 下次繳款日 in 20180704
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

      }else if ($this->input->post('rule') == "update") {
        // 如果是以票卷購買
        if (!empty($this->input->post("m_categorys")) && $this->input->post("m_categorys") == "張") {
          $dataArray = array(
          'card_id' => $this->input->post('m_card_id'), // 卡號
          "name" => $this->input->post('m_name'), // 會員姓名
          "identity_card" => $this->input->post('m_identity_card'), // 會員身份證字號
          "birthday" => $this->input->post('m_birthday'), // 會員生日
          "phone" => $this->input->post('m_phone'), // 會員手機號碼
          "email" => $this->input->post('m_email'), // 會員身分
          "address" => $this->input->post('m_address'), // 地址
          "number" => $this->input->post('m_count'), // 會籍數字或張數
          "categorys" => $this->input->post('m_categorys'), // 會籍種類
          "who" => $this->session->userdata('login_id'), // 那位員工更新
          "note" => $this->input->post('m_note'), // 備註
          "emergency_contact" => $this->input->post('m_emergency_contact'), // 緊急聯絡人
          "emergency_phone" => $this->input->post('m_emergency_phone'), // 聯絡人電話
          "start_contract" => " ", // 合約開始日
          "end_contract" => " ", // 合約結束日
          "next_pay" => "" // 下次繳款日 in 20180704
          );
        }else {

          $where = "id=".'"'.$this->input->post('m_number').'"';// 裡面是放優惠方案的id
          $dp_data = $this->console_model->get_once('discount_program', $where);// 優惠方案的資料

          $dataArray = array(
            'card_id' => $this->input->post('m_card_id'), // 卡號
            "name" => $this->input->post('m_name'), // 會員姓名
            "identity_card" => $this->input->post('m_identity_card'), // 會員身份證字號
            "birthday" => $this->input->post('m_birthday'), // 會員生日
            "phone" => $this->input->post('m_phone'), // 會員手機號碼
            "email" => $this->input->post('m_email'), // 會員身分
            "address" => $this->input->post('m_address'), // 地址
            "dp_id" => $dp_data->id, // 優惠方案id
            "number" => $dp_data->number, // 會籍數字
            "categorys" => $dp_data->types, // 會籍種類
            "price" => $dp_data->discount_price, // 會籍價位
            "who" => $this->session->userdata('login_id'), // 那位員工更新
            "note" => $this->input->post('m_note'), // 備註
            "emergency_contact" => $this->input->post('m_emergency_contact'), // 緊急聯絡人
            "emergency_phone" => $this->input->post('m_emergency_phone'), // 聯絡人電話
            "start_contract" => $this->input->post('m_start_contract'), // 合約開始日
            "end_contract" => $this->input->post('m_end_contract'), // 合約結束日
            "next_pay" => $this->input->post('m_next_pay') // 下次繳款日 in 20180704
          );
        }

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
      }else if ($this->input->post('rule') == "m_up_pics") {

        $dataArray = array(
        'card_id' => $this->input->post('m_up_card_id') // 卡號
        );

        if (!empty($dataArray['card_id'])) {
          // 檔案上傳部分要重用
          if(isset($_FILES)) {
            date_default_timezone_set("Asia/Taipei");

            $dataArray['pics'] = date('YmdHis');
            if($_FILES['m_up_pics']['type'] == 'image/png' ||
            $_FILES['m_up_pics']['type'] == 'image/jpeg' ||
            $_FILES['m_up_pics']['type'] == 'image/jpg') {
              if($_FILES['m_up_pics']['type'] == 'image/png') {
                $dataArray['pics'] = $dataArray['pics'] . '.png';
              }else{
                $dataArray['pics'] = $dataArray['pics'] . '.jpg';
              }
              if(!file_exists('assets/images/m_pics')) {
                mkdir('assets/images/m_pics', 0777, true);
              }
              if(copy($_FILES['m_up_pics']['tmp_name'], 'assets/images/m_pics/'.$dataArray['pics'])) {
                $data['pics'] = $dataArray['pics'];
                //  m=member
                $m_date_column = array('up_date', 'up_time');
                $where = "card_id =".'"'.$dataArray['card_id'].'"';
                if ($this->console_model->update('member', $data, $m_date_column, $where)) {
                  // 員工加入時間欄位名;
                  $view_data['code'] = 200;
                  $view_data['msg'] = "更新成功!!!";
                }

              }else {
                $view_data['code'] = 500;
                $view_data['msg'] = '圖片更新失敗...';
              }
            }else{
              $view_data['code'] = 404;
              $view_data['msg'] = '檔案格式不符合';
            }
          }else{
            $view_data['pics'] = '../assets/images/default.png';
          }
        }else {
          $view_data['code'] = 404;
          $view_data['msg'] = "卡號不得為空!!!";
        }
      }
      $view_data['pics'] = '../assets/images/default.png';

      $this->load->view('console/layout', $view_data);
    }else {
      redirect(base_url('login'));
    }
  }

  // 員工專區
  public function staff(){
    $view_data = array(
      'title' => "員工專區",
      'page' => 'staff.php',
      'menu' => 'staff'
    );
    if($this->pos_model->chk_login_status()) {
      if ($this->session->userdata('login_identity') == 1) {
        $where = "identity =".'"'.$this->session->userdata('login_identity').'" AND job_code ='.'"'.$this->session->userdata('login_id').'"';
        $view_data['data'] = $this->console_model->get_once_all('staff', $where);
      }else if($this->session->userdata('login_identity') == 0){
        $where = "identity = 0 OR identity = 1";
        $view_data['data'] = $this->console_model->get_once_all('staff', $where);
      }else if($this->session->userdata('login_identity') == 99){
        $view_data['data'] = $this->console_model->get_all('staff');
      }
      if ($this->input->post('rule') == "insert") {

        foreach ($view_data['data'] as $key => $value) {
          $job_code[$key] = $value['job_code'];
        }

        if(!in_array($this->input->post('job_code'), $job_code)){// 用於判斷搜尋的值資料庫是否已存在
          $dataArray = array(
            'id' => uniqid(),
            "job_code" => $this->input->post('job_code'), // 員工編號
            "staff_name" => $this->input->post('name'), // 員工姓名
            "password" => sha1($this->input->post('passwd')), // 員工登入密碼
            "birthday" => $this->input->post('birthday'), // 員工生日
            "phone" => $this->input->post('phone'), // 員工手機號碼
            "identity" => $this->input->post('identity'), // 員工身分
            "address" => $this->input->post('address'), // 地址
            "emergency_contact" => $this->input->post('emergency_contact'), // 緊急聯絡人
            "emergency_phone" => $this->input->post('emergency_phone') // 聯絡人電話
          );

          if (!empty($dataArray["job_code"])){
            if (!empty($dataArray["staff_name"])){
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
        }else {
          $view_data['code'] = 404;
          $view_data['msg'] = "此員工編號重複囉!!!";
        }

      }// Insert

      if($this->input->post('rule') == "update"){

        $id = $this->input->post('m_id');
        $dataArray = array(
        "job_code" => $this->input->post('m_job_code'), // 員工編號
        "staff_name" => $this->input->post('m_name'), // 員工姓名
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
    }else {
      redirect(base_url('login'));
    }// else
  }
}
?>
