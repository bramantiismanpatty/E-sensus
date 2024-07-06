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
    <header > 
    <?php
    if (
        isset($_GET['daribulan']) && $_GET['daribulan'] != '' &&
        isset($_GET['daritahun']) && $_GET['daritahun'] != '' &&
        isset($_GET['sampbulan']) && $_GET['sampbulan'] != '' &&
        isset($_GET['samptahun']) && $_GET['samptahun'] != ''
    ) {
        $daribulan = $_GET['daribulan'];
        $daritahun = $_GET['daritahun'];
        $sampbulan = $_GET['sampbulan'];
        $samptahun = $_GET['samptahun'];
        $first_bulan = $daritahun. '-' .$daribulan;
        $second_bulan =$samptahun. '-' .$sampbulan;
    } else {
        $daribulan = date('F') ;
        $daritahun =date('Y') ;
        $sampbulan = date('F') ;
        $samptahun =date('Y') ;
        $first_bulan = $daritahun. '-' .$daribulan;
        $second_bulan =$samptahun. '-' .$sampbulan;
    }
    ?>            
        <table >
            <tr>
                <td rowspan="2"><img src="<?php echo base_url() ?>bahan/dist/img/RSUD.png"  width="200" height="60" class="user-image" alt="User Image"/></td>
            </tr>
         </table>
         
         <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span><H5><b>Laporan Tahunan Rumah Sakit </b></H5></span>      
                <span><H5><b>dari Bulan : <?php echo date('F Y', strtotime($first_bulan)) ?> sampai Bulan : <?php echo date('F Y', strtotime($second_bulan)) ?></b></H5></span>             
            </div>
    </header>
    <br>
</head>
<body>  
    <?php
    if (
        isset($_GET['daribulan']) && $_GET['daribulan'] != '' &&
        isset($_GET['daritahun']) && $_GET['daritahun'] != '' &&
        isset($_GET['sampbulan']) && $_GET['sampbulan'] != '' &&
        isset($_GET['samptahun']) && $_GET['samptahun'] != ''
    ) {
        $daribulan = $_GET['daribulan'];
        $daritahun = $_GET['daritahun'];
        $sampbulan = $_GET['sampbulan'];
        $samptahun = $_GET['samptahun'];
        $first_bulan = $daritahun. '-' .$daribulan;
        $second_bulan =$samptahun. '-' .$sampbulan;
    } else {
        $daribulan = date('m') ;
        $daritahun =date('Y') ;
        $sampbulan = date('m') ;
        $samptahun =date('Y') ;
        $first_bulan = $daritahun. '-' .$daribulan;
        $second_bulan =$samptahun. '-' .$sampbulan;
    }
    ?>       
    <div class="table-responsive">                                
        <table class="table table-bordered table-striped">                                   
            <thead>
                <tr>
                    <th>Nomor</th> 
                    <th>Bulan / Tahun</th>                                                  
                    <th>Pasien Masuk</th>
                    <th>Pasien Keluar Hidup</th>
                    <th>Pasien Meninggal</th>
                    <th>Jumlah Pasien keluar</th>
                    <th>Lama Dirawat</th>
                    <th>Hari Perawatan</th>
                </tr>
            </thead>
            <tbody>
            <?php                                  
                $no = 1;
                foreach($cetak as $u){ 
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo date('Y-m', strtotime($u->bulan)) ?></td>                                       
                    <td><?php echo $u->masuk?></td>
                    <td><?php echo $u->keluar?></td>
                    <td><?php echo $u->mati?></td>
                    <td><?php echo $u->jlhkeluar?></td>
                    <td><?php echo $u->lama?></td>
                    <td><?php echo $u->hp ?></td>                          
</tr>                                    
            <?php
            }?>                              
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