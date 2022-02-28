<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_aplicare extends CI_Model
{
	public function getBedBpjsAll()
	{
		// $sql = "SELECT * FROM bed_available_bpjs";
		$sql = "SELECT * FROM bed_available_bpjs AS bpjs LEFT JOIN m_ruang AS ruang ON bpjs.koderuang = ruang.id_ruang LEFT JOIN m_kelas AS kelas ON bpjs.id_kelas = kelas.id_kelas";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function getBedBpjsByRuang($id_ruang)
	{
		// $sql = "SELECT * FROM bed_available_bpjs WHERE koderuang = '$id_ruang'";
		$sql = "SELECT * FROM bed_available_bpjs AS bpjs LEFT JOIN m_ruang AS ruang ON bpjs.koderuang = ruang.id_ruang LEFT JOIN m_kelas AS kelas ON bpjs.id_kelas = kelas.id_kelas WHERE koderuang = '$id_ruang'";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function getRuangBpjsByRuang($id_ruang)
	{
		$sql = "SELECT COUNT(koderuang) AS jumlah FROM bed_available_bpjs WHERE koderuang = '$id_ruang'";
		$data = $this->db->query($sql);
		return $data->row()->jumlah;
	}

	// public function getCountRuangAll(){
	// 	$sql = "SELECT COUNT(DISTINCT(koderuang)) FROM bed_available_bpjs";
	// 	$data = $this->db->query($sql);
	// 	return $data->row();
	// }

	// public function getCountRuangByRuang($id_ruang){
	// 	$sql = "SELECT COUNT(DISTINCT(koderuang)) FROM bed_available_bpjs WHERE koderuang = '$id_ruang'";
	// 	$data = $this->db->query($sql);
	// 	return $data->row();
	// }

	public function getCountRuangAll()
	{
		$sql = "SELECT DISTINCT(bed_available_bpjs.koderuang) AS koderuang, m_ruang.nama_ruang AS namaruang FROM bed_available_bpjs JOIN m_ruang ON bed_available_bpjs.koderuang = m_ruang.id_ruang";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function getCountRuangByRuang($id_ruang)
	{
		$sql = "SELECT DISTINCT(bed_available_bpjs.koderuang) AS koderuang, m_ruang.nama_ruang AS namaruang FROM bed_available_bpjs JOIN m_ruang ON bed_available_bpjs.koderuang = m_ruang.id_ruang WHERE koderuang = '$id_ruang'";
		$data = $this->db->query($sql);
		return $data->result();
	}


	public function getRuangAplicareByKodeKelas($id_ruang, $id_kelas)
	{
		$sql = "SELECT kodekelas, koderuang, namaruang, kapasitas, tersedia FROM bed_available_bpjs WHERE koderuang = '" . $id_ruang . "' AND id_kelas = '" . $id_kelas . "'";
		$data = $this->db->query($sql);
		return $data->result_array();
	}

	public function updateKapasitasBed($id_ruang, $id_kelas, $jmlBedTotal)
	{
		$sql = "UPDATE bed_available_bpjs SET tersedia = $jmlBedTotal WHERE koderuang = '" . $id_ruang . "' AND id_kelas = '" . $id_kelas . "'";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}

	public function checkRuang($id_ruang, $id_kelas)
	{
		$sql = "SELECT * FROM bed_available_bpjs WHERE koderuang = '" . $id_ruang . "' AND id_kelas = '" . $id_kelas . "'";
		$data = $this->db->query($sql);
		return $data->num_rows();
	}

	public function insertRuang($data)
	{
		$sql = "INSERT INTO users VALUES(, '" . $data['nik'] . "', '" . $data['nama'] . "', '" . $data['password'] . "', '" . $data['idGrup'] . "', '" . $data['alamat'] . "', '" . $data['jk'] . "', '" . $data['email'] . "', '" . $data['telepon'] . "', '" . $data['foto'] . "')";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}


	// public function countKelasBed($id_bed)
	// {
	// 	$sql = "SELECT COUNT(*) as jumlahKelasBed FROM m_bed WHERE id_ruang = '" . $id_bed . "' AND id_kelas = '" . $id_kelas . "' AND status = 'terisi'";
	// 	$data = $this->db->query($sql);
	// 	return $data->row();
	// }

	// public function getAllDataRuangById($idRuang)
	// {
	// 	$sql = "SELECT * FROM m_ruang WHERE id_ruang = '$idRuang'";
	// 	$data = $this->db->query($sql);
	// 	return $data->row();
	// }
}
