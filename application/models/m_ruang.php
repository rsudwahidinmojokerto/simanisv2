<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_ruang extends CI_Model
{
	public function getAllDataRuang()
	{
		$sql = "SELECT * FROM m_ruang";
		$data = $this->db->query($sql);
		return $data->result_array();
	}

	public function getAllDataRuangById($idRuang)
	{
		$sql = "SELECT * FROM m_ruang WHERE id_ruang = '$idRuang'";
		$data = $this->db->query($sql);
		return $data->row();
	}
}
