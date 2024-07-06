<?php 

class Mpasienpindah extends CI_Model {

    function tampil_data(){
		return $this->db->get('pasienpindah');
	}
    
    function input_data($data, $table){
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

    

    public function check_data_exists($tgl_pindah, $nomorm, $namapasien, $namaruanganpindah) {
        $this->db->where('tgl_pindah', $tgl_pindah);
        $this->db->where('nomorm', $nomorm);
        $this->db->where('namapasien', $namapasien);
        $this->db->where('namaruanganpindah', $namaruanganpindah);
        $query = $this->db->get('pasienpindah');
        return $query->num_rows() > 0;
    }
}
   

