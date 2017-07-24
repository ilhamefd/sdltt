<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_jajaran_perangkat extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	    $this->load->model('SecurityModel');

		//Do your magic here
	}
	
	public function index() {
      	$this->SecurityModel->level_admin();

		$data=array('title'=>'Update Konten Jajaran Perangkat Desa',
					'isi'  =>'adminpages/profil_desa/jajaran_perangkat/edit'
					);

		$data['record']	= $this->m_global->get_data_all('konten', null, ['jenis'=>'jajaran_perangkat']);
		
		$this->load->view('adminlayout/wrapper', $data);
	}

	public function simpan(){
		$isi = $this->input->post('isi');

		$data = array(
			'isi' => $isi,
			
			);
		$this->m_global->update('konten',$data,['jenis'=>"jajaran_perangkat"]);
		redirect('Admin_jajaran_perangkat/index');
	}
}