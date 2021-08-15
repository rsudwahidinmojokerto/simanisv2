<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_harga extends CI_Model {
	public function select_all(){
		$sql = "SELECT * FROM harga";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function updateHarga($idUser, $harga, $tanggal){
		$sql = "INSERT INTO harga VALUES('', '".$idUser."', '".$harga."', '".$tanggal."')";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}
	
	public function lastPrice(){
		$sql = "SELECT harga FROM harga ORDER BY idHarga DESC LIMIT 1";
		$data = $this->db->query($sql);
		$error = $this->db->error();
		return $data->row()->harga;
	}
}