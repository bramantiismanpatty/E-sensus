<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Oplaporankelas  extends CI_Controller {

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
             
     }

       $data['rekap'] = $this->db->query("SELECT indikatorkelas.*
       FROM indikatorkelas 
       WHERE indikatorkelas.bulan='$kalender' 
       ORDER BY indikatorkelas.namakelas ASC")->result();

        $this->load->view('Aoperator/header');
        $this->load->view('Aoperator/sidebar');
		$this->load->view('operator/VO_lapkelas',$data);
        $this->load->view('Aoperator/footer');

      
       
           		
	}
    public function cetak(){
        if((isset($_GET['bulan'])  && $_GET['bulan']!='')&&
        (isset($_GET['tahun'])&& $_GET['tahun']!='')){                                       
              $bulan    = $_GET['bulan'];
              $tahun    = $_GET['tahun'];
              $kalender = $tahun. '-' .$bulan .'-01'; 
      }else{  
              $bulan = date('m') ;
              $tahun= date('Y') ;  
              $kalender = $tahun. '-' .$bulan .'-01';                    
             
     }

       $data['cetak'] = $this->db->query("SELECT indikatorkelas.*
       FROM indikatorkelas 
       WHERE indikatorkelas.bulan='$kalender' 
       ORDER BY indikatorkelas.namakelas ASC")->result();


      $this->load->view('cetak/C_rekapitulasikelas',$data);

   }
}
?>

