<body id="page-top">   
    <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column">          
            <div id="content">   
                <div class="container-fluid">       
                    <div class="card mx-auto" style="width:100%">
                    <div class="card-header bg-custom-green py-3">
                             <h6 class="m-0 font-weight-bold text-white"> Grafik Statistik Rumah Sakit</h6>
                        </div>
                        <div class="card-body">                                       
                        <!-- <form class="form-inline" method="GET" action="<?= base_url('GrafikRuangan_admin/generateChart') ?>" target="_blank">-->
                               <form  class = "form-inline" >                                          
                                    <table cellpadding="10"> 
                                        <thead>
                                        <tr> 
                                            <td>Dari Bulan </td>
                                            <td>:</td> 
                                            <td>
                                                <select class="form-control" name="daribulan"required >
                                                    <option value="">--pilih Bulan--</option>
                                                    <option value="01">januari</option>
                                                    <option value="02">februari</option>
                                                    <option value="03">maret</option>
                                                    <option value="04">april</option>
                                                    <option value="05">mei</option>
                                                    <option value="06">juni</option>
                                                    <option value="07">juli</option>
                                                    <option value="08">agustus</option>
                                                    <option value="09">september</option>
                                                    <option value="10">oktober</option>
                                                    <option value="11">november</option>
                                                    <option value="12">desember</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="daritahun"required >
                                                    <option value="">--pilih Tahun--</option>
                                                        <?php $tahun = date('Y');
                                                        for($i=2020; $i<$tahun+5;$i++){?>
                                                    <option value="<?php echo $i ?>"> <?php echo $i ?></option>
                                                        <?php }?>
                                                </select>
                                            </td>  
                                        <tr>
                                        </thead> 
                                        <thead> 
                                        <tr>
                                            <td>Sampai Bulan</td>
                                            <td>:</td>
                                            <td>
                                                <select class="form-control" name="sampbulan"required >
                                                    <option value="">--pilih Bulan--</option>
                                                    <option value="01">januari</option>
                                                    <option value="02">februari</option>
                                                    <option value="03">maret</option>
                                                    <option value="04">april</option>
                                                    <option value="05">mei</option>
                                                    <option value="06">juni</option>
                                                    <option value="07">juli</option>
                                                    <option value="08">agustus</option>
                                                    <option value="09">september</option>
                                                    <option value="10">oktober</option>
                                                    <option value="11">november</option>
                                                    <option value="12">desember</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="samptahun"required >
                                                    <option value="">--pilih Tahun--</option>
                                                        <?php $tahun = date('Y');
                                                         for($i=2020; $i<$tahun+5;$i++){?>
                                                    <option value="<?php echo $i ?>"> <?php echo $i ?></option>
                                                        <?php }?>
                                                </select>                           
                                            </td>
                                        </tr> 
                                        </thead>
                                    </table>                                 
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
                            <button type="submit" class="btn btn-primary mb-2 ml-auto">Tampilkan</button> 
                            <a href="<?= base_url('AgrafikRumahsakit') ?>" class="btn btn-success mb-2 ml-2 "> <i class="fa fa-refresh"></i>refresh</a>                                                                                     
                            <?php if (count($filter) > 0) { ?>
                                <!-- Jika ada data, tampilkan tombol untuk menghasilkan grafik -->               
                                <a href="<?php echo base_url('AgrafikRumahsakit/generateChart?daribulan='.$daribulan),'&daritahun='.$daritahun,'&sampbulan='.$sampbulan,'&samptahun='.$samptahun?>"
                                class="btn btn-success mb-2 ml-2 " target="_blank"> <i class="fa fa-chart"></i>Tampilkan Grafik                              
                            </a>                 
                            <?php } ?>
                        </form>
                    </div>
                    <div class="alert alert-info">
                    Menampilkan Data Statistik Rumah Sakit:
                                dari bulan   :<span class="font-weight-bold"><?php echo  $first_bulan?>  
                                sampai bulan :<span class="font-weight-bold"><?php echo $second_bulan?></span>      
                    </div>
                    <!-- Tabel untuk menampilkan data -->
                    <?php if (count($filter) > 0) { ?>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Bulan / Tahun</th>
                                    <th>BOR</th>
                                    <th>AVLOS</th>
                                    <th>TOI</th>                                   			                       
                                    <th>BTO</th>    		                       
                                    <th>NDR</th>    		                      		                        
                                    <th>GDR</th> 
                                </tr>      
                            </thead>
                            <tbody>
                            <?php
                            $no = 1;
                            foreach ($filter as $u) { ?>
                                <tr>                        
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo date('Y-m', strtotime($u->bulan)) ?></td>    
                                    <td><?php echo $u->bor;          ?>   </td>
                                    <td><?php echo $u->avlos         ?>   </td>			                       
                                    <td><?php echo $u->toi           ?>   </td>
                                    <td><?php echo $u->bto           ?>   </td>
                                    <td><?php echo $u->ndr           ?>   </td>
                                    <td><?php echo $u->gdr           ?>   </td>  
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
                </div>
            </div>
        </div>
  
      
    <script src="<?php echo base_url()?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
   


