<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class m_tracer extends CI_Model
{
	public function getDataTracerAll()
	{
		$sql = "SELECT * FROM tracer ORDER BY id_temp DESC";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function getLastOrderNomorUser()
	{
		$sql = "SELECT MAX(param) AS hasil FROM tracer WHERE param LIKE 'US%'";
		$data = $this->db->query($sql);
		return $data->row()->hasil;
	}

	public function insertTracer($aksi, $param)
	{
		$user = $this->userdata->id_user;
		$sql = "INSERT INTO tracer VALUES('', '" . $user . "', '" . $aksi . "', '" . $param . "', '" . date("Y-m-d H:i:s") . "')";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}
}
