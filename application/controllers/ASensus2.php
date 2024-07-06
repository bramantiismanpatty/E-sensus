<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ASensus2 extends CI_Controller {

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
           (isset($_GET['tanggal'])  && $_GET['tanggal']!='')){
            $ruangan = $_GET['namaruangan'];
            $tanggal = $_GET['tanggal'];                                      
           $tanggalruangan = $tanggal.$ruangan;
        

        }else{
            $ruangan  = 'tidak ada ruangan di pilih';
            $tanggal  = 'tidak ada Tanggal di pilih';                                      
            $tanggalruangan = $tanggal.$ruangan;
          
            }

       $data['rekap'] = $this->db->query("SELECT sensus.*
       FROM sensus 
       WHERE sensus.namaruangan='$ruangan' and sensus.tanggal='$tanggal'
       ORDER BY sensus.namaruangan ASC")->result();

        $this->load->view('Aadmin/header',$data);
        $this->load->view('Aadmin/sidebar');    
		$this->load->view('Admin/Vsensus2_admin',$data);
        $this->load->view('Aadmin/footer');
        		
	}

	function edit($id){
		$where = array('id' => $id);
		$data['sensus'] = $this->Sensus_model->edit_data($where,'sensus')->result();
        $this->load->view('Aadmin/header',$data);
		$this->load->view('Aadmin/sidebar');
		$this->load->view('admin/Editsensus',$data);
		$this->load->view('Aadmin/footer');
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
        redirect('ASensus2');      
	}
    
    function hapus($id){
        $where = array('id' => $id);
        $this->Sensus_model->hapus_data($where,'sensus');
        redirect('ASensus2');
     }
}
?>

