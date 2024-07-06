<?php 

class Atabelruangan extends CI_Controller {

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

        $this->load->view('Aadmin/Header');
        $this->load->view('Aadmin/Sidebar');
       $this->load->view('admin/Vtabelruangan',$data);
       $this->load->view('Aadmin/Footer');
    }
    
   
}
?>