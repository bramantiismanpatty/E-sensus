<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OpTabelruang extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('Dclass_model');
		$this->load->helper('url');
		$this->load->library('form_validation');

		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('masuk');
            redirect($url);
		};
 
	}
	
	public function index()
	{
		$data['kelas'] = $this->Dclass_model->tampil_data()->result();
		$this->load->view('Info_operator/Optabelruang_view',$data);		
	}
	
}
?>

