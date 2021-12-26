<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class home extends AUTH_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_bayar');
		$this->load->model('m_harga');
		$this->load->model('m_user');
		$this->load->model('m_kamar');
		$this->load->model('m_bed');
		$this->load->model('m_ruang');
		$this->load->model('m_aplicare');
	}

	public function index()
	{
		//Load userdata
		if ($this->userdata != null || $this->userdata != '') {
			$data['userdata'] = $this->userdata;
		} else {
			// $data['userdata'] = '';
			$data['userdata'] = (object) array('id_ruang' => '');
		}

		$i = 0;
		$iruang = 0;

		$getBed		 = $this->m_bed->getAllDataBed();
		foreach ($getBed as $bed) {
			$data['bed' . $bed['id_bed']] = $this->m_bed->getAllDataBedById($bed['id_bed']);
			// if ($getBed[$iruang]['id_ruang'] == !empty($getBed[$iruang - 1]['id_ruang'])) {
			$data['ruang' . $bed['id_ruang']] = $this->m_ruang->getAllDataRuangById($bed['id_ruang']);
			$data['ruang' . $bed['id_ruang'] . 'terisi'] = $this->m_bed->countBed($bed['id_ruang'], 'terisi');
			$data['ruang' . $bed['id_ruang'] . 'kosong'] = $this->m_bed->countBed($bed['id_ruang'], 'kosong');
			// }
			$iruang++;
			// var_dump($data['ruang' . $bed['id_ruang']]);
		}








		// $cekVolume 	 = $this->m_bayar->cekVolume($this->userdata->idUser);
		// $harga		 = $this->m_harga->lastPrice();
		// $idUser		 = $this->userdata->idUser;

		// //rumus tagihan
		// $data['tagihan']  = ($cekVolume / (1000 * 1000)) * $harga; // waterflow hanya dapat mengakurasi aliran air, maka dari itu massa jenis gas akan diganti dengan massa jenis air yaitu 1m3 = 1000L
		// // rumus daya pakai
		// $data['daya']     = $cekVolume / (1000 * 1000);

		// $data['pelanggan'] = $this->m_user->countPelanggan();
		// $data['pelangganPenyuplai'] = $this->m_user->countPelangganById($idUser);
		// $data['bayar'] = $this->m_bayar->selectTagihanById($idUser);


		// $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');

		// $color1 = '#' . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)];
		// $color2 = '#' . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)];

		// $data['color'] = [$color1, $color2];

		// $bulan = [];
		// $thnmin = 2018;
		// $thnini = date('Y');

		// $data['idUser'] = $this->userdata->idUser;
		// $data['idPenyuplai'] = substr($this->userdata->idUser, -6);
		// $cekGrup = $this->userdata->idGrup;

		// $urut = 0;
		// for ($j = $thnmin; $j <= $thnini; $j++) {
		// 	$data['tahun'] = $j;
		// 	for ($i = 0; $i < 12; $i++) {
		// 		if ($i < 9) {
		// 			$data['tanggal'] = '0' . ($i + 1);
		// 		} else {
		// 			$data['tanggal'] = $i + 1;
		// 		}
		// 		if ($cekGrup == 'JBT04') {
		// 			$bulan[$urut] = $this->m_bayar->selectBayarByDateAndId($data);
		// 		} else if ($cekGrup == 'JBT01' || $cekGrup == 'JBT02') {
		// 			$bulan[$urut] = $this->m_bayar->selectBayarByDate($data);
		// 		} else {
		// 			$bulan[$urut] = $this->m_bayar->selectDayaByDateAndId($data);
		// 		}
		// 		$urut++;
		// 	}
		// }

		// $data['minMonth'] = (int)date('m', strtotime('-1 month'));

		// $data['bulan'] = json_encode($bulan);

		$data['page'] 			= "home";
		$data['judul'] 			= "Dashboard";
		$data['deskripsi'] 		= "";
		$this->template->views('home', $data);
	}

	public function cekTagihanDaya()
	{
		$cekVolume 	= $this->m_bayar->cekVolume($this->userdata->idUser);
		$harga		= $this->m_harga->lastPrice();

		//rumus tagihan
		$tagihan  = ($cekVolume / (1000 * 1000)) * $harga; // waterflow hanya dapat mengakurasi aliran air, maka dari itu massa jenis gas akan diganti dengan massa jenis air yaitu 1m3 = 1000L
		// rumus daya pakai
		$daya     = $cekVolume / (1000 * 1000);

		$data = array(
			'tagihan' => $tagihan,
			'daya'  => $daya
		);

		echo json_encode($data);
	}

	public function updateBed()
	{
		$id = trim($_POST['id_bed']);
		$data['dataBed'] = $this->m_bed->getAllDataBedById($id);
		echo show_my_modal('modals/modal_update_bed', 'update-bed', $data, 'sm');
	}

	public function prosesUbahBed()
	{
		$this->form_validation->set_rules('idBed', 'id', 'trim|required');
		$this->form_validation->set_rules('statusBed', 'status', 'trim|required');

		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			$result = $this->m_bed->updateStatusBed($data);
			$bed = $this->m_bed->getAllDataBedById($data['idBed']);
			if ($result > 0) {
				$out['status'] = '';
				$out['idBed'] = $bed->id_bed;
				$out['ruangBed'] = $bed->id_ruang;
				$out['statusBed'] = $bed->status;
				$out['countTerisi'] = $this->m_bed->countBed($bed->id_ruang, 'terisi');
				$out['countKosong'] = $this->m_bed->countBed($bed->id_ruang, 'kosong');
				$out['msg'] = show_succ_msg('Bed berhasil di update', '20px');
				$jmlBedTersedia = $this->m_bed->countKelasBedTersedia(substr($bed->id_bed, 0, 8));
				$this->m_aplicare->updateKapasitasBed($bed->id_ruang, $bed->id_kelas, $jmlBedTersedia);
				$this->updateAplicare($bed->id_ruang, $bed->id_kelas);
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Bed gagal di update', '20px');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}
		echo json_encode($out);
	}

	public function updateAplicare($id_ruang, $id_kelas)
	{
		$consId = "21095";
		$secretKey = "rsud6778ws122mjkrt";
		$kodePpk = "1320R001";
		// include "config.php";

		// // Do query's
		// mysqli_query($con, "SET CHARACTER SET utf8");

		// mysqli_query($con, "SET NAMES 'utf8'");

		// $query = mysqli_query($con, "SELECT
		//                      kodekelas,
		//                      koderuang,
		//                      namaruang,
		//                      kapasitas,
		//                      tersedia
		//                    FROM bed_available_bpjs");

		$getKapasitas = $this->m_aplicare->getRuangAplicareByKodeKelas($id_ruang, $id_kelas);

		// Start of loop process
		// while ($row = mysqli_fetch_assoc($query)) {
		foreach ($getKapasitas as $kapasitas) {
			// create record to JSON
			// $dataKapasitas = json_encode($getKapasitas);
			$dataKapasitas = json_encode($kapasitas);
			// $dataKapasitas = $kapasitas;
			// var_dump($dataKapasitas);

			// Computes the timestamp
			date_default_timezone_set('UTC');
			$tStamp = strval(time() - strtotime('1970-01-01 00:00:00'));
			// Computes the signature by hashing the salt with the secret key as the key
			$signature = hash_hmac('sha256', $consId . "&" . $tStamp, $secretKey, true);
			// base64 encode…
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
			curl_setopt($ch, CURLOPT_POSTFIELDS, $dataKapasitas);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

			/* print output message */
			$content = curl_exec($ch);
			$err = curl_error($ch);
			// print_r($err);
			// print_r($content);

			// close cURL resource, and free up system resources
			curl_close($ch);
		}
		// End of loop process
	}
}
