<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lapor extends CI_Controller {
	
	public function index() {
		$data=array('title'=>'Lapor',
					'isi'  =>'userpages/lapor/lapor'
						);
		$this->load->view('userlayout/wrapper',$data);	
	}

	public function laporkan(){
		$nik	= $this->input->post('nik');
		$nama	= $this->input->post('nama');
		$alamat	= $this->input->post('alamat');
		$lokasi	= $this->input->post('lokasi');
		// $foto	= $this->input->post('foto');

		$data = array(
			'nik'	=> $nik,
			'nama'	=> $nama,
			'alamat'=> $alamat,
			'lokasi'=> $lokasi
			);

		$this->m_global->insert('lapor',$data);
		redirect('lapor/index');
	}
	
	
}