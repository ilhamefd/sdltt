<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	    $this->load->model('SecurityModel');
	    $this->load->helper('tglindo_helper');

		//Do your magic here
	}
	public function index() {
      	$this->SecurityModel->level_admin();

      	$status = $this->session->userdata('jabatan');

		$data=array('title'=>'Home',
					'isi'  =>'adminpages/home/home'
						);
		$data['hadir']	= $this->m_global->get_data_all('kehadiran', null, ['jabatan'=>$status]);
		
		$this->load->view('adminlayout/wrapper',$data);	
	}

	public function update($jabatan){
		$hadir= $this->input->post('tombol');
		date_default_timezone_set('Asia/Jakarta');

		$tgl = tgl_indo(date('Y/m/d'));
		$hari = nama_hari();
		$jam = date('H:i');
		$data = array(
			'status' => $hadir,
			'last_update' => $hari.', '.$tgl.', '.$jam
			);
		$this->m_global->update('kehadiran',$data,['jabatan'=>$jabatan]);
		redirect('Admin_home');		
	}
}