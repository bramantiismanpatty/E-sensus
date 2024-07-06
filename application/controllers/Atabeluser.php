<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Atabeluser extends CI_Controller {
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
		$data['sandi'] = $this->Orang_model->tampil_data()->result();

		$this->load->view('Aadmin/Header');
        $this->load->view('Aadmin/Sidebar');
		$this->load->view('admin/Vtabeluser',$data);
		$this->load->view('Aadmin/Footer');		
	}

}
