<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Karangtaruna extends CI_Controller {
	
	public function index() {
		$data=array('title'=>'Karangtaruna',
					'isi'  =>'userpages/karangtaruna/karangtaruna'
						);
		$data['record']	= $this->m_global->get_data_all('konten', null, ['jenis'=>'karangtaruna']);
		$this->load->view('userlayout/wrapper',$data);	
	}
	
}