<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHE||cetak</title>
    <link rel="icon" href="<?php echo base_url() ?>bahan/dist/img/kalisat.ico" type="image/x-icon">
    <header >      
        <table >
        <?php
       
        
       if((isset($_GET['koderuangan'])  && $_GET['koderuangan']!='')&&
       (isset($_GET['bulan'])  && $_GET['bulan']!='')&&
     (isset($_GET['tahun'])&& $_GET['tahun']!='')){                                       
           $ruang    = $_GET['koderuangan'];
           $bulan    = $_GET['bulan'];
           $tahun    = $_GET['tahun'];
           $kalender = $tahun. '-' .$bulan .'-01'; 
   }else{  
           $ruang  = 'tidak ada ruangan di pilih';
           $bulan = date('m') ;
           $tahun= date('Y') ;  
           $kalender = $tahun. '-' .$bulan .'-01';   
  }
        
 
         $data['cetak'] = $this->db->query("SELECT indikator.*
         FROM indikator 
         WHERE indikator.koderuangan='$ruang' AND indikator.bulan='$kalender'
         ORDER BY indikator.namaruangan ASC")->result();
        ?>
           
            <tr>
                <td rowspan="2"><img src="<?php echo base_url() ?>bahan/dist/img/RSUD.png"  width="200" height="60" class="user-image" alt="User Image"/></td>
            </tr>
         </table>
         <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span><H5><b>REKAPITULASI PERBANGSAL PERAWATAN</b></H5></span>
                <span><H5><b>Bulan : <?php echo date('F', strtotime($kalender)) ?> <?php echo $tahun?> </b></H5></span>  
            </div>
        </div>
    </header>
    <br>
  
    <!-- Masukkan CSS di sini -->
    <style>
        /* CSS untuk styling tabel */
        .table {
            width: 100%;
            border-collapse: collapse;
        }

        /* CSS untuk header kolom */
        .table thead th {
            background-color: #f2f2f2;
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        /* CSS untuk sel data */
        .table tbody td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        /* CSS untuk baris ganjil */
        .table tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        /* CSS untuk baris saat hover */
        .table tbody tr:hover {
            background-color: #f2f2f2;
        }
    </style>
  </head>
<body>     
    <div class="table-responsive">                                
        <table class="table table-bordered"  width="100%" cellspacing="0">                                   
            <thead>
                <tr>
                <th>Nomor</th>                                  
                    <th> Nama Ruang Rawat</th>
                    <th>Kelas Rawat</th>
                    <th>Tempat Tidur Tersedia</th>                                      			                       
                    <th>Pasien Masuk</th>    		                       
                    <th>Pasien Keluar Hidup</th>
                    <th>Pasien meninggal</th>
                    <th>Meninggal kurang 48 jam</th>
                    <th>Meninggal Lebih 48 jam</th>
                    <th>Jumlah Pasien Keluar hidup+mati</th>
                    <th>Masuk keluar di hari yang sama</th>
                    <th>Lama Di Rawat</th>
                    <th>Hari Perawatan</th> 
                    <th>Petugas</th>           
		        </tr>
            </thead>
            <tbody>
                <?php 
                    $sum_masuk          =0;                                     
                    $sum_keluar         =0;
                    $sum_mati           =0;
                    $sum_matikurang     =0;
                    $sum_matilebih      =0;
                    $sum_jlhkeluar      =0;                                    
                    $sum_masukkeluar    =0;
                    $sum_lama           =0;       
                    $sum_hp             =0;  
                    $no = 1;
                    foreach($cetak as $u){ 
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $u->namaruangan ?></td>
                    <td><?php echo $u->namakelas ?></td>	
                    <td><?php echo $u->tidur ?></td>						                           	                      
                    <td><?php echo $u->masuk ?></td>			                       
                    <td><?php echo $u->keluar ?></td>
                    <td><?php echo $u->mati?></td>
                    <td><?php echo $u->matikurang?></td>
                    <td><?php echo $u->matilebih?></td>
                    <td><?php echo $u->jlhkeluar ?></td>                                    
                    <td><?php echo $u->masukkeluar?></td>
                    <td><?php echo $u->lama?></td>
                    <td><?php echo $u->hp?></td>                                       
                    <td><?php echo $u->petugas?></td>                    
                </tr>
                <?php 
                    $sum_masuk+=$u         ->masuk ;
                    $sum_keluar+=$u        ->keluar ;
                    $sum_mati+=$u          ->mati ;
                    $sum_matikurang+=$u    ->matikurang;
                    $sum_matilebih+=$u     ->matilebih ;
                    $sum_jlhkeluar+=$u     ->jlhkeluar;
                    $sum_masukkeluar+=$u    ->masukkeluar ;                                                         
                    $sum_lama+=$u           ->lama ;
                    $sum_hp+=$u             ->hp ;
                }?>                              
            </tbody>
            <tbody>       
                <tr style="font-weight:bold;" >
                    <td colspan='4'>Jumlah</td>          
                    <td><?php echo $sum_masuk?>      
                    <td><?php echo $sum_keluar?></td>          
                    <td><?php echo $sum_mati?></td>
                    <td><?php echo $sum_matikurang?></td>
                    <td><?php echo $sum_matilebih?></td>
                    <td><?php echo $sum_jlhkeluar?></td>         
                    <td><?php echo $sum_masukkeluar?></td>
                    <td><?php echo $sum_lama?></td>
                    <td><?php echo $sum_hp?></td>         
                </tr>
            </tbody>
        </table>                            
        <table width="100%">
            <tr>
                <td></td>
                <td width="200px">
                <p> Kalisat,<?php echo date("d-M-Y")?> <br> Koordinator Rekam Medis<p>
                    <br>
                    <br>
                    <p>__________________________</p>
                </td>                    
            </tr>
        </table>
    </div>
</body>
</html>
<script type="text/javascript">        
    window.print();
</script>