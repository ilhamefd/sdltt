<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengajuan_surat extends CI_Controller {
	
	public function index() {
		$data=array('title'=>'Pengajuan Surat',
					'isi'  =>'userpages/pengajuan_surat/pengajuan_surat'
						);
		$this->load->view('userlayout/wrapper',$data);	
	}
	
}