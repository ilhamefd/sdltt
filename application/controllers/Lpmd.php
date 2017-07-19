<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lpmd extends CI_Controller {
	
	public function index() {
		$data=array('title'=>'LPMD',
					'isi'  =>'userpages/lpmd/lpmd'
						);
		$this->load->view('userlayout/wrapper',$data);	
	}
	
}