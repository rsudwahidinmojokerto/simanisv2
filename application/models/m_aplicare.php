<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_aplicare extends CI_Model
{
	public function getBedBpjsAll()
	{
		$sql = "SELECT * FROM m_aplicare AS bpjs LEFT JOIN m_ruang AS ruang ON bpjs.koderuang = ruang.id_ruang LEFT JOIN m_kelas AS kelas ON bpjs.id_kelas = kelas.id_kelas ORDER BY bpjs.koderuang, bpjs.id_kelas";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function getBedBpjsByRuang($id_ruang)
	{
		$sql = "SELECT * FROM m_aplicare AS bpjs LEFT JOIN m_ruang AS ruang ON bpjs.koderuang = ruang.id_ruang LEFT JOIN m_kelas AS kelas ON bpjs.id_kelas = kelas.id_kelas WHERE koderuang = '$id_ruang' ORDER BY bpjs.koderuang, bpjs.id_kelas";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function getRuangBpjsByRuang($id_ruang)
	{
		$sql = "SELECT COUNT(koderuang) AS jumlah FROM m_aplicare WHERE koderuang = '$id_ruang'";
		$data = $this->db->query($sql);
		return $data->row()->jumlah;
	}

	// public function getCountRuangAll(){
	// 	$sql = "SELECT COUNT(DISTINCT(koderuang)) FROM m_aplicare";
	// 	$data = $this->db->query($sql);
	// 	return $data->row();
	// }

	// public function getCountRuangByRuang($id_ruang){
	// 	$sql = "SELECT COUNT(DISTINCT(koderuang)) FROM m_aplicare WHERE koderuang = '$id_ruang'";
	// 	$data = $this->db->query($sql);
	// 	return $data->row();
	// }

	public function getCountRuangAll()
	{
		$sql = "SELECT DISTINCT(m_aplicare.koderuang) AS koderuang, m_ruang.nama_ruang AS namaruang FROM m_aplicare JOIN m_ruang ON m_aplicare.koderuang = m_ruang.id_ruang";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function getCountRuangByRuang($id_ruang)
	{
		$sql = "SELECT DISTINCT(m_aplicare.koderuang) AS koderuang, m_ruang.nama_ruang AS namaruang FROM m_aplicare JOIN m_ruang ON m_aplicare.koderuang = m_ruang.id_ruang WHERE koderuang = '$id_ruang'";
		$data = $this->db->query($sql);
		return $data->result();
	}


	public function getRuangAplicareByKodeKelas($id_ruang, $id_kelas)
	{
		$sql = "SELECT kodekelas, koderuang, namaruang, kapasitas, tersedia FROM m_aplicare WHERE koderuang = '" . $id_ruang . "' AND id_kelas = '" . $id_kelas . "'";
		$data = $this->db->query($sql);
		return $data->result_array();
	}

	public function updateKapasitasBed($id_ruang, $id_kelas, $jmlBedTotal)
	{
		$sql = "UPDATE m_aplicare SET tersedia = $jmlBedTotal WHERE koderuang = '" . $id_ruang . "' AND id_kelas = '" . $id_kelas . "'";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}

	public function checkRuang($id_ruang, $id_kelas)
	{
		$sql = "SELECT * FROM m_aplicare WHERE koderuang = '" . $id_ruang . "' AND id_kelas = '" . $id_kelas . "'";
		$data = $this->db->query($sql);
		return $data->num_rows();
	}

	public function getDataRuang($idRuang)
	{
		$sql = "SELECT * FROM m_ruang WHERE id_ruang = '$idRuang'";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function getDataKelas($idKelas)
	{
		$sql = "SELECT * FROM m_kelas WHERE id_kelas = '$idKelas'";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function insertRuang($data)
	{
		$getDataRuang = $this->getDataRuang($data['idRuang']);
		$getDataKelas = $this->getDataKelas($data['idKelas']);
		$sql = "INSERT INTO m_aplicare VALUES ('', '" . $data['idRuang'] . "', '" . $getDataRuang[0]->nama_ruang . "-" . $getDataKelas[0]->id_kelas_aplicare . "', '" . $data['idKelas'] . "', " . $data['kapasitas'] . ", " . $data['tersedia'] . ", 0, 0, 0, '" . date("Y-m-d H:i:s") . "')";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}

	public function updateKetersediaanBed($id, $kapasitas, $tersedia)
	{
		$sql = "UPDATE m_aplicare SET kapasitas=" . $kapasitas . ", tersedia=" . $tersedia . ", update_terakhir='" . date("Y-m-d H:i:s") . "' WHERE koderuang='" . $id[0] . "' AND id_kelas='" . $id[1] . "'";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}

	public function deleteRuang($id)
	{
		$sql = "DELETE FROM m_aplicare WHERE koderuang='" . $id[0] . "' AND id_kelas='" . $id[1] . "'";
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
