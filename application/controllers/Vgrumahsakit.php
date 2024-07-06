<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VgRumahsakit extends CI_Controller {
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

        $this->load->view('Avisitor/header');
        $this->load->view('Avisitor/sidebar');
        $this->load->view('visitor/V_grafikBor',$data); // Tampilkan tampilan Gambar_v3 dengan data filter
        $this->load->view('Avisitor/footer');

    }

    public function generateChart() {

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

   

         // Siapkan data untuk grafik
         $borData = [];
         
         $labelData = [];
         foreach ($data['filter'] as $u) {
             $borData[] = $u->bor;
            
             $labelData[] = date('M-Y', strtotime($u->bulan));
              
         }
     
         // Buat data grafik dalam bentuk array
         $graphData = array(
             'labels' => $labelData,
             'datasets' => array(
                 array(
                     'label' => 'BOR',
                     'data' => $borData,
                     'backgroundColor' => 'rgba(255, 99, 132, 0.2)', // Merah
                     'borderColor' => 'rgba(255, 99, 132, 1)',
                     'borderWidth' => 1 
                 ),                
             )
         );

        // Load tampilan grafik_view dan kirimkan data grafik ke sana
        $this->load->view('grafik/GrafiklineRumahsakit', array('graphData' => json_encode($graphData)));
        
    }
}
