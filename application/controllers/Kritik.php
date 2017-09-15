<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kritik extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	public function index() {
		$data=array('title'=>'Lapor',
					'isi'  =>'userpages/kritik/kritik'
						);
		$this->load->view('userlayout/wrapper',$data);	
	}

	
public function ajukan(){
      $data = array(
        'nama'=>$this->input->post('nama'),
        'alamat'=>$this->input->post('alamat'),
        'kritik'=>$this->input->post('kritik'),
        'status' => '1'
        
      );

      $ket = $this->m_global->insert('kritik',$data); //akses model untuk menyimpan ke database
      if ($ket) {
            //pesan yang muncul jika berhasil diupload pada session flashdata
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success fade in\" id=\"alert\">Kritik & saran Berhasil Dikirim !!</div></div>");
            redirect('kritik'); //jika berhasil maka akan ditampilkan view vupload
        }
      else{
            //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Kritik & saran Gagal Dikirim !!</div></div>");
            redirect('kritik'); //jika gagal maka akan ditampilkan form upload
        }
      }
}