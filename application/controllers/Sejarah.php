<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sejarah extends CI_Controller {
	
	public function index() {
		$data=array('title'=>'Sejarah Desa',
					'isi'  =>'userpages/sejarah/sejarah'
						);
		$this->load->view('userlayout/wrapper',$data);	
	}
	
}