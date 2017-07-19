<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bantuan extends CI_Controller {
	
	public function index() {
		$data=array('title'=>'Bantuan',
					'isi'  =>'userpages/bantuan/bantuan'
						);
		$this->load->view('userlayout/wrapper',$data);	
	}
	
}