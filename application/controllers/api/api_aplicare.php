<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

require(APPPATH . '/libraries/RestController.php');

use chriskacerguis\RestServer\RestController;

class api_aplicare extends RestController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_aplicare');
        $this->load->model('m_ruang');
        $this->load->model('m_kelas');
        $this->load->model('m_ket_kelas');
    }

    public function index_get()
    {
        // $id = $this->get('id');
        // if ($id == '') {
        //     $kontak = $this->db->get('telepon')->result();
        // } else {
        //     $this->db->where('id', $id);
        //     $kontak = $this->db->get('telepon')->result();
        // }
        $aplicare = $this->m_aplicare->getBedBpjsAll();
        $this->response($aplicare, 200);
    }

    public function getBed_get()
    {
        $aplicare = $this->m_aplicare->getDataBedAll();
        $this->response($aplicare, 200);
    }

    public function getRuang_get()
    {
        $aplicare = $this->m_ruang->getDataRuangAll();
        $this->response($aplicare, 200);
    }

    public function getKelas_get()
    {
        $aplicare = $this->m_kelas->getDataKelasAll();
        $this->response($aplicare, 200);
    }

    public function getKetKelas_get()
    {
        $aplicare = $this->m_ket_kelas->getDataKeteranganKelasAll();
        $this->response($aplicare, 200);
    }
}
