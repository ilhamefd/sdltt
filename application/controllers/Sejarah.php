<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sejarah extends CI_Controller {
	
	public function index() {
		$data=array('title'=>'Sejarah Desa',
					'isi'  =>'userpages/sejarah/sejarah'
						);
		$data['record']	= $this->m_global->get_data_all('konten', null, ['jenis'=>'sejarah']);
		$this->load->view('userlayout/wrapper',$data);	
	}
	
}