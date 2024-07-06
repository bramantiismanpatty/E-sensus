<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gkelas_owner extends CI_Controller {
    function __construct(){
        parent::__construct();		
        $this->load->model('M_filter');
        $this->load->helper('url');
        $this->load->library('form_validation');

        if($this->session->userdata('logged') !=TRUE){
            $url=base_url('masuk');
            redirect($url);
		};
    }

    public function index() {
        // ... (logika untuk mengambil data filter dari model atau sumber data lainnya) ...
        $daribulan = $this->input->get('daribulan') ? $this->input->get('daribulan') : date('m');
        $daritahun = $this->input->get('daritahun') ? $this->input->get('daritahun') : date('Y');
        $sampbulan = $this->input->get('sampbulan') ? $this->input->get('sampbulan') : date('m');
        $samptahun = $this->input->get('samptahun') ? $this->input->get('samptahun') : date('Y');

        $data['filter'] = $this->M_filter->get_filtered_datakelas(); // Misalnya, ambil data filter dari model M_filter
        $data['first_bulan'] = $daribulan . $daritahun;
        $data['second_bulan'] = $sampbulan . $samptahun;

        $this->load->view('Agrafikowner/header');
        $this->load->view('Agrafikowner/sidebar');
        $this->load->view('grafik/grafikBorkelas_owner',$data); // Tampilkan tampilan Gambar_v3 dengan data filter
        $this->load->view('Agrafikowner/footer');
    }

    public function generateChart() {
        // ... (logika untuk mengambil data filter dari model atau sumber data lainnya) ...
        $daribulan = $this->input->get('daribulan') ? $this->input->get('daribulan') : date('m');
        $daritahun = $this->input->get('daritahun') ? $this->input->get('daritahun') : date('Y');
        $sampbulan = $this->input->get('sampbulan') ? $this->input->get('sampbulan') : date('m');
        $samptahun = $this->input->get('samptahun') ? $this->input->get('samptahun') : date('Y');

        $data['filter'] = $this->M_filter->get_filtered_datakelas(); // Misalnya, ambil data filter dari model M_filter
        $data['first_bulan'] = $daribulan . $daritahun;
        $data['second_bulan'] = $sampbulan . $samptahun;

        // Siapkan data untuk grafik
        $borData = [];
        $labelData = [];
        foreach ($data['filter'] as $u) {
            $borData[] = $u->bor;
            $labelData[] = $u->nama;
        }

        // Buat data grafik dalam bentuk array
        $graphData = array(
            'labels' => $labelData,
            'datasets' => array(
                array(
                    'label' => 'BOR',
                    'data' => $borData,
                    'backgroundColor' => 'RGB(0, 139, 0)',
                    'borderColor' => 'rgb(255, 153, 0)',
                    'borderWidth' => 2
                )
            )
        );

        // Load tampilan grafik_view dan kirimkan data grafik ke sana
        $this->load->view('grafik/Grafikbarkelas', array('graphData' => json_encode($graphData)));
        
    }
}
