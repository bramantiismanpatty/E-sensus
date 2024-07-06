<?php 

class Dkelas extends CI_Controller {

    public function __construct()   {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper("url");
        $this->load->model('Mkelas');

        if($this->session->userdata('logged') !=TRUE){
            $url=base_url('masuk');
            redirect($url);
		};
        
    }   

    public function index(){
        $this->load->view('Aadmin/Header');
        $this->load->view('Aadmin/Sidebar');
        $this->load->view('admin/Vkelas');
        $this->load->view('Aadmin/Footer');

    }

    public function register() {
        $kodekelas  = $this->input->post('kodekelas');
        $namakelas  = $this->input->post('namakelas');
        $tidur      = $this->input->post('tidur');

        // Mengecek apakah data dengan kode yang sama sudah ada
        $is_data_exist = $this->Mkelas->check_data_exist($kodekelas);

        if ($is_data_exist) {
            // Menyiapkan pesan untuk ditampilkan di Tkelas
            $pesan = array(
                'status' => 'error',
                'message' => 'Data dengan kode kelas ' . $kodekelas . ' sudah ada.'
            );

            // Menggunakan session untuk menyimpan pesan
            $this->session->set_flashdata('pesan', $pesan);
        } else {
            // Data belum ada, simpan data
            $data = array(
                'kodekelas' => $kodekelas,
                'namakelas' => $namakelas,
                'tidur'     => $tidur,
            );

            // Memanggil model Mkelas untuk menyimpan data
            $this->Mkelas->input_data($data, 'kelas');

            // Menyiapkan pesan untuk ditampilkan di Tkelas
            $pesan = array(
                'status' => 'success',
                'message' => 'Data kelas berhasil disimpan.'
            );

            // Menggunakan session untuk menyimpan pesan
            $this->session->set_flashdata('pesan', $pesan);
            $this->session->set_flashdata('success_message', 'Data telah Di Simpan!');
        }     
        redirect('Dkelas');
    }
  
}
?>

