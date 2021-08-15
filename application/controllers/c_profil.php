<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class c_profil extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('m_user');
	}

	public function index() {
		$data['userdata'] 		= $this->userdata;
		$data['dataDiri']		= $this->m_user->select_by_id($this->userdata->idUser);
		$data['jabatan'] 		= $this->m_user->getJabatan($this->userdata->idUser);
		
		$data['page'] 			= "profil";
		$data['judul'] 			= "Profil";
		$data['deskripsi'] 		= "Pengaturan Profil";
		$this->template->views('v_profil', $data);
	}

	public function ubahProfil() {
		$this->form_validation->set_rules('idUser', 'ID', 'trim|required');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');

		$id = $this->userdata->idUser;
		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './assets/img/';
			$config['allowed_types'] = 'jpg|png';
			
			$this->load->library('upload', $config);
			
			if (!$this->upload->do_upload('foto')){
				$error = array('error' => $this->upload->display_errors());
			} else {
				$data_foto = $this->upload->data();
				$data['foto'] = $data_foto['file_name'];
			}
			
			$result = $this->m_user->updateProfil($data, $id);
			if ($result > 0) {
				$this->updateSession();
				$out['msg'] = show_succ_msg('Data Profil berhasil diubah');
			} else {
				$cek = $this->m_user->select_by_id($this->userdata->idUser);
				if($data['nama'] == $cek->nama){
					$out['msg'] = show_err_msg('Belum ada data yang diubah');
				} else {
					$out['msg'] = show_err_msg('Data Profil gagal diubah');
				}
			}
		} else {
			$out['msg'] = show_err_msg(validation_errors());
		}
		echo json_encode($out);
	}

	public function ubahPassword() {
		$this->form_validation->set_rules('passLama', 'Password Lama', 'trim|required');
		$this->form_validation->set_rules('passBaru', 'Password Baru', 'trim|required');
		$this->form_validation->set_rules('passKonf', 'Password Konfirmasi', 'trim|required');

		$id = $this->userdata->idUser;
		if ($this->form_validation->run() == TRUE) {
			if (md5($this->input->post('passLama')) == $this->userdata->password) {
				if ($this->input->post('passBaru') != $this->input->post('passKonf')) {
					$out['msg'] = show_err_msg('Password Baru dan Konfirmasi Password harus sama');
				} else {
					$data['password'] = md5($this->input->post('passBaru'));
					$result = $this->m_user->updatePassword($data, $id);
					if ($result > 0) {
						$this->updateSession();
						$out['msg'] = show_succ_msg('Password berhasil diubah');
					} else {
						$out['msg'] = show_err_msg('Password gagal diubah');
					}
				}
			} else {
				$out['msg'] = show_err_msg('Password lama salah');
			}
		} else {
			$out['msg'] = show_err_msg(validation_errors());
		}
		echo json_encode($out);
	}
}

/* End of file c_profil.php */
/* Location: ./application/controllers/c_profil.php */