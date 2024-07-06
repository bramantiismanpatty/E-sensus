<?php 

class Mfilter extends CI_Model {

function tampil_data(){
		return $this->db->get('datarumahsakit');
	}
public function input_data($data, $table){
        $this->db->insert($table,$data);
        }

 function hapus_data($where,$table){
            $this->db->where($where);
            $this->db->delete($table);
            
        }
     
function edit_data($where,$table){		
            return $this->db->get_where($table,$where);
        }

function hitung_data($where,$table){		
            return $this->db->get_where($table,$where);
        }
       
     
 function update_data($where,$data,$table){
            $this->db->where($where);
            $this->db->update($table,$data);        }

   

    
    

  
    public function get_filtered_data() {
        if (
            isset($_GET['daribulan']) && $_GET['daribulan'] != '' &&
            isset($_GET['daritahun']) && $_GET['daritahun'] != '' &&
            isset($_GET['sampbulan']) && $_GET['sampbulan'] != '' &&
            isset($_GET['samptahun']) && $_GET['samptahun'] != ''
        ) {
            $daribulan = $_GET['daribulan'];
            $daritahun = $_GET['daritahun'];
            $sampbulan = $_GET['sampbulan'];
            $samptahun = $_GET['samptahun'];
            $first_bulan = $daritahun. '-' .$daribulan;
            $second_bulan =$samptahun. '-' .$sampbulan;
        } else {
            $daribulan = date('m') ;
            $daritahun =date('Y') ;
            $sampbulan = date('m') ;
            $samptahun =date('Y') ;
            $first_bulan = $daritahun. '-' .$daribulan;
            $second_bulan =$samptahun. '-' .$sampbulan;
        }
    
            // Misalnya, ambil data filter dari database berdasarkan bulan/tahun yang dipilih
            $this->db->select('bulan, bor, avlos, toi, bto, ndr, gdr');
            $this->db->where("CONCAT(bulan) BETWEEN '$first_bulan' AND '$second_bulan'");
            $query = $this->db->get('datarumahsakit'); // Ganti 'tabel_data_rs' dengan nama tabel Anda
    
            // Mengembalikan hasil query dalam bentuk array
            return $query->result();
        }

        // Model untuk menampilkan grafik bor berdasarkan kelas rawat
        function filter_kelas($first_bulan, $second_bulan) {
           $query = $this->db->query("SELECT * FROM `indikatorkelas` WHERE `bulan` BETWEEN '$first_bulan' AND '$second_bulan'");
           return $query->result();
       }
   
        public function get_filtered_datakelas() {
           // Mendapatkan nilai dari input GET atau menggunakan nilai default jika tidak ada
           $daribulan = $this->input->get('daribulan') ? $this->input->get('daribulan') : date('m');
           $daritahun = $this->input->get('daritahun') ? $this->input->get('daritahun') : date('Y');
           $sampbulan = $this->input->get('sampbulan') ? $this->input->get('sampbulan') : date('m');
           $samptahun = $this->input->get('samptahun') ? $this->input->get('samptahun') : date('Y');
   
           $first_bulan = $daribulan . $daritahun; // Tambahkan spasi antara bulan dan tahun
           $second_bulan = $sampbulan . $samptahun; // Tambahkan spasi antara bulan dan tahun
   
           // Misalnya, ambil data filter dari database berdasarkan bulan/tahun yang dipilih
           $this->db->select('bulan,nama, bor, avlos, toi, bto, ndr, gdr');
           $this->db->where("CONCAT(bulan) BETWEEN '$first_bulan' AND '$second_bulan'");
           $query = $this->db->get('indikatorkelas'); // Ganti 'tabel_data_rs' dengan nama tabel Anda
   
           // Mengembalikan hasil query dalam bentuk array
           return $query->result();
       }
   
 // Model untuk menampilkan grafik bor berdasarkan Ruangan rawat
 function filter_ruangan($first_bulan, $second_bulan) {
    $query = $this->db->query("SELECT * FROM `indikator` WHERE `bulan` BETWEEN '$first_bulan' AND '$second_bulan'");
    return $query->result();
}

 public function get_filtered_dataruangan() {
    // Mendapatkan nilai dari input GET atau menggunakan nilai default jika tidak ada
    $daribulan = $this->input->get('daribulan') ? $this->input->get('daribulan') : date('m');
    $daritahun = $this->input->get('daritahun') ? $this->input->get('daritahun') : date('Y');
    $sampbulan = $this->input->get('sampbulan') ? $this->input->get('sampbulan') : date('m');
    $samptahun = $this->input->get('samptahun') ? $this->input->get('samptahun') : date('Y');

    $first_bulan = $daribulan . $daritahun; // Tambahkan spasi antara bulan dan tahun
    $second_bulan = $sampbulan . $samptahun; // Tambahkan spasi antara bulan dan tahun

    // Misalnya, ambil data filter dari database berdasarkan bulan/tahun yang dipilih
    $this->db->select('bulan,ruangan, bor, avlos, toi, bto, ndr, gdr');
    $this->db->where("CONCAT(bulan) BETWEEN '$first_bulan' AND '$second_bulan'");
    $query = $this->db->get('indikator'); // Ganti 'tabel_data_rs' dengan nama tabel Anda

    // Mengembalikan hasil query dalam bentuk array
    return $query->result();
}
    
        	  
}
?>