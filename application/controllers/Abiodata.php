<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Abiodata extends CI_Controller {
    function __construct(){
        parent::__construct();     
        $this->load->model('Mdatapasien');
        $this->load->helper('url');
        $this->load->library('form_validation');

        if($this->session->userdata('logged') != TRUE){
            $url = base_url('masuk');
            redirect($url);
        }
    }

    public function index()
    {
        $data['bio'] = $this->Mdatapasien->tampil_data()->result();

        $this->load->view('Aadmin/header', $data);
        $this->load->view('Aadmin/sidebar');
        $this->load->view('admin/Vbiodata', $data);
        $this->load->view('Aadmin/footer');      
    }

    function cetak(){

        $data['bio'] = $this->Mdatapasien->tampil_data()->result();
       
       
        
       $this->load->view('cetak/C_pasien',$data);
          	
	}
}
