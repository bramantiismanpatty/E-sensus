<?php 

class Druangan extends CI_Controller {

    public function __construct()   {
    parent::__construct();
        $this->load->helper("url");
        $this->load->model('Mruangan');
        $this->load->model('Mkelas');

        if($this->session->userdata('logged') !=TRUE){
            $url=base_url('masuk');
            redirect($url);
		};
    }   

    public function index(){
        $data['kls'] = $this->Mkelas->tampil_data()->result();
        $this->load->view('Aadmin/Header');
        $this->load->view('Aadmin/Sidebar');
        $this->load->view('admin/Vruangan',$data);
        $this->load->view('Aadmin/Footer');
    }

    public function registrasi() {
        $koderuangan    = $this->input->post('koderuangan');
        $namaruangan    = $this->input->post('namaruangan');
        $namakelas      = $this->input->post('namakelas');
        $tidur          = $this->input->post('tidur');


        // Mengecek apakah data dengan kode yang sama sudah ada
        $is_data_exist = $this->Mkelas->check_data_exist($koderuangan);

        if ($is_data_exist) {
            // Menyiapkan pesan untuk ditampilkan di Tkelas
            $pesan = array(
                'status' => 'error',
                'message' => 'Data dengan kode ruangan ' . $koderuangan . ' sudah ada.'
            );

            // Menggunakan session untuk menyimpan pesan
            $this->session->set_flashdata('pesan', $pesan);
        } else {
            // Data belum ada, simpan data
            $data = array(

                'koderuangan'   => $koderuangan,
                'namaruangan'   => $namaruangan,
                'namakelas'     => $namakelas,
                'tidur'         => $tidur,
            );

            // Memanggil model Mkelas untuk menyimpan data
            $this->Mruangan->input_data($data, 'ruangan');

            // Menyiapkan pesan untuk ditampilkan di Tkelas
            $pesan = array(
                'status' => 'success',
                'message' => 'Data ruangan berhasil disimpan.'
            );

            // Menggunakan session untuk menyimpan pesan
            $this->session->set_flashdata('pesan', $pesan);
            $this->session->set_flashdata('success_message', 'Data telah Di Simpan!');
        }     
        redirect('Druangan');
    
           
        
    }
}
?>