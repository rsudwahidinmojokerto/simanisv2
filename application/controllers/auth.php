<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_auth');
	}

	// public function index()
	// {
	// 	$session = $this->session->userdata('status');

	// 	if ($session == '') {
	// 		$this->load->view('login');
	// 	} else {
	// 		redirect('home');
	// 	}
	// }

	public function index()
	{
		$session = $this->session->userdata('status');

		if ($session == '') {
			$this->load->view('login');
		} else {
			redirect('home');
		}
	}

	public function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[3]|max_length[20]');

		if ($this->form_validation->run() == TRUE) {
			$username = trim($_POST['username']);
			$password = trim($_POST['password']);

			$data = $this->m_auth->login($username, $password);

			if ($data == false) {
				$this->session->set_flashdata('error_msg', 'Username / Password Anda Salah.');
				redirect('auth');
			} else {
				$session = [
					'userdata' => $data,
					'status' => "Loged in"
				];
				$this->session->set_userdata($session);
				redirect('home');
			}
		} else {
			$this->session->set_flashdata('error_msg', validation_errors());
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home');
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */