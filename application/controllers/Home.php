<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('tglindo_helper');
	}
	public function index() {
		$data=array('title'=>'SD Lestari Tani Teladan',
					'isi'  =>'userpages/home/homeuser'
						);
		//$data['hadir']=$this->m_global->get_data_all('kehadiran');
		$data['slide']=$this->m_global->get_data_all('slide_image');
		$data['video']=$this->m_global->get_data_all('video');
		$data['berita']=$this->m_global->get_data_all('berita', NULL, NULL, '*', NULL,['id', 'desc'],'0','4');

		$this->load->view('userlayout/wrapper',$data);
	}
}