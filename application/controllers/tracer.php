<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class tracer extends AUTH_Controller
{
	public function __construct()
	{
		parent::__construct();
		// $this->load->model('m_user');
		// $this->load->model('m_akses_user');
		// $this->load->model('m_ruang');
		// $this->load->model('m_kelas');
		$this->load->model('m_tracer');
	}

	public function index()
	{
		$data['userdata'] 	= $this->userdata;
		$cekAkses 			= $this->userdata->id_akses;

		if (isset($data['userdata'])) {
			if ($cekAkses == 'LV001' || $cekAkses == 'LV004') {
				$data['page'] 		= "tracer";
				$data['judul'] 		= "Tracer Aktivitas";
				$data['deskripsi'] 	= "Monitoring aktivitas User";

				// $data['dataTracer'] = $this->m_tracer->getDataTracerAll();

				$this->template->views('v_tracer/home', $data);
			} else {
				$data['page'] 		= "error403";
				$this->output->set_status_header('403');
				$this->template->views('error403', $data);
			}
		} else {
			redirect('auth');
		}
	}

	public function tampil()
	{
		$data['dataTracer'] = $this->m_tracer->getDataTracerAll();
		$this->load->view('v_tracer/list_data', $data);
	}
}
