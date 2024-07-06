<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Amonitormasuk extends CI_Controller {

	function __construct(){
		parent::__construct();	
		
        $this->load->model('Mruangan');
        $this->load->model('Mpasienmasuk');
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

        $data['masuk'] = $this->db->query("SELECT pasienmasuk.*
        FROM pasienmasuk 
        WHERE pasienmasuk.namaruangan= ? and pasienmasuk.tgl_masuk= ?
       ORDER BY pasienmasuk.namaruangan ASC", array($ruangan, $tanggal))->result();
      

        $this->load->view('Aadmin/header');
		$this->load->view('Aadmin/sidebar');
		$this->load->view('admin/Vmonitormasuk',$data);
        $this->load->view('Aadmin/footer');

    }

    function edit($id){
		$data['mutasi'] = $this->Mruangan->tampil_data()->result();    
		
		$where = array('id' => $id);
		$data['masuk'] = $this->Mpasienmasuk->edit_data($where,'pasienmasuk')->result();
        $this->load->view('Aadmin/header',$data);
		$this->load->view('Aadmin/sidebar');
		$this->load->view('admin/Veditpasienmasuk',$data);
		$this->load->view('Aadmin/footer');


    }

    public function update(){       
        $id                =  $this->input->post('id');
        $nomorm            =  $this->input->post('nomorm');
        $reg               =  $this->input->post('reg');
        $tgl_masuk         =  $this->input->post('tgl_masuk');
        $namapasien        =  $this->input->post('namapasien');
        $koderuangan       =  $this->input->post('koderuangan');
        $namaruangan       =  $this->input->post('namaruangan'); 
        $namakelas         =  $this->input->post('namakelas');              
        $carabayar         =  $this->input->post('carabayar');
        $petugas           =  $this->input->post('petugas');
        
            
        $data = array (
            'reg'               => $reg,
            'nomorm'            => $nomorm,
            'tgl_masuk'         => $tgl_masuk,
            'namapasien'        => $namapasien,
            'koderuangan'       => $koderuangan,
            'namaruangan'       => $namaruangan,
            'namakelas'         => $namakelas,          
            'carabayar'         => $carabayar,
            'petugas'           => $petugas,
        ); 
            
        $where = array(
            'id' => $id
        );

        $this->Mpasienmasuk->update_data($where,$data,'pasienmasuk');
        if (!$this->db->update('pasienmasuk', $data, $where)) {
            // Jika terjadi kesalahan saat mengupdate data
            log_message('error', 'Gagal mengupdate data');
            show_error('Gagal mengupdate data, silakan cek log untuk detailnya');
        } else {
            // Jika berhasil mengupdate data
            $this->session->set_flashdata('message', 'Data berhasil diubah');
            redirect('Amonitormasuk');
        }
    }

    function hapus_data($id){
        $where = array('id'=>$id);
        $this->Mpasienmasuk->hapus_data($where,'pasienmasuk');
        $this->session->set_flashdata('message', 'Data Telah Dihapus !!');
        redirect('Amonitormasuk');
    }
}
?>

