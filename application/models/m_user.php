<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_user extends CI_Model
{

	public function getDataUserAll()
	{
		$sql = "SELECT * FROM m_user AS user LEFT JOIN m_ruang AS ruang ON user.id_ruang = ruang.id_ruang";
		$data = $this->db->query($sql);
		return $data->result();
	}




	// USER LAMA
	public function updateProfil($data, $id)
	{
		$this->db->where("idUser", $id);
		$this->db->update("users", $data);

		return $this->db->affected_rows();
	}

	public function updatePassword($data, $id)
	{
		$sql = "UPDATE users SET password='" . $data['password'] . "' WHERE idUser='$id'";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}

	public function getJabatan($idUser)
	{
		$sql = "SELECT grup.jabatan AS jabatan FROM grup, users WHERE grup.idGrup = users.idGrup AND users.idUser = '$idUser'";
		$data = $this->db->query($sql);
		return $data->row();
	}

	public function select_all($idGrup)
	{
		$sql = "SELECT * FROM users WHERE idGrup = '$idGrup'";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function selectPelangganByPenyuplai($idPenyuplai)
	{
		$sql = "SELECT * FROM users WHERE idGrup = 'JBT04' AND SUBSTRING(idUser, 3, 6) = SUBSTRING($idPenyuplai, -6)";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function id_last_data($idGrup)
	{
		$sql = "SELECT idUser FROM users WHERE idGrup = '$idGrup' ORDER BY SUBSTRING(idUser, -4) DESC LIMIT 1";
		$data = $this->db->query($sql);
		return $data->row()->idUser;
	}

	public function insert($data)
	{
		$sql = "INSERT INTO users VALUES('" . $data['idUser'] . "', '" . $data['nik'] . "', '" . $data['nama'] . "', '" . $data['password'] . "', '" . $data['idGrup'] . "', '" . $data['alamat'] . "', '" . $data['jk'] . "', '" . $data['email'] . "', '" . $data['telepon'] . "', '" . $data['foto'] . "')";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}

	public function select_by_id($id)
	{
		$sql = "SELECT * FROM users WHERE idUser = '$id'";
		$data = $this->db->query($sql);
		return $data->row();
	}

	public function select_alamat($id)
	{
		$sql = "SELECT alamat FROM users WHERE idUser = '$id'";
		$data = $this->db->query($sql);
		return $data->row()->alamat;
	}

	public function selectUserByIdSession($idUser)
	{
		$sql = "SELECT users.idUser AS idUser, users.nik AS nik, users.nama AS nama, users.password AS password, users.idGrup AS idGrup, users.alamat AS alamat, users.jenis_kelamin AS jenis_kelamin, users.email AS email, users.telepon AS telepon, users.foto AS foto, status_bayar.status AS status, status_bayar.metode AS metode FROM users LEFT JOIN status_bayar ON users.idUser = status_bayar.idUser WHERE users.idUser = '$idUser'";
		$data = $this->db->query($sql);
		return $data->row();
	}

	public function delete($id)
	{
		$sql = "DELETE FROM users WHERE idUser='" . $id . "'";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}

	public function update($data)
	{
		$sql = "UPDATE users SET idUser='" . $data['idUser'] . "', nik='" . $data['nik'] . "', nama='" . $data['nama'] . "', alamat='" . $data['alamat'] . "', jenis_kelamin='" . $data['jk'] . "', email='" . $data['email'] . "', telepon='" . $data['telepon'] . "' WHERE idUser='" . $data['id'] . "'";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}

	public function countPelanggan()
	{
		$sql = "SELECT * FROM users WHERE idGrup = 'JBT04'";
		$data = $this->db->query($sql);
		return $data->num_rows();
	}

	public function countPelangganById($idPenyuplai)
	{
		$sql = "SELECT * FROM users WHERE idGrup = 'JBT04' AND SUBSTRING(idUser, 3, 6) = SUBSTRING($idPenyuplai, -6)";
		$data = $this->db->query($sql);
		return $data->num_rows();
	}
}
