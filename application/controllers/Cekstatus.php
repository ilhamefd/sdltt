<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cekstatus extends CI_Controller {
	
	public function index() {
		$data=array('title'=>'Cek Status Pengajuan',
					'isi'  =>'userpages/cekstatus/cekstatus'
						);
		$data['pengajuan'] = $this->m_global->get_data_all('pengajuan', null);
		$this->load->view('userlayout/wrapper',$data);	
	}
	
}