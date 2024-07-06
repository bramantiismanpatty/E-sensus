<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ontabeluser extends CI_Controller {
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
		$data['user'] = $this->Orang_model->tampil_user()->result();
		$this->load->view('info_owner/Ontabeluser_view',$data);	
		
		
	}

}
