<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_struktur_organisasi extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	    $this->load->model('SecurityModel');

		//Do your magic here
	}
	
	public function index() {
      	$this->SecurityModel->level_admin();

		$data=array('title'=>'Update Konten Struktur Organisasi',
					'isi'  =>'adminpages/profil_sekolah/struktur_organisasi/edit'
					);

		$data['record']	= $this->m_global->get_data_all('konten', null, ['jenis'=>'struktur_organisasi']);
		
		$this->load->view('adminlayout/wrapper', $data);
	}

	public function simpan(){
		$isi = $this->input->post('isi');

		$data = array(
			'isi' => $isi,
			
			);
		$this->m_global->update('konten',$data,['jenis'=>"struktur organisasi"]);
		redirect('Admin_struktur_organisasi/index');
	}
}