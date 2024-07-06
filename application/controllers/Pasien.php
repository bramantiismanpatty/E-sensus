<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Mdatapasien');
    }

    public function index() {
        $this->load->view('pasien_view2');
    }

    // Metode untuk mengambil data pasien berdasarkan nomor RM
    public function get_patient_data() {
        $nomor_rm = $this->input->get('nomorm'); // Menggunakan $_GET karena melakukan permintaan GET melalui AJAX
        $patient_data = $this->Mdatapasien->get_patient_data_by_rm($nomor_rm);
        
        if ($patient_data) {
            echo json_encode($patient_data); // Mengembalikan data pasien dalam format JSON
        } else {
            echo json_encode(array('error' => 'Data pasien tidak ditemukan')); // Mengembalikan pesan error dalam format JSON
        }
    }
}
?>
