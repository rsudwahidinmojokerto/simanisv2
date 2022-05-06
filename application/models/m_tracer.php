<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_tracer extends CI_Model
{
	public function getLastOrderNomorUser()
	{
		$sql = "SELECT MAX(param) AS hasil FROM tracer WHERE param LIKE 'US%'";
		$data = $this->db->query($sql);
		return $data->row()->hasil;
	}

	public function insertTracer($aksi, $param)
	{
		$user = $this->userdata->id_user;
		$sql = "INSERT INTO tracer VALUES('', '" . $user . "', '" . $aksi . "', '" . $param . "', '')";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}

	// public function getDataRuangByIdRuang($idRuang)
	// {
	// 	$sql = "SELECT * FROM m_ruang WHERE id_ruang = '$idRuang'";
	// 	$data = $this->db->query($sql);
	// 	return $data->row();
	// }
}
