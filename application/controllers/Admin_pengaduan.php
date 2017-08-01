<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_pengaduan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	    $this->load->model('SecurityModel');

		//Do your magic here
	}
	public function index() {
      	$this->SecurityModel->level_admin();

		$data=array('title'=>'Home',
					'isi'  =>'adminpages/pengaduan/index'
						);
		$data['pengaduan'] = $this->m_global->get_data_all('lapor', null);
		$this->load->view('adminlayout/wrapper',$data);	
	}

	public function baca(){
		
	}
}