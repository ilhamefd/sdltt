<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Visimisi extends CI_Controller {
	
	public function index() {
		$data=array('title'=>'Visi dan Misi',
					'isi'  =>'userpages/visimisi/visimisi'
						);
		$this->load->view('userlayout/wrapper',$data);	
	}
	
}