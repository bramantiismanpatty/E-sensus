<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Abangsal extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('Mindikator');
        $this->load->model('Mruangan');
		$this->load->helper('url');
		$this->load->library('form_validation');

        if($this->session->userdata('logged') !=TRUE){
          $url=base_url('masuk');
          redirect($url);
	    };
  
	}
	public function index(){

      $data['kelas'] = $this->Mruangan->tampil_data()->result();
    
      if((isset($_GET['koderuangan'])  && $_GET['koderuangan']!='')&&
        (isset($_GET['bulan'])  && $_GET['bulan']!='')&&
      (isset($_GET['tahun'])&& $_GET['tahun']!='')){                                       
            $ruang    = $_GET['koderuangan'];
            $bulan    = $_GET['bulan'];
            $tahun    = $_GET['tahun'];
            $kalender = $tahun. '-' .$bulan .'-01'; 
    }else{  
            $ruang  = 'tidak ada ruangan di pilih';
            $bulan = date('m') ;
            $tahun= date('Y') ;  
            $kalender = $tahun. '-' .$bulan .'-01';   
   }

       

        $data['bangsal'] = $this->db->query("SELECT indikator.*
        FROM indikator 
        WHERE indikator.koderuangan='$ruang' AND indikator.bulan='$kalender'
        ORDER BY indikator.namaruangan ASC")->result();
        
   

        $this->load->view('Aadmin/header');
		$this->load->view('Aadmin/sidebar');
		$this->load->view('admin/Vpasienbangsal',$data);
        $this->load->view('Aadmin/footer');

        		
	}

        function cetak(){

            if((isset($_GET['koderuangan'])  && $_GET['koderuangan']!='')&&
            (isset($_GET['bulan'])  && $_GET['bulan']!='')&&
          (isset($_GET['tahun'])&& $_GET['tahun']!='')){                                       
                $ruang    = $_GET['koderuangan'];
                $bulan    = $_GET['bulan'];
                $tahun    = $_GET['tahun'];
                $kalender = $tahun. '-' .$bulan .'-01'; 
        }else{  
                $ruang  = 'tidak ada ruangan di pilih';
                $bulan = date('m') ;
                $tahun= date('Y') ;  
                $kalender = $tahun. '-' .$bulan .'-01';   
       }
    
            
    
            $data['cetak'] = $this->db->query("SELECT indikator.*
            FROM indikator 
            WHERE indikator.koderuangan='$ruang' AND indikator.bulan='$kalender'
            ORDER BY indikator.namaruangan ASC")->result();
  

      
        
       $this->load->view('cetak/C_bangsal',$data);
          	
	}
	
}
?>

