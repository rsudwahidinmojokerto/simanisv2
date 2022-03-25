<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_ket_kelas extends CI_Model
{

	public function getDataKeteranganKelasAll()
	{
		$sql = "SELECT * FROM m_ket_kelas";
		$data = $this->db->query($sql);
		return $data->result();
	}

	// public function getDataKelasByIdKelas($idKelas)
	// {
	// 	$sql = "SELECT * FROM m_kelas WHERE id_kelas = '$idKelas'";
	// 	$data = $this->db->query($sql);
	// 	return $data->row();
	// }
}
