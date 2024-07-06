<?php 

class Duser extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper("url");
        $this->load->model('Orang_model');
        $this->load->model('Mruangan');
        if ($this->session->userdata('logged') != TRUE) {
            $url = base_url('masuk');
            redirect($url);
        }
    }

    public function index() {
        $data['tugas'] = $this->Mruangan->tampil_data()->result();
        $this->load->view('Aadmin/Header');
        $this->load->view('Aadmin/Sidebar');
        $this->load->view('admin/VDuser', $data);  // Kirim data ke view
        $this->load->view('Aadmin/Footer');
    }

    public function register_class() {       
        $nip            = $this->input->post('nip');
        $user_name      = $this->input->post('user_name');
        $namaruagan          = $this->input->post('namaruangan');
        $jabatan        = $this->input->post('jabatan');
        $username       = $this->input->post('username');           
        $user_password  = $this->input->post('user_password');
        $level          = $this->input->post('level');          
        $user_status    = $this->input->post('user_status');
        
        $data = array (
            'nip'           => $nip,
            'user_name'     => $user_name,
            'namaruangan'   => $namaruagan,
            'jabatan'       => $jabatan,
            'username'      => $username,
            'user_password' => $user_password,
            'level'         => $level,
            'user_status'   => $user_status,
        );
        
        $this->Orang_model->input_data($data, 'sandi');
        $this->session->set_flashdata('success_message', 'Data telah Disimpan!');
        redirect('Duser');     
    }
}
?>
