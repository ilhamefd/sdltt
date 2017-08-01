<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		//Do your magic here
	}

	public function index()
	{
      	$this->SecurityModel->level_admin();

		$data=array('title'=>'Pengguna',
					'isi'  =>'adminpages/pengguna/index'
						);
		$data['pengguna'] = $this->m_global->get_data_all('user', null);

		$this->load->view('adminlayout/wrapper',$data);	
	}

	public function add()
	{
      	$this->SecurityModel->level_admin();

		$data=array('title'=>'Tambah Pengguna',
					'isi'  =>'adminpages/pengguna/add'
						);
		$data['jabatan'] = $this->m_global->get_data_all('kehadiran', null);

		$this->load->view('adminlayout/wrapper',$data);	

	}

	public function edit($id)
	{
      	$this->SecurityModel->level_admin();

		$data=array('title'=>'Edit Pengguna',
					'isi'  =>'adminpages/pengguna/edit'
						);
		$data['profil'] = $this->m_global->get_data_all('user',null,['id' => $id]);

		$this->load->view('adminlayout/wrapper',$data);	

	}

	public function act_add()
	{
		$result = [];
		$post 	= $this->input->post();

		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
		$this->form_validation->set_rules('level', 'Level', 'trim|required');
		
		if ($this->form_validation->run() == true){
			$menu_data 	= [
						'username' 			=> $post['username'],
						'password'			=> md5($post['password']),
						'user_jabatan'			=> $post['jabatan'],
						'level'				=> $post['level']
						// 'created_by'		=> user_data()->id
					  ];
			$x = $this->m_global->get_data_all('user',null,['user_jabatan' => $menu_data['user_jabatan']]);
			if($x) {			
					$result['msg'] = 'Jabatan sudah terisi !';
					$result['sts'] = '0';
				}
				else{
					$role = $this->m_global->insert('user', $menu_data);

					if($role) {
						$result['msg'] = 'Data pengguna berhasil ditambahakan !';
						$result['sts'] = '1';
						redirect('pengguna');
					} else {
						$result['msg'] = 'Data pengguna gagal ditambahakan !';
						$result['sts'] = '0';
					}
				}
		} else {
			$result['msg'] = validation_errors();
			$result['sts'] = '0';
		}

		echo json_encode($result);

	}
	public function act_edit($id)
	{
		$result = [];
		$post 	= $this->input->post();
		$password_lama = $this->m_global->get_data_all('user',null,['id' => $id], 'password');
		$password = $post['password'];

		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
		$this->form_validation->set_rules('level', 'Level', 'trim|required');
		
		if ($this->form_validation->run() == true && $password == ''){
			$menu_data 	= [
						'username' 			=> $post['username'],
						'password'			=> $password_lama[0]->password,
						'user_jabatan'		=> $post['jabatan'],
						'level'				=> $post['level']
					  ];
			$x = $this->m_global->get_data_all('user',null,['user_jabatan' => $menu_data['user_jabatan']]);
			if($x) {
				if($x[0]->id !== $id) {
					$result['msg'] = 'Jabatan sudah terisi !';
					$result['sts'] = '0';
				}
				else{
					$role = $this->m_global->update('user', $menu_data, ['id' => $id]);

					if($role) {
						$result['msg'] = 'Data pengguna berhasil dirubah !';
						$result['sts'] = '1';
						redirect('pengguna');
					} else {
						$result['msg'] = 'Data pengguna gagal dirubah !';
						$result['sts'] = '0';
					}
				}
			}
			else
			{
				$role = $this->m_global->update('user', $menu_data, ['id' => $id]);

				if($role) {
					$result['msg'] = 'Data pengguna berhasil dirubah !';
					$result['sts'] = '1';
				} else {
					$result['msg'] = 'Data pengguna gagal dirubah !';
					$result['sts'] = '0';
				}
			}
		}
		if ($this->form_validation->run() == true && $password !== ''){
			$menu_data 	= [
						'username' 			=> $post['username'],
						'password' 			=> md5($password),
						'user_jabatan'		=> $post['jabatan'],
						'level'				=> $post['level']
					  ];
			$x = $this->m_global->get_data_all('user',null,['user_jabatan' => $menu_data['user_jabatan']]);
			if($x) {
				if($x[0]->id !== $id) {
					$result['msg'] = 'Jabatan sudah terisi !';
					$result['sts'] = '0';
				}
				else{
					$role = $this->m_global->update('user', $menu_data, ['id' => $id]);

					if($role) {
						$result['msg'] = 'Data pengguna berhasil ditambahakan !';
						$result['sts'] = '1';
						redirect('pengguna');
					} else {
						$result['msg'] = 'Data pengguna gagal ditambahakan !';
						$result['sts'] = '0';
					}
				}
			}
			else
			{
				$role = $this->m_global->update('user', $menu_data, ['id' => $id]);

				if($role) {
					$result['msg'] = 'Data pengguna berhasil ditambahakan !';
					$result['sts'] = '1';
					redirect('pengguna');
				} else {
					$result['msg'] = 'Data pengguna gagal ditambahakan !';
					$result['sts'] = '0';
				}
			}
		}
		else {
			$result['msg'] = validation_errors();
			$result['sts'] = '0';
		}

		echo json_encode($result);

	}

	public function del()
	{
		$id=$this->input->post('id');
		$this->m_global->delete('user', ['id' => $id]);
        $this->session->set_flashdata("pesan", "<center><div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Pengguna berhasil dihapus !!</div></div><center>");
		redirect('pengguna');

	}

}

/* End of file Pengguna.php */
/* Location: ./application/controllers/Pengguna.php */