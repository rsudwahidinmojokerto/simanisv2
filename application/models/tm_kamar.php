<?php
defined('BASEPATH') or exit('No direct script access allowed');

class tm_kamar extends CI_Model
{

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

	public function cekVolume($idUser)
	{
		$sql = "SELECT SUM(message) AS volume FROM flowtemp WHERE idUSer = '$idUser'";
		$data = $this->db->query($sql);
		return $data->row()->volume;
	}

	public function insertTagihan($data)
	{
		$sql = "INSERT INTO tagihan VALUES('" . $data['idTagihan'] . "', '" . $data['idUser'] . "', " . $data['tagihan'] . ", " . $data['daya'] . ", '" . $data['status'] . "')";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}

	public function insertBuktiTransfer($data)
	{
		$sql = "INSERT INTO bayar_transfer VALUES('" . $data['idTagihan'] . "', '" . $data['norek'] . "', '" . $data['namarek'] . "', '" . $data['jmltrf'] . "', '" . $data['bukti'] . "')";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}

	public function selectBuktiTagihan($idTagihan)
	{
		$sql = "SELECT * FROM bayar_transfer WHERE idTagihan = '$idTagihan'";
		$data = $this->db->query($sql);
		return $data->row();
	}

	public function deleteTagihan($idTagihan)
	{
		$sql = "DELETE FROM tagihan WHERE idTagihan='" . $idTagihan . "'";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}

	public function selectTagihan()
	{
		$sql = "SELECT tagihan.idTagihan AS idTagihan, tagihan.idUser AS idUser, users.nama AS nama, tagihan.jumlah_tagihan AS tagihan, tagihan.daya AS daya, status_bayar.status AS status, status_bayar.metode AS metode FROM tagihan JOIN users ON tagihan.idUser = users.idUser JOIN status_bayar ON tagihan.idUser = status_bayar.idUser WHERE tagihan.status = 'belum_lunas'";
		$data = $this->db->query($sql);
		return $data->result();
	}

	public function selectTagihanById($idUser)
	{
		$sql = "SELECT tagihan.idTagihan AS idTagihan, tagihan.idUser AS idUser, users.nama AS nama, tagihan.jumlah_tagihan AS tagihan, tagihan.daya AS daya, status_bayar.status AS status, status_bayar.metode AS metode FROM tagihan JOIN users ON tagihan.idUser = users.idUser JOIN status_bayar ON tagihan.idUser = status_bayar.idUser WHERE users.idUser = '" . $idUser . "' ORDER BY tagihan.idTagihan DESC LIMIT 1";
		$data = $this->db->query($sql);
		return $data->row();
	}

	public function lastDataTagihan()
	{
		$sql = "SELECT idTagihan FROM tagihan ORDER BY SUBSTRING(idTagihan, -12) DESC LIMIT 1";
		$data = $this->db->query($sql);
		return $data->row()->idTagihan;
	}

	public function countRowsTagihan()
	{
		$sql = "SELECT * FROM tagihan";
		$data = $this->db->query($sql);
		return $data->num_rows();
	}

	public function resetFlow($id)
	{
		$sql = "DELETE FROM flowtemp WHERE idUser='" . $id . "'";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}

	// CRUD Status
	public function insertStatus($idUser)
	{
		$sql = "INSERT INTO status_bayar VALUES('" . $idUser . "', 'terbuka', '-')";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}

	public function selectStatus($idUser)
	{
		$sql = "SELECT status FROM status_bayar WHERE idUser='" . $idUser . "'";
		$data = $this->db->query($sql);
		return $data->row();
	}

	public function updateStatus($idUser, $status, $metode)
	{
		$sql = "UPDATE status_bayar SET status='" . $status . "', metode='" . $metode . "' WHERE idUser='" . $idUser . "'";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}

	public function deleteStatus($idUser)
	{
		$sql = "DELETE FROM status_bayar WHERE idUser='" . $idUser . "'";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}
	////////

	//BAYAR
	public function lastDataBayar()
	{
		$sql = "SELECT MAX(idBayar) AS idBayar FROM pembayaran";
		$data = $this->db->query($sql);
		return $data->row()->idBayar;
	}

	public function countRowsBayar()
	{
		$sql = "SELECT * FROM pembayaran";
		$data = $this->db->query($sql);
		return $data->num_rows();
	}

	public function insertBayar($data)
	{
		$sql = "INSERT INTO pembayaran VALUES('" . $data['idBayar'] . "', '" . $data['idUser'] . "', " . $data['bayar'] . ", " . $data['daya'] . ", '" . $data['tanggal'] . "')";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}

	public function updateStatusTagihan($data)
	{
		$sql = "UPDATE tagihan SET status='" . $data['status'] . "' WHERE idTagihan='" . $data['idTagihan'] . "'";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}

	/////statistik
	public function selectBayarByDate($data)
	{
		$sql = "SELECT SUM(IF(tanggal LIKE '%/" . $data['tanggal'] . "/%', jumlah_bayar, 0)) AS total FROM pembayaran";
		$data = $this->db->query($sql);
		return $data->row()->total;
	}

	public function selectBayarByDateAndId($data)
	{
		$sql = "SELECT SUM(IF(tanggal LIKE '%/" . $data['tanggal'] . "/" . $data['tahun'] . "%', jumlah_bayar, 0)) AS total FROM pembayaran WHERE idUser = '" . $data['idUser'] . "'";
		$data = $this->db->query($sql);
		return $data->row()->total;
	}
	public function selectDayaByDateAndId($data)
	{
		$sql = "SELECT SUM(IF(tanggal LIKE '%/" . $data['tanggal'] . "/%', daya, 0)) AS total FROM pembayaran WHERE SUBSTRING(idUser, 3, 6) = '" . $data['idPenyuplai'] . "'";
		$data = $this->db->query($sql);
		return $data->row()->total;
	}
}
