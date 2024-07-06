<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Opharian extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('Sensus_model');
        $this->load->model('Dclass_model');       
		$this->load->helper('url');
		$this->load->library('form_validation');

        if($this->session->userdata('logged') !=TRUE){
            $url=base_url('masuk');
            redirect($url);
		};
 
	}
	public function index(){
        $data['kelas'] = $this->Dclass_model->tampil_data()->result();      
       
        if((isset($_GET['tanggal'])&& $_GET['tanggal']!='')){
            $tanggal = $_GET['tanggal'];                                                                          
            $tampilkan = $tanggal;
        }else{
            $tanggal  = date("d M Y");                                                                      
            $tampilkan = $tanggal;                                     
        }
                    

       $data['rekap'] = $this->db->query("SELECT sensus.*,
       kelas.kode,
       kelas.nama,
       kelas.ruangan,
       kelas.tidur
       FROM kelas
       INNER JOIN sensus ON sensus.kode=kelas.kode     
       WHERE sensus.tanggal='$tampilkan'
       ORDER BY kelas.ruangan ASC")->result();

	   $this->load->view('operator/Lharian_operator',$data);       		
	}

 }
?>

