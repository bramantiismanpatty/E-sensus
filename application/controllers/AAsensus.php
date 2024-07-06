<?php 

class AAsensus extends CI_Controller {

    public function __construct()   {
        parent::__construct();
		$this->load->helper("url");
		$this->load->model('Sensus_model');
        $this->load->model('Mkelas');
        $this->load->model('Mruangan');
        $this->load->model('Mlaporan');

       // if($this->session->userdata('logged') !=TRUE){
      //  $url=base_url('masuk');
       //   redirect($url);
	   // };        
    }   

    public function index(){
        $data['kelas'] = $this->Mruangan->tampil_data()->result();
        $namaruangan = $this->input->get('namaruangan');
        $tanggal = $this->input->get('tanggal');

        if (!empty($namaruangan) && !empty($tanggal)) {
          // Cek apakah data sudah ada di tabel sensus
          $exists = $this->Sensus_model->monet($tanggal, $namaruangan);         
          $data['data_monet'] = $exists;
      } else {
          // Jika namaruangan dan tanggal belum dipilih, inisialisasikan $data_sudah_ada dengan false
          $data['data_monet'] = false;
      }

        if((isset($_GET['namaruangan'])&& $_GET['namaruangan']!='') && 
           (isset($_GET['tanggal'])  && $_GET['tanggal']!='')){
            $namaruangan = $_GET['namaruangan'];
            $tanggal = $_GET['tanggal'];                                      
           $tanggalnamaruangan = $tanggal.$namaruangan;
          

        }else{
            $namaruangan  = 'tidak ada ruangan di pilih';
            $tanggal  = 'tidak ada Tanggal di pilih';                                      
            $tanggalnamaruangan = $tanggal.$namaruangan;          
            }
//masuk------------------------------------------------------------------------------------------
$data['rekap'] = $this->db->query("
SELECT ruangan.*
FROM ruangan

WHERE ruangan.namaruangan = '$namaruangan' 
ORDER BY ruangan.namaruangan ASC
")->result();

// Ambil nilai dari form, misalnya dari parameter URL atau POST request
$namaruangan = $this->input->get('namaruangan'); // Sesuaikan dengan metode pengambilan data yang Anda gunakan
$tanggal = $this->input->get('tanggal'); // Sesuaikan dengan metode pengambilan data yang Anda gunakan

// Lakukan query untuk menghitung jumlah pasien masuk
$query = $this->db->query("SELECT COUNT(*) as jumlah_pasien_masuk
FROM pasienmasuk
WHERE namaruangan = '$namaruangan' AND tgl_masuk = '$tanggal'"
);
// Ambil hasil query
$result = $query->row();
// Gunakan hasil query untuk mengisi nilai input
$jumlah_pasien_masuk = isset($result->jumlah_pasien_masuk) ? $result->jumlah_pasien_masuk : 0;
$data['jumlah_pasien_masuk'] = $jumlah_pasien_masuk; // Inisialisasi variabel

//keluar-------------------------------------------------------------------------------------------------------------
// menghitung jumlah pasien keluar hidup
$query = $this->db->query("SELECT COUNT(*) as jumlah_pasien_keluarHidup
FROM pasienkeluar
WHERE namaruangan = '$namaruangan' AND tgl_keluar = '$tanggal' AND carakeluar = 'hidup'"
);
// Ambil hasil query
$result = $query->row();
// Gunakan hasil query untuk mengisi nilai input
$jumlah_pasien_keluarHidup = isset($result->jumlah_pasien_keluarHidup) ? $result->jumlah_pasien_keluarHidup : 0;
$data['jumlah_pasien_keluarHidup'] = $jumlah_pasien_keluarHidup; // Inisialisasi variabel


//  menghitung jumlah pasien keluar mati
$query = $this->db->query("SELECT COUNT(*) as jumlah_pasien_keluarMati
FROM pasienkeluar
WHERE namaruangan = '$namaruangan' AND tgl_keluar = '$tanggal' AND carakeluar = 'meninggal'"
);
// Ambil hasil query
$result = $query->row();
// Gunakan hasil query untuk mengisi nilai input
$jumlah_pasien_keluarMati = isset($result->jumlah_pasien_keluarMati) ? $result->jumlah_pasien_keluarMati : 0;
$data['jumlah_pasien_keluarMati'] = $jumlah_pasien_keluarMati; // Inisialisasi variabel

//  menghitung jumlah mati kurang 48
$query = $this->db->query("SELECT COUNT(*) as jumlah_pasien_matikurang
FROM pasienkeluar
WHERE namaruangan = '$namaruangan' AND tgl_keluar = '$tanggal' AND keadaankeluar = 'meninggal kurang'"
);
// Ambil hasil query
$result = $query->row();
// Gunakan hasil query untuk mengisi nilai input
$jumlah_pasien_matikurang = isset($result->jumlah_pasien_matikurang) ? $result->jumlah_pasien_matikurang : 0;
$data['jumlah_pasien_matikurang'] = $jumlah_pasien_matikurang; // Inisialisasi variabel

//  menghitung jumlah mati lebih 48 
$query = $this->db->query("SELECT COUNT(*) as jumlah_pasien_matilebih
FROM pasienkeluar
WHERE namaruangan = '$namaruangan' AND tgl_keluar = '$tanggal' AND keadaankeluar = 'meninggal lebih'"
);
// Ambil hasil query
$result = $query->row();
// Gunakan hasil query untuk mengisi nilai input
$jumlah_pasien_matilebih = isset($result->jumlah_pasien_matilebih) ? $result->jumlah_pasien_matilebih : 0;
$data['jumlah_pasien_matilebih'] = $jumlah_pasien_matilebih; // Inisialisasi variabel

//  menghitung lama rawat
$query = $this->db->query("
SELECT SUM(total_lama_rawat) as total_lama_rawat
FROM (
SELECT SUM(lamarawat) as total_lama_rawat
FROM pasienkeluar
WHERE namaruangan = '$namaruangan' AND tgl_keluar = '$tanggal'

UNION ALL

SELECT SUM(lamarawat) as total_lama_rawat
FROM pasienpindah
WHERE namaruangan = '$namaruangan' AND tgl_masuk = '$tanggal'
) AS total
");

// Ambil hasil query
$result = $query->row();   

// Gunakan hasil query untuk mengisi nilai input
$total_lama_rawat = isset($result->total_lama_rawat) ? $result->total_lama_rawat : 0;
$data['total_lama_rawat'] = $total_lama_rawat; // Inisialisasi variabel bagaimana penambahannya

// menghitung jumlah masuk keluar 
$query = $this->db->query("
SELECT SUM(total_masukkeluar) as total_masukkeluar
FROM (
SELECT SUM(masukkeluar) as total_masukkeluar
FROM pasienkeluar
WHERE namaruangan = '$namaruangan' AND tgl_keluar = '$tanggal'

UNION ALL

SELECT SUM(masukkeluar) as total_masukkeluar
FROM pasienpindah
WHERE namaruangan = '$namaruangan' AND tgl_masuk = '$tanggal'
) AS total
");

// Ambil hasil query
$result = $query->row();

// Gunakan hasil query untuk mengisi nilai input
$total_masukkeluar = isset($result->total_masukkeluar) ? $result->total_masukkeluar : 0;
$data['total_masukkeluar'] = $total_masukkeluar; // Inisialisasi variabel penambahan


//pindah------------------------------------------------------------------------------------------------------------------------

// menghitung jumlah pasien dipindahkan
$query = $this->db->query("SELECT COUNT(*) as jumlah_pasien_dipindahkan
FROM pasienpindah
WHERE namaruangan = '$namaruangan' AND tgl_masuk = '$tanggal'"
);
// Ambil hasil query
$result = $query->row();
// Gunakan hasil query untuk mengisi nilai input
$jumlah_pasien_dipindahkan = isset($result->jumlah_pasien_dipindahkan) ? $result->jumlah_pasien_dipindahkan : 0;
$data['jumlah_pasien_dipindahkan'] = $jumlah_pasien_dipindahkan; // Inisialisasi variabel 

// menghitung jumlah pasien pindahan
$query = $this->db->query("SELECT COUNT(*) as jumlah_pasien_pindahan
FROM pasienpindah
WHERE namaruanganpindah= '$namaruangan' AND pasienpindah.tgl_pindah= '$tanggal'"
);
// Ambil hasil query
$result = $query->row();
// Gunakan hasil query untuk mengisi nilai input
$jumlah_pasien_pindahan = isset($result->jumlah_pasien_pindahan) ? $result->jumlah_pasien_pindahan : 0;
$data['jumlah_pasien_pindahan'] = $jumlah_pasien_pindahan; // Inisialisasi variabel

//awal---------------------------------------------------------------------------------------------------------------------
// Ambil nilai namaruangan dan tanggal dari form
$namaruangan = $this->input->get('namaruangan');
$tanggal = $this->input->get('tanggal');

// Periksa apakah namaruangan dan tanggal sudah dipilih
if (!empty($namaruangan) && !empty($tanggal)) {
// Jika sudah dipilih, ambil nilai "sisa" terakhir kali dari tabel sensus
$query = $this->db->select('sisa')
->where('namaruangan', $namaruangan)
->order_by('tanggal', 'DESC')
->limit(1)
->get('sensus');

if ($query->num_rows() > 0) {
$result = $query->row();
$awal = $result->sisa;
} else {
$awal = 0; // Jika tidak ada data "sisa" yang ditemukan, inisialisasikan dengan 0
}
} else {
// Jika namaruangan dan tanggal belum dipilih, inisialisasikan $awal dengan 0
$awal = 0;
}

// Kirim nilai $awal ke view
$data['awal'] = $awal;



//vieww------------------------------------------------------------------------------------------------------------------------      
   
    $this->load->view('Aadmin/header');
    $this->load->view('Aadmin/sidebar');
    $this->load->view('admin/V_AAsensus',$data);		
    $this->load->view('Aadmin/footer');
    }

    public function register(){        

        $koderuangan        =$this->input->post('koderuangan');              
        $namaruangan        =$this->input->post('namaruangan');
        $namakelas          =$this->input->post('namakelas');
        $tidur              =$this->input->post('tidur');
        $tanggal            =$this->input->post('tanggal');

        $awal               =$this->input->post('awal');
        $masuk              =$this->input->post('masuk');
        $pindahan           =$this->input->post('pindahan');
        $jlhmasuk           =$this->input->post('jlhmasuk');

        $keluar             =$this->input->post('keluar');
        $dipindahkan        =$this->input->post('dipindahkan');
        $mati               =$this->input->post('mati');
        $matikurang         =$this->input->post('matikurang');
        $matilebih          =$this->input->post('matilebih');
        $jlhkeluar          =$this->input->post('jlhkeluar');

        $lama               =$this->input->post('lama');
        $masukkeluar        =$this->input->post('masukkeluar');
        $sisa               =$this->input->post('sisa');
        $hp                 =$this->input->post('hp');
        $aprove             =$this->input->post('aprove');
        $petugas            =$this->input->post('petugas');
        
        
        
        $data = array (
            'koderuangan'   => $koderuangan,
            'namaruangan'   => $namaruangan,
            'namakelas'     => $namakelas,
            'tidur'         => $tidur,
            'tanggal'       => $tanggal,

            'awal'          => $awal,
            'masuk'         => $masuk,
            'pindahan'      => $pindahan,
            'jlhmasuk'      => $jlhmasuk,

            'keluar'        => $keluar,
            'dipindahkan'   => $dipindahkan,
            'mati'          => $mati,
            'matikurang'    => $matikurang,
            'matilebih'     => $matilebih,
            'jlhkeluar'     => $jlhkeluar,

            'lama'          => $lama,
            'masukkeluar'   => $masukkeluar,
            'sisa'          => $sisa,
            'hp'            => $hp,
            'aprove'        => $aprove,
            'petugas'       => $petugas
            
        );
         // Cek
         if(empty($tanggal) || empty($masuk) || empty($koderuangan)) {
          $this->session->set_flashdata('error_message', 'Belum Ada Ruangan dan tanggal dipilih..! Pilihlah Ruangan dan Tanggal Sebelum melanjutkan !');
          redirect('AAsensus');  
        }
      
      // Cek apakah data sudah ada
      $data_exists = $this->Sensus_model->check_data_exists(
        $tanggal,
        $koderuangan,
        $namaruangan,
        $namakelas,
        $tidur
        );
      
      // Jika data sudah ada, tampilkan pesan dengan modal
        if($data_exists) {
          $this->session->set_flashdata('error_message', 'Data sensus  di namaruangan' .$namaruangan.' dengan tanggal ' . $tanggal . ' sudah ada.');
          redirect('AAsensus');  
        } else {
         
          $this->Sensus_model->input_data($data,'sensus');
          $this->session->set_flashdata('success_message', 'Berhasil disimpan!');         
          redirect('AAsensus');  
        }
      
    }
}
