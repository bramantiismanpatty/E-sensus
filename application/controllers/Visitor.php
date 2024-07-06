<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visitor extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Orang_model');
		$this->load->model('admin_model');
		$this->load->model('Mkelas');
		$this->load->library('session');
		
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('masuk');
            redirect($url);
		};
	}
	
	public function index()
	{
		
		$set		=$this->admin_model->Truang();
		$ruang		=$set->num_rows();	
	

		$kls		=$this->admin_model->Tkelas();
		$kelas		=$kls->num_rows();

		$data = array
			(
			'Jruangan'=>$ruang,				
			'Jkelas'=>$kelas,
			);
			
		$data['kls']        = $this->Mkelas->tampil_data()->result();
		//$data['sum_tidur']  =$this->Mkelas->jumlah();
		$data['jumlah']		=$this->admin_model->sum_tidur();
		$this->load->view('visitor/view_visitor',$data);
		//$this->load->view('View_utama',$data);
		
	}
}