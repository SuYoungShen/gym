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
