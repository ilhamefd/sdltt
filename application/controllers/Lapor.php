<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lapor extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	public function index() {
		$data=array('title'=>'Lapor',
					'isi'  =>'userpages/lapor/lapor'
						);
		$this->load->view('userlayout/wrapper',$data);	
	}

	
	 public function laporkan(){
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/lapor/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '2048'; //maksimum besar file 2M
        $config['max_width']  = '1288'; //lebar maksimum 1288 px
        $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);
        
        if($_FILES['img']['name'])
        {
            if ($this->upload->do_upload('img'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  'nm_gbr' =>$gbr['file_name'],
                  'tipe_gbr' =>$gbr['file_type'],
                  'nik' =>$this->input->post('nik'),
                  'nama'=>$this->input->post('nama'),
                  'alamat'=>$this->input->post('alamat'),
                  'keterangan'=>$this->input->post('keterangan'),
                  
                );

                $this->m_global->insert('lapor',$data); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success fade in\" id=\"alert\">Laporan Berhasil Dikirim !!</div></div>");
                redirect('lapor'); //jika berhasil maka akan ditampilkan view vupload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Laporan Gagal Dikirim !!</div></div>");
                redirect('lapor'); //jika gagal maka akan ditampilkan form upload
            }
        }
    }
}