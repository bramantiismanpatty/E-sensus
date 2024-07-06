<?php 

class Opmobilisasi extends CI_Controller {

    function __construct(){
		parent::__construct();	
		$this->load->model('Sensus_model');	
		$this->load->model('Mpasienmasuk');
		$this->load->model('Mpasienpindah');
		$this->load->model('Mpasienkeluar');
        $this->load->model('Mruangan');
		$this->load->helper('url');
		$this->load->library('form_validation');

      if($this->session->userdata('logged') !=TRUE){
			$url=base_url('masuk');
			redirect($url);
		};
 
	}
	public function index(){ 

		$query = $this->db->query("SELECT * FROM pasienkeluar");
        $keluar = $query->result_array();
        // Menyertakan data ke view
        $data['keluar'] = $keluar;

	
		// Ambil data sensus dari model
		$data['sensus'] = $this->Sensus_model->get_data();

		// Inisialisasi array untuk menyimpan tanggal terakhir untuk setiap namaruangan
		$tanggal_terakhir_per_namaruangan = [];

		// Iterasi melalui data sensus untuk mendapatkan tanggal terakhir untuk setiap namaruangan
		foreach ($data['sensus'] as $row) {
			$tanggal_terakhir_per_namaruangan[$row->namaruangan] = max($tanggal_terakhir_per_namaruangan[$row->namaruangan] ?? null, $row->tanggal);
			}
		// Periksa tanggal selanjutnya untuk setiap namaruangan
		foreach ($tanggal_terakhir_per_namaruangan as $namaruangan => $tanggal_terakhir) {
			$tanggal_selanjutnya = date('Y-m-d', strtotime('+1 day', strtotime($tanggal_terakhir)));
			// Cek apakah data untuk tanggal selanjutnya sudah ada dalam tabel sensus
			$data_exists = $this->Sensus_model->check_date_exists_for_dataSensus($tanggal_selanjutnya, $namaruangan);
			if (!$data_exists) {
				// Jika tidak ada data untuk tanggal selanjutnya, kirim pesan peringatan ke View
				$data['tanggal_selanjutnya'][$namaruangan] = $tanggal_selanjutnya;
        	}
    	}

        $data['kelas'] = $this->Mruangan->tampil_data()->result();

        if((isset($_GET['namaruangan'])&& $_GET['namaruangan']!='') && 
           (isset($_GET['tanggal'])  && $_GET['tanggal']!='')){
            $ruangan = $_GET['namaruangan'];
            $tanggal = $_GET['tanggal'];                                      
           $tanggalruangan = $tanggal.$ruangan;
        

        }else{
            $ruangan  = 'tidak ada ruangan di pilih';
            $tanggal  = 'tidak ada Tanggal di pilih';                                      
            $tanggalruangan = $tanggal.$ruangan;          
        }

       $data['rekap'] = $this->db->query("SELECT pasienmasuk.*
       FROM pasienmasuk 
       WHERE pasienmasuk.namaruangan='$ruangan' and pasienmasuk.tgl_masuk='$tanggal'
       ORDER BY pasienmasuk.namaruangan ASC")->result();

        $this->load->view('Aoperator/header',$data);
        $this->load->view('Aoperator/sidebar');    
		$this->load->view('operator/VO_mobilisasi',$data);
        $this->load->view('Aoperator/footer');
        		
	}

	function edit1($id){
		$data['mutasi'] = $this->Mruangan->tampil_data()->result();      
		
		$where = array('id' => $id);
		$data['pindah'] = $this->Mpasienmasuk->edit_data($where,'pasienmasuk')->result();
        $this->load->view('Aoperator/header',$data);
		$this->load->view('Aoperator/sidebar');
		$this->load->view('operator/VO_pasiendipindahkan',$data);
		$this->load->view('Aoperator/footer');
	}

	
	function dipindahkan() {
		// Ambil data dari inputan
		$nomorm            = $this->input->post('nomorm');
		$tgl_pindah        = $this->input->post('tgl_pindah');
		$koderuanganpindah = $this->input->post('koderuanganpindah');
		$namapasien        = $this->input->post('namapasien');
		$namaruanganpindah = $this->input->post('namaruanganpindah');
		$namakelaspindah   = $this->input->post('namakelaspindah');
		$reg               = $this->input->post('reg');
		$tgl_masuk         = $this->input->post('tgl_masuk');
		$koderuangan       = $this->input->post('koderuangan');
		$namaruangan       = $this->input->post('namaruangan');
		$namakelas         = $this->input->post('namakelas');
		$masukkeluar       = $this->input->post('masukkeluar');
		$lamarawat         = $this->input->post('lamarawat');
		$carabayar         = $this->input->post('carabayar');
		$petugas           = $this->input->post('petugas');


		// Set nilai untuk kolom 'status' berdasarkan kondisi tertentu
		$status = 'Pindahan'; // Misalnya, di sini kita set 'status' menjadi 'Pindahan'	
		// Cek apakah data sudah ada pada tabel pasienpindah
		$data_exists = $this->Mpasienpindah->check_data_exists($tgl_pindah, $nomorm, $namapasien, $namaruanganpindah);
	
		if ($data_exists) {
			// Jika data sudah ada, set pesan kesalahan dan kembalikan
			$this->session->set_flashdata('error_message', 'Pasien sudah dipindahkan di ruangan yang dipilih.');
			redirect('Opmobilisasi');
		}
	
		// Jika data belum ada, simpan data pasienpindah
		$data_pasienpindah = array(
			'nomorm'             => $nomorm,
			'reg'                => $reg,
			'namapasien'         => $namapasien,
			'tgl_masuk'          => $tgl_masuk,
			'koderuangan'        => $koderuangan,
			'namaruangan'        => $namaruangan,
			'namakelas'          => $namakelas,
			'tgl_pindah'         => $tgl_pindah,
			'koderuanganpindah'  => $koderuanganpindah,
			'namaruanganpindah'  => $namaruanganpindah,
			'namakelaspindah'    => $namakelaspindah,
			'masukkeluar'        => $masukkeluar,
			'lamarawat'          => $lamarawat,
			'carabayar'          => $carabayar,
			'petugas'            => $petugas,
		);
		$this->Mpasienpindah->input_data($data_pasienpindah, 'pasienpindah');
		$this->session->set_flashdata('success_message', 'Data pasien berhasil disimpan.');
	
		// Periksa dan update data pasienmasuk
		$data_pasienmasuk = array(
			'tgl_masuk'   => $tgl_pindah,
			'namaruangan' => $namaruanganpindah,
			'koderuangan' => $koderuanganpindah,
			'namakelas'   => $namakelaspindah,
			'status'   	  => $status,
		);
		$where_pasienmasuk = array('nomorm' => $nomorm);
	
		// Memeriksa apakah pasien dengan nomor medis tersebut ada di tabel pasienmasuk
		$cek_pasien = $this->Mpasienmasuk->check_data_exists($tgl_masuk, $nomorm, $namapasien, $koderuangan, $namaruangan, $namakelas);
	
		if ($cek_pasien) {
			// Jika pasien ditemukan, update data pasienmasuk
			$update_result = $this->Mpasienmasuk->update_data_if_exists($tgl_masuk, $nomorm, $namapasien, $koderuangan, $namaruangan, $namakelas, $data_pasienmasuk);
			if ($update_result) {
				// Jika berhasil, tampilkan pesan sukses
				$this->session->set_flashdata('success_message', 'Data pasien berhasil disimpan.');
			} else {
				// Jika gagal, tampilkan pesan error
				$this->session->set_flashdata('error_message', 'Gagal memperbarui data pasienmasuk.');
			}
		} else {
			// Jika pasien tidak ditemukan, tampilkan pesan error
			$this->session->set_flashdata('error_message', 'Nomor rekam medis tidak ditemukan dalam data pasienmasuk.');
		}
	
		// Lakukan pengalihan setelah semua kondisi selesai dievaluasi
		redirect('Opmobilisasi');
	}
		

	


//================================================================================



    
	function edit2($id){

		$data['mutasi'] = $this->Mruangan->tampil_data()->result();      
		
		$where = array('id' => $id);
		$data['keluar'] = $this->Mpasienmasuk->edit_data($where,'pasienmasuk')->result();
        $this->load->view('Aoperator/header',$data);
		$this->load->view('Aoperator/sidebar');
		$this->load->view('operator/VO_pasienpulang',$data);
		$this->load->view('Aoperator/footer');
	}

	function keluar() {
		
        $nomorm            = $this->input->post('nomorm');
        $reg               = $this->input->post('reg');
        $tgl_masuk         = $this->input->post('tgl_masuk');   
        $namapasien        = $this->input->post('namapasien');
        $koderuangan       = $this->input->post('koderuangan');
        $namaruangan       = $this->input->post('namaruangan'); 
        $namakelas         = $this->input->post('namakelas');
        $tgl_keluar        = $this->input->post('tgl_keluar');
        $carakeluar        = $this->input->post('carakeluar'); 
        $keadaankeluar     = $this->input->post('keadaankeluar'); 
        $lamarawat         = $this->input->post('lamarawat');
        $masukkeluar       = $this->input->post('masukkeluar');    
        $carabayar         = $this->input->post('carabayar');
        $petugas           = $this->input->post('petugas');

    
    
        $data = array (
            'nomorm'             => $nomorm,
            'reg'                => $reg,
            'namapasien'         => $namapasien,
            'tgl_masuk'          => $tgl_masuk,
            'koderuangan'        => $koderuangan,
            'namaruangan'        => $namaruangan,
            'namakelas'          => $namakelas,
            'tgl_keluar'         => $tgl_keluar,            
            'carakeluar'         => $carakeluar,
            'keadaankeluar'      => $keadaankeluar,
            'lamarawat'          => $lamarawat,
            'masukkeluar'        => $masukkeluar,
            'carabayar'          => $carabayar,
            'petugas'            => $petugas,

        );	
        $this->Mpasienkeluar->input_data($data,'pasienkeluar'); 
            // Set variabel show_modal menjadi true
        $this->session->set_flashdata('show_modal', true);

            $this->session->set_flashdata('pesan','Pasien Keluar Rumah Sakit');           
        redirect('Opmobilisasi');
	}
}
   

?>

