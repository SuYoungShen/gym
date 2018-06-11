<?php
class Pos_model extends CI_Model {
  public function __construct()
  {
    $this->load->database();
  }
  //查詢特定一筆只顯示一筆
  public function get_once($table, $where){
    return $this->db->get_where($table, $where)->row();//以class方式呈現
  }
}
?>
