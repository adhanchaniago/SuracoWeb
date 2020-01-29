<?php
class Model_user extends CI_model {
  public function __construct(){
    parent::__construct();
  }
  public function signin($email,$pass1){
    $sql=$this->db->query("SELECT * From user where email='".$email."' and password='".$pass1."'");
    return $sql->row_array();
  }
  public function req(){
    $data = [
      "name" => $this->input->post('name',true),
      "email" => $this->input->post('email',true),
      "password" => md5($this->input->post('password1'))
    ];
    $this->db->insert('user', $data);
  }
}
