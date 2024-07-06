<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alaporanruangan  extends CI_Controller {

	function __construct(){
		parent::__construct();		
		
        $this->load->model('Mruangan');
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

       $data['rekap'] = $this->db->query("SELECT indikator.*
       FROM indikator 
       WHERE indikator.bulan='$kalender' 
       ORDER BY indikator.namaruangan ASC")->result();

        $this->load->view('Aadmin/header');
        $this->load->view('Aadmin/sidebar');
		$this->load->view('admin/Vlapruangan_admin',$data);
        $this->load->view('Aadmin/footer');
    
        		
	}

   }
?>

