<body id="page-top">  
    <div id="wrapper">       
        <div id="content-wrapper" class="d-flex flex-column">           
            <div id="content"> 
                <div class="container-fluid">        
                    <div class="card mx-auto" style="width:100%">
                    <div class="card-header bg-custom-green py-3">
                             <h6 class="m-0 font-weight-bold text-white"> Laporan Tahunan Rumah Sakit</h6>
                        </div>                        
                        <div class="card-body">
                            <form  class = "form-inline" >                                          
                                <table cellpadding="10"> 
                                    <thead>
                                    <tr> 
                                        <td>Dari Bulan </td>
                                        <td>:</td> 
                                        <td>
                                            <select class="form-control" name="daribulan"required >
                                            <option value="-">--pilih Bulan--</option>
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
                                            <option value="-">--pilih Bulan--</option>
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
                                <button type="submit" class="btn btn-primary mb-2 ml-auto"><i class="fa fa-eye"></i>Tampilkan</button>                          
                                <a href="<?= base_url('Arumahsakit') ?>" class="btn btn-success mb-2 ml-2 "> <i class="fa fa-refresh"></i>refresh</a>                                                                                           
                                <?php if(count($filter) > 0) {?>                              
                                        <a href="<?php echo base_url('Arumahsakit/cetak?daribulan='.$daribulan),'&daritahun='.$daritahun,'&sampbulan='.$sampbulan,'&samptahun='.$samptahun?>" class="btn btn-success mb-2 ml-2" target="_blank">
                                            <i class="fa fa-print"></i>cetak
                                        </a> 
                                <?php } else {?>                                            
                                        <button class="btn btn-danger mb-2 ml-2" data-toggle="modal" data-target="#cetakModal"><i class="fa fa-print"></i>Cetak</button>
                                <?php } ?>                                                
                            </form>
                        </div>                     
                        <div class="alert alert-info" style="width:100%">
                                    Menampilkan Data Indikator Rumah Sakit:
                                    dari bulan   :<span class="font-weight-bold"><?php echo  $first_bulan?>  
                                    sampai bulan :<span class="font-weight-bold"><?php echo $second_bulan?></span>                                     
                        </div>                
                        <div class="card mx-auto" style="width:100%">                       
                            <div class="card-body">                
                                <div class="table-responsive"> 
                                    <table class="table table-bordered"  width="100%" cellspacing="0">                                   
                                        <thead>
                                            <tr>
                                                <th>Bulan</th>  
                                                <th>Pasien Masuk</th>    		                 
                                                <th>Pasien Keluar Hidup</th>
                                                <th>Pasien meninggal</th>
                                                <th>Meninggal kurang 48 jam</th>
                                                <th>Meninggal Lebih 48 jam</th>
                                                <th>Jumlah Pasien Keluar hidup+mati</th>                          
                                                <th>Pasien masuk Keluar di hari yang sama</th>
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
		                               
		                                foreach($filter as $u){ 
	                            	    ?>
		                                     <tr>                                     
                                                <td><?php echo $u->bulan ?></td>   
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
			                                    <!--  <td class="text-center">                
                                                <a href="<?= base_url('sensus5/edit').'/'.$u->id ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a> 
                                                <a onclick="return confirmDialog()" class="btn btn-danger btn-sm" href="<?= base_url('sensus5/hapus').'/'.$u->id ?>">
                                                <i class="fa fa-trash"></i></a>                                        
                                                </td> -->
			                                </tr>
			                            <?php                                    
                                        $sum_masuk+=$u         ->masuk ;                                                          
                                        $sum_keluar+=$u        ->keluar ;
                                        $sum_mati+=$u          ->mati ;
                                        $sum_matikurang+=$u    ->matikurang;
                                        $sum_matilebih+=$u     ->matilebih ;
                                        $sum_jlhkeluar+=$u     ->jlhkeluar;                                                                      
                                        $sum_masukkeluar+=$u   ->masukkeluar ;                                                         
                                        $sum_lama+=$u           ->lama ;
                                        $sum_hp+=$u             ->hp ;
                                        }?>                              
                                        </tbody>
                                        <tbody>       
                                            <tr style="font-weight:bold;" >
                                                <td colspan='1'>Jumlah</td>         
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
       
          
 <!-- print Modal-->
     <div class="modal fade" id="cetakModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModal">Informasi</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">Tidak Ada Data yang akan di cetak ..!</div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">OK</button>
                   
                </div>
            </div>
        </div>
    </div>

<!--grafik Modal-->
     <div class="modal fade" id="grafikModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalGrafik"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalGrafik">Informasi</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">Data Tidak Ada untuk di tampilkan pada grafik..!!</div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">OK</button>
                    
                </div>
            </div>
        </div>
    </div>
       
   

    <!-- komen hapus -->
    <script>
            function confirmDialog() {
            return confirm('Apakah anda yakin akan menghapus data ini?')
            }   
    </script>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
        </a>

    <script src="<?php echo base_url()?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 