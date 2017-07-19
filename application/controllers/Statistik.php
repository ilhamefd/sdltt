<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Statistik extends CI_Controller {
	
	public function index() {
		$data=array('title'=>'Statistik Penduduk',
					'isi'  =>'userpages/statistik/statistik'
						);
		$this->load->view('userlayout/wrapper',$data);	
	}
	
}