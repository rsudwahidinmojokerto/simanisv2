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
		return $data->row();
	}

	public function updateStatusBed($data)
	{
		$sql = "UPDATE m_bed SET status='" . $data['statusBed'] . "' WHERE id_bed='" . $data['idBed'] . "'";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}

	public function countBed($bed, $status)
	{
		$sql = "SELECT COUNT(*) as jumlah FROM m_bed WHERE id_ruang = '" . $bed . "' AND status = '$status'";
		$data = $this->db->query($sql);
		return $data->row();
	}

	public function countKelasBedTersedia($id_bed, $status = 'kosong')
	{
		$sql = "SELECT COUNT(*) as jumlah FROM m_bed WHERE id_bed LIKE '" . $id_bed . "%' AND status = '" . $status . "'";
		$data = $this->db->query($sql);
		return $data->row()->jumlah;
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
