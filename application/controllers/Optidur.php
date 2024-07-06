<?php 

class Optidur extends CI_Controller {

    public function __construct()   {
    parent::__construct();
        $this->load->helper("url");
        $this->load->model('Tkls_model');
        $this->load->library('form_validation');

        if($this->session->userdata('logged') !=TRUE){
            $url=base_url('masuk');
            redirect($url);
		};
		

    }   

    public function index(){
        $data['kls']        = $this->Tkls_model->tampil_data()->result();
        $data['sum_tidur']  =$this->Tkls_model->jumlah();
        $this->load->view('Info_operator/optidur_view',$data);

    }
}

?>