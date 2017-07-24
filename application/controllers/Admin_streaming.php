<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_streaming extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	    $this->load->model('SecurityModel');

		//Do your magic here
	}
	
	public function index() {
      	$this->SecurityModel->level_admin();

		$data=array('title'=>'Live Streaming',
					'isi'  =>'adminpages/streaming/streaming'
						);
		$data['record']	= $this->m_global->get_data_all('video', null, ['jenis'=>'streaming']);
		$this->load->view('adminlayout/wrapper',$data);	
	}

	public function simpan(){
		$streaming = $this->input->post('streaming');

		$data = array(
			'link' => $streaming,
			
			);
		$this->m_global->update('video',$data,['jenis'=>"streaming"]);
		redirect('admin_streaming/index');
	}
}