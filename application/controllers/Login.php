<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{

  public function __construct()
    {
      parent::__construct();
      
      // session_start();
      $this->load->model('m_login');
        
    }

  public function index(){
    $this->load->view('login/login');
  }

  function masuk()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $this->m_login->cek($username, $password);
  }

  function keluar()
  {
    $this->session->sess_destroy();
    redirect('Login');
  }
}