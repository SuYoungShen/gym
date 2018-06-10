<?php

class Upload extends CI_Controller {

        public function __construct()
        {
          parent::__construct();
          $this->load->helper(array('form', 'url'));
          $this->load->library('email');

        }

        public function index()
        {
          $this->load->view('upload_form', array('error' => ' ' ));
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

     function mail(){

       		$this->email->from('suyoungshen@gmail.com', 'Su Shen');
       		$this->email->to('k90218104@gcloud.csu.edu.tw');
       		$this->email->subject("歡迎加入!");
       	  $this->email->message("這幾個景點須注意：");
       		$this->email->send();

        // $this->email->from('suyoungshen@gmail.com', 'Su Shen');
        // $this->email->to('k90218104@gcloud.csu.edu.tw');//20180411 更改
        //
        // $this->email->subject("歡迎k90218104@gcloud.csu.edu.tw加入!");//20180411 更改
        // $this->email->message("
        // <h2 style='color:red;font-weight:bold;'>恭喜k90218104@gcloud.csu.edu.tw註冊成功</h2>
        // <p>您可透過連結到網站<a href='https://sushentravel.tk/'>https://sushentravel.tk/</a></p>
        // ");//20180411 更改
        //
        // $this->email->send();
      }

}
?>
