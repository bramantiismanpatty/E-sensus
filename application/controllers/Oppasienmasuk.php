<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Oppasienmasuk extends CI_Controller {

    public function __construct()   {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper("url");
        $this->load->model('Mruangan');      
        $this->load->model('Mpasienmasuk');

        if($this->session->userdata('logged') !=TRUE){
            $url=base_url('masuk');
            redirect($url);
		};
    }

    public function index(){
        $data['kelas'] = $this->Mruangan->tampil_data()->result();

            
               $this->load->view('Aoperator/header');
               $this->load->view('Aoperator/sidebar');
               $this->load->view('operator/VO_pasienmasuk',$data);	
               $this->load->view('Aoperator/footer');
   }

    public function register() {
        $nomorm         = $this->input->post('nomorm');
        $reg            = $this->input->post('reg');
        $tgl_masuk      = $this->input->post('tgl_masuk');
        $namapasien     = $this->input->post('namapasien');
        $koderuangan    = $this->input->post('koderuangan');
        $namaruangan    = $this->input->post('namaruangan'); 
        $namakelas      = $this->input->post('namakelas');              
        $carabayar      = $this->input->post('carabayar');
        $status         = $this->input->post('status');
        $petugas        = $this->input->post('petugas');
        
        $data = array (
            'nomorm'        => $nomorm,
            'reg'           => $reg,
            'koderuangan'   => $koderuangan,
            'namaruangan'   => $namaruangan,
            'namakelas'     => $namakelas,
            'tgl_masuk'     => $tgl_masuk,
            'namapasien'    => $namapasien,
            'carabayar'     => $carabayar,
            'status'        => $status,
            'petugas'       => $petugas,
        );

        // Cek apakah koderuangan, namaruangan, namakelas kosong
        if(empty($koderuangan) || empty($namaruangan) || empty($namakelas)) {
            $this->session->set_flashdata('error_message', 'Belum Ada Ruangan dipilih ! ...Pilihlah Ruangan Sebelum melanjutkan!');
            redirect('Oppasienmasuk');
        }

        // Cek apakah data sudah ada
        $data_exists = $this->Mpasienmasuk->check_data_exists($tgl_masuk, $nomorm, $namapasien, $koderuangan,  $namaruangan, $namakelas);
        
        // Jika data sudah ada, tampilkan pesan dengan modal
        if($data_exists) {
            $this->session->set_flashdata('error_message', 'Data sudah ada!!');
            redirect('Oppasienmasuk');
        } else {
            // Jika tidak, simpan data dan tampilkan pesan sukses
            $this->Mpasienmasuk->input_data($data,'pasienmasuk');
            $this->session->set_flashdata('success_message', 'Berhasil disimpan!!');
            redirect('Oppasienmasuk');
        }
    }
}
?>
