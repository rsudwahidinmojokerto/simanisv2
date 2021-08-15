<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class c_riwayatGuna extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('m_riwayat');
	}

	public function index() {
		$data['userdata'] 	= $this->userdata;
		$cekAkses 			= $this->userdata->idGrup; 
		if($cekAkses == 'JBT03' || $cekAkses == 'JBT04'){
			$data['page'] 		= "riwayatGuna";
			$data['judul'] 		= "Riwayat Penggunaan";
			$data['deskripsi'] 	= "";

			$this->template->views('v_riwayatGuna/home', $data);
		} else {
			$data['page'] 		= "error403";
			$this->output->set_status_header('403');
			$this->template->views('error403', $data);
		}
	}

	public function tampil() {
		$cekAkses 	= $this->userdata->idGrup; 
		if($cekAkses == 'JBT03'){
			$data['dataRiwayatGuna'] = $this->m_riwayat->selectRiwayatGuna();
		} else {
			$data['dataRiwayatGuna'] = $this->m_riwayat->selectRiwayatGunaById($this->userdata->idUser);
		}
		$this->load->view('v_riwayatGuna/list_data', $data);
	}
}