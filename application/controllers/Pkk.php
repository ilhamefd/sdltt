<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pkk extends CI_Controller {
	
	public function index() {
		$data=array('title'=>'PKK',
					'isi'  =>'userpages/pkk/pkk'
						);
		$data['record']	= $this->m_global->get_data_all('konten', null, ['jenis'=>'pkk']);
		$this->load->view('userlayout/wrapper',$data);	
	}
	
}