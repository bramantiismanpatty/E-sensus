<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('masuk');
            redirect($url);
		};
	}
	
	public function index()
	{
		$this->load->view('masuk_view');
	}
	
}