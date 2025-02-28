<?php 

class Opdatarumahsakit extends CI_Controller {

    public function __construct()   {
        parent::__construct();
		$this->load->helper("url");
        $this->load->model('Mrumahsakit'); 
        $this->load->model('Mindikator');        
        $this->load->model('admin_model');  
        $this->load->library('session');
        if($this->session->userdata('logged') !=TRUE){
            $url=base_url('masuk');
            redirect($url);
		};
        
    }   

    public function index(){
  
    $data['jumlah']=$this->admin_model->sum_tidur();

   
    $bul     = $this->input->get('bulan');
    $tahun   = $this->input->get('tahun');

    // Gabungkan bulan dan tahun yang diterima dari pengguna menjadi sebuah string tanggal
    $bulan = $tahun . '-' . $bul . '-01';

if (!empty($bulan) && !empty($tahun)) {  
    // Periksa keberadaan data di tabel berdasarkan bulan dan ruangan yang diterima dari pengguna
    $exists = $this->Mrumahsakit->monet($bulan, $tahun);

    if ($exists) {
        // Data sudah ada dalam tabel, set $data_monet ke true
        $data['data_monet'] = true;
    } else {
        // Data belum ada dalam tabel, set $data_monet ke false
        $data['data_monet'] = false;
    }
} else {  
// Jika tidak ada data yang dipilih, set $data_monet ke true
    $bulan = 'tidak ada di pilih';
    $bul = date('M');
    $tahun = date('Y');  
    $bulan = $tahun . '-' . $bul . '-01';
    $data['data_monet'] = false;
}
   
    if((isset($_GET['bulan']) && $_GET['bulan']!='') && (isset($_GET['tahun']) && $_GET['tahun']!='')) {
        $bulan    = $_GET['bulan'];
        $tahun    = $_GET['tahun'];    
        // Menambahkan hari 01 ke tanggal untuk membentuk format yyyy-mm-dd
        $kalender = $tahun . '-' . $bulan . '-01';    
        $data['hasil_rekap'] = $this->Mindikator->getTotalRekap($bulan, $tahun);
    } else {  
        // Jika bulan dan tahun tidak disediakan, Anda bisa menetapkan nilai default di sini
        $bulan = date('m');
        $tahun = date('Y');
        $kalender = $tahun . '-' . $bulan . '-01';
    }
   
       $this->load->view('Aoperator/header');
       $this->load->view('Aoperator/sidebar');
	   $this->load->view('operator/VO_rumahsakit',$data);
       $this->load->view('Aoperator/footer');
    }


    public function register(){        

        $bulan          =$this->input->post('bulan');
        $tidur          =$this->input->post('tidur');
        $periode        =$this->input->post('periode');
        $petugas        =$this->input->post('petugas');

        $masuk          =$this->input->post('masuk');       
        $keluar         =$this->input->post('keluar');
        $mati           =$this->input->post('mati');
        $matikurang     =$this->input->post('matikurang');
        $matilebih      =$this->input->post('matilebih');
        $jlhkeluar      =$this->input->post('jlhkeluar');
        $lama           =$this->input->post('lama');
        $masukkeluar    =$this->input->post('masukkeluar');      
        $hp             =$this->input->post('hp');     

       

        $bor         =$this->input->post('bor');
        $avlos       =$this->input->post('avlos');
        $toi         =$this->input->post('toi');
        $bto         =$this->input->post('bto');      
        $ndr         =$this->input->post('ndr');
        $gdr         =$this->input->post('gdr');
        
        
        
        $data = array (
            'bulan'         => $bulan,            
            'tidur'          => $tidur,
            'petugas'       => $petugas,
            'periode'       => $periode, 

            'masuk'         => $masuk,     
            'keluar'        => $keluar,          
            'mati'          => $mati,
            'matikurang'    => $matikurang,
            'matilebih'     => $matilebih,
            'jlhkeluar'     => $jlhkeluar,
            'lama'          => $lama,
            'masukkeluar'   => $masukkeluar,         
            'hp'            => $hp,
           

            'bor'            => $bor,
            'avlos'          => $avlos,
            'toi'            => $toi,
            'bto'            => $bto,         
            'ndr'            => $ndr,
            'gdr'            => $gdr
            
        );

         // Cek
         if(empty($bulan) || empty($masuk) || empty($hp)) {
            $this->session->set_flashdata('error_message', 'Belum Ada Bulan dipilih! Pilihlah Bulan Sebelum melanjutkan!');
         
            redirect('Opdatarumahsakit');
        }
        
        // Cek apakah data sudah ada
        $data_exists = $this->Mrumahsakit->check_data_exists($bulan, $masuk, $keluar, $mati, $matikurang, $matilebih, $jlhkeluar, $lama, $hp, $masukkeluar);
        
        // Jika data sudah ada, tampilkan pesan dengan modal
        if($data_exists) {
            $this->session->set_flashdata('error_message', 'Data sudah ada!');
          
            redirect('Opdatarumahsakit');
        } else {
            // Jika tidak, simpan data dan tampilkan pesan sukses
            $this->Mrumahsakit->input_data($data,'datarumahsakit');
            $this->session->set_flashdata('success_message', 'Data Telah Di Approved');
        
            redirect('Opdatarumahsakit');
        }
}
}
