<?php
class Pos_model extends CI_Model {
  public function __construct()
  {
    $this->load->database();
  }
  //查詢特定一筆只顯示一筆
  public function get_once($table, $where){
    // $this->db->where($where);
    // return $this->db->get_compiled_select($table);//以class方式呈現
    return $this->db->get_where($table, $where)->row();//以class方式呈現
  }

  //檢查表單是否有資料 in 20180616
  public function num_rows($table, $where){
    return $this->db->get_where($table, $where)->num_rows();//有資料會大於0
  }

  //查詢特定(select)全部資料並以陣列回傳
  public function get_select_once_all($select, $table, $where){
    $this->db->select($select);
    // $this->db->where($where);
    // return $this->db->get_compiled_select($table);//以class方式呈現
    return $this->db->get_where($table, $where)->result_array();// 以陣列方式呈現
  }
  
  //新增資料，$table=資料表；$data=資料；$date=日期欄位
  public function insert($table, $data, $date){
    $date = $this->date($date);
    $data = array_merge($data, $date);//array_merge=類似array_push，差別於merge可加key
    return $this->db->insert($table, $data);
  }

  //更新資料，$table=資料表；$data=資料；$date=日期欄位
  public function update($table, $data, $date, $where){
    $date = $this->date($date);
    $data = array_merge($data, $date);//array_merge=類似array_push，差別於merge可加key
    $this->db->where($where);
    return $this->db->update($table, $data);
  }

  // 確認員工信箱密碼是否存在
  public function chk_login($job_code, $pwd) {
    $this->db->where('job_code', $job_code);
    $this->db->where('password', sha1($pwd));
    // 透過藉由信箱密碼下去比對是否存在
    if($this->db->count_all_results('staff') == 0) {
      // 不存在
      return false;
    }else{
      // 存在
      return true;
    }
  }

    // 員工進行登入
  public function do_login($job_code) {
    $where = 'job_code ='."'".$job_code."'";
    $data = $this->get_once('staff', $where);

    $session_arr = array(
      'login_name'=> $data->staff_name,
      'login_id'=> $data->job_code,
      'login_status'=> true,
      'login_identity' => $data->identity //身分(0=boss、1=staff、99=admin)
    );

    // 登入資訊保存到Session
    $this->session->set_userdata($session_arr);

    $this->set_last_login($data->job_code);

    return true;
  }

  // 確認管理者是否登入
  public function chk_login_status() {
    return $this->session->userdata('login_status');
  }

  // 管理員登出
  public function logout() {
    $this->session->unset_userdata('login_name');
    $this->session->unset_userdata('login_id');
    $this->session->unset_userdata('login_status');
    $this->session->unset_userdata('login_identity');
    return true;
  }

  // 設定最後登入時間
  public function set_last_login($id) {
    date_default_timezone_set("Asia/Taipei");

    $dataArray = array(
      'id' => uniqid(),
      'web' => 0,
      'who' => $id,
      'sign_in_date'=> date('Y-m-d'),
      'sign_in_time'=> date('H:i:s')
    );
    return $this->db->insert('login_history', $dataArray);
  }



  public function date($date){
    date_default_timezone_set("Asia/Taipei");
    $res = array();

    foreach ($date as $key => $value) {
      if ($key == 0) {
        $res[$value] = date('Y-m-d');
      }else if($key == 1){
        $res[$value] = date('H:i:s');
      }
    }
    return $res;
  }
}
?>
