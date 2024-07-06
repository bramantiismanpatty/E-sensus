<?php 

class Mlaporan extends CI_Model {   

        function masuk($first_tanggal, $second_tanggal){
                $query = $this->db->query("SELECT * FROM `pasienmasuk` WHERE `tgl_masuk` BETWEEN '$first_tanggal' AND '$second_tanggal'");
                return $query->result();
        }  

        function pulang($first_tanggal, $second_tanggal){
                $query = $this->db->query("SELECT * FROM `pasienkeluar` WHERE `Tgl_keluar` BETWEEN ? AND ?", array($first_tanggal, $second_tanggal));
                return $query->result();
        }  
   
        function filter_data($namaruangan, $first_tanggal, $second_tanggal){
            $query = $this->db->query("SELECT * FROM `ruangan` WHERE `tanggal` BETWEEN '$first_tanggal' AND '$second_tanggal' AND `namaruangan`
            LIKE '$namaruangan' ");
            return $query->result();
        }

        function filter_tanggal($first_tanggal, $second_tanggal){
        $query = $this->db->query("SELECT * FROM `sensus` WHERE `tanggal` BETWEEN '$first_tanggal' AND '$second_tanggal'");
        return $query->result();
        }

        function filter_bulan($first_bulan, $second_bulan){
        $query = $this->db->query("SELECT * FROM `indikator` WHERE `bulan` BETWEEN '$first_bulan' AND '$second_bulan'");
        return $query->result();
        }  

        function filter_tahun($first_tanggal, $second_tanggal){
        $query = $this->db->query("SELECT * FROM `tahunanrumahsakit` WHERE `tahun` BETWEEN '$first_tahun' AND '$second_tahun'");
        return $query->result();
        }  

        public function getDataByMonthRange($first_bulan, $second_bulan) {
                // Mendapatkan tanggal awal dan akhir dari bulan pertama
                $first_bulan_start = $first_bulan . '-01';
                $first_bulan_end = date('Y-m-t', strtotime($first_bulan_start));
            
                // Mendapatkan tanggal awal dan akhir dari bulan kedua
                $second_bulan_start = $second_bulan . '-01';
                $second_bulan_end = date('Y-m-t', strtotime($second_bulan_start));
            
                // Melakukan query untuk mengambil data dari rentang bulan yang diberikan
                $query = $this->db->query("SELECT * FROM datarumahsakit WHERE bulan BETWEEN ? AND ? ORDER BY bulan ASC", array($first_bulan_start, $second_bulan_end));
                
                // Mengembalikan hasil query
                return $query->result();
            }
            
//----------------------------------------hitungan sensus-----------------------------------------------------------------------
        function Tmasuk($where='')
        {
                return $this->db->query("select * from pasienmasuk $where;");
        }

        function Tdipindahkan($where='')
        {
                return $this->db->query("select * from pasienpindah $where;");
        }

    
      function Tkeluarhidup($where='')
        {
                return $this->db->query('SELECT * FROM pasienkeluar WHERE carakeluar = "hidup"');
        }

        function Tkeluarmati($where='')
        {
                return $this->db->query('SELECT * FROM pasienkeluar WHERE carakeluar = "meninggal"');
        }

        function Tmatikurang($where='')
        {
                return $this->db->query('SELECT * FROM pasienkeluar WHERE keadaankeluar = "meninggal kurang"');
        }

        function Tmatilebih($where='')
        {
                return $this->db->query('SELECT * FROM pasienkeluar WHERE keadaankeluar = "meninggal lebih"');
        }
    
        
    function Tlama($where='')
    {
        $sql    ="SELECT SUM(lamarawat) as lamarawat FROM pasienkeluar";
        $result = $this->db->query($sql);
        return $result->row()->lamarawat;
    }
    
}
