<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lpmd extends CI_Controller {
	
	public function index() {
		$data=array('title'=>'LPMD',
					'isi'  =>'userpages/lpmd/lpmd'
						);
		$data['record']	= $this->m_global->get_data_all('konten', null, ['jenis'=>'lpmd']);
		$this->load->view('userlayout/wrapper',$data);	
	}
	
}