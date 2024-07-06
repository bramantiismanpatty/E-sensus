<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Optabeluser extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('Orang_model');
		$this->load->helper('url');
		$this->load->library('form_validation');

		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('masuk');
            redirect($url);
		};
 	}

	public function index()
	{
		$data['userbangsal'] = $this->Orang_model->tampil_userbangsal()->result();

		$this->load->view('Aoperator/Header');
        $this->load->view('Aoperator/Sidebar');
		$this->load->view('operator/VO_tabeluser',$data);
		$this->load->view('Aoperator/Footer');		
	}

}
