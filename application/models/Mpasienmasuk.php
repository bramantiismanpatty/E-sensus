<?php 

class Mpasienmasuk extends CI_Model {

    function tampil_data(){
		return $this->db->get('pasienmasuk');
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

    public function check_data_exists($tgl_masuk, $nomorm, $namapasien, $koderuangan,  $namaruangan, $namakelas) {
            $this->db->where('tgl_masuk', $tgl_masuk);
            $this->db->where('nomorm', $nomorm);
            $this->db->where('namapasien', $namapasien);
            $this->db->where('koderuangan', $koderuangan);
            $this->db->where('namaruangan', $namaruangan);
            $this->db->where('namakelas', $namakelas);
            $query = $this->db->get('pasienmasuk');
            return $query->num_rows() > 0;
        }
        
    public function update_data_if_exists($tgl_masuk, $nomorm, $namapasien, $koderuangan, $namaruangan, $namakelas, $update_data) {
            if ($this->check_data_exists($tgl_masuk, $nomorm, $namapasien, $koderuangan, $namaruangan, $namakelas)) {
                $this->db->where('tgl_masuk', $tgl_masuk);
                $this->db->where('nomorm', $nomorm);
                $this->db->where('namapasien', $namapasien);
                $this->db->where('koderuangan', $koderuangan);
                $this->db->where('namaruangan', $namaruangan);
                $this->db->where('namakelas', $namakelas);
                $this->db->update('pasienmasuk', $update_data);
                return true;
            }
            return false;
        }  
        public function get_data_by_room_and_date($ruangan, $tanggal) {
            $query = $this->db->query("SELECT * FROM pasienmasuk WHERE namaruangan = ? AND tgl_masuk = ?", array($ruangan, $tanggal));
            return $query->result();
        }  
   
}
