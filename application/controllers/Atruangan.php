<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Atruangan extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('Mruangan');
		$this->load->model('Mkelas');
		$this->load->helper('url');
		$this->load->library('form_validation');

		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('masuk');
            redirect($url);
		};
 
	}
	public function index()
	{
		$data['ruang'] = $this->Mruangan->tampil_data()->result();

		$this->load->view('Aadmin/header');
		$this->load->view('Aadmin/sidebar');
		$this->load->view('admin/VTruangan',$data);
		$this->load->view('Aadmin/footer');	

	}
	function edit($id){
		$where = array('id'=> $id);
		$data['ruang'] = $this->Mruangan->edit_data($where,'ruangan')->result();
		$data['kls'] = $this->Mkelas->tampil_data()->result();

		$this->load->view('Aadmin/header');
		$this->load->view('Aadmin/sidebar');
		$this->load->view('admin/Editruangan',$data);
		$this->load->view('Aadmin/footer');	
		
		
	}
	function update(){
		$id 			= $this->input->post('id');
		$koderuangan 	= $this->input->post('koderuangan');
		$namaruangan	= $this->input->post('namaruangan');
		$namakelas		= $this->input->post('namakelas');	
		$tidur 			= $this->input->post('tidur');
	 
		$data = array(

			'koderuangan'	=> $koderuangan,
			'namaruangan'	=> $namaruangan,
			'namakelas' 	=> $namakelas,			
			'tidur'			=> $tidur
		);
	 
		$where = array(
			'id' => $id
		);
	 
		$this->Mruangan->update_data($where,$data,'ruangan');
		$this->session->set_flashdata('success_message', 'Data telah Di Perbaharui!');
		redirect('Atruangan');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->Mruangan->hapus_data($where,'ruangan');
		$this->session->set_flashdata('success_message', 'Data telah Di hapus!');
		redirect('Atruangan');
	}
}
?>

