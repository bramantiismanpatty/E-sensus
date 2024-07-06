<?php 

class Mindikator extends CI_Model {

    function tampil_data(){
		return $this->db->get('indikator');
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
            $this->db->update($table,$data); 
        }

    public function monet($bulan,$namaruangan) {
    
            $this->db->where('bulan', $bulan);
            $this->db->where('namaruangan', $namaruangan );                              
            $query = $this->db->get('indikator');
            return $query->num_rows() > 0;
        }

    public function check_data_exists(
        $bulan,
        $koderuangan,
        $namaruangan,
        $namakelas,
        $tidur,
        $masuk,
        $keluar,
        $mati,
        $matikurang,
        $matilebih,
        $jlhkeluar,
        $lama,
        $hp,
        $masukkeluar) {

            $this->db->where('bulan', $bulan);
            $this->db->where('koderuangan', $koderuangan );
            $this->db->where('namaruangan', $namaruangan );
            $this->db->where('namakelas', $namakelas );
            $this->db->where('tidur', $tidur );
            $this->db->where('masuk', $masuk );
            $this->db->where('keluar', $keluar);
            $this->db->where('mati', $mati);
            $this->db->where('matikurang', $matikurang);
            $this->db->where('matilebih', $matilebih);
            $this->db->where('jlhkeluar', $jlhkeluar);
            $this->db->where('lama', $lama);
            $this->db->where('hp', $hp);
            $this->db->where('masukkeluar', $masukkeluar);       
            $query = $this->db->get('indikator');
            return $query->num_rows() > 0;
        }
    
       
    public function getTotalRekap($bulan, $tahun) {
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
                FROM indikator
                WHERE MONTH(bulan) = ? AND YEAR(bulan) = ?";
        
        $result = $this->db->query($query, array($bulan, $tahun));
        
        if($result) {
            return $result->row_array();
        } else {
            return false;
        }
    }

    function filter_data($ruang, $first_tanggal, $second_tanggal){
        $query = $this->db->query("SELECT * FROM `indikator` WHERE `tanggal` BETWEEN '$first_tanggal' AND '$second_tanggal' AND `koderuangan`
        LIKE '$ruang' ");
        return $query->result();
    }   
    
    public function getDataByMonthRange($ruang, $first_bulan, $second_bulan) {
        // Mendapatkan tanggal awal dan akhir dari bulan pertama
        $first_bulan_start = $first_bulan . '-01';
        $first_bulan_end = date('Y-m-t', strtotime($first_bulan_start));
    
        // Mendapatkan tanggal awal dan akhir dari bulan kedua
        $second_bulan_start = $second_bulan . '-01';
        $second_bulan_end = date('Y-m-t', strtotime($second_bulan_start));
    
        // Melakukan query untuk mengambil data dari rentang bulan yang diberikan
        $query = $this->db->query("SELECT * FROM `indikator` WHERE `tanggal` BETWEEN '$first_bulan' AND '$second_bulan' 
        LIKE '$ruang' ");
        return $query->result();
      //  $query = $this->db->query("SELECT * FROM indikator WHERE bulan BETWEEN ? AND ? ORDER BY bulan ASC", array($first_bulan_start, $second_bulan_end)
        // );
        
        // Mengembalikan hasil query
        return $query->result();
    }
      	  
}
?>