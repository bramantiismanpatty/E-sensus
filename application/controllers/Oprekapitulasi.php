<?php 
class Oprekapitulasi extends CI_Controller {

    public function __construct()   {
        parent::__construct();
		$this->load->helper("url");
		$this->load->model('Sensus_model');
        $this->load->model('Mruangan');
        $this->load->model('Mkelas');
        $this->load->model('Mindikator');
        $this->load->library('session');

        if($this->session->userdata('logged') !=TRUE){
            $url=base_url('masuk');
            redirect($url);
		};
        
    }   

    public function index() {
        $data['kelas'] = $this->Mruangan->tampil_data()->result();
        
        $namaruangan = $this->input->get('namaruangan');
        $bul     = $this->input->get('bulan');
        $tahun   = $this->input->get('tahun');

        // Gabungkan bulan dan tahun yang diterima dari pengguna menjadi sebuah string tanggal
        $bulan = $tahun . '-' . $bul . '-01';

if (!empty($namaruangan) && !empty($bulan) && !empty($tahun)) {  
    // Periksa keberadaan data di tabel berdasarkan bulan dan ruangan yang diterima dari pengguna
    $exists = $this->Mindikator->monet($bulan, $namaruangan);

    if ($exists) {
        // Data sudah ada dalam tabel, set $data_monet ke true
        $data['data_monet'] = true;
    } else {
        // Data belum ada dalam tabel, set $data_monet ke false
        $data['data_monet'] = false;
    }
} else {  
    // Jika tidak ada data yang dipilih, set $data_monet ke true
    $namaruangan = 'tidak ada di pilih';
    $bul = date('M');
    $tahun = date('Y');  
    $bulan = $tahun . '-' . $bul . '-01';
    $data['data_monet'] = true;
   // $data['data_monet'] = false;
}

   
    if( (isset($_GET['namaruangan'])&& $_GET['namaruangan']!='')&&
        (isset($_GET['bulan'])  && $_GET['bulan']!='')&&
        (isset($_GET['tahun'])&& $_GET['tahun']!='')){                                       
        $namaruangan    = $_GET['namaruangan'];
        $bulan          = $_GET['bulan'];
        $tahun          = $_GET['tahun'];
        $kalender       = $tahun. '-' .$bulan . '-01';

        $data['hasil_rekap'] = $this->Sensus_model->getTotalRekap($namaruangan, $bulan, $tahun);
    }else{  
        $namaruangan = 'tidak ada di pilih';
        $bulan    = date('M') ;
        $tahun    = date('Y') ;  
        $kalender = $tahun. '-' .$bulan. '-01';     
   }

   $data['rekap'] = $this->db->query("SELECT ruangan.*
   FROM ruangan
   WHERE ruangan.namaruangan='$namaruangan'
   ORDER BY ruangan.namaruangan ASC")->result();
   
        $this->load->view('Aoperator/header');
        $this->load->view('Aoperator/sidebar');
		$this->load->view('Operator/VO_rekapitulasi',$data);
		$this->load->view('Aoperator/footer');
    
    }

    public function register(){        

        $bulan               =$this->input->post('bulan');
        $koderuangan         =$this->input->post('koderuangan');
        $namaruangan         =$this->input->post('namaruangan');
        $namakelas           =$this->input->post('namakelas'); 
        $tidur               =$this->input->post('tidur');

        $masuk               =$this->input->post('masuk');       
        $keluar              =$this->input->post('keluar');
        $mati                =$this->input->post('mati');
        $matikurang          =$this->input->post('matikurang');
        $matilebih           =$this->input->post('matilebih');
        $jlhkeluar           =$this->input->post('jlhkeluar');
        $lama                =$this->input->post('lama');
        $masukkeluar         =$this->input->post('masukkeluar');      
        $hp                  =$this->input->post('hp');
        $petugas             =$this->input->post('petugas');

        $periode             =$this->input->post('periode');

        $bor                 =$this->input->post('bor');
        $avlos               =$this->input->post('avlos');
        $toi                 =$this->input->post('toi');
        $bto                 =$this->input->post('bto');      
        $ndr                 =$this->input->post('ndr');
        $gdr                 =$this->input->post('gdr');
        
        
        $data = array (
            'bulan'                => $bulan,
            'koderuangan'          => $koderuangan,
            'namaruangan'          => $namaruangan,
            'namakelas'            => $namakelas,
            'tidur'                => $tidur, 

            'masuk'                => $masuk,     
            'keluar'               => $keluar,          
            'mati'                 => $mati,
            'matikurang'           => $matikurang,
            'matilebih'            => $matilebih,
            'jlhkeluar'            => $jlhkeluar,
            'lama'                 => $lama,
            'masukkeluar'          => $masukkeluar,         
            'hp'                   => $hp,
            'petugas'              => $petugas,

            'periode'              => $periode,

            'bor'                  => $bor,
            'avlos'                => $avlos,
            'toi'                  => $toi,
            'bto'                  => $bto,         
            'ndr'                  => $ndr,
            'gdr'                  => $gdr
            
        );
         // Cek
         if(empty($bulan) || empty($masuk) || empty($koderuangan)) {
          $this->session->set_flashdata('error_message', 'Belum Ada Bulan dipilih! Pilihlah Bulan Sebelum melanjutkan!');      
          redirect('Oprekapitulasi');  
      }
      
      // Cek apakah data sudah ada
      $data_exists = $this->Mindikator->check_data_exists(
        $bulan,
        $koderuangan,
        $namaruangan,
        $namakelas,
        $tidur,
        $masuk,
        $keluar,
        $mati,
        $matikurang,
        $matilebih,
        $jlhkeluar,
        $lama,
        $hp,
        $masukkeluar);
      
      // Jika data sudah ada, tampilkan pesan dengan modal
      if($data_exists) {
          $this->session->set_flashdata('error_message', 'Data sudah ada!');        
          redirect('Oprekapitulasi');
      } else {
          // Jika tidak, simpan data dan tampilkan pesan sukses
          $this->Mindikator->input_data($data,'indikator');
          $this->session->set_flashdata('success_message', 'Data Telah Di Approved !');       
          redirect('Oprekapitulasi');
      }
      
    }

    
}
