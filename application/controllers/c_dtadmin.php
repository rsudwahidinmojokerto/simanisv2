<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class c_dtadmin extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('m_user');
	}

	public function index() {
		$data['userdata'] 	= $this->userdata;
		$cekAkses 			= $this->userdata->idGrup; 
		if($cekAkses == 'JBT01'){
			$data['page'] 		= "dt_admin";
			$data['judul'] 		= "Data Administrator";
			$data['deskripsi'] 	= "Manajemen Data Administrator";

			$this->template->views('v_dataAdmin/home', $data);
		} else {
			$data['page'] 		= "error403";
			$this->output->set_status_header('403');
			$this->template->views('error403', $data);
		}
	}

	public function tampil() {
		$data['dataAdmin'] = $this->m_user->select_all("JBT01");
		$this->load->view('v_dataAdmin/list_data', $data);
	}

	public function update() {
		$id = trim($_POST['idUser']);
		$data['dataAdmin'] = $this->m_user->select_by_id($id);
		$alamat = $this->m_user->select_alamat($id);
		$data['dataAlamat'] = explode(' ', $alamat);
		echo show_my_modal('modals/modal_update_admin', 'update-admin', $data);
	}

	public function prosesUpdate() {
		$this->form_validation->set_rules('id', 'ID', 'trim|required');
		$this->form_validation->set_rules('nik', 'NIK', 'trim|required');
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'trim|required');
		$this->form_validation->set_rules('jalan', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('rt', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('rw', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('dusun', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('email', 'E-mail', 'trim|required');
		$this->form_validation->set_rules('telepon', 'Telepon', 'trim|required');

		$data = $this->input->post();
		$data['idUser'] = "0101";
		$data['alamat'] = "Jalan ".$data['jalan']." RT ".$data['rt']." RW ".$data['rw'].", Dusun ".$data['dusun'];
		if ($this->form_validation->run() == TRUE) {
			$result = $this->m_user->update($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data Administrator Berhasil diubah', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Data Administrator Gagal diubah', '20px');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}
		echo json_encode($out);
	}
}