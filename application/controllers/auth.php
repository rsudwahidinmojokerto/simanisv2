<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class auth extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('m_auth');
	}
	
	public function index() {
		$session = $this->session->userdata('status');

		if ($session == '') {
			$this->load->view('login');
		} else {
			redirect('home');
		}
	}

	public function login() {
		$this->form_validation->set_rules('idUser', 'ID User', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[3]|max_length[20]');

		if ($this->form_validation->run() == TRUE) {
			$idUser = trim($_POST['idUser']);
			$password = trim($_POST['password']);

			$data = $this->m_auth->login($idUser, $password);

			if ($data == false) {
				$this->session->set_flashdata('error_msg', 'ID / Password Anda Salah.');
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

	public function logout() {
		$this->session->sess_destroy();
		redirect('auth');
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */