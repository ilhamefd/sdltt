<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Struktur_organisasi extends CI_Controller {
	
	public function index() {
		$data=array('title'=>'Struktur Organisasi',
					'isi'  =>'userpages/struktur_organisasi/struktur_organisasi'
						);
		$data['record']	= $this->m_global->get_data_all('konten', null, ['jenis'=>'struktur_organisasi']);
		$this->load->view('userlayout/wrapper',$data);	
	}
	
}