<?php
class Umobilisasi2 extends CI_Controller {

    function __construct(){
        parent::__construct();    
        $this->load->model('Sensus_model');    
        $this->load->model('Mpasienmasuk');
        $this->load->model('Mpasienpindah');
        $this->load->model('Mpasienkeluar');
        $this->load->model('Mruangan');
        $this->load->helper('url');
        $this->load->library('form_validation');

        if ($this->session->userdata('logged') != TRUE) {
            $url = base_url('masuk');
            redirect($url);
        }
    }

    public function index(){ 
        // Ambil ruangan dari session
        $ruangan = $this->session->userdata('namaruangan');
        
        // Ambil data sensus dari model
        $data['sensus'] = $this->Sensus_model->get_data();
    
        // Inisialisasi array untuk menyimpan tanggal terakhir untuk setiap namaruangan
        $tanggal_terakhir_per_namaruangan = [];
    
        // Iterasi melalui data sensus untuk mendapatkan tanggal terakhir untuk setiap namaruangan
        foreach ($data['sensus'] as $row) {
            $tanggal_terakhir_per_namaruangan[$row->namaruangan] = max($tanggal_terakhir_per_namaruangan[$row->namaruangan] ?? null, $row->tanggal);
        }
        
        // Periksa tanggal selanjutnya untuk ruangan yang sedang login
        if (isset($tanggal_terakhir_per_namaruangan[$ruangan])) {
            $tanggal_terakhir = $tanggal_terakhir_per_namaruangan[$ruangan];
            $tanggal_selanjutnya = date('Y-m-d', strtotime('+1 day', strtotime($tanggal_terakhir)));
            // Cek apakah data untuk tanggal selanjutnya sudah ada dalam tabel sensus
            $data_exists = $this->Sensus_model->check_date_exists_for_dataSensus($tanggal_selanjutnya, $ruangan);
            if (!$data_exists) {
                // Jika tidak ada data untuk tanggal selanjutnya, kirim pesan peringatan ke View
                $data['tanggal_selanjutnya'][$ruangan] = $tanggal_selanjutnya;
            }
        }
    
        // Ambil data pasien masuk berdasarkan namaruangan dan tanggal yang dipilih
        $tanggal = $this->input->get('tanggal'); // Ambil tanggal dari input GET
        if (!empty($tanggal)) {
            $data['rekap'] = $this->Mpasienmasuk->get_data_by_room_and_date($ruangan, $tanggal);
        } else {
            $data['rekap'] = []; // Jika tidak ada tanggal yang dipilih, set data kosong
        }
    
        // Mengirimkan nama ruangan aktif ke view
        $data['namaruangan'] = $ruangan;
    
        $this->load->view('Auser/header', $data);
        $this->load->view('Auser/sidebar');
        $this->load->view('userbangsal/UV_mobilisasi2', $data);
        $this->load->view('Auser/footer');
    }
}
?>
