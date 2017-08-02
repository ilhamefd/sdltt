<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengajuan_surat extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
         $this->load->helper('tglindo_helper');
    }
	public function index() {
		$data=array('title'=>'Pengajuan Surat',
					'isi'  =>'userpages/pengajuan_surat/pengajuan_surat'
						);
		$data['jenis']	= $this->m_global->get_data_all('jenis_surat', null);
		$this->load->view('userlayout/wrapper',$data);	
	}
	
	 public function ajukan(){
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/pengajuan/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '2048'; //maksimum besar file 2M
        $config['max_width']  = '1288'; //lebar maksimum 1288 px
        $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);
        
        if($_FILES['img1']['name'])
        {
            if ($this->upload->do_upload('img1'))
            {
                date_default_timezone_set('Asia/Jakarta');
                $tgl = tgl_indo(date('Y/m/d'));
                $jam = date('H:i');
                $gbr = $this->upload->data();
                $data = array(
                  'lampiran1' =>$gbr['file_name'],
                  'nik' =>$this->input->post('nik'),
                  'nama'=>$this->input->post('nama'),
                  'nohp'=>$this->input->post('nohp'),
                  'jenis'=>$this->input->post('jenis'),
                  'keperluan'=>$this->input->post('keperluan'),
                  'status' => '1',
                  'tgl' => $tgl.', '.$jam
                  
                );

                $this->m_global->insert('pengajuan',$data); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success fade in\" id=\"alert\">Pengajuan berhasil !! silakan cek prosesnya pada menu Layanan Masyarakat -> Cek Status Pengajuan</div></div>");
                redirect('pengajuan_surat'); //jika berhasil maka akan ditampilkan view vupload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Laporan Gagal Dikirim !!</div></div>");
                redirect('pengajuan_surat'); //jika gagal maka akan ditampilkan form upload
            }
        }
    }
}