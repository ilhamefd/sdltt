<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index() {
		$data=array('title'=>'Web Desa.id',
					'isi'  =>'userpages/home/homeuser'
						);
		$this->load->view('userlayout/wrapper',$data);	
	}
}