<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_model extends CI_Model{
  function __construct()
  {
     parent::__construct();  
  }
   
 function Truang($where=''){
    return $this->db->query("select * from ruangan $where;");
    }

  function Tsandi($where='')
    {
    return $this->db->query("select * from sandi $where;");
    }

  function Tkelas($where='')
  {
   return $this->db->query("select * from kelas $where;");
  }

  function sum_tidur()
    {
     
    $sql    ="SELECT SUM(tidur) as tidur FROM kelas";
    $result = $this->db->query($sql);
    return $result->row()->tidur;
    }
}
?>