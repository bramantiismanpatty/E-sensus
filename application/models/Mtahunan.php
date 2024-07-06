<?php 

class Mtahunan extends CI_Model {

function tampil_data(){
		return $this->db->get('datatahunan');
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

    public function check_data_exists($bulan, $masuk, $keluar, $mati, $matikurang, $matilebih, $jlhkeluar, $lama, $hp, $masukkeluar) {
        $this->db->where('bulan', $bulan);
        $this->db->where('masuk', $masuk );
        $this->db->where('keluar', $keluar);
        $this->db->where('mati', $mati);
        $this->db->where('matikurang', $matikurang);
        $this->db->where('matilebih', $matilebih);
        $this->db->where('jlhkeluar', $jlhkeluar);
        $this->db->where('lama', $lama);
        $this->db->where('hp', $hp);
        $this->db->where('masukkeluar', $masukkeluar);       
        $query = $this->db->get('datarumahsakit');
        return $query->num_rows() > 0;
    }

    public function monet($bulan) {    
        $this->db->where('bulan', $bulan);                                  
        $query = $this->db->get('datarumahsakit');
        return $query->num_rows() > 0;
    }
      	  
}
?>