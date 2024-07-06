<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VstatistikrumahSakit extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('Mrumahsakit');        
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
                    $kalender = $tahun. '-' .$bulan;    
                 }else{  
                    $bulan = date('M') ;
                    $tahun= date('Y') ;  
                    $kalender = $tahun. '-' .$bulan;                     
               
       }

       $data['rekap'] = $this->db->query("SELECT datarumahsakit.*
       FROM datarumahsakit 
       WHERE datarumahsakit.bulan='$kalender' 
       ORDER BY datarumahsakit.bulan ASC")->result();

                $this->load->view('Avisitor/header');
                $this->load->view('Avisitor/sidebar');            
		$this->load->view('visitor/V_statistikrumahsakit',$data);
                $this->load->view('Avisitor/footer');
        		
	}

    public function cetak(){
        if((isset($_GET['bulan'])  && $_GET['bulan']!='')&&
        (isset($_GET['tahun'])&& $_GET['tahun']!='')){                                       
              $bulan    = $_GET['bulan'];
              $tahun    = $_GET['tahun'];
              $kalender = $bulan . '-' . $tahun; 
      }else{  
              $bulan = date('m') ;
              $tahun= date('Y') ;  
              $kalender = $bulan . '-' . $tahun;                       
             
     }

     $data['cetak'] = $this->db->query("SELECT datarumahsakit.*
     FROM datarumahsakit 
     WHERE datarumahsakit.bulan='$kalender' 
     ORDER BY datarumahsakit.bulan ASC")->result();


      $this->load->view('cetak/datarumahsakit_kelas',$data);
              
  }

  
}
?>

