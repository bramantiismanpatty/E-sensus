<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utabelruang extends CI_Controller {

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

		$this->load->view('Auser/header');
		$this->load->view('Auser/sidebar');
		$this->load->view('Info_user/UTruangan',$data);	
		$this->load->view('Auser/footer');
			
	}
	
}
?>

