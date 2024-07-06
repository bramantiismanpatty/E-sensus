<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  AperiodeStatistik extends CI_Controller {

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
       
        $this->load->view('Aadmin/header');
        $this->load->view('Aadmin/sidebar');
        $this->load->view('admin/SperiodeLaporan_admin', $data);      
        $this->load->view('Aadmin/footer');
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
        
        $this->load->view('cetak/C_statistiktahunan',$data);      
      
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
          $avlosData = [];
          $toiData = [];
          $btoData = [];
          $ndrData = [];
          $gdrData = [];
          $labelData = [];
          foreach ($data['filter'] as $u) {
              $borData[] = $u->bor;
              $avlosData[] = $u->avlos;
              $toiData[] = $u->toi;
              $btoData[] = $u->bto;
              $ndrData[] = $u->ndr;
              $gdrData[] = $u->gdr;
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
                  array(
                      'label' => 'AVLOS',
                      'data' => $avlosData,
                      'backgroundColor' => 'rgba(54, 162, 235, 0.2)', // Biru
                      'borderColor' => 'rgba(54, 162, 235, 1)',
                      'borderWidth' => 1 
                  ),
                  array(
                      'label' => 'TOI',
                      'data' => $toiData,
                      'backgroundColor' => 'rgba(255, 206, 86, 0.2)', // Kuning
                      'borderColor' => 'rgba(255, 206, 86, 1)',
                      'borderWidth' => 1 
                  ),
                  array(
                      'label' => 'BTO',
                      'data' => $btoData,
                      'backgroundColor' => 'rgba(75, 192, 192, 0.2)', // Hijau
                      'borderColor' => 'rgba(75, 192, 192, 1)',
                      'borderWidth' => 1 
                  ),
                  array(
                      'label' => 'NDR',
                      'data' => $ndrData,
                      'backgroundColor' => 'rgba(153, 102, 255, 0.2)', // Ungu
                      'borderColor' => 'rgba(153, 102, 255, 1)',
                      'borderWidth' => 1 
                  ),
                  array(
                      'label' => 'GDR',
                      'data' => $gdrData,
                      'backgroundColor' => 'rgba(255, 159, 64, 0.2)', // Oranye
                      'borderColor' => 'rgba(255, 159, 64, 1)',
                      'borderWidth' => 1 
                  )
              )
          );
 
         // Load tampilan grafik_view dan kirimkan data grafik ke sana
         $this->load->view('grafik/GrafikbarRumahsakit', array('graphData' => json_encode($graphData)));
         
     }
   
}
?>
