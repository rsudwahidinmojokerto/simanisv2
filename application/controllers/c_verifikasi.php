<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class c_verifikasi extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('m_bayar');
	}

	public function index() {
		$data['userdata'] 	= $this->userdata;
		$cekAkses 			= $this->userdata->idGrup;
		if($cekAkses == 'JBT01' || $cekAkses == 'JBT02'){
			$data['page'] 		= "verifikasi";
			$data['judul'] 		= "Verifikasi Pembayaran";
			$data['deskripsi'] 	= "";

			$data['modal_bukti_transfer'] = show_my_modal('modals/modal_bukti_transfer', 'bukti-transfer', $data);

			$this->template->views('v_verifikasi/home', $data);
		} else {
			$data['page'] 		= "error403";
			$this->output->set_status_header('403');
			$this->template->views('error403', $data);
		}
	}

	public function tampil() {
		$data['dataVerifikasi'] = $this->m_bayar->selectTagihan();
		$this->load->view('v_verifikasi/list_data', $data);
	}

	public function prosesVerifikasi() {
		$data['idUser']	 	= $_POST['idUser'];
		$data['idTagihan']	= $this->m_bayar->selectTagihanById($data['idUser'])->idTagihan;
		$data['bayar'] 	 	= $this->m_bayar->selectTagihanById($data['idUser'])->tagihan;
		$data['daya']	 	= $this->m_bayar->selectTagihanById($data['idUser'])->daya;
		$data['tanggal']	= date('d/m/Y H:i:s');

		$urut	 = $this->bayarOrder();
		$data['idBayar'] 	= "BYR".$urut;
		$data['status']		= "lunas";

		try {
			if ($this->cekServerMQTT() == TRUE){
				$result  = $this->m_bayar->insertBayar($data);
				if ($result > 0) {
					$this->publishSolenoidOn($data['idUser']);
					$this->m_bayar->updateStatus($data['idUser'], "terbuka", "-");
					$this->m_bayar->updateStatusTagihan($data);
					$out['msg'] = show_succ_msg('Verifikasi berhasil', '20px');
				} else {
					$out['msg'] = show_err_msg('Verifikasi Gagal', '20px');
				}
			} else {
				$out['msg'] = show_err_msg('Tidak terhubung ke Server', '20px');
			}
		} catch (Exception $e){
			$out['msg'] = show_err_msg('Server tidak merespon', '20px');
		}
		echo json_encode($out);
	}

	public function bukti() {
		$idTagihan = $_POST['idTagihan'];
		$data['dataBukti'] = $this->m_bayar->selectBuktiTagihan($idTagihan);
		echo show_my_modal('modals/modal_bukti_transfer', 'bukti-transfer', $data);
	}

	public function downloadBukti($namafile) {
		$path = './assets/img/proof-of-payment/'.$namafile;
		$this->_push_file($path, $namafile);
	}
	
	function _push_file($path, $name) {
		$this->load->helper('download');
		// make sure it's a file before doing anything!
		if (is_file($path)) {
			// required for IE
			if (ini_get('zlib.output_compression')) {
				ini_set('zlib.output_compression', 'Off');
			}

			// get the file mime type using the file extension
			$this->load->helper('file');
			$mime = get_mime_by_extension($path);
			// Build the headers to push out the file properly.
			header('Pragma: public');     // required
			header('Expires: 0');         // no cache
			header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
			header('Last-Modified: ' . gmdate('D, d M Y H:i:s', filemtime($path)) . ' GMT');
			header('Cache-Control: private', false);
			header('Content-Type: ' . $mime);  // Add the mime type from Code igniter.
			header('Content-Disposition: attachment; filename="' . basename($namafile) . '"');  // Add the file name
			header('Content-Transfer-Encoding: binary');
			header('Content-Length: ' . filesize($path)); // provide file size
			header('Connection: close');
			ob_clean();
			readfile($path); // push it out
			exit();
		}
	}

	public function publishSolenoidOn($id){
		require_once('./assets/phpMQTT/phpMQTT.php');
		//conf connect
		$user = $id;
		$topic = $user."/solenoid";
		$message = "1";
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

	public function bayarOrder(){
		if ($this->m_bayar->countRowsBayar() == 0){
			$lastDt = "0000000000";
		} else {
			$lastDt = $this->m_bayar->lastDataBayar();
		}
		$idUrut = (int)substr($lastDt, -10);
		$idUrut++;

		return sprintf("%010s", $idUrut);
	}
}