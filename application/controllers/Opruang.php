<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Opruang extends CI_Controller {

	public function __construct()   {
		parent::__construct();
			$this->load->helper("url");
			$this->load->model('Tkls_model');

			if($this->session->userdata('logged') !=TRUE){
				$url=base_url('masuk');
				redirect($url);
			};
			
		}   
	
		public function index(){
			$data['kls'] = $this->Tkls_model->tampil_data()->result();
		   $this->load->view('Info_operator/Opruang_view',$data);
		}
		
	   
	}
	?>