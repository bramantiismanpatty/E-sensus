<?php 

class Mindikatorkelas extends CI_Model {

function tampil_data(){
		return $this->db->get('indikatorkelas');
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

    function filter_data($first_bulan, $second_bulan){
            $query = $this->db->query("SELECT * FROM `rumahsakit` WHERE `bulan` BETWEEN '$first_bulan' AND '$second_bulan' ");
            return $query->result();
    }
    
    public function monet($bulan,$namakelas) {
    
        $this->db->where('bulan', $bulan);
        $this->db->where('namakelas', $namakelas );                              
        $query = $this->db->get('indikatorkelas');
        return $query->num_rows() > 0;
    }

    public function check_data_exists(
        $bulan,
        $kodekelas,      
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
            $this->db->where('kodekelas', $kodekelas );         
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
            $query = $this->db->get('indikatorkelas');
            return $query->num_rows() > 0;
    }

    public function getTotalRekap($namakelas, $bulan, $tahun) {
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
                WHERE namakelas = ? AND MONTH(bulan) = ? AND YEAR(bulan) = ?";
        
        $result = $this->db->query($query, array($namakelas, $bulan, $tahun));
        
        if($result) {
            return $result->row_array();
        } else {
            return false;
        }
    }
    

      	  
}
?>