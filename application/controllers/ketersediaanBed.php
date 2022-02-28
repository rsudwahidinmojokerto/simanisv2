<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class ketersediaanBed extends AUTH_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
		$this->load->model('m_bayar');
		$this->load->model('m_bed');
		$this->load->model('m_ruang');
		$this->load->model('m_kelas');
		$this->load->model('m_aplicare');
	}

	public function index()
	{
		$data['userdata'] 	= $this->userdata;
		$idRuang 			= $this->userdata->id_ruang;
		// if($idRuang != 'RU999'){
		if (isset($idRuang)) {
			// $data['statusBayar']   = $this->m_bayar->selectStatus($this->userdata->idUser);

			$data['page'] 		= "ketersediaan_bed";
			$data['judul'] 		= "Data Bed Ruangan";
			$data['deskripsi'] 	= "Manajemen Data Bed Ruangan";

			if ($idRuang == 'RU999' || $idRuang == 'RU998') {
				$data['dataKetersedianBed'] = $this->m_aplicare->getBedBpjsAll();
			} else {
				$data['dataKetersedianBed'] = $this->m_aplicare->getBedBpjsByRuang($idRuang);
			}

			$data['dataRuang'] = $this->m_ruang->getDataRuangAll();
			$data['dataKelas'] = $this->m_kelas->getDataKelasAll();

			$data['modal_tambah_ketersediaanBed'] = show_my_modal('modals/modal_tambah_ketersediaanBed', 'tambah-ketersediaanBed', $data);

			$this->template->views('v_ketersediaanBed/home', $data);
		} else {
			$data['page'] 		= "error403";
			$this->output->set_status_header('403');
			$this->template->views('error403', $data);
		}
	}

	public function tampil()
	{
		$data['userdata'] 	= $this->userdata;
		$idRuang 			= $this->userdata->id_ruang;

		if ($idRuang == 'RU999' || $idRuang == 'RU998') {
			$data['dataKetersedianBed'] = $this->m_aplicare->getBedBpjsAll();
		} else {
			$data['dataKetersedianBed'] = $this->m_aplicare->getBedBpjsByRuang($idRuang);
		}

		$this->load->view('v_ketersediaanBed/list_data', $data);
	}

	public function prosesTambah()
	{
		$this->form_validation->set_rules('idRuang', 'Ruang', 'trim|required');
		$this->form_validation->set_rules('idKelas', 'Kelas', 'trim|required');
		$this->form_validation->set_rules('kapasitas', 'Jumlah Kapasitas', 'trim|required');
		$this->form_validation->set_rules('tersedia', 'Jumlah Tersedia', 'trim|required');

		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			if ($this->input->post('kapasitas') >= $this->input->post('tersedia')) {
				$result = $this->m_aplicare->insertRuang($data);
				if ($result > 0) {
					$out['status'] = '';
					$out['msg'] = show_succ_msg('Data Ruang Berhasil ditambahkan', '20px');
				} else {
					$out['status'] = '';
					$out['msg'] = show_err_msg('Data Ruang gagal ditambahkan', '20px');
				}
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Kapasitas bed <= jumlah tersedia!', '20px');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}
		echo json_encode($out);
	}

	public function updateKetersediaanBed()
	{
		$id = explode("_", $_POST['idRuangKelas']);
		$kapasitas = $_POST['kapasitas'];
		$tersedia = $_POST['tersedia'];

		if ($kapasitas >= $tersedia) {
			$result = $this->m_aplicare->updateKetersediaanBed($id, $kapasitas, $tersedia);
			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data Ketersediaan Berhasil diupdate', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Data Ketersediaan gagal diupdate', '20px');
			}
		} else {
			$out['status'] = '';
			$out['msg'] = show_err_msg('Kapasitas bed <= jumlah tersedia!', '20px');
		}
		echo json_encode($out);
	}

	// public function update()
	// {
	// 	$id = trim($_POST['idUser']);
	// 	$data['dataPelanggan'] = $this->m_user->select_by_id($id);
	// 	$alamat = $this->m_user->select_alamat($id);
	// 	$data['dataAlamat'] = explode(' ', $alamat);
	// 	echo show_my_modal('modals/modal_update_pelanggan', 'update-pelanggan', $data);
	// }

	// public function prosesUpdate()
	// {
	// 	$this->form_validation->set_rules('id', 'ID', 'trim|required');
	// 	$this->form_validation->set_rules('nik', 'NIK', 'trim|required');
	// 	$this->form_validation->set_rules('nama', 'Nama Lengkap', 'trim|required');
	// 	$this->form_validation->set_rules('jalan', 'Alamat', 'trim|required');
	// 	$this->form_validation->set_rules('rt', 'Alamat', 'trim|required');
	// 	$this->form_validation->set_rules('rw', 'Alamat', 'trim|required');
	// 	$this->form_validation->set_rules('dusun', 'Alamat', 'trim|required');
	// 	$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'trim|required');
	// 	$this->form_validation->set_rules('email', 'E-mail', 'trim|required');
	// 	$this->form_validation->set_rules('telepon', 'Telepon', 'trim|required');

	// 	$data = $this->input->post();
	// 	$jbt = "04";
	// 	$dsn = $this->userDusun($data['dusun']);
	// 	$rt = $this->userRT($data['rt']);
	// 	$rw = $this->userRW($data['rw']);
	// 	$urutan = substr($data['id'], -4);
	// 	$data['idUser'] = $jbt . $dsn . $rt . $rw . $urutan;
	// 	$data['alamat'] = "Jalan " . $data['jalan'] . " RT " . $data['rt'] . " RW " . $data['rw'] . ", Dusun " . $data['dusun'];
	// 	if ($this->form_validation->run() == TRUE) {
	// 		$result = $this->m_user->update($data);

	// 		if ($result > 0) {
	// 			$out['status'] = '';
	// 			$out['msg'] = show_succ_msg('Data Pelanggan Berhasil diubah', '20px');
	// 		} else {
	// 			$out['status'] = '';
	// 			$out['msg'] = show_err_msg('Data Pelanggan Gagal diubah', '20px');
	// 		}
	// 	} else {
	// 		$out['status'] = 'form';
	// 		$out['msg'] = show_err_msg(validation_errors());
	// 	}
	// 	echo json_encode($out);
	// }

	//menghapus data pelanggan
	public function delete()
	{
		$id = explode("_", $_POST['idRuangKelas']);
		$result = $this->m_aplicare->deleteRuang($id);
		if ($result > 0) {
			echo show_succ_msg('Data Ruang berhasil dihapus', '20px');
		} else {
			echo show_err_msg('Data Ruang gagal dihapus', '20px');
		}
	}

	public function userDusun($dusun)
	{
		if ($dusun == "Claket") {
			$hasil = "01";
		} else if ($dusun == "Mligi") {
			$hasil = "02";
		} else if ($dusun == "Sembung") {
			$hasil = "03";
		}
		return $hasil;
	}

	public function userRT($rt)
	{
		if ($rt < 10) {
			$hasil = "0" . (string)$rt;
		} else {
			$hasil = (string)$rt;
		}
		return $hasil;
	}

	public function userRW($rw)
	{
		if ($rw < 10) {
			$hasil = "0" . (string)$rw;
		} else {
			$hasil = (string)$rw;
		}
		return $hasil;
	}

	public function userOrder()
	{
		$lastDt = $this->m_user->id_last_data('JBT04');
		$idUrut = substr($lastDt, -4);
		$intUrut = (int)$idUrut;
		$urut = $intUrut + 1;
		if ($urut < 10) {
			$hasilUrut = "000" . (string)$urut;
		} else if ($urut < 100) {
			$hasilUrut = "00" . (string)$urut;
		} else if ($urut < 1000) {
			$hasilUrut = "0" . (string)$urut;
		} else if ($urut < 10000) {
			$hasilUrut = (string)$urut;
		} else {
			$hasilUrut = "error";
		}
		return $hasilUrut;
	}

	public function randomChar($panjang)
	{
		$karakter = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
		$hasil = '';
		for ($i = 0; $i < $panjang; $i++) {
			$ambil = rand(0, strlen($karakter) - 1);
			$hasil .= $karakter{
				$ambil};
		}
		return $hasil;
	}

	public function pickPhoto($jk)
	{
		if ($jk == "Laki-Laki") {
			$pilihan = rand(1, 6);
		} else {
			$pilihan = rand(7, 9);
		}
		$hasil = "profil" . $pilihan . ".png";
		return $hasil;
	}
}