<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_pengajuan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	    $this->load->model('SecurityModel');

		//Do your magic here
	}
	public function index() {
      	$this->SecurityModel->level_admin();

		$data=array('title'=>'Home',
					'isi'  =>'adminpages/pengajuan/index'
						);
		$data['pengajuan'] = $this->m_global->get_data_all('pengajuan');
		$this->load->view('adminlayout/wrapper',$data);	
	}

	public function baca($id){
		// $id=$this->input->post('id');
		$baca= $this->input->post('baca');
		$data   = array(
			'status' => $baca,
			);
		$this->m_global->update('pengajuan',$data,['id'=>$id]);
		// echo "<pre>";
		// print_r ($id);
		// echo "</pre>";

		redirect('admin_pengajuan');	
	}

	public function detail($id){
		$data=array('title'=>'Detail Surat Permohonan',
					'isi'  =>'adminpages/pengajuan/detail'
						);		
		$data['detail']=$this->m_global->get_data_all('pengajuan',null,['id'=>$id]);
		$data['jenis']=$this->m_global->get_data_all('jenis_surat',null);
		// echo "<pre>";
		// print_r ($data);
		// echo "</pre>";
		$this->load->view('adminlayout/wrapper',$data);	

	}

}