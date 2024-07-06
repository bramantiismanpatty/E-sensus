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
            <tr>
                <td rowspan="2"><img src="<?php echo base_url() ?>bahan/dist/img/RSUD.png"  width="200" height="60" class="user-image" alt="User Image"/></td>
            </tr>
         </table>
         <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span><H5><b>REKAPITULASI SENSUS HARIAN RAWAT INAP </b></H5></span>
                <span><H5><b>(RP1)</b></H5></span>
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
    <?php
         if((isset($_GET['namaruangan'])&& $_GET['namaruangan']!='') && 
            (isset($_GET['first_date'])  && $_GET['first_date']!='') && 
            (isset($_GET['second_date'])  && $_GET['second_date']!='')){
                $ruang = $_GET['namaruangan'];
                $first_tanggal = $_GET['first_date'];
                $second_tanggal = $_GET['second_date']; 
                $tampilkan = $ruang;                       
         }else{
                $ruang  = 'tidak ada ruangan di pilih';
                $first_tanggal  = 'tidak ada Tanggal di pilih';  
                $second_tanggal  = 'tidak ada Tanggal di pilih';
                $tampilkan = $ruang;
        }
    ?>

    <table class="" id="" width="" cellspacing="0">
        <thead>                                              
            <tr><b>
                <td><b>Nama Ruangan Perawatan </b></td>
                <td>:</td>
                <td><b><?php echo $ruang?></b></td>
            </tr>
            <tr>
                <td><b>Kelas Perawatan<b></td>
                <td>:</td>
            
                <td><b><?php $x = (string) $namakelas[0]->namakelas; print_r($x);?></b></td>
            </tr> 
            <tr>
                <td><b>Tempat Tidur Tersedia</b></td>
                <td>:</td>
                <td><b><?php $x = (string) $tidur[0]->tidur; print_r($x);?></b></td>                
            </tr>           
        </thead>
    </tabel>               
    <div class="table-responsive">                                
            <table class="table table-bordered table-striped" cellspacing="1" bordered="1">                            
                 <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Pasien Awal </th>
                        <th>Pasien Masuk</th>
                        <th>Pasien Pindahan</th> 
                        <th>Jumlah Pasien Masuk</th>
                        <th>Pasien Di Pindahkan</th>
                        <th>Pasien Keluar Hidup</th>
                        <th>Pasien meninggal</th>
                        <th>Meninggal kurang 48 jam</th>
                        <th>Meninggal Lebih 48 jam</th>
                        <th>Jumlah Pasien Keluar hidup+mati</th>
                        <th>Lama Di Rawat</th>
                        <th>Masuk Keluar di hari yang sama</th>
                        <th>Pasien masih dirawat</th>
                        <th>Hari Perawatan</th>			
		            </tr>
                </thead>
                <tbody><br>
                <?php
                    $sum_awal           =0;
                    $sum_masuk          =0;
                    $sum_pindahan       =0;
                    $sum_jlhmasuk       =0;
                    $sum_keluar         =0;
                    $sum_dipindahkan    =0;
                    $sum_mati           =0;
                    $sum_matikurang     =0;
                    $sum_matilebih      =0;
                    $sum_jlhkeluar      =0;
                    $sum_lama           =0;
                    $sum_masukkeluar    =0;
                    $sum_sisa           =0;
                    $sum_hp             =0; 

	            foreach($cetak as $u){ ?>
		            <tr>			                          
                        <td><?php echo $u->tanggal?></td>
                        <td><?php echo $u->awal?></td>
                        <td><?php echo $u->masuk?></td>
                        <td><?php echo $u->pindahan?></td>
                        <td><?php echo $u->jlhmasuk?></td>
                        <td><?php echo $u->keluar?></td>
                        <td><?php echo $u->dipindahkan ?></td>
                        <td><?php echo $u->mati ?></td>
                        <td><?php echo $u->matikurang?></td>
                        <td><?php echo $u->matilebih ?></td>
                        <td><?php echo $u->jlhkeluar ?></td>
                        <td><?php echo $u->lama?></td>
                        <td><?php echo $u->masukkeluar?></td>
                        <td><?php echo $u->sisa?></td>
                        <td><?php echo $u->hp ?></td>
		            </tr>
                <?php
                    $sum_awal+=$u          ->awal ;
                    $sum_masuk+=$u         ->masuk ;
                    $sum_pindahan+=$u      ->pindahan ;
                    $sum_jlhmasuk+=$u      ->jlhmasuk ;
                    $sum_keluar+=$u        ->keluar ;
                    $sum_dipindahkan+=$u   ->dipindahkan ;
                    $sum_mati+=$u          ->mati ;
                    $sum_matikurang+=$u    ->matikurang;
                    $sum_matilebih+=$u     ->matilebih ;
                    $sum_jlhkeluar+=$u     ->jlhkeluar;
                    $sum_lama+=$u           ->lama ;
                    $sum_masukkeluar+=$u   ->masukkeluar ;
                    $sum_sisa+=$u           ->sisa;
                    $sum_hp+=$u             ->hp ;        
                 }?> 			                                                 
                </tbody>
                <tbody>       
                    <tr style="font-weight:bold;" >
                        <td>Jumlah</td>
                        <td><?php echo $sum_awal ?></td>
                        <td><?php echo $sum_masuk?>
                        <td><?php echo $sum_pindahan?></td>
                        <td><?php echo $sum_jlhmasuk?></td>
                        <td><?php echo $sum_keluar?></td>
                        <td><?php echo $sum_dipindahkan?></td>
                        <td><?php echo $sum_mati?></td>
                        <td><?php echo $sum_matikurang?></td>
                        <td><?php echo $sum_matilebih?></td>
                        <td><?php echo $sum_jlhkeluar?></td>
                        <td><?php echo $sum_lama?></td>
                        <td><?php echo $sum_masukkeluar?></td>
                        <td><?php echo $sum_sisa?></td>
                        <td><?php echo $sum_hp?></td>
                    </tr>
                </tbody>                     
            </table> <br> 
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