<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_video extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	    $this->load->model('SecurityModel');

		//Do your magic here
	}
	
	public function index() {
      	$this->SecurityModel->level_admin();

		$data=array('title'=>'Video',
					'isi'  =>'adminpages/video/video'
					);

		$data['record']	= $this->m_global->get_data_all('video', null, ['jenis'=>'video']);
		
		$this->load->view('adminlayout/wrapper', $data);
	}

	public function simpan(){
		$video = $this->input->post('video');

		$data = array(
			'link' => $video,
			
			);
		$this->m_global->update('video',$data,['jenis'=>"video"]);
		redirect('admin_video/index');
	}
}