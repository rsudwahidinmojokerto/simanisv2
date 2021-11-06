<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class AUTH_Controller extends CI_Controller
{
	// public function __construct() {
	// 	parent::__construct();
	// 	$this->load->model('m_user');
	// 	$this->load->model('m_bayar');

	// 	$this->userdata = $this->session->userdata('userdata');

	// 	$this->session->set_flashdata('segment', explode('/', $this->uri->uri_string()));

	// 	if ($this->session->userdata('status') == '') {
	// 		redirect('auth');
	// 	}
	// }

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('m_bayar');

		$this->load->model('m_user');
		$this->load->model('m_ruang');

		$this->userdata = $this->session->userdata('userdata');

		$this->session->set_flashdata('segment', explode('/', $this->uri->uri_string()));

		if ($this->session->userdata('status') == '') {
			redirect('auth');
		}
	}

	public function updateSession()
	{
		if ($this->userdata != '') {
			$data = $this->m_user->selectUserByIdSession($this->userdata->idUser);

			$this->session->set_userdata('userdata', $data);
			$this->userdata = $this->session->userdata('userdata');
		}
	}
}

/* End of file MY_Auth.php */
/* Location: ./application/core/MY_Auth.php */