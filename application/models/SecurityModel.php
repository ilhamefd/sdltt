<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SecurityModel extends CI_Model {

	public function SecurAuth()
	{
		$username = $this->session->userdata('username');
		if (empty($username)) {
			$this->session->sess_destroy();
			redirect('Login');
		}
		else
		{		
			$level = $this->session->userdata('level');
			if ($level == 'admin') {
				redirect('admin_home');
			}

		}

	}

	public function level_admin()
	{
		$username = $this->session->userdata('username');
		if (empty($username)) {
			$this->session->sess_destroy();
			redirect('Login');
		}
		else
		{		
			$level = $this->session->userdata('level');
			if ($level == 'siswa') {
				redirect('siswa_home');
			}

		}
	}


}

/* End of file SecurityModel.php */
/* Location: ./application/models/SecurityModel.php */