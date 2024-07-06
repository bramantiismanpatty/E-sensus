<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Abatalpindah extends CI_Controller {

	function __construct(){
		parent::__construct();		
        $this->load->model('Mpasienpindah');        	
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
        (isset($_GET['tgl_pindah'])  && $_GET['tgl_pindah']!='')){
         $ruangan = $_GET['namaruangan'];
         $tanggal = $_GET['tgl_pindah'];                                      
        $tanggalruangan = $tanggal.$ruangan;
     

     }else{
         $ruangan  = 'tidak ada ruangan di pilih';
         $tanggal  = 'tidak ada Tanggal di pilih';                                      
         $tanggalruangan = $tanggal.$ruangan;
       
         }

            $data['batal'] = $this->db->query("SELECT pasienpindah.*
            FROM pasienpindah 
            WHERE pasienpindah.namaruangan='$ruangan' and pasienpindah.tgl_pindah='$tanggal'
            ORDER BY pasienpindah.namaruangan ASC")->result();
     

        $this->load->view('Aadmin/header',$data);
        $this->load->view('Aadmin/sidebar');    
		$this->load->view('Admin/Vbatalpindah',$data);
        $this->load->view('Aadmin/footer');
        		
	}	
    
    function batal($id){
        $where = array('id' => $id);
        $this->Mpasienpindah->hapus_data($where,'pasienpindah');
        $this->session->set_flashdata('message', 'Pasien Batal Pindah');
        redirect('Abatalpindah');
    }
}
?>

