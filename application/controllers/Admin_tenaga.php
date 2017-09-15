<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_tenaga extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
        $this->load->model('SecurityModel');
		$this->load->helper(array('form', 'url'));
	}

	public function index() {
    $this->SecurityModel->level_admin();
    $status = $this->session->userdata('level');

		$data=array('title'=>'Data Tenaga Pendidik',
					'isi'  =>'adminpages/tenaga/index'
						);
    $data['record'] = $this->m_global->get_data_all('pendidik',null,null);
		$this->load->view('adminlayout/wrapper',$data);	
	}

    public function show_add(){
        $this->SecurityModel->level_admin();

        $data=array('title'=>'Tambah Data Tenaga Pendidik',
                    'isi'  =>'adminpages/tenaga/add'
                    );

        $data['record'] = $this->m_global->get_data_all('pendidik', null);
        
        $this->load->view('adminlayout/wrapper', $data);
    }

	public function action_add(){
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/tenaga/'; //path folder
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
                  'foto' =>$gbr['file_name'],
                  'kode' =>$this->input->post('kode'),
                  'nama'=>$this->input->post('nama'),
                  'jk'=>$this->input->post('jk'),
                  'jabatan'=>$this->input->post('jabatan'),
                );

                $this->m_global->insert('pendidik',$data); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success fade in\" id=\"alert\">Data Berhasil Ditambahkan !!</div></div>");
                redirect('admin_tenaga'); //jika berhasil maka akan ditampilkan view vupload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data Gagal Ditambahkan !!</div></div>");
                redirect('admin_tenaga'); //jika gagal maka akan ditampilkan form upload
            }
        }
    }

    public function delete()
    {
        $id=$this->input->post('id');
        $this->m_global->delete('pendidik',['id'=>$id]);
        // $this->session->set_flashdata("pesan", "<center><div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Berita berhasil dihapus !!</div></div><center>");
        redirect('admin_tenaga');

    }
}