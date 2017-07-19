<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cekstatus extends CI_Controller {
	
	public function index() {
		$data=array('title'=>'Cek Status Pengajuan',
					'isi'  =>'userpages/cekstatus/cekstatus'
						);
		$this->load->view('userlayout/wrapper',$data);	
	}
	
}