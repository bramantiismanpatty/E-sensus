<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vlaporankelas  extends CI_Controller {

	function __construct(){
		parent::__construct();		
		
        $this->load->model('Mkelas');
        $this->load->model('Mindikator');
		$this->load->helper('url');
		$this->load->library('form_validation');

        if($this->session->userdata('logged') !=TRUE){
            $url=base_url('masuk');
            redirect($url);
		};
 
	}
	public function index(){       

        if((isset($_GET['bulan'])  && $_GET['bulan']!='')&&
          (isset($_GET['tahun'])&& $_GET['tahun']!='')){                                       
                $bulan    = $_GET['bulan'];
                $tahun    = $_GET['tahun'];
                $kalender = $tahun. '-' .$bulan .'-01'; 
        }else{  
                $bulan = date('m') ;
                $tahun= date('Y') ;  
                $kalender = $tahun. '-' .$bulan .'-01';                       
                // $kalender = "<font color='#ff0000'>Silihkan Pilih Bulan dan Tahun yang akan di tampilkan </font>";
       }

       $data['rekap'] = $this->db->query("SELECT indikatorkelas.*
       FROM indikatorkelas 
       WHERE indikatorkelas.bulan='$kalender' 
       ORDER BY indikatorkelas.namakelas ASC")->result();

        $this->load->view('Avisitor/header');
        $this->load->view('Avisitor/sidebar');
		$this->load->view('visitor/V_laporankelas',$data);
        $this->load->view('Avisitor/footer');
	}

   }
?>

