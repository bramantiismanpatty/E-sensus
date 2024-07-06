<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apenampakan extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('Orang_model');
		$this->load->model('Mruangan');
		$this->load->helper('url');
		$this->load->library('form_validation');

		if ($this->session->userdata('logged') != TRUE) {
            $url = base_url('masuk');
            redirect($url);
		}
 	}

	public function index() {
		$data['sandi'] = $this->Orang_model->tampil_data()->result();
		$data['tugas'] = $this->Mruangan->tampil_data()->result();
		$this->load->view('Aadmin/header', $data);
        $this->load->view('Aadmin/sidebar');
		$this->load->view('admin/Vpenampakan', $data);
		$this->load->view('Aadmin/footer');		
	}

	function edit($id) {
		$where = array('id' => $id);
		$data['sandi'] = $this->Orang_model->edit_data($where, 'sandi')->result();
		$data['tugas'] = $this->Mruangan->tampil_data()->result();
		
		$this->load->view('AE/header', $data);
        $this->load->view('AE/sidebar');
		$this->load->view('admin/Edituser', $data);
		$this->load->view('AE/footer');		
	}

	function update() {
		$id 			= $this->input->post('id');
		$nip            = $this->input->post('nip');
		$user_name      = $this->input->post('user_name');
		$namaruangan    = $this->input->post('namaruangan');
		$jabatan        = $this->input->post('jabatan');
		$username       = $this->input->post('username');           
		$user_password  = $this->input->post('user_password');
		$level          = $this->input->post('level');          
		$user_status    = $this->input->post('user_status');
	 
		$data = array(
			'nip'           => $nip,
			'user_name'     => $user_name,
			'namaruangan'   => $namaruangan,
			'jabatan'       => $jabatan,
			'username'      => $username,
			'user_password' => $user_password,
			'level'         => $level,
			'user_status'   => $user_status,
		);

		$where = array(
			'id' => $id
		);
	 
		$this->Orang_model->update_data($where, $data, 'sandi');
		$this->session->set_flashdata('success_message', 'Data telah diperbarui!');
		redirect('Apenampakan');
	}

	function hapus($id) {
		$where = array('id' => $id);
		$this->Orang_model->hapus_data($where, 'sandi');
		$this->session->set_flashdata('success_message', 'Data telah dihapus!');
		redirect('Apenampakan');
	}
}
?>
