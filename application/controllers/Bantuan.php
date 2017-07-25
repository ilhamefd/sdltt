<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bantuan extends CI_Controller {
	
	public function index() {
		$data=array('title'=>'Bantuan',
					'isi'  =>'userpages/bantuan/bantuan'
						);
		$data['record']	= $this->m_global->get_data_all('konten', null, ['jenis'=>'bantuan']);
		$this->load->view('userlayout/wrapper',$data);	
	}
	
}