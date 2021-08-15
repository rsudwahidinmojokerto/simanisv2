<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class home extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('m_bayar');
		$this->load->model('m_harga');
		$this->load->model('m_user');
	}

	public function index() {
		$cekVolume 	= $this->m_bayar->cekVolume($this->userdata->idUser);
		$harga		= $this->m_harga->lastPrice();
		$idUser		= $this->userdata->idUser;

		//rumus tagihan
		$data['tagihan']  = ($cekVolume / (1000*1000)) * $harga; // waterflow hanya dapat mengakurasi aliran air, maka dari itu massa jenis gas akan diganti dengan massa jenis air yaitu 1m3 = 1000L
		// rumus daya pakai
		$data['daya']     = $cekVolume / (1000*1000);

		$data['pelanggan'] = $this->m_user->countPelanggan();
		$data['pelangganPenyuplai'] = $this->m_user->countPelangganById($idUser);
		$data['bayar'] = $this->m_bayar->selectTagihanById($idUser);

		$data['userdata'] 		= $this->userdata;

		$rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
		
		$color1 = '#' .$rand[rand(0,15)] .$rand[rand(0,15)] .$rand[rand(0,15)] .$rand[rand(0,15)] .$rand[rand(0,15)] .$rand[rand(0,15)];
		$color2 = '#' .$rand[rand(0,15)] .$rand[rand(0,15)] .$rand[rand(0,15)] .$rand[rand(0,15)] .$rand[rand(0,15)] .$rand[rand(0,15)];

		$data['color'] = [$color1, $color2];

		$bulan = [];
		$thnmin = 2018;
		$thnini = date('Y');

		$data['idUser'] = $this->userdata->idUser;
		$data['idPenyuplai'] = substr($this->userdata->idUser, -6);
		$cekGrup = $this->userdata->idGrup;
		
		$urut = 0;
		for ($j = $thnmin; $j <= $thnini; $j++){
			$data['tahun'] = $j;
			for ($i=0; $i < 12; $i++) {
				if($i < 9){
					$data['tanggal'] = '0'.($i+1);
				} else {
					$data['tanggal'] = $i+1;
				}
				if($cekGrup == 'JBT04'){
					$bulan[$urut] = $this->m_bayar->selectBayarByDateAndId($data);
				} else if ($cekGrup == 'JBT01' || $cekGrup == 'JBT02'){
					$bulan[$urut] = $this->m_bayar->selectBayarByDate($data);
				} else {
					$bulan[$urut] = $this->m_bayar->selectDayaByDateAndId($data);
				}
				$urut++;
			}
		}

		$data['minMonth'] = (int)date('m', strtotime('-1 month'));
		// var_dump($data['minMonth']); // hasil = 12
		
		$data['bulan'] = json_encode($bulan);
		// var_dump($data['bulan']);

		$data['page'] 			= "home";
		$data['judul'] 			= "Dashboard";
		$data['deskripsi'] 		= "";
		$this->template->views('home', $data);
	}

	public function cekTagihanDaya(){
		$cekVolume 	= $this->m_bayar->cekVolume($this->userdata->idUser);
		$harga		= $this->m_harga->lastPrice();

		//rumus tagihan
		$tagihan  = ($cekVolume / (1000*1000)) * $harga; // waterflow hanya dapat mengakurasi aliran air, maka dari itu massa jenis gas akan diganti dengan massa jenis air yaitu 1m3 = 1000L
		// rumus daya pakai
		$daya     = $cekVolume / (1000*1000);

		$data = array(
			'tagihan' => $tagihan,
			'daya'  => $daya
		);

		echo json_encode($data);
	}
}