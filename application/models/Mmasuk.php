<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmasuk extends CI_Model{

    public function __construct() {
        parent::__construct();
        $this->load->database(); // Load library database
    }

    public function query_validasi_username($username) {
        // Sesuaikan query berdasarkan struktur tabel dan kolom username
        $this->db->select('*');
        $this->db->from('sandi'); // Ganti dengan nama tabel yang sesuai
        $this->db->where('sandi.username', $username); // Ganti dengan nama kolom username yang sesuai
        return $this->db->get();
    }

    public function query_validasi_password($username, $password) {
        // Menggunakan parameterized query untuk menghindari SQL injection
        $query = "SELECT * FROM sandi WHERE username = ? AND user_password = ? LIMIT 1";
        $result = $this->db->query($query, array($username, $password));
    
        if ($result) {
            return $result;
        } else {
            // Handle error, misalnya dengan menampilkan pesan atau mencatat log
            log_message('error', 'Error in query_validasi_password: ' . $this->db->error());
            return false;
        }
    }
   // public function query_validasi_password($username,$password){
    	//$result = $this->db->query
      //  ("SELECT * FROM sandi WHERE username='$username' AND user_password='$password' LIMIT 0");
      //  return $result;
   // }

} 


//function query_validasi_password($username,$password){
    //$result = $this->db->query
   // ("SELECT * FROM sandi WHERE username='$username' AND user_password='$password' LIMIT 0");
  //  return $result;
    

 