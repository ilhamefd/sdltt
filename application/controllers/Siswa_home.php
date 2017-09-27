<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Siswa_home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	    $this->load->model('SecurityModel');
	   
	}
	public function index() {
      	$this->SecurityModel->SecurAuth();

      	$status = $this->session->userdata('level');

		$data=array('title'=>'Home',
					'isi'  =>'siswapages/home/home'
						);
		$data['login']	= $this->m_global->get_data_all('user', null, ['level'=>$status]);
		
		$this->load->view('siswalayout/wrapper',$data);	
	}

}