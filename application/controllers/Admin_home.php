<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	    $this->load->model('SecurityModel');
	   

		//Do your magic here
	}
	public function index() {
      	$this->SecurityModel->level_admin();

      	$status = $this->session->userdata('level');

		$data=array('title'=>'Home',
					'isi'  =>'adminpages/home/home'
						);
		$data['login']	= $this->m_global->get_data_all('user', null, ['level'=>$status]);
		
		$this->load->view('adminlayout/wrapper',$data);	
	}

}