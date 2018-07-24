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
    // 檢查是否有登入
    if($this->pos_model->chk_login_status()) {

      if(!empty($this->input->post("card_id"))){
        //卡號
        $card_id = $this->input->post("card_id");
        //用於查詢此卡是否存在與已使用
        $where = "card_id ="."'".$card_id."' AND status = 1";
        if ($this->pos_model->num_rows('card_status', $where) > 0) {
          //進場資料表
          $in_out_data = array(
            'id' => uniqid(),
            'types' => 0, //0=進場;1=出場
            'who' => $card_id,
            'staff' => $this->session->userdata('login_name')
          );
          //進場的時間欄位名
          $in_out_date_column = array('in_date', 'in_time');
          //進場時間功能 in 20180615
          $this->pos_model->insert('in_and_out', $in_out_data, $in_out_date_column);
          $select = "number, categorys";
          $table = "member";
          $where = "card_id="."'".$card_id."'";
          $n_c = $this->pos_model->get_select_once_all($select, $table, $where);
          if ($n_c[0]['categorys'] == "張") {
            $member_data = array('number' => $n_c[0]['number']-1);
            $member_date_column = array('up_date', 'up_time');
            $this->pos_model->update('member', $member_data, $member_date_column, $where);
            //查詢member與進出場時間資料，取出最後一筆 in 20180615
            $where = "m.card_id ="."'".$card_id."' AND io.who="."'".$card_id."' Order By io.in_date DESC, io.in_time DESC limit 1";
            $data = $this->pos_model->get_once('member as m, in_and_out as io', $where);
          }else {
            //查詢member與進出場時間資料，取出最後一筆 in 20180615
            $where = "m.card_id ="."'".$card_id."' AND io.who="."'".$card_id."' Order By io.in_date DESC, io.in_time DESC limit 1";
            $data = $this->pos_model->get_once('member as m, in_and_out as io', $where);
            $n_p_day = (strtotime($data->next_pay)-strtotime(date('Y-m-d')))/3600/24;// 下次繳款日剩餘天數n_p=next_pay in 20180710
            $remain_day = (strtotime($data->end_contract)-strtotime(date('Y-m-d')))/3600/24;// 剩餘天數
            // 3600 = 小時;24 = 天
            if ($remain_day <= 31 && $n_p_day <= 31) {
              $view_data['code'] = 500;
              $view_data['msg'] = "會籍時間快過期囉!剩餘".$remain_day."天，下次繳款日：".$data->next_pay;
            }elseif ($remain_day <= 31) {
              $view_data['code'] = 500;
              $view_data['msg'] = "會籍時間快過期囉!剩餘".$remain_day."天";
            }elseif ($n_p_day <= 31) {
              $view_data['code'] = 500;
              $view_data['msg'] = "下次繳款日：".$data->next_pay;
            }
          }
          $view_data['data'] = $data;
          $view_data['page'] = 'member_info.php';
        }else {
          $view_data['code'] = 404;
          $view_data['msg'] = "查無此會員卡或會員卡未啟用，請與管理員聯繫。";
        }
      }
			$this->load->view('layout', $view_data);
		}else{
			redirect(base_url('login'));
		}

  }
  // 會員出場
  public function out(){
    $view_data = array(
      "title" => "會員出場",
      "url" => "in",//返回進場連結用
      "url_name" => "會員進場"//返回進場連結用
    );
    if($this->pos_model->chk_login_status()) {

      if(!empty($this->input->post("card_id"))){
        //卡號
        $card_id = $this->input->post("card_id");
        //用於查詢此卡是否存在與已使用
        $where = "card_id ="."'".$card_id."' AND status = 1";
        if ($this->pos_model->num_rows('card_status', $where) > 0) {
          //出場資料表
          $in_out_data = array(
            'types' => 1 //0=進場;1=出場
          );
          //出場的時間欄位名
          $in_out_date_column = array('out_date', 'out_time');
          $where = "who ="."'".$card_id."' Order By in_date DESC , in_time DESC limit 1";
          //出場時間功能 in 20180615
          $this->pos_model->update('in_and_out', $in_out_data, $in_out_date_column, $where);
          //查詢member與進出場時間資料，取出最後一筆 in 20180615
          $where = "m.card_id ="."'".$card_id."' AND io.who="."'".$card_id."' Order By io.in_date DESC , io.in_time DESC limit 1";
          $data = $this->pos_model->get_once('member as m, in_and_out as io', $where);

          $n_p_day = (strtotime($data->next_pay)-strtotime(date('Y-m-d')))/3600/24;// 下次繳款日剩餘天數n_p=next_pay in 20180710
          $remain_day = (strtotime($data->end_contract)-strtotime(date('Y-m-d')))/3600/24;// 剩餘天數
          // 3600 = 小時;24 = 天
          if ($remain_day <= 31 && $n_p_day <= 31) {
            $view_data['code'] = 500;
            $view_data['msg'] = "會籍時間快過期囉!剩餘".$remain_day."天，下次繳款日：".$data->next_pay;
          }elseif ($remain_day <= 31) {
            $view_data['code'] = 500;
            $view_data['msg'] = "會籍時間快過期囉!剩餘".$remain_day."天";
          }elseif ($n_p_day <= 31) {
            $view_data['code'] = 500;
            $view_data['msg'] = "下次繳款日：".$data->next_pay;
          }
          $view_data['data'] = $data;
          $view_data['page'] = 'member_info.php';
        }else {
          $view_data['code'] = 404;
          $view_data['msg'] = "查無此會員卡或會員卡未啟用，請與管理員聯繫。";
        }
      }
      $this->load->view('layout', $view_data);
    }else{
      redirect(base_url('login'));
    }


  }
  public function login(){
    $view_data = array(
      "title" => "員工登入"
    );
    if($this->input->post('rule') == 'login') {
			$job_code = $this->input->post('job_code');
			$pwd = $this->input->post('password');
      if ($this->pos_model->chk_login($job_code, $pwd)) {
        $this->pos_model->do_login($job_code);
        if($this->session->userdata('login_identity') == 0 ||
          $this->session->userdata('login_identity') == 99){
            redirect(base_url('console/'));
          }else if($this->session->userdata('login_identity') == 1){
            redirect(base_url('in'));
          }
      }else{
				$view_data['error'] = '登入失敗，信箱或密碼錯誤';
			}
    }
    $this->load->view('login', $view_data);
  }

  public function logout() {
    if($this->pos_model->logout()) {
      redirect(base_url('login'));
    }
  }
}
?>
