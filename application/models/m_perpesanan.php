<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_perpesanan extends CI_Model {
	public function insertIntoInbox($data){
		$sql = "INSERT INTO kotak_masuk VALUES('".$data['idPesanInbox']."', '".$data['idPenerima']."', '".$data['idPengirim']."', '".$data['subjek']."', '".$data['pesan']."', '".$data['tanggal']."', '".$data['status']."')";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}

	public function sendMessage($data){
		$sql = "INSERT INTO kotak_keluar VALUES('".$data['idPesanSent']."', '".$data['idPengirim']."', '".$data['idPenerima']."', '".$data['subjek']."', '".$data['pesan']."', '".$data['tanggal']."')";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}

	public function deleteInbox($idPesan){
		$sql = "DELETE FROM kotak_masuk WHERE idPesan='$idPesan'";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}

	public function deleteAllInbox($idPenerima){
		$sql = "DELETE FROM kotak_masuk WHERE idPenerima = '$idPenerima'";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}

	public function deleteSent($idPesan){
		$sql = "DELETE FROM kotak_keluar WHERE idPesan='$idPesan'";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}

	public function deleteAllSent($idPengirim){
		$sql = "DELETE FROM kotak_keluar WHERE idPengirim = '$idPengirim'";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}

	public function selectInbox($idPenerima){
		$sql = "SELECT kotak_masuk.idPesan AS idPesan, users.nama AS nama_pengirim, kotak_masuk.isi AS isi, kotak_masuk.tanggal AS tanggal FROM users, kotak_masuk WHERE users.idUser = kotak_masuk.idPengirim AND idPenerima='$idPenerima' ORDER BY STR_TO_DATE(kotak_masuk.tanggal, '%d/%m/%Y %H:%i:%s') DESC";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function selectSent($idPengirim){
		$sql = "SELECT kotak_keluar.idPesan AS idPesan, users.nama AS nama_penerima, kotak_keluar.isi AS isi, kotak_keluar.tanggal AS tanggal FROM users, kotak_keluar WHERE users.idUser = kotak_keluar.idPenerima AND idPengirim='$idPengirim' ORDER BY STR_TO_DATE(kotak_keluar.tanggal, '%d/%m/%Y %H:%i:%s') DESC";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function selectInboxMessage($idPesan){
		$sql = "SELECT kotak_masuk.idPengirim AS idPengirim, users.nama AS nama_pengirim, kotak_masuk.subjek AS subjek, kotak_masuk.isi AS isi FROM users, kotak_masuk WHERE users.idUser = kotak_masuk.idPengirim AND idPesan='$idPesan'";
		$data = $this->db->query($sql);
		return $data->row();
	}

	public function selectSentMessage($idPesan){
		$sql = "SELECT kotak_keluar.idPenerima AS idPenerima, users.nama AS nama_penerima, kotak_keluar.subjek AS subjek, kotak_keluar.isi AS isi FROM users, kotak_keluar WHERE users.idUser = kotak_keluar.idPenerima AND idPesan='$idPesan'";
		$data = $this->db->query($sql);
		return $data->row();
	}

	public function updateToOldStatus($idPenerima){
		$sql = "UPDATE kotak_masuk SET status = 'lama' WHERE status = 'baru' AND idPenerima = '$idPenerima'";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}

	public function selectForNotif($idPenerima){
		$sql = "SELECT * FROM kotak_masuk JOIN users ON kotak_masuk.idPengirim = users.idUser AND idPenerima = '$idPenerima' ORDER BY idPesan DESC LIMIT 5";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function selectNewStatus($idPenerima){
		$sql = "SELECT * FROM kotak_masuk WHERE status = 'baru' AND idPenerima = '$idPenerima'";
		$data = $this->db->query($sql);
		return $data->num_rows();
	}

	public function countRowsInbox(){
		$sql = "SELECT * FROM kotak_masuk";
		$data = $this->db->query($sql);
		return $data->num_rows();
	}

	public function lastDataInbox(){
		$sql = "SELECT idPesan FROM kotak_masuk ORDER BY SUBSTRING(idPesan, -12) DESC LIMIT 1";
		$data = $this->db->query($sql);
		return $data->row()->idPesan;
	}

	public function countRowsSent(){
		$sql = "SELECT * FROM kotak_keluar";
		$data = $this->db->query($sql);
		return $data->num_rows();
	}

	public function lastDataSent(){
		$sql = "SELECT idPesan FROM kotak_keluar ORDER BY SUBSTRING(idPesan, -12) DESC LIMIT 1";
		$data = $this->db->query($sql);
		return $data->row()->idPesan;
	}
}