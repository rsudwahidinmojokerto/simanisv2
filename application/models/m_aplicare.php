<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_aplicare extends CI_Model
{
	public function getRuangAplicareByKodeKelas($kodeRuang)
	{
		$sql = "SELECT kodekelas, koderuang, namaruang, kapasitas, tersedia FROM bed_available_bpjs WHERE koderuang = '$kodeRuang'";
		$data = $this->db->query($sql);
		return $data->result_array();
	}

	// public function getAllDataRuangById($idRuang)
	// {
	// 	$sql = "SELECT * FROM m_ruang WHERE id_ruang = '$idRuang'";
	// 	$data = $this->db->query($sql);
	// 	return $data->row();
	// }
}
