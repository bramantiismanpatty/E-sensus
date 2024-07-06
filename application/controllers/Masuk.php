<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->library('session');
		$this->load->model('Mmasuk','Mmasuk');
    }
    
	function index(){
        
        $this->session->userdata('logged') ;
        $id = $this->input->post('id');
        $this->session->set_userdata('id',$id);
       // {
        $this->load->view('Naratama/masuk_view');
       // }else{
           // $url=base_url('');
          //  redirect($url);
       // };
    }
    
    function autentikasi(){
        $username = $this->input->post('username');
        $password = $this->input->post('pass');
      
        $validasi_username = $this->Mmasuk->query_validasi_username($username);      
    
        if($validasi_username->num_rows() > 0){
            // Username valid
            $validate_ps = $this->Mmasuk->query_validasi_password($username, $password);

            // Log hasil query untuk memastikan terkoneksi dengan database dan mendapatkan hasil yang diharapkan
          //  echo "Query Result for Validasi Password: ";
          //  var_dump($validate_ps->result());
    
            if($validate_ps->num_rows() > 0){
                // Password valid
                $x = $validate_ps->row_array();
    
                if($x['user_status'] == '1'){
                    // Pengguna tidak diblokir
                    $this->session->set_userdata('logged', TRUE);
                    $this->session->set_userdata('user', $username);
                    $id = $x['id'];
    
                    if($x['level'] == 'admin'){
                        // Administrator
                        $name    = $x['user_name'];
                        $jabatan = $x['jabatan'];
                        $namaruangan   = $x['namaruangan'];
                        $this->session->set_userdata('access', 'administrator');
                        $this->session->set_userdata('id', $id);
                        $this->session->set_userdata('name', $name);
                        $this->session->set_userdata('jabatan', $jabatan);
                        $this->session->set_userdata('namaruangan', $namaruangan);
                        redirect('Admin');
                    } else if($x['level'] == 'operator'){
                        // Operator
                        $name    = $x['user_name'];
                        $jabatan = $x['jabatan'];
                        $namaruangan   = $x['namaruangan'];
                        $this->session->set_userdata('access', 'operator');
                        $this->session->set_userdata('id', $id);
                        $this->session->set_userdata('name', $name);
                        $this->session->set_userdata('jabatan', $jabatan);
                        $this->session->set_userdata('namaruangan', $namaruangan);
                        redirect('Operator');
                    } else if($x['level'] == 'visitor'){
                        // Pengunjung
                        $name    = $x['user_name'];
                        $jabatan = $x['jabatan'];
                        $namaruangan   = $x['namaruangan'];
                        $this->session->set_userdata('access', 'visitor');
                        $this->session->set_userdata('id', $id);
                        $this->session->set_userdata('name', $name);
                        $this->session->set_userdata('jabatan', $jabatan);
                        $this->session->set_userdata('namaruangan', $namaruangan);
                        redirect('Visitor');
                    } else if($x['level'] == 'user_bangsal'){
                        // Pengguna
                        $name    = $x['user_name'];
                        $jabatan = $x['jabatan'];
                        $namaruangan   = $x['namaruangan'];
                        $this->session->set_userdata('access', 'user bangsal');
                        $this->session->set_userdata('id', $id);
                        $this->session->set_userdata('name', $name);
                        $this->session->set_userdata('jabatan', $jabatan);
                        $this->session->set_userdata('namaruangan', $namaruangan);
                        redirect('userbangsal');
                    }
                } else {
                    // Pengguna diblokir
                    $url = base_url('masuk');
                    echo $this->session->set_flashdata('msg', '<span onclick="this.parentElement.style.display=`none`" class="w3-button w3-large w3-display-topright">&times;</span>
                    <h3>Uupps!</h3>
                    <p>Akun kamu telah di blokir. Silahkan hubungi admin.</p>');
                    redirect($url);
                }
            } else {
                // Password tidak valid
                $url = base_url('masuk');
                echo $this->session->set_flashdata('msg', '<span onclick="this.parentElement.style.display=`none`" class="w3-button w3-large w3-display-topright">&times;</span>
                    <h3>Uupps!</h3>
                    <p>Password yang anda masukan salah.</p>');
                redirect($url);
            }
        } else {
            // Username tidak valid
            $url = base_url('masuk');
            echo $this->session->set_flashdata('msg', '<span onclick="this.parentElement.style.display=`none`" class="w3-button w3-large w3-display-topright">&times;</span>
            <h3>Uupps!</h3>
            <p>Username yang anda masukan salah.</p>');
            redirect($url);
        }
    }
    

    function logout(){
        $this->session->sess_destroy();
        $url=base_url('utama');
        redirect($url);
    }

}


