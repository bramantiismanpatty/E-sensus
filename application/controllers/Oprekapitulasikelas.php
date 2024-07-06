<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Oprekapitulasikelas extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('Mindikatorkelas');
        $this->load->model('Mkelas');       
		$this->load->helper('url');
		$this->load->library('form_validation');

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
            $kelas    = $_GET['namakelas'];
            $bulan    = $_GET['bulan'];
            $tahun    = $_GET['tahun'];
            $kalender = $tahun . '-' . $bulan . '-01';
    }else{  
            $kelas = 'tidak ada di pilih';
            $bulan = date('m') ;
            $tahun= date('Y') ;  
            $kalender = $tahun . '-' . $bulan . '-01'; 
       }

      $data['rekap'] = $this->db->query("SELECT indikator.*
       FROM indikator 
       WHERE indikator.namakelas='$kelas' AND Indikator.bulan='$kalender'
       ORDER BY indikator.namakelas ASC")->result();


        $this->load->view('Aoperator/header');
		$this->load->view('Aoperator/sidebar');
		$this->load->view('operator/VO_rekapkelas',$data);
        $this->load->view('Aoperator/footer');
        		
	}

    public function cetak(){
        if( (isset($_GET['namakelas'])  && $_GET['namakelas']!='')&&
        (isset($_GET['bulan'])  && $_GET['bulan']!='')&&
        (isset($_GET['tahun'])&& $_GET['tahun']!='')){                                       
            $kelas    = $_GET['namakelas'];
            $bulan    = $_GET['bulan'];
            $tahun    = $_GET['tahun'];
            $kalender = $tahun . '-' . $bulan . '-01';
    }else{  
            $kelas = 'tidak ada ruangan di pilih';
            $bulan = date('m') ;
            $tahun= date('Y') ;  
            $kalender = $tahun . '-' . $bulan . '-01';                            
             
     }

     $data['cetak'] = $this->db->query("SELECT indikator.*
     FROM indikator 
     WHERE indikator.namakelas='$kelas' and indikator.bulan='$kalender'
     ORDER BY indikator.namakelas ASC")->result();


      $this->load->view('cetak/C_rekapitulasikelas',$data);
              
  }

    
}
?>

