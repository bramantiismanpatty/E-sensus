<?php
class Minidikator extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function monet($bulan, $namaruangan) {
        $this->db->where('bulan', $bulan);
        $this->db->where('namaruangan', $namaruangan);
        $query = $this->db->get('indikator');
        return $query->num_rows() > 0;
    }

    public function check_data_exists($bulan, $koderuangan, $namaruangan, $namakelas, $tidur, $masuk, $keluar, $mati, $matikurang, $matilebih, $jlhkeluar, $lama, $hp, $masukkeluar) {
        $this->db->where('bulan', $bulan);
        $this->db->where('koderuangan', $koderuangan);
        $this->db->where('namaruangan', $namaruangan);
        $this->db->where('namakelas', $namakelas);
        $this->db->where('tidur', $tidur);
        $this->db->where('masuk', $masuk);
        $this->db->where('keluar', $keluar);
        $this->db->where('mati', $mati);
        $this->db->where('matikurang', $matikurang);
        $this->db->where('matilebih', $matilebih);
        $this->db->where('jlhkeluar', $jlhkeluar);
        $this->db->where('lama', $lama);
        $this->db->where('hp', $hp);
        $this->db->where('masukkeluar', $masukkeluar);
        $query = $this->db->get('indikator');

        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return false;
        }
    }

    public function input_data($data, $table) {
        $this->db->insert($table, $data);
    }
}
