<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Siswa_galeri extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	    $this->load->model('SecurityModel');
	    $this->load->helper('tglindo_helper');
	    $this->load->helper(array('form','url'));
      $this->SecurityModel->SecurAuth();
	}
	
	public function index() {

		$data=array('title'=>'Galeri Kegiatan Siswa',
					'isi'  =>'siswapages/kegiatan/galeri/index'
					);

		$data['galeri']	= $this->m_global->get_data_all('gimage', null, null, '*', null, ['id', 'desc']);
		$this->load->view('siswalayout/wrapper', $data);
	}

	public function tambah()
	{
      	
		$data=array('title'=>'Tambah Galeri Kegiatan Siswa',
					'isi'  =>'siswapages/kegiatan/galeri/add'
					);

		$data['record']	= $this->m_global->get_data_all('konten', null, ['jenis'=>'bpd']);
		
		$this->load->view('siswalayout/wrapper', $data);

	}

	public function act_add(){

		$post 	= $this->input->post();

        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/galeri/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '2048'; //maksimum besar file 2M
        $config['max_width']  = '3000'; //lebar maksimum 1288 px
        $config['max_height']  = '1500'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

		date_default_timezone_set('Asia/Jakarta');

		$tgl = tgl_indo(date('Y/m/d'));
		$hari = nama_hari();
		$jam = date('H:i');

     
        $this->upload->initialize($config);
        
        if($_FILES['img']['name'])
        {
            if ($this->upload->do_upload('img'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  'img' =>$gbr['file_name'],
                  'judul' =>$this->input->post('judul'),
                  'deskripsi'=>$this->input->post('deskripsi'),
                  'tanggal' => $hari.', '.$tgl.', '.$jam
                );

                $this->m_global->insert('gimage',$data); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success fade in\" id=\"alert\">Data Galeri Berhasil Dikirim !!</div></div>");
                redirect('siswa_galeri'); //jika berhasil maka akan ditampilkan view vupload
            }else{
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data Galeri Gagal Dikirim !!</div></div>");
                redirect('siswa_galeri'); //jika gagal maka akan ditampilkan form upload
            }
        }

        else
        {
	        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data Tidak Tersimpan karena <b>Gambar Tidak Ada !!</b></div></div>");
            redirect('siswa_galeri/tambah');
        }
    }

  public function del()
  {
    $id=$this->input->post('id');
    $this->m_global->delete('gimage', ['id' => $id]);

    redirect('siswa_galeri');
  }

  public function edit($id)
  {
        

    $data=array(
          'title'=>'Edit Data Galeri',
          'isi'  =>'siswapages/kegiatan/galeri/edit'
            );
    $data['galeri'] = $this->m_global->get_data_all('gimage',null,['id' => $id]);
    $this->load->view('siswalayout/wrapper',$data); 

  }

  public function act_edit($id){
        $this->load->library('upload');
        $nmfile = "file_".time(); 
        $config['upload_path'] = './assets/galeri/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['max_size'] = '2048'; 
        $config['max_width']  = '1288';
        $config['max_height']  = '768';
        $config['file_name'] = $nmfile;

        $this->upload->overwrite = true;
        $this->upload->initialize($config);

        date_default_timezone_set('Asia/Jakarta');

        $tgl = tgl_indo(date('Y/m/d'));
        $hari = nama_hari();
        $jam = date('H:i');



        if($_FILES['img']['name'])
        {
            if ($this->upload->do_upload('img'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  'img' =>$gbr['file_name'],
                  'judul' =>$this->input->post('judul'),
                  'deskripsi'=>$this->input->post('deskripsi'),
                  'tanggal' => $hari.', '.$tgl.', '.$jam
                );
                
                $this->m_global->update('gimage',$data,['id'=>$id]); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success fade in\" id=\"alert\">Perubahan data galeri berhasil disimpan !!</div></div>");
                redirect('siswa_galeri'); //jika berhasil maka akan ditampilkan view vupload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal mengubah data galeri !!</div></div>");
                redirect('siswa_galeri'); //jika gagal maka akan ditampilkan form upload
            }
        }
        else{
               $data = array(
                  'judul' =>$this->input->post('judul'),
                  'deskripsi'=>$this->input->post('deskripsi'),
                  'tanggal' => $hari.', '.$tgl.', '.$jam
                );
                
                $this->m_global->update('gimage',$data,['id'=>$id]); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success fade in\" id=\"alert\">Perubahan data galeri berhasil disimpan !!</div></div>");

                redirect('siswa_galeri');

        }
    }


}