<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_bed extends CI_Model
{
	public function getAllDataBed()
	{
		$sql = "SELECT * FROM m_bed";
		$data = $this->db->query($sql);
		return $data->result_array();
	}

	public function getAllDataBedById($idBed)
	{
		$sql = "SELECT * FROM m_bed WHERE id_bed = '$idBed'";
		$data = $this->db->query($sql);
		return $data->result_array();
	}

	// public function getAllUnit()
	// {
	// 	$sql = "SELECT DISTINCT Unit FROM tm_kamar";
	// 	$data = $this->db->query($sql);
	// 	return $data->result_array();
	// }

	// public function getKamar($unit)
	// {
	// 	$sql = "SELECT * FROM tm_kamar WHERE Unit = '$unit'";
	// 	$data = $this->db->query($sql);
	// 	return $data->result_array();
	// }

	// public function getJumlahKamar($unit)
	// {
	// 	$sql = "SELECT COUNT(Unit) AS jumlahUnit FROM tm_kamar WHERE Unit = '$unit'";
	// 	$data = $this->db->query($sql);
	// 	return $data->row()->jumlahUnit;
	// }

	// public function getKelas($unit)
	// {
	// 	$sql = "SELECT DISTINCT Kelas FROM tm_kamar WHERE Unit = '$unit'";
	// 	$data = $this->db->query($sql);
	// 	return $data->result_array();
	// }

	// public function getJumlahKelas($unit)
	// {
	// 	$sql = "SELECT COUNT(DISTINCT Kelas) AS jumlahKelas FROM tm_kamar WHERE Unit = '$unit'";
	// 	$data = $this->db->query($sql);
	// 	return $data->row()->jumlahKelas;
	// }
}
