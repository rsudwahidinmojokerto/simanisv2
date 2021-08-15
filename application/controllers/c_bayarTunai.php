<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class c_bayarTunai extends AUTH_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('m_bayar');
		$this->load->model('m_harga');
	}

	public function index() {
		$data['userdata'] 	= $this->userdata;
		$user				= $this->userdata->idUser;
		$cekAkses 			= $this->userdata->idGrup; 
		$cekStatus			= $this->userdata->status;
		if($cekAkses == 'JBT04' && $cekStatus == 'terbuka'){
			$cekVolume 	= $this->m_bayar->cekVolume($user);
			$harga 		= $this->m_harga->lastPrice();

			//rumus tagihan
			$data['tagihan']  = ($cekVolume / (1000*1000)) * $harga; // waterflow hanya dapat mengakurasi aliran air, maka dari itu massa jenis gas akan diganti dengan massa jenis air yaitu 1m3 = 1000L
			// rumus daya pakai
			$data['daya']     = $cekVolume / (1000*1000);

			$data['page'] 		= "bayar_tunai";
			$data['judul'] 		= "Pembayaran Tunai";
			$data['deskripsi'] 	= "";

			$this->template->views('v_bayarTunai/home', $data);
		} else {
			$data['page'] 		= "error403";
			$this->output->set_status_header('403');
			$this->template->views('error403', $data);
		}
	}

	public function prosesBayar() {
		$data['idUser']	 = $_POST['idUser'];
		$data['tagihan'] = $_POST['tagihan'];
		$data['daya']	 = $_POST['daya'];

		$urut	 = $this->tagihanOrder();
		$data['idTagihan'] = "TGH".$urut;
		$data['status'] = "belum_lunas";

		try {
			if ($this->cekServerMQTT() == TRUE){
				$result  = $this->m_bayar->insertTagihan($data);
				if ($result > 0) {
					$this->publishSolenoidOff($data['idUser']);
					$this->m_bayar->updateStatus($data['idUser'], "terkunci", "tunai");
					$this->m_bayar->resetFlow($data['idUser']);
					$this->updateSession();
					$out['msg'] = show_succ_msg('Pembayaran berhasil', '20px');
				} else {
					$out['msg'] = show_err_msg('Pembayaran Gagal', '20px');
				}
			} else {
				$out['msg'] = show_err_msg('Tidak terhubung ke Server', '20px');
			}
		} catch (Exception $e){
			$out['msg'] = show_err_msg('Server tidak merespon', '20px');
		}
		echo json_encode($out);
	}

	public function publishSolenoidOff($id){
		require_once('./assets/phpMQTT/phpMQTT.php');
		//conf connect
		$user = $id;
		$topic = $user."/solenoid";
		$message = "0";
		$qos = 0;
		//conf server
		$server = "m14.cloudmqtt.com";     // change if necessary
		$port = 14481;                     // change if necessary
		$username = "uknnlunr";            // set your username
		$password = "WqdXaE-2oU5X";        // set your password
		$client_id = "WEB_".$user;  // make sure this is unique for connecting to server - you could use uniqid()

		$mqtt = new phpMQTT($server, $port, $client_id);

		if ($mqtt->connect(true, NULL, $username, $password)) {
			$mqtt->publish($topic, $message, $qos); // (topic, message, qos)
			$mqtt->close();
		} else {
			echo show_err_msg('Tidak terhubung ke server MQTT', '20px');
		}
	}

	public function cekServerMQTT(){
		require_once('./assets/phpMQTT/phpMQTT.php');

		$server = "m14.cloudmqtt.com";     // change if necessary
		$port = 14481;                     // change if necessary
		$username = "uknnlunr";            // set your username
		$password = "WqdXaE-2oU5X";        // set your password
		$client_id = "Test_" + rand();

		$mqtt = new phpMQTT($server, $port, $client_id);

		if ($mqtt->connect(true, NULL, $username, $password)) {
			return true;
		} else {
			return false;
		}
	}

	public function tagihanOrder(){
		if ($this->m_bayar->countRowsTagihan() == 0){
			$lastDt = "000000000000";
		} else {
			$lastDt = $this->m_bayar->lastDataTagihan();
		}
		$idUrut = (int)substr($lastDt, -12);
		$idUrut++;

		return sprintf("%012s", $idUrut);
	}
}