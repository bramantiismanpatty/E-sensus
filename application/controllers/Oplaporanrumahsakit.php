<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  OPlaporanrumahsakit extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('Mrumahsakit');
        $this->load->model('Mlaporan');
        $this->load->helper('url');
        $this->load->library('form_validation');

        if($this->session->userdata('logged') !=TRUE){
            $url=base_url('masuk');
            redirect($url);
		};
	}
	
	public function index(){
        // Mendapatkan nilai dari input GET atau menggunakan nilai default jika tidak ada
        if (
            isset($_GET['daribulan']) && $_GET['daribulan'] != '' &&
            isset($_GET['daritahun']) && $_GET['daritahun'] != '' &&
            isset($_GET['sampbulan']) && $_GET['sampbulan'] != '' &&
            isset($_GET['samptahun']) && $_GET['samptahun'] != ''
        ) {
            $daribulan = $_GET['daribulan'];
            $daritahun = $_GET['daritahun'];
            $sampbulan = $_GET['sampbulan'];
            $samptahun = $_GET['samptahun'];
            $first_bulan = $daritahun. '-' .$daribulan;
            $second_bulan =$samptahun. '-' .$sampbulan;
        } else {
            $daribulan = date('m') ;
            $daritahun =date('Y') ;
            $sampbulan = date('m') ;
            $samptahun =date('Y') ;
            $first_bulan = $daritahun. '-' .$daribulan;
            $second_bulan =$samptahun. '-' .$sampbulan;
        }

        $data['filter'] = $this->Mlaporan->getDataByMonthRange($first_bulan, $second_bulan);
       
        $this->load->view('Aoperator/header');
        $this->load->view('Aoperator/sidebar');
        $this->load->view('operator/VO_laprumahsakit', $data);      
        $this->load->view('Aoperator/footer');
    }
    
    public function cetak(){
        // Mendapatkan nilai dari input GET atau menggunakan nilai default jika tidak ada
        if (
            isset($_GET['daribulan']) && $_GET['daribulan'] != '' &&
            isset($_GET['daritahun']) && $_GET['daritahun'] != '' &&
            isset($_GET['sampbulan']) && $_GET['sampbulan'] != '' &&
            isset($_GET['samptahun']) && $_GET['samptahun'] != ''
        ) {
            $daribulan = $_GET['daribulan'];
            $daritahun = $_GET['daritahun'];
            $sampbulan = $_GET['sampbulan'];
            $samptahun = $_GET['samptahun'];
            $first_bulan = $daritahun. '-' .$daribulan;
            $second_bulan =$samptahun. '-' .$sampbulan;
        } else {
            $daribulan = date('m') ;
            $daritahun =date('Y') ;
            $sampbulan = date('m') ;
            $samptahun =date('Y') ;
            $first_bulan = $daritahun. '-' .$daribulan;
            $second_bulan =$samptahun. '-' .$sampbulan;
        }

        $data['cetak'] = $this->Mlaporan->getDataByMonthRange($first_bulan, $second_bulan);       
        
        $this->load->view('cetak/C_laporantahunan',$data);    
      
    }
   
}
?>
