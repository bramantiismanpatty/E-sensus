<?php 

class Atkelas extends CI_Controller {

    public function __construct()   {
    parent::__construct();
        $this->load->helper("url");
        $this->load->model('Mkelas');
        $this->load->library('form_validation');

		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('masuk');
            redirect($url);
		};
		

    }   

    public function index(){
        $data['kls'] = $this->Mkelas->tampil_data()->result();
		$data['sum_tidur'] = $this->Mkelas->hitung_sum_tidur();
		
		$this->load->view('Aadmin/Header');
        $this->load->view('Aadmin/Sidebar');
        $this->load->view('admin/VTkelas',$data);
		$this->load->view('Aadmin/Footer');


    }

    function edit($id){
		$where = array('id' => $id);
		$data['kls'] = $this->Mkelas->edit_data($where,'kelas')->result();

		$this->load->view('Aadmin/Header');
        $this->load->view('Aadmin/Sidebar');
		$this->load->view('admin/Editkelas',$data);
		$this->load->view('Aadmin/Footer');
	}
	    function update(){
		    $id 			= $this->input->post('id');
		    $kodekelas		= $this->input->post('kodekelas');
		    $namakelas 		= $this->input->post('namakelas');
		    $tidur 			= $this->input->post('tidur');
	 
		    $data = array(
			    'kodekelas' 		=> $kodekelas,
			    'namakelas' 		=> $namakelas,			
			    'tidur' 			=> $tidur
		);
	 
		$where = array(
			'id' => $id
		);
	 
		$this->Mkelas->update_data($where,$data,'kelas');
		$this->session->set_flashdata('success_message', 'Data telah Di Perbaharui!');
		redirect('Atkelas');    
}

function hapus($id){
	$where = array('id' => $id);
	$this->Mkelas->hapus_data($where,'kelas');
	$this->session->set_flashdata('success_message', 'Data telah Di hapus!');
	redirect('Atkelas');
}
}

?>