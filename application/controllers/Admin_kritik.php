<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_kritik extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	    $this->load->model('SecurityModel');

		//Do your magic here
	}
	public function index() {
      	$this->SecurityModel->level_admin();

		$data=array('title'=>'Home',
					'isi'  =>'adminpages/kritik/index'
						);
		$data['kritik'] = $this->m_global->get_data_all('kritik', null);
		$this->load->view('adminlayout/wrapper',$data);	
	}

	public function baca($id){
		$baca= $this->input->post('baca');
		$data   = array(
			'status' => $baca,
			);
		$this->m_global->update('kritik',$data,['id'=>$id]);
		redirect('admin_kritik');	
	}
}