<?php 

class Utabeltidur extends CI_Controller {

    public function __construct()   {
    parent::__construct();
    $this->load->model('admin_model');
    $this->load->model('Mkelas');
    $this->load->helper('url');
    $this->load->library('form_validation');

        if($this->session->userdata('logged') !=TRUE){
            $url=base_url('masuk');
            redirect($url);
		};
		

    }   

    public function index(){
        $data['kls']        = $this->Mkelas->tampil_data()->result();
        $data['sum_tidur'] = $this->Mkelas->hitung_sum_tidur();
    

        $this->load->view('Auser/header');
		$this->load->view('Auser/sidebar');
        $this->load->view('info_user/UTtidur',$data);
		$this->load->view('Auser/footer');

       
    }
}

?>