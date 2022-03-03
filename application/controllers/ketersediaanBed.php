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
			if ($this->input->post('kapasitas') > 0 && $this->input->post('tersedia') >= 0) {
				if ($this->input->post('kapasitas') >= $this->input->post('tersedia')) {
					$result = $this->m_aplicare->insertRuang($data);
					if ($result > 0) {
						$this->insertAplicare($this->input->post('idRuang'), $this->input->post('idKelas'));
						$out['status'] = '';
						$out['msg'] = show_succ_msg('Data Ruang Berhasil ditambahkan', '20px');
					} else {
						$out['status'] = '';
						$out['msg'] = show_err_msg('Data Ruang gagal ditambahkan', '20px');
					}
				} else {
					$out['status'] = '';
					$out['msg'] = show_err_msg('Jumlah bed tersedia melebihi kapasitas!', '20px');
				}
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Jumlah tidak valid!', '20px');
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

		if ($kapasitas > 0 && $tersedia >= 0) {
			if ($kapasitas >= $tersedia) {
				$result = $this->m_aplicare->updateKetersediaanBed($id, $kapasitas, $tersedia);
				if ($result > 0) {
					$this->updateAplicare($id[0], $id[1]);
					$out['status'] = '';
					$out['msg'] = show_succ_msg('Data Ketersediaan Berhasil diupdate', '20px');
				} else {
					$out['status'] = '';
					$out['msg'] = show_err_msg('Data Ketersediaan gagal diupdate', '20px');
				}
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Jumlah bed tersedia melebihi kapasitas!', '20px');
			}
		} else {
			$out['status'] = '';
			$out['msg'] = show_err_msg('Jumlah tidak valid!', '20px');
		}
		echo json_encode($out);
	}

	public function delete()
	{
		$id = explode("_", $_POST['idRuangKelas']);

		$this->deleteAplicare($id[0], $id[1]);
		$result = $this->m_aplicare->deleteRuang($id);
		if ($result > 0) {
			echo show_succ_msg('Data Ruang berhasil dihapus', '20px');
		} else {
			echo show_err_msg('Data Ruang gagal dihapus', '20px');
		}
	}

	public function insertAplicare($id_ruang, $id_kelas)
	{
		$consId = "21095";
		$secretKey = "rsud6778ws122mjkrt";
		$kodePpk = "1320R001";

		$getRuang = $this->m_aplicare->getRuangAplicareByKodeKelas($id_ruang, $id_kelas);

		foreach ($getRuang as $ruang) {
			$dataRuang = json_encode($ruang);

			date_default_timezone_set('UTC');
			$tStamp = strval(time() - strtotime('1970-01-01 00:00:00'));
			$signature = hash_hmac('sha256', $consId . "&" . $tStamp, $secretKey, true);
			$encodedSignature = base64_encode($signature);

			$ch = curl_init();
			$headers = array(
				'X-cons-id: ' . $consId . '',
				'X-timestamp: ' . $tStamp . '',
				'X-signature: ' . $encodedSignature . '',
				'Content-Type: Application/JSON',
				'Accept: Application/JSON'
			);


			/*
			  Sending record to API Aplicares (for INSERT)
			 */
			// curl_setopt($ch, CURLOPT_URL, "http://dvlp.bpjs-kesehatan.go.id:8888/aplicaresws/rest/bed/create/" . $kodePpk);
			curl_setopt($ch, CURLOPT_URL, "https://new-api.bpjs-kesehatan.go.id/aplicaresws/rest/bed/create/" . $kodePpk);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_TIMEOUT, 60);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_POSTFIELDS, $dataRuang);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$content = curl_exec($ch);
			$err     = curl_error($ch);

			// print_r($err);
			// print_r($content);

			// close cURL resource, and free up system resources
			curl_close($ch);
		}
		// End of loop process
	}

	public function updateAplicare($id_ruang, $id_kelas)
	{
		$consId = "21095";
		$secretKey = "rsud6778ws122mjkrt";
		$kodePpk = "1320R001";

		$getRuang = $this->m_aplicare->getRuangAplicareByKodeKelas($id_ruang, $id_kelas);

		foreach ($getRuang as $ruang) {
			$dataRuang = json_encode($ruang);

			date_default_timezone_set('UTC');
			$tStamp = strval(time() - strtotime('1970-01-01 00:00:00'));
			$signature = hash_hmac('sha256', $consId . "&" . $tStamp, $secretKey, true);
			$encodedSignature = base64_encode($signature);

			$ch = curl_init();
			$headers = array(
				'X-cons-id: ' . $consId . '',
				'X-timestamp: ' . $tStamp . '',
				'X-signature: ' . $encodedSignature . '',
				'Content-Type: Application/JSON',
				'Accept: Application/JSON'
			);

			/*
          	Sending record to API Aplicares (for UPDATE)
			 */
			// curl_setopt($ch, CURLOPT_URL, "https://dvlp.bpjs-kesehatan.go.id:8888/aplicaresws/rest/bed/update/" . $kodePpk);
			curl_setopt($ch, CURLOPT_URL, "https://new-api.bpjs-kesehatan.go.id/aplicaresws/rest/bed/update/" . $kodePpk);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_TIMEOUT, 60);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_POSTFIELDS, $dataRuang);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

			/* print output message */
			$content = curl_exec($ch);
			$err = curl_error($ch);

			// print_r($err);
			// print_r($content);

			// close cURL resource, and free up system resources
			curl_close($ch);
			// return $content;
		}
		// End of loop process
	}

	public function deleteAplicare($id_ruang, $id_kelas)
	{
		$consId = "21095";
		$secretKey = "rsud6778ws122mjkrt";
		$kodePpk = "1320R001";

		$getRuang = $this->m_aplicare->getRuangAplicareToDeleteByKodeKelas($id_ruang, $id_kelas);

		foreach ($getRuang as $ruang) {
			$dataRuang = json_encode($ruang);

			date_default_timezone_set('UTC');
			$tStamp = strval(time() - strtotime('1970-01-01 00:00:00'));
			$signature = hash_hmac('sha256', $consId . "&" . $tStamp, $secretKey, true);
			$encodedSignature = base64_encode($signature);

			$ch = curl_init();
			$headers = array(
				'X-cons-id: ' . $consId . '',
				'X-timestamp: ' . $tStamp . '',
				'X-signature: ' . $encodedSignature . '',
				'Content-Type: Application/JSON',
				'Accept: Application/JSON'
			);

			/*
          	Sending record to API Aplicares (for DELETE)
			 */
			// curl_setopt($ch, CURLOPT_URL, "http://dvlp.bpjs-kesehatan.go.id:8888/aplicaresws/rest/bed/delete/" . $kodePpk);
			curl_setopt($ch, CURLOPT_URL, "https://new-api.bpjs-kesehatan.go.id/aplicaresws/rest/bed/delete/" . $kodePpk);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_TIMEOUT, 60);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_POSTFIELDS, $dataRuang);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$content = curl_exec($ch);
			$err = curl_error($ch);

			// print_r($err);
			// print_r($content);

			// close cURL resource, and free up system resources
			curl_close($ch);
		}
		// End of loop process
	}

	public function jumlahRuangKelas()
	{
		$data = $this->m_aplicare->getRuangBpjsAll();
		echo json_encode($data);
	}

	public function cekJumlahBed()
	{
		$data['jumlahBed'] = $this->m_aplicare->getRuangBpjsAll();
		for ($i = 1; $i <= $data['jumlahBed']; $i++) {
			$data['jumlahRuangKelas' . $i] = $this->m_aplicare->getRuangKelasByRow($i - 1);
		}
		// var_dump($data);
		echo json_encode($data);
	}

	// public function jumlahKelasRuang()
	// {
	// 	$jumlahRuangKelas = $this->m_aplicare->getCountRuangAll();

	// 	for ($i = 1; $i <= $jumlahRuangKelas; $i++) {
	// 		$data = array();
	// 	}

	// 	$cekVolume 	= $this->m_bayar->cekVolume($this->userdata->idUser);
	// 	$harga		= $this->m_harga->lastPrice();

	// 	//rumus tagihan
	// 	$tagihan  = ($cekVolume / (1000 * 1000)) * $harga; // waterflow hanya dapat mengakurasi aliran air, maka dari itu massa jenis gas akan diganti dengan massa jenis air yaitu 1m3 = 1000L
	// 	// rumus daya pakai
	// 	$daya     = $cekVolume / (1000 * 1000);

	// 	$data = array(
	// 		'tagihan' => $tagihan,
	// 		'daya'  => $daya
	// 	);

	// 	echo json_encode($data);
	// }

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
