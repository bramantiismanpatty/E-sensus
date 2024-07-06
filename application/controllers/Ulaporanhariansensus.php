<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ulaporanhariansensus extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('Sensus_model');
        $this->load->model('Mruangan');       
		$this->load->helper('url');
		$this->load->library('form_validation');

        if($this->session->userdata('logged') !=TRUE){
            $url=base_url('masuk');
            redirect($url);
		};
 
	}
	public function index(){
       // $data['kelas'] = $this->Sensus_model->tampil_data()->result();      
       
        if((isset($_GET['tanggal'])&& $_GET['tanggal']!='')){
            $tanggal = $_GET['tanggal'];                                                                          
            $tampilkan = $tanggal;
        }else{
            $tanggal  = date("d M Y");                                                                      
            $tampilkan = $tanggal;                                     
        }
                    

       $data['rekap'] = $this->db->query("SELECT sensus.*
       FROM sensus        
       WHERE sensus.tanggal='$tampilkan'
       ORDER BY sensus.namaruangan ASC")->result();

        $this->load->view('Auser/header',$data);
        $this->load->view('Auser/sidebar');
        $this->load->view('userbangsal/UV_laporanharian',$data);
        $this->load->view('Auser/footer');       		
	}

 }
?>

