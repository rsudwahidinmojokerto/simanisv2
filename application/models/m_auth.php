<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_auth extends CI_Model
{
	public function login($username, $password)
	{
		$sql = "SELECT * FROM m_user INNER JOIN m_ruang ON m_user.id_ruang = m_ruang.id_ruang WHERE m_user.username = '$username' AND m_user.password = MD5('$password')";
		$data = $this->db->query($sql);

		if ($data->num_rows() == 1) {
			return $data->row();
		} else {
			return false;
		}
	}

	// public function login($idUser, $password)
	// {
	// 	$sql = "SELECT users.idUser AS idUser, users.nik AS nik, users.nama AS nama, users.password AS password, users.idGrup AS idGrup, users.alamat AS alamat, users.jenis_kelamin AS jenis_kelamin, users.email AS email, users.telepon AS telepon, users.foto AS foto, status_bayar.status AS status, status_bayar.metode AS metode FROM users LEFT JOIN status_bayar ON users.idUser = status_bayar.idUser WHERE users.idUser = '$idUser' AND users.password = MD5('$password')";
	// 	$data = $this->db->query($sql);

	// 	if ($data->num_rows() == 1) {
	// 		return $data->row();
	// 	} else {
	// 		return false;
	// 	}
	// }
}

/* End of file M_auth.php */
/* Location: ./application/models/M_auth.php */