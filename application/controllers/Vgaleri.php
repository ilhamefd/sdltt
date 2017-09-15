<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vgaleri extends CI_Controller {
	
	public function index() {
		$data=array('title'=>'Galeri Video',
					'isi'  =>'userpages/gvideo/index'
						);
		//$data['record']	= $this->m_global->get_data_all('gvideo', null, null);
		$data['record']=$this->m_global->get_data_all('gvideo', NULL, NULL, '*', NULL,['id', 'desc']);
		$this->load->view('userlayout/wrapper',$data);	
	}
	
}