<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('Mkelas');
		$this->load->model('Orang_model');
		$this->load->library('session');
		$this->load->model('Sensus_model');	
		$this->load->model('Mpasienmasuk');
		$this->load->model('Mpasienpindah');
		$this->load->model('Mpasienkeluar');
        $this->load->model('Mruangan');

		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('masuk');
            redirect($url);
		};
	}
	
	public function index()
	{
		
		$set = $this->admin_model->Truang();
		$ruang = $set->num_rows();

		$user = $this->Orang_model->tampil_userbangsal();
		$sandi = $user->num_rows();

		$kls = $this->admin_model->Tkelas();
		$kelas = $kls->num_rows();

		$data = array(
			'Jruangan' 	=> $ruang,			
			'Jsandi' 	=> $sandi,
			'Jkelas' 	=> $kelas,
		);
			
		$data['kls']        = $this->Mkelas->tampil_data()->result();
		//$data['sum_tidur']  =$this->Mkelas->jumlah();
		$data['jumlah']		=$this->admin_model->sum_tidur();
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
			
		$this->load->view('operator/V_operator',$data);
		
	}
}
