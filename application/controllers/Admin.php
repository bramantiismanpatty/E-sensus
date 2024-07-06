<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
		
		$this->load->database();
		$this->load->library('session');
		$this->load->helper('url');
		
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('masuk');
            redirect($url);
		};
		
	}
	
	
	public function index()
	{
		
		$set		=$this->admin_model->Truang();
		$ruang		=$set->num_rows();

		$sad		=$this->admin_model->Tsandi();
		$sandi		=$sad->num_rows();

		$kls		=$this->admin_model->Tkelas();
		$kelas		=$kls->num_rows();	

		
		$data = array
			(
			'Jruangan'=>$ruang,
			'Jsandi'=>$sandi,
			'Jkelas'=>$kelas,
		);
		
		$data['jumlah']=$this->admin_model->sum_tidur();	
		
		$this->load->view('admin/V_admin',$data);
		
		
	}
	
	
}