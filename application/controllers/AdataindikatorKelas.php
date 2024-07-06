<?php 

class AdataindikatorKelas extends CI_Controller {

    public function __construct()   {
        parent::__construct();
		$this->load->helper("url");		
        $this->load->model('Mkelas'); 
        $this->load->model('Mindikator');       
        $this->load->model('Mindikatorkelas');

        if($this->session->userdata('logged') !=TRUE){
            $url=base_url('masuk');
            redirect($url);
		};
        
    }   

    public function index(){
        $data['kelas'] = $this->Mkelas->tampil_data()->result(); 

        if( (isset($_GET['namakelas'])  && $_GET['namakelas']!='')&&
        (isset($_GET['bulan'])  && $_GET['bulan']!='')&&
        (isset($_GET['tahun'])&& $_GET['tahun']!='')){                                       
            $namakelas    = $_GET['namakelas'];
            $bulan    = $_GET['bulan'];
            $tahun    = $_GET['tahun'];
            $kalender = $tahun . '-' . $bulan . '-01';
    
        $data['hasil_rekap'] = $this->Mindikatorkelas->getTotalRekap($namakelas, $bulan, $tahun);
    }else{  
            $namakelas = 'tidak ada di pilih';
            $bulan = date('M') ;
            $tahun= date('Y') ;  
            $kalender = $tahun . '-' . $bulan . '-01';     
       }

       $data['rekap'] = $this->db->query("SELECT kelas.*
       FROM kelas 
       WHERE kelas.namakelas='$namakelas' 
       ORDER BY kelas.namakelas ASC")->result();

       
        $this->load->view('Aadmin/header');
        $this->load->view('Aadmin/sidebar');
		$this->load->view('Admin/VindikatorKelas',$data);	
        $this->load->view('Aadmin/footer');
    }

    public function register(){        

        $bulan          =$this->input->post('bulan');
        $periode        =$this->input->post('periode'); 
        $kodekelas      =$this->input->post('kodekelas');       
        $namakelas      =$this->input->post('namakelas'); 
        $tidur          =$this->input->post('tidur');

        $masuk          =$this->input->post('masuk');        
        $keluar         =$this->input->post('keluar');
        $mati           =$this->input->post('mati');
        $matikurang     =$this->input->post('matikurang');
        $matilebih      =$this->input->post('matilebih');
        $jlhkeluar      =$this->input->post('jlhkeluar');
        $lama           =$this->input->post('lama');
        $masukkeluar    =$this->input->post('masukkeluar');      
        $hp             =$this->input->post('hp');
        $petugas        =$this->input->post('petugas');
       

        $bor         =$this->input->post('bor');
        $avlos       =$this->input->post('avlos');
        $toi         =$this->input->post('toi');
        $bto         =$this->input->post('bto');      
        $ndr         =$this->input->post('ndr');
        $gdr         =$this->input->post('gdr');
        
        
        
        $data = array (
            'bulan'              => $bulan,           
            'periode'            => $periode,
            'kodekelas'          => $kodekelas,
            'namakelas'          => $namakelas,
            'tidur'              => $tidur, 

            'masuk'              => $masuk,     
            'keluar'             => $keluar,          
            'mati'               => $mati,
            'matikurang'         => $matikurang,
            'matilebih'          => $matilebih,
            'jlhkeluar'          => $jlhkeluar,
            'lama'               => $lama,
            'masukkeluar'        => $masukkeluar,         
            'hp'                 => $hp,
            'petugas'            => $petugas,
           

            'bor'            => $bor,
            'avlos'          => $avlos,
            'toi'            => $toi,
            'bto'            => $bto,         
            'ndr'            => $ndr,
            'gdr'            => $gdr
            
        );

        // Cek
        if(empty($bulan) || empty($masuk) || empty($kodekelas)) {
           $this->session->set_flashdata('error_message', 'Belum Ada Bulan dipilih! Pilihlah Bulan Sebelum melanjutkan!');         
            redirect('AdataindikatorKelas'); 
         }        
        // Cek apakah data sudah ada
        $data_exists = $this->Mindikatorkelas->check_data_exists(
          $bulan,
          $kodekelas,       
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
            redirect('AdataindikatorKelas'); 

        } else {
            // Jika tidak, simpan data dan tampilkan pesan sukses
            $this->Mindikatorkelas->input_data($data,'indikatorkelas');
            $this->session->set_flashdata('success_message', 'Berhasil disimpan!');        
            redirect('AdataindikatorKelas'); 
        }

       
       
    }
}
