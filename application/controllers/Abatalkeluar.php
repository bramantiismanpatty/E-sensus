<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Abatalkeluar extends CI_Controller {

	function __construct(){
		parent::__construct();		
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

            $data['batal'] = $this->db->query("SELECT pasienkeluar.*
            FROM pasienkeluar 
            WHERE pasienkeluar.namaruangan='$ruangan' and pasienkeluar.tgl_keluar='$tanggal'
            ORDER BY pasienkeluar.namaruangan ASC")->result();
     

        $this->load->view('Aadmin/header',$data);
        $this->load->view('Aadmin/sidebar');    
		$this->load->view('Admin/Vbatalkeluar',$data);
        $this->load->view('Aadmin/footer');
        		
	}

	
    
    function batal($id_pasienkeluar){
        $where = array('id_pasienkeluar' => $id_pasienkeluar);
        $this->Mpasienkeluar->batal($where,'pasienkeluar');
        $this->session->set_flashdata('message', 'Data berhasil dihapus');
        redirect('Abatalkeluar');
    }
}
?>

