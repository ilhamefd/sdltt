<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	


	// public function index() {
	// 	$this->load->view('login/login');
	// }



class Login extends CI_Controller{

  public function __construct()
    {
      parent::__construct();
      
      // session_start();
      $this->load->model('m_login');
      $this->load->model('SecurityModel');
        
    }

  public function index(){
    $this->load->view('login/login');
  }

  function masuk()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $this->m_login->cek($username, $password);

    // if($cek->num_rows() == 1)
    // {
    //   foreach($cek->result() as $data){
    //     $sess_data['id'] = $data->id;
    //     $sess_data['username'] = $data->username;
    //     $sess_data['level'] = $data->level;
    //     $this->session->set_userdata($sess_data);
    //   }

    //   if($this->session->userdata('level') == 'admin')
    //   {
    //     redirect('admin_home');
    //   }
    //   elseif($this->session->userdata('level') == 'user')
    //   {
    //     redirect('user');
    //   }
    // }
    // else
    // {
    //   $this->session->set_flashdata('pesan', 'Maaf, kombinasi username dengan password salah.');
    //   redirect('index');
    // }
  }

  function keluar()
  {
    $this->session->sess_destroy();
    redirect('Login');
  }
}