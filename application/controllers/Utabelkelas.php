<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utabelkelas extends CI_Controller {

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
		  
		   $this->load->view('Auser/header');
			$this->load->view('Auser/sidebar');
			$this->load->view('Info_user/UTkelas',$data);
			$this->load->view('Auser/footer');
		}
		
	   
	}
	?>


  