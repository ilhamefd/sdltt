<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_kegiatan_video extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	    $this->load->model('SecurityModel');

		//Do your magic here
	}
	
	public function index() {
      	$this->SecurityModel->level_admin();

		$data=array('title'=>'Video Kegiatan Siswa',
					'isi'  =>'adminpages/kegiatan/video/index'
					);

		//$data['record']	= $this->m_global->get_data_all('gvideo', null, null);
		$data['record']=$this->m_global->get_data_all('gvideo', NULL, NULL, '*', NULL,['id', 'desc']);
		$this->load->view('adminlayout/wrapper', $data);
	}

	public function show_add(){
		$this->SecurityModel->level_admin();

		$data=array('title'=>'Tambah Video Kegiatan Siswa',
					'isi'  =>'adminpages/kegiatan/video/add'
					);

		$data['record']	= $this->m_global->get_data_all('gvideo', null);
		
		$this->load->view('adminlayout/wrapper', $data);
	}

	public function action_add(){
        $data = array(
           'judul' =>$this->input->post('judul'),
           'link' =>$this->input->post('link'),
           'deskripsi' =>$this->input->post('deskripsi')
        );
                
        $edt=$this->m_global->insert('gvideo',$data); //akses model untuk menyimpan ke database
        if($edt){
            //pesan yang muncul jika berhasil diupload pada session flashdata
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success fade in\" id=\"alert\">Video berhasil disimpan !!</div></div>");
                redirect('admin_kegiatan_video'); //jika berhasil maka akan ditampilkan view vupload
        }else{
            //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal menyimpan video !!</div></div>");
                redirect('admin_kegiatan_video'); //jika gagal maka akan ditampilkan form upload
        }
    }

	public function show_edit($id)
	{
      	$this->SecurityModel->level_admin();

		$data=array('title'=>'Edit Video Kegiatan Siswa',
					'isi'  =>'adminpages/kegiatan/video/edit'
						);
		$data['record'] = $this->m_global->get_data_all('gvideo',null,['id' => $id]);

		$this->load->view('adminlayout/wrapper',$data);	

	}

	public function action_edit($id){
        $data = array(
           'judul' =>$this->input->post('judul'),
           'link' =>$this->input->post('link'),
           'deskripsi' =>$this->input->post('deskripsi')
        );
                
        $edt=$this->m_global->update('gvideo',$data,['id'=>$id]); //akses model untuk menyimpan ke database
        if($edt){
            //pesan yang muncul jika berhasil diupload pada session flashdata
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success fade in\" id=\"alert\">Perubahan video berhasil disimpan !!</div></div>");
                redirect('admin_kegiatan_video'); //jika berhasil maka akan ditampilkan view vupload
        }else{
            //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal mengubah video !!</div></div>");
                redirect('admin_kegiatan_video'); //jika gagal maka akan ditampilkan form upload
        }
    }
    
	public function delete()
	{
		$id=$this->input->post('id');
		$this->m_global->delete('gvideo',['id'=>$id]);
        // $this->session->set_flashdata("pesan", "<center><div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Berita berhasil dihapus !!</div></div><center>");
		redirect('Admin_kegiatan_video');

	}
}