<?php 

class Asensus extends CI_Controller {

    public function __construct()   {
        parent::__construct();
		$this->load->helper("url");
		$this->load->model('Sensus_model');
        $this->load->model('Mkelas');
        $this->load->model('Mruangan');

       // if($this->session->userdata('logged') !=TRUE){
        //   $url=base_url('masuk');
       //    redirect($url);
	//	};
        
    }   

    public function index(){
    $data['ruangan'] = $this->Mruangan->tampil_data()->result();

      if((isset($_GET['namaruangan'])&& $_GET['namaruangan']!='')){
            $ruang = $_GET['namaruangan'];                                                                
            $pilih = $ruang;
           }else{
            $ruang  = 'tidak ada ruangan di pilih';
            $pilih    = $ruang;
           }

       $data['rekap'] = $this->db->query("SELECT ruangan.*
       FROM ruangan
       WHERE ruangan.namaruangan='$pilih'
       ORDER BY ruangan.namaruangan ASC")->result();
       
        $this->load->view('Aadmin/header');
		$this->load->view('Aadmin/sidebar');
		$this->load->view('admin/Asensus_view',$data);
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
        $petugas            =$this->input->post('petugas');

        $is_data_exist = $this->Mruangan->check_data_exist($namaruangan,$tanggal);

        if ($is_data_exist) {
            // Menyiapkan pesan untuk ditampilkan di Tkelas
            $pesan = array(
                'status' => 'error',
                'message' => 'Data sensus  di ruangan' .$namaruangan.' dengan tanggal ' . $tanggal . ' sudah ada.'
            );

            // Menggunakan session untuk menyimpan pesan
            $this->session->set_flashdata('pesan', $pesan);
        } else {
            // Data belum ada, simpan data
        
        
        
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
            'petugas'       => $petugas
            
        );
         // Memanggil model Mkelas untuk menyimpan data
         $this->Sensus_model->inputdata($data,'sensus');

         // Menyiapkan pesan untuk ditampilkan di Tkelas
         $pesan = array(
             'status' => 'success',
             'message' => 'Data kelas berhasil disimpan.'
         );

         // Menggunakan session untuk menyimpan pesan
         $this->session->set_flashdata('pesan', $pesan);
     }

       redirect('Asensus');      
    }
}
