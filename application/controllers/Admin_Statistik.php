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

		$data=array('title'=>'Statistik Penduduk',
					'isi'  =>'adminpages/statistik/index'
						);
		$data['penduduk'] = $this->m_global->get_data_all('penduduk', null);
		$data['pekerjaan'] = $this->m_global->get_data_all('pekerjaan', null);

		$this->load->view('adminlayout/wrapper',$data);	
	}

	public function add()
	{
      	$this->SecurityModel->level_admin();

		$data=array('title'=>'Tambah Pekerjaan',
					'isi'  =>'adminpages/statistik/add'
						);
		$this->load->view('adminlayout/wrapper',$data);	

	}

	public function edit_jenis($id)
	{
      	$this->SecurityModel->level_admin();

		$data=array('title'=>'Edit Jenis Penduduk',
					'isi'  =>'adminpages/statistik/edit_jenis'
						);
		$data['penduduk'] = $this->m_global->get_data_all('penduduk',null,['id' => $id]);

		$this->load->view('adminlayout/wrapper',$data);	

	}
	public function edit_pekerjaan($id)
	{
      	$this->SecurityModel->level_admin();

		$data=array('title'=>'Edit Pekerjaan Penduduk',
					'isi'  =>'adminpages/statistik/edit_pekerjaan'
						);
		$data['pekerjaan'] = $this->m_global->get_data_all('pekerjaan',null,['id' => $id]);

		$this->load->view('adminlayout/wrapper',$data);	

	}

	public function act_add()
	{
		$result = [];
		$post 	= $this->input->post();

		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'trim|required');
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'trim|required');
		
		if ($this->form_validation->run() == true){
			$menu_data 	= [
						'nm_pk' 			=> $post['pekerjaan'],
						'jml'			    =>$post['jumlah']
					  ];
			$x = $this->m_global->get_data_all('pekerjaan',null,['nm_pk' => $menu_data['nm_pk']]);
			if($x) {			
					$result['msg'] = 'Pekerjaan sudah ada !';
					$result['sts'] = '0';
				}
				else{
					$role = $this->m_global->insert('pekerjaan', $menu_data);

					if($role) {
						$result['msg'] = 'Data Pekerjaan berhasil ditambahkan !';
						$result['sts'] = '1';
						redirect('Admin_Statistik');
					} else {
						$result['msg'] = 'Data Pekerjaan gagal ditambahkan !';
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
		$this->m_global->update('penduduk',$data,['id'=>$id]);
		redirect('Admin_Statistik');
	}

	public function act_edit($id)
	{
		$result = [];
		$post 	= $this->input->post();

		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'trim|required');
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'trim|required');
		
		if ($this->form_validation->run() == true){
			$menu_data 	= [
						'nm_pk' 			=> $post['pekerjaan'],
						'jml'				=> $post['jumlah']
					  ];

			$x = $this->m_global->get_data_all('pekerjaan',null,['nm_pk' => $menu_data['nm_pk']]);
			if($x) {
				if($x[0]->id !== $id) {
					$result['msg'] = 'Pekerjaan Sudah Ada !';
					$result['sts'] = '0';
				} else {
					$role = $this->m_global->update('pekerjaan', $menu_data, ['id' => $id]);

					if($role) {
						$result['msg'] = 'Data Pekerjaan berhasil dirubah !';
						$result['sts'] = '1';
						redirect('Admin_Statistik');
					} else {
						$result['msg'] = 'Data Pekerjaan gagal dirubah !';
						$result['sts'] = '0';
					}
				}
			}
			
			else{
					$role = $this->m_global->update('pekerjaan', $menu_data, ['id' => $id]);

					if($role) {
						$result['msg'] = 'Data Pekerjaan berhasil dirubah !';
						$result['sts'] = '1';
						redirect('Admin_Statistik');
					} else {
						$result['msg'] = 'Data Pekerjaan gagal dirubah !';
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
		$this->m_global->delete('pekerjaan', ['id' => $id]);
		redirect('Admin_Statistik');

	}

}

/* End of file Pengguna.php */
/* Location: ./application/controllers/Pengguna.php */