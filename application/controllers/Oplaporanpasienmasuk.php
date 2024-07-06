<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Oplaporanpasienmasuk extends CI_Controller {

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

       // $data['pulang'] = $this->Mlaporan->pulang($first_tanggal, $second_tanggal);      
       $data['masuk'] = $this->db->query("SELECT pasienmasuk.*
       FROM pasienmasuk
       WHERE pasienmasuk.tgl_masuk BETWEEN ? AND ? AND pasienmasuk.status='baru'
       ORDER BY pasienmasuk.tgl_masuk ASC", array($first_tanggal, $second_tanggal))->result();

        $this->load->view('Aoperator/header');
		$this->load->view('Aoperator/sidebar');
		$this->load->view('operator/VO_lapoanpasienmasuk',$data);
        $this->load->view('Aoperator/footer');

        		
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
 
        // $data['pulang'] = $this->Mlaporan->pulang($first_tanggal, $second_tanggal);      
        $data['masuk'] = $this->db->query("SELECT pasienmasuk.*
        FROM pasienmasuk
        WHERE pasienmasuk.tgl_masuk BETWEEN ? AND ?   AND pasienmasuk.status='baru'
        ORDER BY pasienmasuk.tgl_masuk ASC", array($first_tanggal, $second_tanggal))->result();
        
       $this->load->view('cetak/C_pasienmasuk',$data);
          	
	}


	
}
?>

