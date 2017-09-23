<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	public function index()
	{
		$data=array('title'=>'Galeri Kegiatan Siswa',
					'isi'  =>'userpages/galeri/index'
					);

		$data['data']	= $this->m_global->get_data_all('gimage', null, null, '*', null, ['id', 'desc']);
		// echo "<pre>";
		// print_r ($data);
		// echo "</pre>";
		$this->load->view('userlayout/wrapper', $data);
	}

}

/* End of file Galeri.php */
/* Location: ./application/controllers/Galeri.php */