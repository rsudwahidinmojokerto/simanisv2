<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class c_riwayatBayar extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('m_riwayat');
	}

	public function index() {
		$data['userdata'] 	= $this->userdata;
		$cekAkses 			= $this->userdata->idGrup; 
		if($cekAkses == 'JBT02' || $cekAkses == 'JBT04'){
			$data['page'] 		= "riwayatBayar";
			$data['judul'] 		= "Riwayat Pembayaran";
			$data['deskripsi'] 	= "";

			$data['modal_cetak_rekap'] = show_my_modal('modals/modal_cetak_rekap', 'cetak-rekap', $data);

			$this->template->views('v_riwayatBayar/home', $data);
		} else {
			$data['page'] 		= "error403";
			$this->output->set_status_header('403');
			$this->template->views('error403', $data);
		}
	}

	public function tampil() {
		$cekAkses 	= $this->userdata->idGrup; 
		if($cekAkses == 'JBT02'){
			$data['dataRiwayatBayar'] = $this->m_riwayat->selectRiwayatBayar();
		} else {
			$data['dataRiwayatBayar'] = $this->m_riwayat->selectRiwayatBayarById($this->userdata->idUser);
		} 
		$this->load->view('v_riwayatBayar/list_data', $data);
	}
	
	public function printpdf() {
		include_once './assets/fpdf/fpdf.php';
		define('FPDF_FONTPATH',$this->config->item('fonts_path'));
		
		$data['pdf'] = new FPDF('P', 'cm', 'A4');
		$data['userdata'] = $this->userdata;
		
		$idPelanggan	= $_POST["idPelanggan"];
		$tanggalAwal	= $_POST["tgl_awal"];
		$tanggalAkhir	= $_POST["tgl_akhir"];
		if(isset($idPelanggan)){
			$data['dataRiwayatBayar'] = $this->m_riwayat->selectRiwayatBayarByIdPrint($idPelanggan);
		} else {
			$data['dataRiwayatBayar'] = $this->m_riwayat->selectRiwayatBayarByDateRangePrint($tanggalAwal, $tanggalAkhir);
		}
		$this->load->view('v_riwayatBayar/report', $data);
	}
}