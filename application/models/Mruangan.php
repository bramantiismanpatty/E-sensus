<?php 

class Mruangan extends CI_Model {

function tampil_data(){
		return $this->db->get('ruangan');
	}
        public function input_data($data, $table){
        $this->db->insert($table,$data);
        }

        public function check_data_exist($koderuangan) {
                // Mengecek apakah data dengan kode yang sama sudah ada
                $this->db->where('koderuangan', $koderuangan);
               
              
        
                 $query = $this->db->get('ruangan');    
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


}
?>