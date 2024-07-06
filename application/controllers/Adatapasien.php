<?php 

class Adatapasien extends CI_Controller {

    public function __construct()   {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper("url");        $this->load->model('Mruangan');      
        $this->load->model('Mdatapasien');
    }

    public function index(){
        $data['kelas'] = $this->Mruangan->tampil_data()->result();

            
               $this->load->view('Aadmin/header');
               $this->load->view('Aadmin/sidebar');
               $this->load->view('admin/Vdatapasien',$data);	
               $this->load->view('Aadmin/footer');
   }

    public function register() {
        $nomorm         = $this->input->post('nomorm');
        $reg            = $this->input->post('reg');       
        $namapasien     = $this->input->post('namapasien');
        $tempatlahir    = $this->input->post('tempatlahir');
        $tgl_lahir      = $this->input->post('tgl_lahir'); 
        $kelamin        = $this->input->post('kelamin');              
        $agama          = $this->input->post('agama');
        $kawin          = $this->input->post('kawin');
        $pekerjaan      = $this->input->post('pekerjaan');
        $alamat         = $this->input->post('alamat');
        
        $data = array (
            'nomorm'        => $nomorm,
            'reg'           => $reg,
            'namapasien'    => $namapasien,
            'tempatlahir'   => $tempatlahir,
            'tgl_lahir'     => $tgl_lahir,
            'kelamin'       => $kelamin,
            'agama'         => $agama,
            'kawin'         => $kawin,
            'pekerjaan'     => $pekerjaan,
            'alamat'        => $alamat,
        );

        // Cek apakah koderuangan, namaruangan, namakelas kosong
        if(empty($nomorm) || empty($namapasien) || empty($tgl_lahir)) {
            $this->session->set_flashdata('error_message', 'Belum Ada Ruangan dipilih ! ...Pilihlah Ruangan Sebelum melanjutkan!');
            redirect('Adatapasien');
        }

        // Cek apakah data sudah ada
        $data_exists = $this->Mdatapasien->check_data_exists($kelamin, $nomorm, $agama, $namapasien,  $tgl_lahir, $alamat);
        
        // Jika data sudah ada, tampilkan pesan dengan modal
        if($data_exists) {
            $this->session->set_flashdata('error_message', 'Data sudah ada!!');
            redirect('Adatapasien');
        } else {
            // Jika tidak, simpan data dan tampilkan pesan sukses
            $this->Mdatapasien->input_data($data,'datapasien');
            $this->session->set_flashdata('success_message', 'Berhasil disimpan!!');
            redirect('Adatapasien');
        }
    }
}
?>

