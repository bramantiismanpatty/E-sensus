<?php 

class Mdatapasien extends CI_Model {

    function tampil_data(){
		return $this->db->get('datapasien');
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
   

    public function check_data_exists($kelamin, $nomorm, $agama, $namapasien, $tgl_lahir, $alamat){
            $this->db->where('kelamin', $kelamin);
            $this->db->where('nomorm', $nomorm);
            $this->db->where('agama', $agama);
            $this->db->where('namapasien', $namapasien);
            $this->db->where('tgl_lahir', $tgl_lahir);
            $this->db->where('alamat', $alamat);
           
            $query = $this->db->get('datapasien');
            return $query->num_rows() > 0;
        }
    
        public function get_patient_data_by_rm($nomorm) {
            // Query ke database untuk mendapatkan data pasien berdasarkan nomor RM
            $this->db->where('nomorm', $nomorm);
            $query = $this->db->get('datapasien');
        
            // Kembalikan data pasien dalam bentuk array
            return $query->row_array();
        }
       
   
   
}
