<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Statistik extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		//Do your magic here
	}

	public function index()
	{
      	$this->SecurityModel->level_admin();

		$data=array('title'=>'Statistik Siswa',
					'isi'  =>'adminpages/statistik/index'
						);
		$data['siswa'] = $this->m_global->get_data_all('siswa', null);
		$data['kelas'] = $this->m_global->get_data_all('kelas', null);

		$this->load->view('adminlayout/wrapper',$data);	
	}

	public function add()
	{
      	$this->SecurityModel->level_admin();

		$data=array('title'=>'Tambah Kelas',
					'isi'  =>'adminpages/statistik/add'
						);
		$this->load->view('adminlayout/wrapper',$data);	

	}

	public function edit_jenis($id)
	{
      	$this->SecurityModel->level_admin();

		$data=array('title'=>'Edit Siswa',
					'isi'  =>'adminpages/statistik/edit_jenis'
						);
		$data['siswa'] = $this->m_global->get_data_all('siswa',null,['id' => $id]);

		$this->load->view('adminlayout/wrapper',$data);	

	}
	public function edit_kelas($id)
	{
      	$this->SecurityModel->level_admin();

		$data=array('title'=>'Edit Kelas',
					'isi'  =>'adminpages/statistik/edit_kelas'
						);
		$data['kelas'] = $this->m_global->get_data_all('kelas',null,['id' => $id]);

		$this->load->view('adminlayout/wrapper',$data);	

	}

	public function act_add()
	{
		$result = [];
		$post 	= $this->input->post();

		$this->form_validation->set_rules('kelas', 'Kelas', 'trim|required');
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'trim|required');
		
		if ($this->form_validation->run() == true){
			$menu_data 	= [
						'nm_kls' 			=> $post['kelas'],
						'jml'			    =>$post['jumlah']
					  ];
			$x = $this->m_global->get_data_all('kelas',null,['nm_kls' => $menu_data['nm_kls']]);
			if($x) {			
					$result['msg'] = 'Kelas sudah ada !';
					$result['sts'] = '0';
				}
				else{
					$role = $this->m_global->insert('kelas', $menu_data);

					if($role) {
						$result['msg'] = 'Data Kelas berhasil ditambahkan !';
						$result['sts'] = '1';
						redirect('Admin_Statistik');
					} else {
						$result['msg'] = 'Data Kelas gagal ditambahkan !';
						$result['sts'] = '0';
					}
				}
		} else {
			$result['msg'] = validation_errors();
			$result['sts'] = '0';
		}

		echo json_encode($result);

	}

	public function simpan($id){
		// $jenis = $this->input->post('jenis');
		$jumlah = $this->input->post('jumlah');

		$data = array(
			'jml' 	=> $jumlah,
			
			);
		$this->m_global->update('siswa',$data,['id'=>$id]);
		redirect('Admin_Statistik');
	}

	public function act_edit($id)
	{
		$result = [];
		$post 	= $this->input->post();

		$this->form_validation->set_rules('kelas', 'kelas', 'trim|required');
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'trim|required');
		
		if ($this->form_validation->run() == true){
			$menu_data 	= [
						'nm_kls' 			=> $post['kelas'],
						'jml'				=> $post['jumlah']
					  ];

			$x = $this->m_global->get_data_all('kelas',null,['nm_kls' => $menu_data['nm_kls']]);
			if($x) {
				if($x[0]->id !== $id) {
					$result['msg'] = 'Kelas Sudah Ada !';
					$result['sts'] = '0';
				} else {
					$role = $this->m_global->update('kelas', $menu_data, ['id' => $id]);

					if($role) {
						$result['msg'] = 'Data Kelas berhasil dirubah !';
						$result['sts'] = '1';
						redirect('Admin_Statistik');
					} else {
						$result['msg'] = 'Data Kelas gagal dirubah !';
						$result['sts'] = '0';
					}
				}
			}
			
			else{
					$role = $this->m_global->update('kelas', $menu_data, ['id' => $id]);

					if($role) {
						$result['msg'] = 'Data Kelas berhasil dirubah !';
						$result['sts'] = '1';
						redirect('Admin_Statistik');
					} else {
						$result['msg'] = 'Data Kelas gagal dirubah !';
						$result['sts'] = '0';
					}
				}
		} else {
			$result['msg'] = validation_errors();
			$result['sts'] = '0';
		}

		echo json_encode($result);

	}

	public function del()
	{
		$id=$this->input->post('id');
		$this->m_global->delete('kelas', ['id' => $id]);
		redirect('Admin_Statistik');

	}

}

/* End of file Pengguna.php */
/* Location: ./application/controllers/Pengguna.php */