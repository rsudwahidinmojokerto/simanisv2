<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class c_ubahHarga extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('m_harga');
	}

	public function index() {
		$data['userdata'] 	= $this->userdata;
		$cekAkses 			= $this->userdata->idGrup; 
		if($cekAkses == 'JBT01' || $cekAkses == 'JBT02'){
			$data['hargaTerakhir'] 	= $this->m_harga->lastPrice();

			$data['page'] 			= "ubah_harga";
			$data['judul'] 			= "Ubah Harga Biogas";
			$data['deskripsi'] 		= "";

			$this->template->views('v_ubahHarga/home', $data);
		} else {
			$data['page'] 			= "error403";
			$this->output->set_status_header('403');
			$this->template->views('error403', $data);
		}
	}

	public function tampil(){
		$data['dataHarga'] = $this->m_harga->select_all();
		$this->load->view('v_ubahHarga/list_data', $data);
	}

	public function prosesUbah() {
		$idUser = $_POST['idUser'];
		$harga 	= $_POST['harga'];
		$tanggal = date("d/m/Y H:i:s");

		if ($harga == null || $harga == 0){
			$out['status'] = 'form';
			$out['msg'] = show_err_msg('Harga tidak boleh 0');
		} else {
			$result = $this->m_harga->updateHarga($idUser, $harga, $tanggal);
			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Harga berhasil diubah', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Harga gagal diubah', '20px');
			}
		}
		echo json_encode($out);
	}
}