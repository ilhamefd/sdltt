<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_slide extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	    $this->load->model('SecurityModel');
	    $this->load->helper(array('form', 'url'));
		//Do your magic here
	}
	
	public function index() {
      	$this->SecurityModel->level_admin();

		$data=array('title'=>'Slide Gambar',
					'isi'  =>'adminpages/slide/index'
						);
		$data['slide'] = $this->m_global->get_data_all('slide_image', null);
		$this->load->view('adminlayout/wrapper',$data);	
	}

	public function edit($id)
	{
      	$this->SecurityModel->level_admin();

		$data=array('title'=>'Edit Slide Gambar',
					'isi'  =>'adminpages/slide/edit'
						);
		$data['editslide'] = $this->m_global->get_data_all('slide_image',null,['id' => $id]);

		$this->load->view('adminlayout/wrapper',$data);	

	}

	public function simpan($img){
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/slide/'; //path folder
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
                  'judul' =>$this->input->post('judul'),                  
                );
                
                $this->m_global->update('slide_image',$data,['id' => $id]); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success fade in\" id=\"alert\">berhasil upload gambar !!</div></div>");
                redirect('admin_slide'); //jika berhasil maka akan ditampilkan view vupload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
                redirect('admin_slide'); //jika gagal maka akan ditampilkan form upload
            }
        }
    }
}