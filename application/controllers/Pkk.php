<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pkk extends CI_Controller {
	
	public function index() {
		$data=array('title'=>'PKK',
					'isi'  =>'userpages/pkk/pkk'
						);
		$this->load->view('userlayout/wrapper',$data);	
	}
	
}