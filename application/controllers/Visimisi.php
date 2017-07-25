<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Visimisi extends CI_Controller {
	
	public function index() {
		$data=array('title'=>'Visi dan Misi',
					'isi'  =>'userpages/visimisi/visimisi'
						);
		$data['record']	= $this->m_global->get_data_all('konten', null, ['jenis'=>'visi_misi']);
		$this->load->view('userlayout/wrapper',$data);	
	}
	
}