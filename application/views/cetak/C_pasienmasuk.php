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
        <table >
            <tr>
            <td rowspan="2"><img src="<?php echo base_url() ?>bahan/dist/img/RSUD.png"  width="200" height="60" class="user-image" alt="User Image"/></td>
            </tr>
          
         </table>
         <div class="container my-auto">
            <div class="copyright text-center my-auto">
            <?php
         if((isset($_GET['first_date'])  && $_GET['first_date']!='') && 
         (isset($_GET['second_date'])  && $_GET['second_date']!='')){
        
          $first_tanggal = $_GET['first_date'];
          $second_tanggal = $_GET['second_date'];                          

      }else{
         
          $first_tanggal  = 'tidak ada Tanggal di pilih';  
          $second_tanggal  = 'tidak ada Tanggal di pilih';          
      }

      
        ?>
                <span><H5><b>Laporan Registrasi Pasien Rawat Inap  </b></H5></span>
                <span><H5><b>dari Tanggal : <?php echo $first_tanggal?> sampai tanggal : <?php echo  $second_tanggal?></b></H5></span>
               
            </div>
    </header>
    <br>
  </head>

<body>    
      
        <?php
         if((isset($_GET['first_date'])  && $_GET['first_date']!='') && 
         (isset($_GET['second_date'])  && $_GET['second_date']!='')){
        
          $first_tanggal = $_GET['first_date'];
          $second_tanggal = $_GET['second_date'];                          

      }else{
         
          $first_tanggal  = 'tidak ada Tanggal di pilih';  
          $second_tanggal  = 'tidak ada Tanggal di pilih';          
      }

      $data['pulang'] = $this->Mlaporan->pulang($first_tanggal, $second_tanggal);
        ?>
       
        <div class="table-responsive">                                
            <table class="table table-bordered table-striped" cellspacing="1" bordered="1">                                  
                <thead>
                        <tr>
                            <th>Nomor</th> 
                            <th>Tanggal Masuk</th> 
                            <th>Nomor Rekam Medis </th>
                            <th>Nomor registrasi</th>
                            <th>Nama Pasien</th> 
                            <th>Ruang Perawatan</th>   
                            <th>Kelas</th>                 
                            <th>Cara Pembayaran</th>                                      
			                <!--  <th>Option</th> -->   		
		                </tr>
                    </thead>
                    <tbody>
                    <?php  
                    $no = 1;                  
                    foreach($masuk as $u){ ?>
		                <tr>
                            <td><?php echo $no++ ?></td>  
                            <td><?php echo $u->tgl_masuk ?></td>
                            <td><?php echo $u->nomorm?></td> 
                            <td><?php echo $u->reg?></td>				                       
                            <td><?php echo ucfirst(strtolower($u->namapasien)) ?></td>                                       
                            <td><?php echo $u->namaruangan?></td>
                            <td><?php echo $u->namakelas?></td>                                                                                                             
                            <td><?php echo ucfirst(strtolower($u->carabayar))?></td>                                                                       
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