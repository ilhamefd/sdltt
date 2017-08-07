<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Semua_berita extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	    $this->load->helper('tglindo_helper');
        $this->load->helper('text');
		//Do your magic here
	}
	
	public function index() {
		$data=array('title'=>'Semua Berita',
					'isi'  =>'userpages/berita/index'
					);

		$data['record']	= $this->m_global->get_data_all('berita', null);
		
		$this->load->view('userlayout/wrapper', $data);
	}

    public function detail($id) {
        $data=array('title'=>'Detail Berita',
                    'isi'  =>'userpages/berita/detail'
                    );

        $data['record'] = $this->m_global->get_data_all('berita', null,['id' => $id]);
        
        $this->load->view('userlayout/wrapper', $data);
    }

}