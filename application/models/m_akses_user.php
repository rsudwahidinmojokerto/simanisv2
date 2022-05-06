<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_akses_user extends CI_Model
{
	public function getDataAksesUserAll()
	{
		$sql = "SELECT * FROM m_akses_user";
		$data = $this->db->query($sql);
		return $data->result();
	}
}
