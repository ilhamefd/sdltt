<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Perangkat_desa extends CI_Controller {
	
	public function index() {
		$data=array('title'=>'Jajaran Perangkat Desa',
					'isi'  =>'userpages/perangkat_desa/perangkat_desa'
						);
		$data['record']	= $this->m_global->get_data_all('konten', null, ['jenis'=>'jajaran_perangkat']);
		$this->load->view('userlayout/wrapper',$data);	
	}
	
}