<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		//Do your magic here
	}

	public function index()
	{
      	$this->SecurityModel->level_admin();

		$data=array('title'=>'Pengguna',
					'isi'  =>'adminpages/pengguna/index'
						);
		$data['pengguna'] = $this->m_global->get_data_all('user', null);

		$this->load->view('adminlayout/wrapper',$data);	
	}

	public function add()
	{
      	$this->SecurityModel->level_admin();

		$data=array('title'=>'Tambah Pengguna',
					'isi'  =>'adminpages/pengguna/add'
						);
		$this->load->view('adminlayout/wrapper',$data);	

	}

}

/* End of file Pengguna.php */
/* Location: ./application/controllers/Pengguna.php */