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
        <?php
            if((isset($_GET['bulan'])  && $_GET['bulan']!='')&&
            (isset($_GET['tahun'])&& $_GET['tahun']!='')){                                       
                    $bulan    = $_GET['bulan'];
                    $tahun    = $_GET['tahun'];
                    $kalender = $tahun. '-' .$bulan .'-01'; 
            }else{  
                    $bulan = date('m') ;
                    $tahun= date('Y') ;  
                    $kalender = $tahun. '-' .$bulan .'-01';   
            }
        ?>
            <tr>
                <td rowspan="2"><img src="<?php echo base_url() ?>bahan/dist/img/RSUD.png"  width="200" height="60" class="user-image" alt="User Image"/></td>
            </tr>
         </table>
         <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span><H5><b>REKAPITULASI PASIEN RAWAT INAP </b></H5></span>
               <!--   <span><H5><b>Bulan : <?php echo date('F', strtotime($kalender)) ?> <?php echo $tahun?> </b></H5></span> -->
            </div>
    </header>
    <br>
</head>
<body>   
   
    <div class="table-responsive">                                
            <table class="table table-bordered table-striped">                                  
            <thead>
                <tr>
                    <th>No.</th>
                    <th> Nomor Rekam Medis </th>
                    <th> Nomor Registrasi  </th>
                    <th> Nama Pasien       </th>
                    <th> Tempat Lahir      </th>
                    <th> Tanggal Lahir     </th>
                    <th>Jenis Kelamin      </th>
                    <th>Agama              </th>
                    <th>Status Perkawinan  </th> 
                    <th>Pekerjaan          </th>
                    <th>Alamat             </th>                    		
                </tr>
            </thead>
            <tbody>
            <?php                        
            $no = 1;
            foreach($bio as $u){ 
            ?>
		        <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $u->nomorm ?></td>
                    <td><?php echo $u->reg ?></td>
                    <td><?php echo $u->namapasien ?></td>
                    <td><?php echo $u->tempatlahir ?></td>
                    <td><?php echo $u->tgl_lahir ?></td>
                    <td><?php echo $u->kelamin ?></td>
                    <td><?php echo $u->agama ?></td>
                    <td><?php echo $u->kawin?></td>
                    <td><?php echo $u->pekerjaan ?></td>
                    <td><?php echo $u->alamat ?></td>                      
                </tr>
			<?php }?>                              
            </tbody>            
        </table>       
    </div>  		
</body>
</html>
 <script type="text/javascript">        
    window.print();
</script>