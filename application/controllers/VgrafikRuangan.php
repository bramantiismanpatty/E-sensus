<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VgrafikRuangan extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Mfilter');
        $this->load->helper('url');
        $this->load->library('form_validation');

        if($this->session->userdata('logged') !=TRUE){
            $url=base_url('masuk');
            redirect($url);
		};
    }

    public function index() {
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

       $data['filter'] = $this->db->query("SELECT indikator.*
       FROM indikator 
       WHERE indikator.bulan='$kalender' 
       ORDER BY indikator.bulan ASC")->result();

        $this->load->view('Avisitor/header');     
        $this->load->view('Avisitor/sidebar');
        $this->load->view('visitor/V_grafikRuangan', $data); // Tampilkan tampilan Gambar_v3 dengan data filter
        $this->load->view('Avisitor/footer');
    }

    public function generateChart() {
        // Ambil data filter dari model M_filter
        if(isset($_GET['bulan']) && $_GET['bulan']!='' &&
            isset($_GET['tahun']) && $_GET['tahun']!='') {                                       
            $bulan    = $_GET['bulan'];
            $tahun    = $_GET['tahun'];
            $kalender = $tahun . '-' . $bulan . '-01'; 
        } else {  
            $bulan = date('m');
            $tahun = date('Y');  
            $kalender = $tahun . '-' . $bulan . '-01';   
        }
    
        $data['filter'] = $this->db->query("SELECT indikator.*
            FROM indikator 
            WHERE indikator.bulan='$kalender' 
            ORDER BY indikator.namaruangan ASC")->result();
    
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
            $labelData[] = $u->namaruangan;
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
       // $this->load->view('AlatarGrafik/header');
       // $this->load->view('AlatarGrafik/sidebar');     
        $this->load->view('grafik/GrafikbarRuangan', array('graphData' => json_encode($graphData)));
       // $this->load->view('grafik/V2', array('graphData' => json_encode($graphData)));
       // $this->load->view('AlatarGrafik/footer');
    }
}
