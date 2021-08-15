<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class c_perpesanan extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('m_user');
		$this->load->model('m_perpesanan');
	}

	//Untuk kotak masuk
	public function index() {
		$data['userdata'] 	= $this->userdata;
		$cekGrup			= $this->userdata->idGrup;
		if ($cekGrup == 'JBT01'){
			$data['dataKaurKeuangan'] = $this->m_user->select_all("JBT02");
			$data['dataPenyuplai'] = $this->m_user->select_all("JBT03");
			$data['dataPelanggan'] = $this->m_user->select_all("JBT04");
		} else if ($cekGrup == 'JBT02'){
			$data['dataAdmin'] = $this->m_user->select_all("JBT01");
			$data['dataPenyuplai'] = $this->m_user->select_all("JBT03");
			$data['dataPelanggan'] = $this->m_user->select_all("JBT04");
		} else {
			$data['dataAdmin'] = $this->m_user->select_all("JBT01");
			$data['dataKaurKeuangan'] = $this->m_user->select_all("JBT02");
		}

		$data['page'] 		= "perpesanan";
		$data['judul'] 		= "Perpesanan";
		$data['deskripsi'] 	= "Manajemen perpesanan";

		$data['modal_tulis_pesan'] = show_my_modal('modals/modal_tulis_pesan', 'tulis-pesan', $data);

		$this->template->views('v_perpesanan/home', $data);
	}

	public function tampil() {
		$data['dataInbox'] = $this->m_perpesanan->selectInbox($this->userdata->idUser);
		$this->load->view('v_perpesanan/list_data', $data);
	}

	// Untuk kotak keluar
	public function sentMessage() {
		$data['userdata'] 	= $this->userdata;
		$cekGrup			= $this->userdata->idGrup;
		if ($cekGrup == 'JBT01'){
			$data['dataKaurKeuangan'] = $this->m_user->select_all("JBT02");
			$data['dataPenyuplai'] = $this->m_user->select_all("JBT03");
			$data['dataPelanggan'] = $this->m_user->select_all("JBT04");
		} else if ($cekGrup == 'JBT02'){
			$data['dataAdmin'] = $this->m_user->select_all("JBT01");
			$data['dataPenyuplai'] = $this->m_user->select_all("JBT03");
			$data['dataPelanggan'] = $this->m_user->select_all("JBT04");
		} else {
			$data['dataAdmin'] = $this->m_user->select_all("JBT01");
			$data['dataKaurKeuangan'] = $this->m_user->select_all("JBT02");
		}

		$data['page'] 		= "perpesanan";
		$data['judul'] 		= "Perpesanan";
		$data['deskripsi'] 	= "Manajemen perpesanan";

		$data['modal_tulis_pesan'] = show_my_modal('modals/modal_tulis_pesan', 'tulis-pesan', $data);

		$this->template->views('v_perpesanan/sent_message', $data);
	}

	public function tampil_sent() {
		$data['dataSent'] = $this->m_perpesanan->selectSent($this->userdata->idUser);
		$this->load->view('v_perpesanan/list_data_sent', $data);
	}

	public function prosesKirim() {
		$this->form_validation->set_rules('idPenerima', 'Penerima', 'trim|required');
		$this->form_validation->set_rules('subjek', 'Subjek', 'trim|required');
		$this->form_validation->set_rules('pesan', 'Isi Pesan', 'trim|required');

		$data = $this->input->post();
		$urutInbox 				= $this->pesanOrderInbox();
		$urutSent				= $this->pesanOrderSent();
		$data['idPesanInbox']	= 'IBX'.$urutInbox;
		$data['idPesanSent']	= 'SNT'.$urutSent;
		$data['idPengirim'] = $this->userdata->idUser;
		$data['tanggal']	= date('d/m/Y H:i:s');
		$data['status']		= "baru";

		if ($this->form_validation->run() == TRUE) {
			$result = $this->m_perpesanan->sendMessage($data);
			if ($result > 0) {
				$this->m_perpesanan->insertIntoInbox($data);
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Pesan berhasil dikirim ke '.$data['idPenerima'], '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Pesan gagal dikirim', '20px');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}
		echo json_encode($out);
	}

	public function pushNotif(){
		if(isset($_POST['view'])){
			if($_POST['view'] != ''){
				$this->m_perpesanan->updateToOldStatus($this->userdata->idUser);
			}
			$result = $this->m_perpesanan->selectForNotif($this->userdata->idUser);
			$output = '';
			if(count($result) > 0){
			 	foreach($result AS $row){
					$output .= "
					<li>
                  		<ul class='menu'>
							<li>
								<a href='#' class='lihat-pesanInbox' data-id='".$row->idPesan."'>
									<div class='pull-left'>
										<img src='".base_url('/assets/img/'.$row->foto.'')."' class='img-circle' alt='User Image'>
									</div>
									<h4><strong>".(strlen($row->subjek) > 14 ? substr($row->subjek, 0, 14).'...' : $row->subjek)."</strong><small><i class='fa fa-clock-o'></i> ".substr($row->tanggal, 0, 16)."</small></h4>
									<p>".(strlen($row->isi) > 40 ? substr($row->isi, 0, 40).'...' : $row->isi)."</p>
								</a>
							</li>
						</ul>
              		</li>
					";
				}
			} else {
				$output .= "
				<li>
                  	<ul class='menu'>
						<li>
							<a href='#' class='text-bold text-italic' style='padding-left: 43px'><p><i class='fa fa-commenting' style='color: #b5c016'></i> Tidak ada pesan</p></a>
						</li>
					</ul>
				</li>
				";
			}
			$count = $this->m_perpesanan->selectNewStatus($this->userdata->idUser);

			$data = array(
				'notification' => $output,
				'unseen_notification'  => $count
			);
			echo json_encode($data);
		}
	}

	public function readInbox() {
		$idPesan = $_POST['idPesan'];
		$data['dataPesanInbox'] = $this->m_perpesanan->selectInboxMessage($idPesan);
		echo show_my_modal('modals/modal_lihat_inbox', 'lihat-inbox', $data);
	}

	public function readInboxNotif($idPesan) {
		$data['dataPesanInbox'] = $this->m_perpesanan->selectInboxMessage($idPesan);
		echo show_my_modal('modals/modal_lihat_inbox', 'lihat-inbox', $data);
	}

	public function readSent() {
		$idPesan = $_POST['idPesan'];
		$data['dataPesanSent'] = $this->m_perpesanan->selectSentMessage($idPesan);
		echo show_my_modal('modals/modal_lihat_sent', 'lihat-sent', $data);
	}

	// delete
	public function deleteInbox() {
		$idPesan = $_POST['idPesan'];
		$result = $this->m_perpesanan->deleteInbox($idPesan);

		if ($result > 0) {
			echo show_succ_msg('Pesan berhasil dihapus', '20px');
		} else {
			echo show_err_msg('Pesan gagal dihapus', '20px');
		}
	}

	public function deleteSomeInbox(){
		$result = 0;
		$arr_pesan = $_POST['arr_pesan'];
		for ($i=0; $i < count($arr_pesan); $i++) { 
			$result += $this->m_perpesanan->deleteInbox($arr_pesan[$i]);
		}
		if ($result > 0){
			echo show_succ_msg('Pesan berhasil dihapus', '20px');
		} else {
			echo show_err_msg('Pesan gagal dihapus', '20px');
		}
	}

	public function deleteAllInbox() {
		$idPenerima = $_POST['idPenerima'];
		$result = $this->m_perpesanan->deleteAllInbox($idPenerima);

		if ($result > 0) {
			echo show_succ_msg('Semua pesan berhasil dihapus', '20px');
		} else {
			echo show_err_msg('Semua pesan gagal dihapus', '20px');
		}
	}

	public function deleteSent() {
		$idPesan = $_POST['idPesan'];
		$result = $this->m_perpesanan->deleteSent($idPesan);

		if ($result > 0) {
			echo show_succ_msg('Pesan berhasil dihapus', '20px');
		} else {
			echo show_err_msg('Pesan gagal dihapus', '20px');
		}
	}

	public function deleteSomeSent(){
		$result = 0;
		$arr_pesan = $_POST['arr_pesan'];
		for ($i=0; $i < count($arr_pesan); $i++) { 
			$result += $this->m_perpesanan->deleteSent($arr_pesan[$i]);
		}
		if ($result > 0){
			echo show_succ_msg('Pesan berhasil dihapus', '20px');
		} else {
			echo show_err_msg('Pesan gagal dihapus', '20px');
		}
	}

	public function deleteAllSent() {
		$idPengirim = $_POST['idPengirim'];
		$result = $this->m_perpesanan->deleteAllSent($idPengirim);

		if ($result > 0) {
			echo show_succ_msg('Semua pesan berhasil dihapus', '20px');
		} else {
			echo show_err_msg('Semua pesan gagal dihapus', '20px');
		}
	}

	public function pesanOrderInbox(){
		if ($this->m_perpesanan->countRowsInbox() == 0){
			$lastDt = "000000000000";
		} else {
			$lastDt = $this->m_perpesanan->lastDataInbox();
		}
		$idUrut = (int)substr($lastDt, -12);
		$idUrut++;

		return sprintf("%012s", $idUrut);
	}

	public function pesanOrderSent(){
		if ($this->m_perpesanan->countRowsSent() == 0){
			$lastDt = "000000000000";
		} else {
			$lastDt = $this->m_perpesanan->lastDataInbox();
		}
		$idUrut = (int)substr($lastDt, -12);
		$idUrut++;

		return sprintf("%012s", $idUrut);
	}
}