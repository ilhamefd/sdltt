<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tenaga extends CI_Controller {
	
	public function index() {
		$data=array('title'=>'Tenaga Pendidik',
					'isi'  =>'userpages/tenaga/index'
						);
		$data['record']	= $this->m_global->get_data_all('pendidik',null,null);
		$this->load->view('userlayout/wrapper',$data);	
	}
	
}