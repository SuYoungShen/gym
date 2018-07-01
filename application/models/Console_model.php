<?php
class Console_model extends CI_Model {
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

  //查詢特定全部資料並以陣列回傳
  public function get_once_all($table, $where){
    // $this->db->where($where);
    // return $this->db->get_compiled_select($table);//以class方式呈現
    return $this->db->get_where($table, $where)->result_array();// 以陣列方式呈現
  }

  //查詢特定(select)全部資料並以陣列回傳
  public function get_select_once_all($select, $table, $where){
    $this->db->select($select);
    // $this->db->where($where);
    // return $this->db->get_compiled_select($table);//以class方式呈現
    return $this->db->get_where($table, $where)->result_array();// 以陣列方式呈現
  }

  //查詢全部資料並以陣列回傳
  public function get_all($table){
    return $this->db->get($table)->result_array();// 以陣列方式呈現
  }

  //檢查表單是否有資料 in 20180616
  public function num_rows($table, $where){
    return $this->db->get_where($table, $where)->num_rows();//有資料會大於0
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

  // 刪除指定資料
  public function delete_once($table, $where){
    $this->db->where($where);
    return $this->db->delete($table);
  }

  // 計算table總筆數
  public function count_all($table, $where){
    $this->db->where($where);
    return $this->db->count_all($table);
  }

  // 確認信箱密碼是否存在
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
