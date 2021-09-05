<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_kamar extends CI_Model
{
	public function getAllUnit()
	{
		$sql = "SELECT DISTINCT Unit FROM tm_kamar";
		$data = $this->db->query($sql);
		return $data->result_array();
	}

	public function getKamar($unit)
	{
		$sql = "SELECT * FROM tm_kamar WHERE Unit = '$unit'";
		$data = $this->db->query($sql);
		return $data->result_array();
	}

	public function getJumlahKamar($unit)
	{
		$sql = "SELECT COUNT(Unit) AS jumlahUnit FROM tm_kamar WHERE Unit = '$unit'";
		$data = $this->db->query($sql);
		return $data->row()->jumlahUnit;
	}

	public function getKelas($unit)
	{
		$sql = "SELECT DISTINCT Kelas FROM tm_kamar WHERE Unit = '$unit'";
		$data = $this->db->query($sql);
		return $data->result_array();
	}

	public function getJumlahKelas($unit)
	{
		$sql = "SELECT COUNT(DISTINCT Kelas) AS jumlahKelas FROM tm_kamar WHERE Unit = '$unit'";
		$data = $this->db->query($sql);
		return $data->row()->jumlahKelas;
	}
}
