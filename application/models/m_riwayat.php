<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_riwayat extends CI_Model {
	public function selectRiwayatBayarByDateRangePrint($tanggalAwal, $tanggalAkhir){
		$sql = "SELECT * FROM pembayaran WHERE (STR_TO_DATE(SUBSTRING(tanggal, 1, 10), '%d/%m/%Y') BETWEEN STR_TO_DATE('$tanggalAwal', '%d/%m/%Y') AND STR_TO_DATE('$tanggalAkhir', '%d/%m/%Y'))";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function selectRiwayatBayarByIdPrint($idUser){
		$sql = "SELECT * FROM pembayaran WHERE idUser='$idUser'";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function selectRiwayatBayarById($idUser){
		$sql = "SELECT idBayar, idUser, jumlah_bayar, tanggal FROM pembayaran WHERE idUser='$idUser'";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function selectRiwayatBayar(){
		$sql = "SELECT idBayar, idUser, jumlah_bayar, tanggal FROM pembayaran";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function selectRiwayatGuna(){
		$sql = "SELECT idBayar, idUser, daya, tanggal FROM pembayaran";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function selectRiwayatGunaById($idUser){
		$sql = "SELECT idBayar, idUser, daya, tanggal FROM pembayaran WHERE idUser='$idUser'";
		$data = $this->db->query($sql);
		return $data->result();
	}
}