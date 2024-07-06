<!DOCTYPE html>
<html>
<head>
    <title>Data Rumah Sakit</title>
    <link rel="icon" href="<?php echo base_url() ?>/assets/images/kalisat.ico" type="image/x-icon">
    <!-- Pastikan Anda memiliki koneksi internet untuk mengambil Chart.js dari CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h4>Grafik Bor Ruangan Perawatan Rumah Sakit</h4>
    <div class="card-body">                           
   <!-- <form class="form-inline" method="GET" action="<?= base_url('GrafikRuangan_operator/generateChart') ?>" target="_blank">-->
    <form class="form-inline" method="" action="" target="">
            <table cellpadding="10"> 
                <thead>
                    <tr> 
                        <td>Bulan</td>
                        <td>:</td> 
                        <td>
                            <select class="form-control" name="bulan" required>
                                <option value="">--pilih Bulan--</option>
                                <option value="1">januari</option>
                                <option value="2">februari</option>
                                <option value="3">maret</option>
                                <option value="4">april</option>
                                <option value="5">mei</option>
                                <option value="6">juni</option>
                                <option value="7">juli</option>
                                <option value="8">agustus</option>
                                <option value="9">september</option>
                                <option value="10">oktober</option>
                                <option value="11">november</option>
                                <option value="12">desember</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-control" name="tahun" required>
                                <option value="">--pilih Tahun--</option>
                                <?php $tahun = date('Y');
                                for($i=2020; $i<$tahun+5; $i++){ ?>
                                    <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                </thead> 
                
            </table>  
            <?php
           if((isset($_GET['bulan'])  && $_GET['bulan']!='')&&
           (isset($_GET['tahun'])&& $_GET['tahun']!='')){                                       
                 $bulan    = $_GET['bulan'];
                 $tahun    = $_GET['tahun'];
                 $kalender =$bulan.$tahun;
         }else{  
                 $bulan = date('m') ;
                 $tahun= date('Y') ;  
                 $kalender =$bulan.$tahun;                           
                
        }
 
        
            ?>     

            <button type="submit" class="btn btn-primary mb-2 ml-auto">Tampilkan</button>
            
            <?php if (count($filter) > 0) { ?>
                <!-- Jika ada data, tampilkan tombol untuk menghasilkan grafik -->
               
                <a href="<?php echo base_url('GrafikRuangan_operator/generateChart?bulan='.$bulan),'&tahun='.$tahun?>" class="btn btn-success mb-2 ml-2 "> <i class="fa fa-chart"></i>Tampilkan Grafik </a> 
                
            <?php } ?>
        </form>
    </div>
    <div class="alert alert-info">
            memilih bulan :<span class="font-weight-bold"><?php echo $kalender?> </span> 
             
    </div>    

    <!-- Tabel untuk menampilkan data -->
    <?php if (count($filter) > 0) { ?>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Ruangan Perawatan</th>
                        <th>BOR</th>
                        <!-- Tambahkan kolom lain sesuai dengan data yang ingin ditampilkan -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($filter as $u) { ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $u->ruangan; ?></td>
                            <td><?php echo $u->bor; ?></td>
                            <!-- Tambahkan kolom lain sesuai dengan data yang ingin ditampilkan -->
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    <?php } else { ?>
        <!-- Jika tidak ada data, tampilkan pesan -->
        <div class="alert alert-warning">Tidak ada data yang sesuai.</div>
    <?php } ?>

   


