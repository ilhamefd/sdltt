<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_berita extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	    $this->load->model('SecurityModel');
	    $this->load->helper('tglindo_helper');
	    $this->load->helper(array('form', 'url'));
		//Do your magic here
	}
	
	public function index() {
      	$this->SecurityModel->level_admin();
		$data=array('title'=>'Manajemen Berita',
					'isi'  =>'adminpages/berita/index'
					);

		$data['record']	= $this->m_global->get_data_all('berita', null);
		
		$this->load->view('adminlayout/wrapper', $data);
	}

	public function show_add(){
		$this->SecurityModel->level_admin();

		$data=array('title'=>'Manajemen Berita',
					'isi'  =>'adminpages/berita/add'
					);

		$data['record']	= $this->m_global->get_data_all('berita', null);
		
		$this->load->view('adminlayout/wrapper', $data);
	}

	public function action_add(){
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/berita/'; //path folder
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
            	date_default_timezone_set('Asia/Jakarta');
                $tgl = tgl_indo(date('Y/m/d'));
                $gbr = $this->upload->data();
                $data = array(
                  'gambar' =>$gbr['file_name'],
                  'judul' =>$this->input->post('judul'),
                  'penulis'=>$this->input->post('penulis'),
                  'isi'=>$this->input->post('isi'),
                  'tgl'=>$tgl,                 
                );

                $this->m_global->insert('berita',$data); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success fade in\" id=\"alert\">Berita Berhasil di Upload !!</div></div>");
                redirect('admin_berita'); //jika berhasil maka akan ditampilkan view vupload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Berita Gagal di Upload !!</div></div>");
                redirect('admin_berita/index'); //jika gagal maka akan ditampilkan form upload
            }
        }
    }

    public function show_edit($id)
	{
      	$this->SecurityModel->level_admin();

		$data=array('title'=>'Edit Berita',
					'isi'  =>'adminpages/berita/edit'
						);
		$data['berita'] = $this->m_global->get_data_all('berita',null,['id' => $id]);

		$this->load->view('adminlayout/wrapper',$data);	

	}

	public function action_edit($id){
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/berita/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '2048'; //maksimum besar file 2M
        $config['max_width']  = '1288'; //lebar maksimum 1288 px
        $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->overwrite = true;
        $this->upload->initialize($config);

        if($_FILES['img']['name'])
        {
            if ($this->upload->do_upload('img'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  'gambar' =>$gbr['file_name'],
                  'judul' =>$this->input->post('judul'),
                  'penulis' =>$this->input->post('penulis'),
                  'isi' =>$this->input->post('isi')                  
                );
                
                $this->m_global->update('berita',$data,['id'=>$id]); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success fade in\" id=\"alert\">Perubahan berita berhasil disimpan !!</div></div>");
                redirect('admin_berita'); //jika berhasil maka akan ditampilkan view vupload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal mengubah berita !!</div></div>");
                redirect('admin_berita'); //jika gagal maka akan ditampilkan form upload
            }
        }
    }

	public function delete()
	{
		$id=$this->input->post('id');
		$this->m_global->delete('berita',['id'=>$id]);
        // $this->session->set_flashdata("pesan", "<center><div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Berita berhasil dihapus !!</div></div><center>");
		redirect('admin_berita');

	}
}