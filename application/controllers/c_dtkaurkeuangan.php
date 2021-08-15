<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class c_dtkaurkeuangan extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('m_user');
	}

	public function index() {
		$data['userdata'] 	= $this->userdata;
		$cekAkses 			= $this->userdata->idGrup; 
		if($cekAkses == 'JBT01'){
			$data['page'] 		= "dt_kaurkeuangan";
			$data['judul'] 		= "Data Kepala Urusan Keuangan";
			$data['deskripsi'] 	= "Manajemen Data Kepala Urusan Keuangan";

			$data['modal_tambah_kaurkeuangan'] = show_my_modal('modals/modal_tambah_kaurkeuangan', 'tambah-kaurkeuangan', $data);

			$this->template->views('v_dataKaurKeuangan/home', $data);
		} else {
			$data['page'] 		= "error403";
			$this->output->set_status_header('403');
			$this->template->views('error403', $data);
		}
	}

	public function tampil() {
		$data['dataKaurKeuangan'] = $this->m_user->select_all("JBT02");
		$this->load->view('v_dataKaurKeuangan/list_data', $data);
	}

	public function prosesTambah() {
		$this->form_validation->set_rules('nik', 'NIK', 'trim|required');
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'trim|required');
		$this->form_validation->set_rules('jalan', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('rt', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('rw', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('dusun', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('email', 'E-mail', 'trim|required');
		$this->form_validation->set_rules('telepon', 'Telepon', 'trim|required');

		$data = $this->input->post();
		$data['idUser'] = "0201";
		$password = $this->randomChar(10);
		$data['password'] = md5($password);
		$data['alamat'] = "Jalan ".$data['jalan']." RT ".$data['rt']." RW ".$data['rw'].", Dusun ".$data['dusun'];
		$data['idGrup'] = "JBT02";
		$data['foto'] = $this->pickPhoto($data['jk']);

		if ($this->form_validation->run() == TRUE) {
			$result = $this->m_user->insert($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg_custom('Data Kepala Urusan Keuangan berhasil ditambahkan', '20px', $data['idUser'], $password);
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Data Kepala Urusan Keuangan gagal ditambahkan', '20px');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}
		echo json_encode($out);
	}

	public function update() {
		$id = trim($_POST['idUser']);
		$data['dataKaurKeuangan'] = $this->m_user->select_by_id($id);
		$alamat = $this->m_user->select_alamat($id);
		$data['dataAlamat'] = explode(' ', $alamat);
		echo show_my_modal('modals/modal_update_kaurkeuangan', 'update-kaurkeuangan', $data);
	}

	public function prosesUpdate() {
		$this->form_validation->set_rules('id', 'ID', 'trim|required');
		$this->form_validation->set_rules('nik', 'NIK', 'trim|required');
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'trim|required');
		$this->form_validation->set_rules('jalan', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('rt', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('rw', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('dusun', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('email', 'E-mail', 'trim|required');
		$this->form_validation->set_rules('telepon', 'Telepon', 'trim|required');

		$data = $this->input->post();
		$data['idUser'] = "0201";
		$data['alamat'] = "Jalan ".$data['jalan']." RT ".$data['rt']." RW ".$data['rw'].", Dusun ".$data['dusun'];
		if ($this->form_validation->run() == TRUE) {
			$result = $this->m_user->update($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data Kepala Urusan Keuangan Berhasil diubah', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Data Kepala Urusan Keuangan Gagal diubah', '20px');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}
		echo json_encode($out);
	}

	//menghapus data Kepala Urusan Keuangan
	public function delete() {
		$id = $_POST['idUser'];
		$result = $this->m_user->delete($id);

		if ($result > 0) {
			echo show_succ_msg('Data Kepala Urusan Keuangan berhasil dihapus', '20px');
		} else {
			echo show_err_msg('Data Kepala Urusan Keuangan gagal dihapus', '20px');
		}
	}

	public function randomChar($panjang){
		$karakter = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
		$hasil = '';
		for ($i=0; $i < $panjang; $i++) { 
			$ambil = rand(0, strlen($karakter)-1);
			$hasil .= $karakter{$ambil};
		}
		return $hasil;
	}

	public function pickPhoto($jk){
		if($jk == "Laki-Laki"){
			$pilihan = rand(1, 6);
		} else {
			$pilihan = rand(7, 9);
		}
		$hasil = "profil".$pilihan.".png";
		return $hasil;
	}
}