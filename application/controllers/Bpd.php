<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bpd extends CI_Controller {
	
	public function index() {
		$data=array('title'=>'BPD',
					'isi'  =>'userpages/bpd/bpd'
						);
		$this->load->view('userlayout/wrapper',$data);	
	}
	
}