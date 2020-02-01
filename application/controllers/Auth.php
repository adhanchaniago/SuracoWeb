<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('model_user');
  }

  public function index(){
    $data['title'] = 'Login User';
    $data['pesan'] = '0';
    $this->load->view('templates/header', $data);
    $this->load->view('auth/login',$data);
    $this->load->view('templates/footer');
  }
  public function login(){
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $pass1 = md5($password);
    $user = $this->model_user->signin($email,$pass1);
    if (isset($user)) {
      $this->session->uid = $user['id'];
      redirect('/');
    }else {
      $data['pesan']="1";
      $data['title'] = 'Login User';
      $this->load->view('templates/header', $data);
      $this->load->view('auth/login', $data);
      $this->load->view('templates/footer');
    }
  }
  public function register(){
    $data['title'] = 'Register User';
    $this->load->view('templates/header', $data);
    $this->load->view('auth/regis');
    $this->load->view('templates/footer');
  }
  public function reg(){
    $pass1 = $this->input->post('password1');
    $pass2 = $this->input->post('password2');
    if ($pass1 == $pass2) {
      $this->model_user->req();
    }
    redirect('/');
  }
  public function logout(){
    $this->session->sess_destroy();
    redirect('/');
  }
}
