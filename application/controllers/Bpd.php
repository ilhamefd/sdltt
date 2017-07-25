<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bpd extends CI_Controller {
	
	public function index() {
		$data=array('title'=>'BPD',
					'isi'  =>'userpages/bpd/bpd'
						);
		$data['record']	= $this->m_global->get_data_all('konten', null, ['jenis'=>'bpd']);
		$this->load->view('userlayout/wrapper',$data);	
	}
	
}