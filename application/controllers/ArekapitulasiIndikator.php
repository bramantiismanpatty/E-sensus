<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ArekapitulasiIndikator extends CI_Controller {

	function __construct(){
		parent::__construct();		
		
        $this->load->model('Mruangan');
        $this->load->model('Mindikator');
		$this->load->helper('url');
		$this->load->library('form_validation');

        if($this->session->userdata('logged') !=TRUE){
            $url=base_url('masuk');
            redirect($url);
		};
 
	}
	public function index(){       

        if((isset($_GET['bulan'])  && $_GET['bulan']!='')&&
          (isset($_GET['tahun'])&& $_GET['tahun']!='')){                                       
                $bulan    = $_GET['bulan'];
                $tahun    = $_GET['tahun'];
                $kalender =$tahun.'-'.$bulan.'-'.'01';
        }else{  
                $bulan = date('m') ;
                $tahun= date('Y') ;  
                $kalender =$tahun.'-'.$bulan.'-'.'01';                           
             
       }

       $data['rekap'] = $this->db->query("SELECT indikator.*
       FROM indikator 
       WHERE indikator.bulan='$kalender' 
       ORDER BY indikator.namaruangan ASC")->result();

        $this->load->view('Aadmin/header');
        $this->load->view('Aadmin/sidebar');
		$this->load->view('admin/Vrekapindikator_admin',$data);
        $this->load->view('Aadmin/footer');
        		
	}

    public function cetak(){

        if((isset($_GET['bulan'])  && $_GET['bulan']!='')&&
        (isset($_GET['tahun'])&& $_GET['tahun']!='')){                                       
              $bulan    = $_GET['bulan'];
              $tahun    = $_GET['tahun'];
              $kalender =$tahun.'-'.$bulan.'-'.'01';
      }else{  
              $bulan = date('m') ;
              $tahun= date('Y') ;  
              $kalender =$tahun.'-'.$bulan.'-'.'01';                    
            
     }

     $data['cetak'] = $this->db->query("SELECT indikator.*
       FROM indikator 
       WHERE indikator.bulan='$kalender' 
       ORDER BY indikator.namaruangan ASC")->result();


      $this->load->view('cetak/C_indikator',$data);
              
  }

    function edit($id){
		$where = array('id' => $id);
		$data['rekap'] = $this->Mindikator->edit_data($where,'indikator')->result();
        $this->load->view('Aadmin/header');
        $this->load->view('Aadmin/sidebar');
		$this->load->view('admin/Editindikator_admin',$data);
        $this->load->view('Aadmin/footer');
    }

	function update() { 
        $id 		        = $this->input->post('id');
        $bulan               =$this->input->post('bulan');
        $koderuangan         =$this->input->post('koderuangan');
        $namaruangan         =$this->input->post('namaruangan');
        $namakelas           =$this->input->post('namakelas'); 
        $tidur               =$this->input->post('tidur');

        $masuk               =$this->input->post('masuk');       
        $keluar              =$this->input->post('keluar');
        $mati                =$this->input->post('mati');
        $matikurang          =$this->input->post('matikurang');
        $matilebih           =$this->input->post('matilebih');
        $jlhkeluar           =$this->input->post('jlhkeluar');
        $lama                =$this->input->post('lama');
        $masukkeluar         =$this->input->post('masukkeluar');      
        $hp                  =$this->input->post('hp');
        $petugas             =$this->input->post('petugas');

        $periode             =$this->input->post('periode');

        $bor                 =$this->input->post('bor');
        $avlos               =$this->input->post('avlos');
        $toi                 =$this->input->post('toi');
        $bto                 =$this->input->post('bto');      
        $ndr                 =$this->input->post('ndr');
        $gdr                 =$this->input->post('gdr');
        
        
        
        $data = array (
            'bulan'                => $bulan,
            'koderuangan'          => $koderuangan,
            'namaruangan'          => $namaruangan,
            'namakelas'            => $namakelas,
            'tidur'                => $tidur, 

            'masuk'                => $masuk,     
            'keluar'               => $keluar,          
            'mati'                 => $mati,
            'matikurang'           => $matikurang,
            'matilebih'            => $matilebih,
            'jlhkeluar'            => $jlhkeluar,
            'lama'                 => $lama,
            'masukkeluar'          => $masukkeluar,         
            'hp'                   => $hp,
            'petugas'              => $petugas,

            'periode'              => $periode,
            'bor'                  => $bor,
            'avlos'                => $avlos,
            'toi'                  => $toi,
            'bto'                  => $bto,         
            'ndr'                  => $ndr,
            'gdr'                  => $gdr

        );

        $where = array(
			'id' => $id
		);
         // Cek
         if(empty($bulan) || empty($masuk) || empty($koderuangan)) {
            $this->session->set_flashdata('error_message', 'Belum Ada Bulan dipilih! Pilihlah Bulan Sebelum melanjutkan!');
        
            redirect('ArekapitulasiIndikator');  
        }
        
        // Cek apakah data sudah ada
        $data_exists = $this->Mindikator->check_data_exists(
          $bulan,
          $koderuangan,
          $namaruangan,
          $namakelas,
          $tidur,
          $masuk,
          $keluar,
          $mati,
          $matikurang,
          $matilebih,
          $jlhkeluar,
          $lama,
          $hp,
          $masukkeluar);
        
        // Jika data sudah ada, tampilkan pesan dengan modal
        if($data_exists) {
            $this->session->set_flashdata('error_message', 'Data sudah ada!');          
            redirect('ArekapitulasiIndikator'); 
        } else {
            // Jika tidak, simpan data dan tampilkan pesan sukses
            $this->Mindikator->update_data($where,$data,'indikator');
            $this->session->set_flashdata('success_message', 'Berhasil disimpan !');         
            redirect('ArekapitulasiIndikator');
        }
     
      
             
	}
    
    function hapus($id){
        $where = array('id' => $id);
        $this->Mindikator->hapus_data($where,'indikator');
        $this->session->set_flashdata('message', 'Data Telah Dihapus !!');
        redirect('ArekapitulasiIndikator');
     }

     
    
}
?>

