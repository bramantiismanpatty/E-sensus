<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Ganti extends CI_Controller 
{
	public function __construct()
	{
		/*call CodeIgniter's default Constructor*/
		parent::__construct();
		/*load database libray manually*/
		$this->load->database();
		$this->load->library('session');
		/*load Model*/
		$this->load->helper('url');
		$this->load->model('Orang_model');

		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('masuk');
            redirect($url);
		};
		
	}     
	public function index()
	{
				$this->load->view('Aadmin/header');
        		$this->load->view('Aadmin/sidebar');
				$this->load->view('upassword/Ganti_admin');
       		 	$this->load->view('Aadmin/footer');	
	}  
	
	public function aksi()
	{
		//variabel dari masing2 inputan
		$passbaru = $this->input->post('passbaru');
		$ulangpass = $this->input->post('ulangpass');

		$this->form_validation->set_rules('passbaru', 'password baru','required|matches[ulangpass]');
		$this->form_validation->set_rules('ulangpass', 'ulangi password','required');
		if($this->form_validation->run() != FALSE){
			$data = array(
				'user_password' => $passbaru
			);
			$id = array('id'=>$this->session->userdata('id')
			);
			
			$this->Orang_model->update_data( $id, $data,'sandi');			
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show">
			<strong> Password Anda Berhasil di ganti. Silahkan Anda login kembali..!! </strong>
			<buttom type="buttom" class="close" data-dismiss"alert" aria-label="close>
			<span aria-hidden="true">&times;</span</buttom></div>');
			redirect ('masuk');
			}else{
					
				$this->load->view('Aadmin/header');
        		$this->load->view('Aadmin/sidebar');
				$this->load->view('upassword/Ganti_admin');
       		 	$this->load->view('Aadmin/footer');	
			}

	}	
}


?>