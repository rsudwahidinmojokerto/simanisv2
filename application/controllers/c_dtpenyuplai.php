<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class c_dtpenyuplai extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('m_user');
	}

	public function index() {
		$data['userdata'] 	= $this->userdata;
		$cekAkses 			= $this->userdata->idGrup; 
		if($cekAkses == 'JBT01'){
			$data['page'] 		= "dt_penyuplai";
			$data['judul'] 		= "Data Penyuplai";
			$data['deskripsi'] 	= "Manajemen Data Penyuplai";

			$data['modal_tambah_penyuplai'] = show_my_modal('modals/modal_tambah_penyuplai', 'tambah-penyuplai', $data);

			$this->template->views('v_dataPenyuplai/home', $data);
		} else {
			$data['page'] 		= "error403";
			$this->output->set_status_header('403');
			$this->template->views('error403', $data);
		}
	}

	public function tampil() {
		$data['dataPenyuplai'] = $this->m_user->select_all("JBT03");
		$this->load->view('v_dataPenyuplai/list_data', $data);
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
		$jbt = "03";
		$dsn = $this->userDusun($data['dusun']);
		$rt = $this->userRT($data['rt']);
		$rw = $this->userRW($data['rw']);
		// $urutan = $this->userOrder();
		$data['idUser'] = $jbt.$dsn.$rt.$rw;
		$password = $this->randomChar(10);
		$data['password'] = md5($password);
		$data['alamat'] = "Jalan ".$data['jalan']." RT ".$data['rt']." RW ".$data['rw'].", Dusun ".$data['dusun'];
		$data['idGrup'] = "JBT03";
		$data['foto'] = $this->pickPhoto($data['jk']);

		if ($this->form_validation->run() == TRUE) {
			$result = $this->m_user->insert($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg_custom('Data Penyuplai berhasil ditambahkan', '20px', $data['idUser'], $password);
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Data Penyuplai gagal ditambahkan', '20px');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}
		echo json_encode($out);
	}

	public function update() {
		$id = trim($_POST['idUser']);
		$data['dataPenyuplai'] = $this->m_user->select_by_id($id);
		$alamat = $this->m_user->select_alamat($id);
		$data['dataAlamat'] = explode(' ', $alamat);
		echo show_my_modal('modals/modal_update_penyuplai', 'update-penyuplai', $data);
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
		$jbt = "04";
		$dsn = $this->userDusun($data['dusun']);
		$rt = $this->userRT($data['rt']);
		$rw = $this->userRW($data['rw']);
		// $urutan = substr($data['id'], -4);
		$data['idUser'] = $jbt.$dsn.$rt.$rw;
		$data['alamat'] = "Jalan ".$data['jalan']." RT ".$data['rt']." RW ".$data['rw'].", Dusun ".$data['dusun'];
		if ($this->form_validation->run() == TRUE) {
			$result = $this->m_user->update($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data Penyuplai Berhasil diubah', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Data Penyuplai Gagal diubah', '20px');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}
		echo json_encode($out);
	}

	//menghapus data penyuplai
	public function delete() {
		$id = $_POST['idUser'];
		$result = $this->m_user->delete($id);

		if ($result > 0) {
			echo show_succ_msg('Data Penyuplai berhasil dihapus', '20px');
		} else {
			echo show_err_msg('Data Penyuplai gagal dihapus', '20px');
		}
	}	

	public function userDusun($dusun){
		if($dusun == "Claket"){
			$hasil = "01";
		} else if ($dusun == "Mligi"){
			$hasil = "02";
		} else if ($dusun == "Sembung"){
			$hasil = "03";
		}
		return $hasil;
	}

	public function userRT($rt){
		if ($rt < 10){
			$hasil = "0".(string)$rt;
		} else {
			$hasil = (string)$rt;
		}
		return $hasil;
	}

	public function userRW($rw){
		if ($rw < 10){
			$hasil = "0".(string)$rw;
		} else {
			$hasil = (string)$rw;
		}
		return $hasil;
	}

	public function userOrder(){
		$lastDt = $this->m_user->id_last_data('JBT03');
		$idUrut = substr($lastDt, -4);
		$intUrut = (int)$idUrut;
		$urut = $intUrut+1;
		if($urut < 10){
			$hasilUrut = "000".(string)$urut;
		} else if ($urut < 100){
			$hasilUrut = "00".(string)$urut;
		} else if ($urut < 1000){
			$hasilUrut = "0".(string)$urut;
		} else if ($urut < 10000){
			$hasilUrut = (string)$urut;
		} else {
			$hasilUrut = "error";
		}
		return $hasilUrut;
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