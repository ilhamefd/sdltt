<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	    $this->load->model('SecurityModel');

		//Do your magic here
	}
	public function index() {
      	$this->SecurityModel->level_admin();

		$data=array('title'=>'Home',
					'isi'  =>'adminpages/home/home'
						);
		$this->load->view('adminlayout/wrapper',$data);	
	}
}