<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OpperiodeStatistik extends CI_Controller {

    function __construct(){
        parent::__construct();        
        $this->load->model('Mrumahsakit');
        $this->load->model('Mlaporan');
        $this->load->helper('url');
        $this->load->library('form_validation');

        if($this->session->userdata('logged') != TRUE){
            $url = base_url('masuk');
            redirect($url);
        };
    }
    
    public function index() {
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
            $first_bulan = $daritahun . '-' . $daribulan;
            $second_bulan = $samptahun . '-' . $sampbulan;
        } else {
            $daribulan = date('m');
            $daritahun = date('Y');
            $sampbulan = date('m');
            $samptahun = date('Y');
            $first_bulan = $daritahun . '-' . $daribulan;
            $second_bulan = $samptahun . '-' . $sampbulan;
        }

        $data['filter'] = $this->Mlaporan->getDataByMonthRange($first_bulan, $second_bulan);
       
        $this->load->view('Aoperator/header');
        $this->load->view('Aoperator/sidebar');
        $this->load->view('operator/VO_SperiodeLaporan', $data);      
        $this->load->view('Aoperator/footer');
    }
    
    public function cetak() {
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
            $first_bulan = $daritahun . '-' . $daribulan;
            $second_bulan = $samptahun . '-' . $sampbulan;
        } else {
            $daribulan = date('m');
            $daritahun = date('Y');
            $sampbulan = date('m');
            $samptahun = date('Y');
            $first_bulan = $daritahun . '-' . $daribulan;
            $second_bulan = $samptahun . '-' . $sampbulan;
        }

        $data['cetak'] = $this->Mlaporan->getDataByMonthRange($first_bulan, $second_bulan);       
        
        $this->load->view('cetak/C_statistiktahunan', $data);      
    }

    public function generateChart() {
        // Ambil input dari request (bisa dari form atau URL parameter)
        $daribulan = $this->input->get('daribulan'); // Misalnya "01" untuk Januari
        $daritahun = $this->input->get('daritahun'); // Misalnya "2023"
        $sampbulan = $this->input->get('sampbulan'); // Misalnya "12" untuk Desember
        $samptahun = $this->input->get('samptahun'); // Misalnya "2023"
    
        // Pastikan semua variabel memiliki nilai
        if (!$daribulan || !$daritahun || !$sampbulan || !$samptahun) {
            // Jika ada variabel yang kosong, set nilai default atau tampilkan error
            show_error('Bulan dan tahun harus diisi');
        }
    
        // Gabungkan bulan dan tahun menjadi format "YYYY-MM"
        $first_bulan = $daritahun . '-' . $daribulan;
        $second_bulan = $samptahun . '-' . $sampbulan;
    
        // Ambil data dari model
        $data['filter'] = $this->Mlaporan->getDataByMonthRange($first_bulan, $second_bulan);
    
        // Persiapkan data untuk chart
        $borData = [];
        $labelData = [];
        foreach ($data['filter'] as $u) {
            $borData[] = $u->bor;
            $labelData[] = date('M-Y', strtotime($u->bulan));
        }
    
        $graphData = [
            'labels' => $labelData,
            'datasets' => [
                [
                    'label' => 'BOR',
                    'data' => $borData,
                    'backgroundColor' => 'rgba(255, 99, 132, 0.2)', // Warna contoh
                    'borderColor' => 'rgba(255, 99, 132, 1)',
                    'borderWidth' => 1 
                ]
            ]
        ];
    
        // Kirim data ke view
        $data['graphData'] = json_encode($graphData);
        $data['first_bulan'] = $first_bulan;
        $data['second_bulan'] = $second_bulan;
    
        $this->load->view('grafik/GrafikbarRumahsakit', $data);
    }
    
    
}    

?>
