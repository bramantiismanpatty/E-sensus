<?php
class Umobilisasi extends CI_Controller {

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
        $ruangan = $this->session->userdata('namaruangan'); // Ambil ruangan dari session
        
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

        $data['kelas'] = $this->Mruangan->tampil_data()->result();

        if ((isset($_GET['namaruangan']) && $_GET['namaruangan'] != '') && 
            (isset($_GET['tanggal']) && $_GET['tanggal'] != '')) {
            $ruangan = $_GET['namaruangan'];
            $tanggal = $_GET['tanggal'];                                      
            $tanggalruangan = $tanggal.$ruangan;
        } else {
            $ruangan  = 'tidak ada ruangan di pilih';
            $tanggal  = 'tidak ada Tanggal di pilih';                                      
            $tanggalruangan = $tanggal.$ruangan;          
        }

        $data['rekap'] = $this->db->query("SELECT pasienmasuk.*
            FROM pasienmasuk 
            WHERE pasienmasuk.namaruangan='$ruangan' and pasienmasuk.tgl_masuk='$tanggal'
            ORDER BY pasienmasuk.namaruangan ASC")->result();

        // Mengirimkan nama ruangan aktif ke view
        $data['namaruangan'] = $ruangan;

        $this->load->view('Auser/header', $data);
        $this->load->view('Auser/sidebar');    
        $this->load->view('userbangsal/UV_mobilisasi', $data);
        $this->load->view('Auser/footer');
    }
}
?>
