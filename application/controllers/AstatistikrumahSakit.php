<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AstatistikrumahSakit extends CI_Controller {

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
                $kalender = $tahun. '-' .$bulan .'-01'; 
        }else{  
                $bulan = date('m') ;
                $tahun= date('Y') ;  
                $kalender = $tahun. '-' .$bulan .'-01';   
        }

       $data['rekap'] = $this->db->query("SELECT datarumahsakit.*
       FROM datarumahsakit 
       WHERE datarumahsakit.bulan='$kalender' 
       ORDER BY datarumahsakit.bulan ASC")->result();

                $this->load->view('Aadmin/header');
                $this->load->view('Aadmin/sidebar');            
		$this->load->view('admin/Srumahsakit_admin',$data);
                $this->load->view('Aadmin/footer');
        		
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

     $data['cetak'] = $this->db->query("SELECT datarumahsakit.*
     FROM datarumahsakit 
     WHERE datarumahsakit.bulan='$kalender' 
     ORDER BY datarumahsakit.bulan ASC")->result();


      $this->load->view('cetak/datarumahsakit_kelas',$data);
              
  }

  
}
?>

