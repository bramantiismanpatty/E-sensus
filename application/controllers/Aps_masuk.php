<?php 

class Aps_masuk extends CI_Controller {

    public function __construct()   {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper("url");
        $this->load->model('Mruangan');      
        $this->load->model('Mpasienmasuk');
    }

    public function index(){
        $data['kelas'] = $this->Mruangan->tampil_data()->result();

            
               $this->load->view('Aadmin/header');
               $this->load->view('Aadmin/sidebar');
               $this->load->view('admin/Vpasienmasuk',$data);	
               $this->load->view('Aadmin/footer');
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
            redirect('Aps_masuk');
        }

        // Cek apakah data sudah ada
        $data_exists = $this->Mpasienmasuk->check_data_exists($tgl_masuk, $nomorm, $namapasien, $koderuangan,  $namaruangan, $namakelas);
        
        // Jika data sudah ada, tampilkan pesan dengan modal
        if($data_exists) {
            $this->session->set_flashdata('error_message', 'Data sudah ada!!');
            redirect('Aps_masuk');
        } else {
            // Jika tidak, simpan data dan tampilkan pesan sukses
            $this->Mpasienmasuk->input_data($data,'pasienmasuk');
            $this->session->set_flashdata('success_message', 'Berhasil disimpan!!');
            redirect('Aps_masuk');
        }
    }
}
?>

