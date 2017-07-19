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
			if ($level == 'user') {
				redirect('user');
			}

		}
	}


}

/* End of file SecurityModel.php */
/* Location: ./application/models/SecurityModel.php */