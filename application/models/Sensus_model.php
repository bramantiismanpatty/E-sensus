<?php 

class Sensus_model extends CI_Model {

function tampil_data(){
		return $this->db->get('sensus')->result();
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
     
    function update_data($where,$data,$table){
            $this->db->where($where);
            $this->db->update($table,$data);
        }
    function filter_data($ruang, $first_tanggal, $second_tanggal){
            $query = $this->db->query("SELECT * FROM `sensus` WHERE `tanggal` BETWEEN '$first_tanggal' AND '$second_tanggal' AND `namaruangan`
            LIKE '$ruang' ");
            return $query->result();
    }

    public function check_date_exists_for_dataSensus($tanggal_selanjutnya, $namaruangan) {
        // Query untuk memeriksa apakah ada data sensus untuk tanggal selanjutnya dan nama ruangan tertentu
        $this->db->where('tanggal', $tanggal_selanjutnya);
        $this->db->where('namaruangan', $namaruangan);
        $query = $this->db->get('sensus');
        
        // Mengembalikan true jika ada data, false jika tidak
        return $query->num_rows() > 0;
    }

    public function check_data_exists(
        $tanggal,
        $koderuangan,
        $namaruangan,
        $namakelas,
        $tidur) {

        $this->db->where('tanggal', $tanggal);
        $this->db->where('koderuangan', $koderuangan );
        $this->db->where('namaruangan', $namaruangan );
        $this->db->where('namakelas', $namakelas );
        $this->db->where('tidur', $tidur );
                 
            $query = $this->db->get('sensus');
            return $query->num_rows() > 0;
        }

        public function monet($tanggal,$namaruangan) {
    
            $this->db->where('tanggal', $tanggal);
            $this->db->where('namaruangan', $namaruangan );                              
            $query = $this->db->get('sensus');
            return $query->num_rows() > 0;
            }

    public function get_data() {
            // Mengambil semua data dari tabel sensus
            $query = $this->db->get('sensus');
            return $query->result();
        }
    
    
      

        public function getTotalRekap($namaruangan, $bulan, $tahun) {
            $query = "SELECT 
                        SUM(masuk)       AS total_masuk, 
                        SUM(keluar)      AS total_keluar, 
                        SUM(mati)        AS total_mati, 
                        SUM(matikurang)  AS total_matikurang, 
                        SUM(matilebih)   AS total_matilebih, 
                        SUM(jlhkeluar)   AS total_jlhkeluar, 
                        SUM(lama)        AS total_lama, 
                        SUM(masukkeluar) AS total_masukkeluar, 
                        SUM(hp)          AS total_hp
                    FROM sensus
                    WHERE namaruangan = ? AND MONTH(tanggal) = ? AND YEAR(tanggal) = ?";
            
            $result = $this->db->query($query, array($namaruangan, $bulan, $tahun));
            
            if($result) {
                return $result->row_array();
            } else {
                return false;
            }
        }
}





