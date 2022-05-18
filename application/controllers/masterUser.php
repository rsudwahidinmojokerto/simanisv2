<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class masterUser extends AUTH_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
		$this->load->model('m_akses_user');
		$this->load->model('m_ruang');
		$this->load->model('m_kelas');
		$this->load->model('m_tracer');
	}

	public function index()
	{
		$data['userdata'] 	= $this->userdata;
		$cekAkses 			= $this->userdata->id_akses;

		if (isset($data['userdata'])) {
			if ($cekAkses == 'LV001') {
				$data['page'] 		= "master_user";
				$data['judul'] 		= "Data User";
				$data['deskripsi'] 	= "Manajemen Data User";

				$data['dataNomorUser'] = $this->userOrder();
				$data['dataAksesUser'] = $this->m_akses_user->getDataAksesUserAll();
				$data['dataRuang'] = $this->m_ruang->getDataRuangAll();

				$data['modal_tambah_masterUser'] = show_my_modal('modals/modal_tambah_masterUser', 'tambah-masterUser', $data);

				$this->template->views('v_masterUser/home', $data);
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
		$data['userdata'] 	= $this->userdata;
		$idAkses 			= $this->userdata->id_akses;
		$idRuang 			= $this->userdata->id_ruang;

		$data['dataUser'] = $this->m_user->getDataUserAll();

		// if ($idAkses == 'LV001' || $idAkses == 'LV002') {
		// 	$data['dataKetersedianBed'] = $this->m_aplicare->getBedBpjsAll();
		// } else {
		// 	$data['dataKetersedianBed'] = $this->m_aplicare->getBedBpjsByRuang($idRuang);
		// }

		$this->load->view('v_masterUser/list_data', $data);
	}

	public function prosesTambah()
	{
		$this->form_validation->set_rules('idUser', 'ID User', 'trim|required');
		$this->form_validation->set_rules('idAkses', 'ID Akses', 'trim|required');
		$this->form_validation->set_rules('idRuang', 'ID Ruang', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('konfPassword', 'Konfirmasi Password', 'trim|required');

		$data = $this->input->post();
		// var_dump($data);
		// $jbt = "04";
		// $dsn = $this->userDusun($data['dusun']);
		// $rt = $this->userRT($data['rt']);
		// $rw = $this->userRW($data['rw']);
		$data['urutUser'] = $this->userOrder();
		// $data['idUser'] = $jbt . $dsn . $rt . $rw . $urutan;
		// $password = $this->randomChar(10);
		// $data['password'] = md5($password);
		// $data['alamat'] = "Jalan " . $data['jalan'] . " RT " . $data['rt'] . " RW " . $data['rw'] . ", Dusun " . $data['dusun'];
		// $data['idGrup'] = "JBT04";
		// $data['foto'] = $this->pickPhoto($data['jk']);

		if ($this->form_validation->run() == TRUE) {
			// var_dump($this->input->post('password'));
			var_dump($this->input->post('KonfPassword'));
			if ($this->input->post('password') == $this->input->post('KonfPassword')) {
				$result = $this->m_user->insertUser($data);
				if ($result > 0) {
					$result2 = $this->m_tracer->insertTracer('Tambah user ' . $data['idUser'], $data['idUser']);
					if ($result2 > 0) {
						$out['status'] = '';
						$out['msg'] = show_succ_msg('User berhasil ditambahkan', '20px');
					} else {
						$out['status'] = '';
						$out['msg'] = show_err_msg('User gagal ditambahkan', '20px');
					}
				} else {
					$out['status'] = '';
					$out['msg'] = show_err_msg('User berhasil ditambahkan tapi tidak masuk tracer', '20px');
				}
			} else {
				$out['status'] = 'form';
				$out['msg'] = show_err_msg('Password dan Konfirmasi password tidak sama');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}
		echo json_encode($out);
	}

	public function ubahPassword()
	{
		$this->form_validation->set_rules('passLama', 'Password Lama', 'trim|required');
		$this->form_validation->set_rules('passBaru', 'Password Baru', 'trim|required');
		$this->form_validation->set_rules('passKonf', 'Password Konfirmasi', 'trim|required');

		$id = $this->userdata->idUser;
		if ($this->form_validation->run() == TRUE) {
			if (md5($this->input->post('passLama')) == $this->userdata->password) {
				if ($this->input->post('passBaru') != $this->input->post('passKonf')) {
					$out['msg'] = show_err_msg('Password Baru dan Konfirmasi Password harus sama');
				} else {
					$data['password'] = md5($this->input->post('passBaru'));
					$result = $this->m_user->updatePassword($data, $id);
					if ($result > 0) {
						$this->updateSession();
						$out['msg'] = show_succ_msg('Password berhasil diubah');
					} else {
						$out['msg'] = show_err_msg('Password gagal diubah');
					}
				}
			} else {
				$out['msg'] = show_err_msg('Password lama salah');
			}
		} else {
			$out['msg'] = show_err_msg(validation_errors());
		}
		echo json_encode($out);
	}

	// public function tampil() {
	// 	$data['userdata'] 	= $this->userdata;
	// 	$cekAkses 			= $this->userdata->idGrup;
	// 	if($cekAkses == 'JBT03'){
	// 		$data['dataPelanggan'] = $this->m_user->selectPelangganByPenyuplai($this->userdata->idUser);
	// 	} else {
	// 		$data['dataPelanggan'] = $this->m_user->select_all("JBT04");
	// 	}
	// 	$this->load->view('v_dataPelanggan/list_data', $data);
	// }

	// public function prosesTambah()
	// {
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
	// 	$urutan = $this->userOrder();
	// 	$data['idUser'] = $jbt . $dsn . $rt . $rw . $urutan;
	// 	$password = $this->randomChar(10);
	// 	$data['password'] = md5($password);
	// 	$data['alamat'] = "Jalan " . $data['jalan'] . " RT " . $data['rt'] . " RW " . $data['rw'] . ", Dusun " . $data['dusun'];
	// 	$data['idGrup'] = "JBT04";
	// 	$data['foto'] = $this->pickPhoto($data['jk']);

	// 	if ($this->form_validation->run() == TRUE) {
	// 		$result = $this->m_user->insert($data);
	// 		if ($result > 0) {
	// 			$this->m_bayar->insertStatus($data['idUser']);
	// 			$out['status'] = '';
	// 			$out['msg'] = show_succ_msg_custom('Data Pelanggan berhasil ditambahkan', '20px', $data['idUser'], $password);
	// 		} else {
	// 			$out['status'] = '';
	// 			$out['msg'] = show_err_msg('Data Pelanggan gagal ditambahkan', '20px');
	// 		}
	// 	} else {
	// 		$out['status'] = 'form';
	// 		$out['msg'] = show_err_msg(validation_errors());
	// 	}
	// 	echo json_encode($out);
	// }

	public function update()
	{
		$id = trim($_POST['idUser']);
		$data['dataPelanggan'] = $this->m_user->select_by_id($id);
		$alamat = $this->m_user->select_alamat($id);
		$data['dataAlamat'] = explode(' ', $alamat);
		echo show_my_modal('modals/modal_update_pelanggan', 'update-pelanggan', $data);
	}

	public function prosesUpdate()
	{
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
		$urutan = substr($data['id'], -4);
		$data['idUser'] = $jbt . $dsn . $rt . $rw . $urutan;
		$data['alamat'] = "Jalan " . $data['jalan'] . " RT " . $data['rt'] . " RW " . $data['rw'] . ", Dusun " . $data['dusun'];
		if ($this->form_validation->run() == TRUE) {
			$result = $this->m_user->update($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data Pelanggan Berhasil diubah', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Data Pelanggan Gagal diubah', '20px');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}
		echo json_encode($out);
	}

	//menghapus data pelanggan
	public function delete()
	{
		$id = $_POST['idUser'];
		$result = $this->m_user->delete($id);

		if ($result > 0) {
			$this->m_bayar->deleteStatus($id);
			echo show_succ_msg('Data Pelanggan berhasil dihapus', '20px');
		} else {
			echo show_err_msg('Data Pelanggan gagal dihapus', '20px');
		}
	}

	public function userOrder()
	{
		$lastDt = $this->m_tracer->getLastOrderNomorUser();
		$idUrut = substr($lastDt, -3);
		$intUrut = (int)$idUrut;
		$urut = $intUrut + 1;
		if ($urut < 10) {
			$hasilUrut = "00" . (string)$urut;
		} else if ($urut < 100) {
			$hasilUrut = "0" . (string)$urut;
		} else if ($urut < 1000) {
			$hasilUrut = (string)$urut;
		} else {
			return 'ERROR!!!';
		}
		return 'US' . $hasilUrut;
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

	// public function userOrder()
	// {
	// 	$lastDt = $this->m_user->id_last_data('JBT04');
	// 	$idUrut = substr($lastDt, -4);
	// 	$intUrut = (int)$idUrut;
	// 	$urut = $intUrut + 1;
	// 	if ($urut < 10) {
	// 		$hasilUrut = "000" . (string)$urut;
	// 	} else if ($urut < 100) {
	// 		$hasilUrut = "00" . (string)$urut;
	// 	} else if ($urut < 1000) {
	// 		$hasilUrut = "0" . (string)$urut;
	// 	} else if ($urut < 10000) {
	// 		$hasilUrut = (string)$urut;
	// 	} else {
	// 		$hasilUrut = "error";
	// 	}
	// 	return $hasilUrut;
	// }

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
