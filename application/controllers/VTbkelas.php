<?php 

class VTbkelas extends CI_Controller {

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
        $data['sum_tidur'] = $this->Mkelas->hitung_sum_tidur();

        $this->load->view('Avisitor/Header');
        $this->load->view('Avisitor/Sidebar');
       $this->load->view('visitor/V_tidur',$data);
       $this->load->view('Avisitor/Footer');
    
    }
    
   
}
?>