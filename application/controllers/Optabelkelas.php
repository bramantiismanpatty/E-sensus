<?php 

class Optabelkelas extends CI_Controller {

    public function __construct()   {
    parent::__construct();
        $this->load->helper("url");
        $this->load->model('Mkelas');
        $this->load->library('form_validation');

        if($this->session->userdata('logged') !=TRUE){
            $url=base_url('masuk');
            redirect($url);
		};
    }   

    public function index(){
        $data['kls'] = $this->Mkelas->tampil_data()->result();

        $this->load->view('Aoperator/Header');
        $this->load->view('Aoperator/Sidebar');
       $this->load->view('Operator/VO_tabelkelas',$data);
       $this->load->view('Aoperator/Footer');
    
    }
    
   
}
?>