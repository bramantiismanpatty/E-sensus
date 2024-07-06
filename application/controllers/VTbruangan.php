<?php 

class VTbruangan extends CI_Controller {

    public function __construct()   {
    parent::__construct();
        $this->load->helper("url");
        $this->load->model('Mruangan');
        $this->load->library('form_validation');

        if($this->session->userdata('logged') !=TRUE){
            $url=base_url('masuk');
            redirect($url);
		};
    }   

    public function index(){
        $data['kelas'] = $this->Mruangan->tampil_data()->result();

        $this->load->view('Avisitor/Header');
        $this->load->view('Avisitor/Sidebar');
       $this->load->view('visitor/V_tabelruangan',$data);
       $this->load->view('Avisitor/Footer');
    }
    
   
}
?>