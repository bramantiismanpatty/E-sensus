<?php 

class Afalidasidaftar extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('Mpasienmasuk');
        $this->load->model('Mpasienpindah');
        $this->load->model('Mpasienkeluar');
        $this->load->model('Mruangan');
		$this->load->helper('url');
		$this->load->library('form_validation');

      if($this->session->userdata('logged') !=TRUE){
          $url=base_url('masuk');
          redirect($url);
		};
 
	}
	public function index(){

        $data['kelas'] = $this->Mruangan->tampil_data()->result();

        if((isset($_GET['namaruangan'])&& $_GET['namaruangan']!='') && 
           (isset($_GET['tanggal'])  && $_GET['tanggal']!='')){
            $ruangan = $_GET['namaruangan'];
            $tanggal = $_GET['tanggal'];                                      
           $tanggalruangan = $tanggal.$ruangan;
        

        }else{
            $ruangan  = 'tidak ada ruangan di pilih';
            $tanggal  = 'tidak ada Tanggal di pilih';                                      
            $tanggalruangan = $tanggal.$ruangan;
          
            }

       $data['rekap'] = $this->db->query("SELECT pasienmasuk.*
       FROM pasienmasuk 
       WHERE pasienmasuk.namaruangan='$ruangan' AND pasienmasuk.tgl_masuk='$tanggal' AND pasienmasuk.status='baru'
       ORDER BY pasienmasuk.namaruangan ASC")->result();


        //dipindahkan

        $query = $this->db->query("SELECT * FROM pasienpindah");
        $dari = $query->result_array();
        
        $data['dari'] = $dari;
        $data['kelas'] = $this->Mruangan->tampil_data()->result();

        $ruangan = 'tidak ada ruangan di pilih';
        $tanggal = 'tidak ada Tanggal di pilih';

		if (isset($_GET['namaruangan']) && $_GET['namaruangan'] != '' &&
		isset($_GET['tanggal']) && $_GET['tanggal'] != '') {
		$ruangan = $_GET['namaruangan'];
		$tanggal = $_GET['tanggal'];
	}

	$data['dari'] = $this->db->query("SELECT pasienpindah.*
		FROM pasienpindah 
		WHERE pasienpindah.namaruanganpindah='$ruangan' and pasienpindah.tgl_pindah='$tanggal'
		ORDER BY pasienpindah.namaruanganpindah ASC")->result();


        //dipindahkan

        $data['pindah'] = $this->db->query("SELECT pasienpindah.*
        FROM pasienpindah 
        WHERE pasienpindah.namaruangan='$ruangan' and pasienpindah.tgl_pindah='$tanggal'
        ORDER BY pasienpindah.namaruangan ASC")->result();


        //keluar

        $data['keluar'] = $this->db->query("SELECT pasienkeluar.*
        FROM pasienkeluar 
        WHERE pasienkeluar.namaruangan='$ruangan' and pasienkeluar.tgl_keluar='$tanggal'
        ORDER BY pasienkeluar.namaruangan ASC")->result();


        $this->load->view('Aadmin/header',$data);
        $this->load->view('Aadmin/sidebar');    
		$this->load->view('admin/Vfalidasi',$data);
        $this->load->view('Aadmin/footer');
        		
	   
    }

	
}
?>

