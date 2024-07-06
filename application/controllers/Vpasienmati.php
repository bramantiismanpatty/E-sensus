<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vpasienmati extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('Mlaporan');
        $this->load->model('Mruangan');
		$this->load->helper('url');
		$this->load->library('form_validation');

       if($this->session->userdata('logged') !=TRUE){
           $url=base_url('masuk');
            redirect($url);
		};
  
	}
	public function index(){       
       
        if((isset($_GET['first_date'])  && $_GET['first_date']!='') && 
           (isset($_GET['second_date'])  && $_GET['second_date']!='')){
          
          
            $first_tanggal = $_GET['first_date'];
            $second_tanggal = $_GET['second_date'];                          

        }else{
           
            $first_tanggal  = 'tidak ada Tanggal di pilih';  
            $second_tanggal  = 'tidak ada Tanggal di pilih';          
        }

        $data['pulang'] = $this->db->query("SELECT pasienkeluar.*
        FROM pasienkeluar
        WHERE pasienkeluar.carakeluar='meninggal' AND pasienkeluar.tgl_keluar BETWEEN ? AND ?   
        ORDER BY pasienkeluar.carakeluar ASC", array($first_tanggal, $second_tanggal))->result();

        $this->load->view('Avisitor/header');
		$this->load->view('Avisitor/sidebar');
		$this->load->view('visitor/V_pasienmati',$data);
        $this->load->view('Avisitor/footer');

        		
	}

        function cetak(){

            if((isset($_GET['first_date'])  && $_GET['first_date']!='') && 
            (isset($_GET['second_date'])  && $_GET['second_date']!='')){
           
           
             $first_tanggal = $_GET['first_date'];
             $second_tanggal = $_GET['second_date'];                         
 
         }else{
            
             $first_tanggal  = 'tidak ada Tanggal di pilih';  
             $second_tanggal  = 'tidak ada Tanggal di pilih';          
         }
 
       
        $data['pulang'] = $this->db->query("SELECT pasienkeluar.*
        FROM pasienkeluar
        WHERE pasienkeluar.carakeluar='meninggal' AND pasienkeluar.tgl_keluar BETWEEN ? AND ?   
        ORDER BY pasienkeluar.carakeluar ASC", array($first_tanggal, $second_tanggal))->result();
        
       $this->load->view('cetak/C_pasienmati',$data);
          	
	}


	
}
?>

