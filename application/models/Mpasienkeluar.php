<?php 

class Mpasienkeluar extends CI_Model {

function tampil_data(){
		return $this->db->get('pasienkeluar');
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
    function tampil_user(){
            return $this->db->query('SELECT * FROM sandi WHERE level = "user"');
        }
    
    public function getKeluarData() {
        return $this->db->get('pasienkeluar');
            // Logika untuk mendapatkan data keluar
            // Gantilah dengan cara Anda mendapatkan data dari tabel pasienkeluar
        }
   
}
