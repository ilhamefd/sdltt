<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_berita extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	    $this->load->model('SecurityModel');

		//Do your magic here
	}
	
	public function index() {
      	$this->SecurityModel->level_admin();

		$data=array('title'=>'Manajemen Berita',
					'isi'  =>'adminpages/berita/index'
					);

		$data['record']	= $this->m_global->get_data_all('berita', null);
		
		$this->load->view('adminlayout/wrapper', $data);
	}

	public function edit(){
		$isi = $this->input->post('isi');

		$data = array(
			'isi' => $isi,
			
			);
		$this->m_global->update('berita',$data,['jenis'=>"karangtaruna"]);
		redirect('Admin_karangtaruna/index');
	}
}