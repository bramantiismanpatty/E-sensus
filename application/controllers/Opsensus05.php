<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Opsensus05 extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('Sensus_model');
        $this->load->model('Mruangan');
		$this->load->helper('url');
		$this->load->library('form_validation');

        if($this->session->userdata('logged') !=TRUE){
            $url=base_url('masuk');
            redirect($url);
		};
  
	}
	public function index(){

        $data['kelas'] = $this->Mruangan->tampil_data()->result();
       
        if((isset($_GET['namaruangan'])&& $_GET['namaruangan']!='') && 
           (isset($_GET['first_date'])  && $_GET['first_date']!='') && 
           (isset($_GET['second_date'])  && $_GET['second_date']!='')){
            $ruang = $_GET['namaruangan'];
            $first_tanggal = $_GET['first_date'];
            $second_tanggal = $_GET['second_date']; 
            $tampilkan = $ruang;                       

        }else{
            $ruang  = 'tidak ada ruangan di pilih';
            $first_tanggal  = 'tidak ada Tanggal di pilih';  
            $second_tanggal  = 'tidak ada Tanggal di pilih';
            $tampilkan = $ruang;
            }

        $data['rekap'] = $this->Sensus_model->filter_data($ruang, $first_tanggal, $second_tanggal);
      

        $this->load->view('Aoperator/header');
		$this->load->view('Aoperator/sidebar');
		$this->load->view('operator/VO_sensus5',$data);
        $this->load->view('Aoperator/footer');

        		
	}

        function cetak(){

        $data['kelas'] = $this->Mruangan->tampil_data()->result();
       
        if((isset($_GET['namaruangan'])&& $_GET['namaruangan']!='') && 
        (isset($_GET['first_date'])  && $_GET['first_date']!='') && 
        (isset($_GET['second_date'])  && $_GET['second_date']!='')){
         $ruang = $_GET['namaruangan'];
         $first_tanggal = $_GET['first_date'];
         $second_tanggal = $_GET['second_date']; 
         $tampilkan = $ruang;                       

     }else{
         $ruang  = 'tidak ada ruangan di pilih';
         $first_tanggal  = 'tidak ada Tanggal di pilih';  
         $second_tanggal  = 'tidak ada Tanggal di pilih';
         $tampilkan = $ruang;
         }

         $data['cetak'] = $this->Sensus_model->filter_data($ruang, $first_tanggal, $second_tanggal);   
      
         $data['judul'] = $this->db->query("SELECT sensus.*
       FROM sensus
       WHERE sensus.namaruangan='$tampilkan'
       ORDER BY sensus.namaruangan ASC")->result();

  

       $data['koderuangan'] = $this->db->query("SELECT koderuangan FROM ruangan WHERE namaruangan = '$ruang'")->result();
       $data['namakelas'] = $this->db->query("SELECT namakelas FROM ruangan WHERE namaruangan = '$ruang'")->result();
       $data['tidur'] = $this->db->query("SELECT tidur FROM ruangan WHERE namaruangan = '$ruang'")->result();
        
       $this->load->view('cetak/C_Rekapitulasi',$data);
          	
	}


	function edit($id){
		$where = array('id' => $id);
		$data['sensus'] = $this->Sensus_model->edit_data($where,'sensus')->result();

		 $this->load->view('Aoperator/header');
		$this->load->view('Aoperator/sidebar');
		$this->load->view('operator/Editsensus',$data);
        $this->load->view('Aoperator/footer');
	}
	function update() {
        $id 		        = $this->input->post('id');
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

        $where = array(
			'id' => $id
		);
        $this->Sensus_model->update_data($where,$data,'sensus');
        redirect('Opsensus05');      
	}
    
    function hapus($id){
        $where = array('id' => $id);
        $this->Sensus_model->hapus_data($where,'sensus');
        redirect('Opsensus05');
     }
}
?>

