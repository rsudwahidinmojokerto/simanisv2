<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_aplicare extends CI_Model
{
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
