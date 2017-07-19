<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lapor extends CI_Controller {
	
	public function index() {
		$data=array('title'=>'Lapor',
					'isi'  =>'userpages/lapor/lapor'
						);
		$this->load->view('userlayout/wrapper',$data);	
	}
	
}