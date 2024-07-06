<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Amonetkelas extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->model('Mkelas');
        $this->load->model('Mindikatorkelas');
		$this->load->helper('url');
		$this->load->library('form_validation');

        if($this->session->userdata('logged') !=TRUE){
            $url=base_url('masuk');
            redirect($url);
		};
 
	}

	public function index(){       

        if( (isset($_GET['bulan'])&& $_GET['bulan']!='')&&
            (isset($_GET['tahun'])&& $_GET['tahun']!='')){                                       
                                      
                $bulan    = $_GET['bulan'];
                $tahun    = $_GET['tahun'];
                $kalender = $tahun. '-' .$bulan. '-01';
        }else{  
                                      
                $bulan = date('M') ;
                $tahun= date('Y') ;  
                $kalender = $tahun. '-' .$bulan. '-01';     
        }

       $data['rekap'] = $this->db->query("SELECT indikatorkelas.*
       FROM indikatorkelas 
       WHERE indikatorkelas.bulan='$kalender' 
       ORDER BY indikatorkelas.namakelas ASC")->result();

        $this->load->view('Aadmin/header');
        $this->load->view('Aadmin/sidebar');
		$this->load->view('admin/Vlapmonetkelas_admin',$data);
        $this->load->view('Aadmin/footer');
    }

    function edit($id){
            $where = array('id'=>$id);
            $data['rekap'] = $this->Mindikatorkelas->edit_data($where,'indikatorkelas')->result();
            $this->load->view('Aadmin/header');
            $this->load->view('Aadmin/sidebar');
            $this->load->view('admin/Editindikatorkelas_admin',$data);	
            $this->load->view('Aadmin/footer');
    }
        
    function update() {
            $id 		        =$this->input->post('id');
            $kodekelas          =$this->input->post('kodekelas');      
            $namakelas          =$this->input->post('namakelas');
            $tidur              =$this->input->post('tidur');
            
            $masuk              =$this->input->post('masuk');
            $keluar             =$this->input->post('keluar');      
            $mati               =$this->input->post('mati');
            $matikurang         =$this->input->post('matikurang');
            $matilebih          =$this->input->post('matilebih');
            $jlhkeluar          =$this->input->post('jlhkeluar');       
            $masukkeluar        =$this->input->post('masukkeluar');
            $lama               =$this->input->post('lama');      
            $hp                 =$this->input->post('hp');
            $petugas            =$this->input->post('petugas');            
            
            
        $data = array (
            'kodekelas'         => $kodekelas,           
            'namakelas'         => $namakelas,
            'tidur'             => $tidur,
            
        
            'masuk'             => $masuk,          
            'keluar'            => $keluar,          
            'mati'              => $mati,
            'matikurang'        => $matikurang,
            'matilebih'         => $matilebih,
            'jlhkeluar'         => $jlhkeluar,         
            'masukkeluar'       => $masukkeluar,
            'lama'              => $lama,           
            'hp'                => $hp,  
            'petugas'           => $petugas   
            );
    
        $where = array(
                'id' => $id
            );
       
        $this->Mindikatorkelas->update_data($where,$data,'indikatorkelas');        
            if (!$this->db->update('indikatorkelas', $data, $where)) {
                // Jika terjadi kesalahan saat mengupdate data
                log_message('rror_message', 'Gagal mengupdate data');
                show_error('Gagal mengupdate data, silakan cek log untuk detailnya');
            } else {
                // Jika berhasil mengupdate data
                $this->session->set_flashdata('success_message', 'Data berhasil diubah');
                redirect('Amonetkelas'); 
            }
    }
            
    function hapus($id){
                $where = array('id' => $id);
                $this->Mindikatorkelas->hapus_data($where,'indikatorkelas'); 
                $this->session->set_flashdata('message', 'Data Telah Dihapus !!');
                redirect('Amonetkelas');
    }
   
    public function cetak(){       

        if( (isset($_GET['bulan'])&& $_GET['bulan']!='')&&
            (isset($_GET['tahun'])&& $_GET['tahun']!='')){                                       
                                      
                $bulan    = $_GET['bulan'];
                $tahun    = $_GET['tahun'];
                $kalender = $tahun. '-' .$bulan. '-01';
        }else{  
                                      
                $bulan = date('M') ;
                $tahun= date('Y') ;  
                $kalender = $tahun. '-' .$bulan. '-01';     
        }

       $data['cetak'] = $this->db->query("SELECT indikatorkelas.*
       FROM indikatorkelas 
       WHERE indikatorkelas.bulan='$kalender' 
       ORDER BY indikatorkelas.namakelas ASC")->result();

        
		$this->load->view('Cetak/C_rekapitulasikelas',$data);
      
    }

   }
?>

