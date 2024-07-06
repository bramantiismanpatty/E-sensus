<?php 

class Mkelas extends CI_Model {

function tampil_data(){
		return $this->db->get('kelas');
	}
public function input_data($data, $table){
        $this->db->insert($table,$data);
        }

public function check_data_exist($kodekelas) {
        // Mengecek apakah data dengan kode yang sama sudah ada
        $this->db->where('kodekelas', $kodekelas);
        $this->db->where('namakelas', $namakelas);
        $this->db->where('tidur', $tidur);

         $query = $this->db->get('kelas');    
            return $query->num_rows() > 0;
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

public function hitung_sum_tidur() {
        $this->db->select_sum('tidur', 'total_tidur');
        $result = $this->db->get('kelas')->row();
        
        return $result->total_tidur;
       
    } 	  
}
?>