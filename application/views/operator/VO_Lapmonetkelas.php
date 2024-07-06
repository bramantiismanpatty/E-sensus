<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->                
                <!-- Begin Page Content -->
                <div class="container-fluid">                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                    <div class="card-header bg-custom-samping py-3">
                             <h6 class="m-0 font-weight-bold text-white"> Monitoring Indikator Kelas </h6>
                        </div>
                        <div class="card-body">
                            <form class = "form-inline"> 
                                <div class="form-roup-mb-2">                                                                 
                                    <select class="form-control" name="bulan"required >
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
                                </div>
                                <div class="form-roup-mb-2 ml-3">                                               
                                    <select class="form-control" name="tahun"required >
                                            <option value="">--pilih Tahun--</option>
                                                <?php $tahun = date('Y');
                                                for($i=2020; $i<$tahun+5;$i++){?>
                                            <option value="<?php echo $i ?>"> <?php echo $i ?></option>
                                            <?php }?>
                                    </select>                                                           
                                </div>  
                                <?php
                                    if( (isset($_GET['bulan'])&& $_GET['bulan']!='')&&
                                        (isset($_GET['tahun'])&& $_GET['tahun']!='')){                                       
                                      
                                        $bulan    = $_GET['bulan'];
                                        $tahun    = $_GET['tahun'];
                                        $kalender = $tahun. '-' .$bulan. '-01';
                                    }else{  
                                      
                                        $bulan = date('M') ;
                                        $tahun= date('Y') ;  
                                        $kalender = $tahun. '-' .$bulan. '-01';     
                                   }
                                ?>                                                                                        
                                <button type="submit" class="btn btn-primary mb-2 ml-auto "><i class="fa fa-eye"></i>Tampilkan</button>
                                    <a href="<?= base_url('Opmonetkelas') ?>" class="btn btn-success mb-2 ml-2 "> <i class="fa fa-refresh"></i>refresh</a>                               
                                <?php
                                 if(count($rekap) > 0) {?>
                                    <a href="<?php echo base_url('Opmonetkelas/cetak?bulan='.$bulan),'&tahun='.$tahun?>" class="btn btn-success mb-2 ml-2 " target="_blank"> <i class="fa fa-print"></i>catak </a>                                
                                <?php }else{?>                                    
                                    <a class="btn btn-danger mb-2 ml-2"  href="#" data-toggle="modal" data-target="#cetakModal"> <i class="fa fa-print"></i>Cetak </a>
                                <?php }?>
                            </form> 
                        </div>
                        <?php
                            if( (isset($_GET['bulan'])&& $_GET['bulan']!='')&&
                            (isset($_GET['tahun'])&& $_GET['tahun']!='')){                                       
                          
                            $bulan    = $_GET['bulan'];
                            $tahun    = $_GET['tahun'];
                            $kalender = $tahun. '-' .$bulan. '-01';
                        }else{  
                          
                            $bulan = date('M') ;
                            $tahun= date('Y') ;  
                            $kalender = $tahun. '-' .$bulan. '-01';     
                       }
                        ?>
                        <div class="alert alert-info">
                                    memilih bulan :<span class="font-weight-bold"><?php echo $bulan?> </span> 
                                    Tahun :<span class="font-weight-bold"><?php echo $tahun?> </span> 
                        </div>                                       
                        <div class="table-responsive"> 
                        <div class="table-responsive"> 
                        <?php
                        $jlh_peserta = count ($rekap);
                        if ($jlh_peserta > 0) {?>                                  
                            <table class="table table-bordered table-striped">                                   
                                <thead>
                                    <tr>
                                    <th>Nomor</th>                                  
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
                                   <th>Action</th> 
                                    
    		                        <!-- <th>Bor</th>
                                    <th>Avlos</th>
                                    <th>TOI</th>
                                     <th>BTO</th>
                                    <th>NDR</th> 
                                    <th>GDR</th>-->                                                           
			                      
		                            </tr>
                                    </thead>
                                    <tbody>
                                     <?php                        
                                    
		                               $no = 1;
		                                foreach($rekap as $u){ 
	                            	?>
		                            <tr>
                                        <td><?php echo $no++ ?></td>                                        
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
                                       
                                    <!--      
                                        <td><?php echo $u->periode?></td>
                                        <td><?php echo $u->bor?></td>
                                        <td><?php echo $u->avlos?></td>
				                        <td><?php echo $u->toi?></td>
				                        <td><?php echo $u->bto ?></td>                                    
				                        <td><?php echo $u->ndr?></td>
                                        <td><?php echo $u->gdr?></td>                                    
				                    -->    
                                      <td class="text-center">                
                                           <a href="<?= base_url('Opmonetkelas/edit').'/'.$u->id ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>                                            
                                           <a onclick="openConfirmModal(<?= $u->id ?>)" class="btn btn-info btn-sm"><i class="fa fa-trash"></i></a>                                            
                                        </td>
			                        </tr>                                    
			                         <?php                                    
                                     }?>                              
                                    </tbody>                                   
                                </table>
                                <?php }else{?>
		                        <span class="badge badge-danger" style="font-size:14px;"><i class="fa fa-warning" style="font-size:20px;color:red"></i>Tidak ada data di pilih !!</span>               
                                <?php }	?> 
                            </div>
                        </div>
                    </div> 
                 </div>
             </div>
        </div>
    </div>        
 <!-- print Modal
     <div class="modal fade" id="cetakModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header bg-info py-3">
                    <h5 class="modal-title m-0 font-weight-bold text-white">Informasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body m-0 font-weight-bold">
                    Tidak Ada Data yang akan di cetak
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Ok</button>
                    
                </div>
            </div>
        </div>
    </div>-->
       
      <!-- Di dalam tampilan Anda pesan telah diubah-->
<?php if($this->session->flashdata('message')): ?>
    <div class="modal" id="successModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Success</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo $this->session->flashdata('message'); ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<script>
    $(document).ready(function(){
        $('#successModal').modal('show');
    });
</script>  

  <!-- komen hapus -->
 
<div class="modal" id="confirmModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header bg-info py-3">
                    <h5 class="modal-title m-0 font-weight-bold text-white">Success</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body m-0 font-weight-bold">
            Apakah anda yakin akan menghapus Data Ini ?</b> 
            </div>
            <div class="modal-footer">
                <a id="confirmButton" class="btn btn-danger btn-sm">Ya</a>
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Tidak</button>
            </div>
        </div>
    </div>
</div>

<script>
    function openConfirmModal(id_pasienkeluar) {
        $('#confirmModal').modal('show');
        $('#confirmButton').attr('href', '<?= base_url("Opmonetkelas/hapus") ?>/' + id);
    }
</script>



<!-- Di dalam tampilan Anda pesan telah terhapus-->
<?php if($this->session->flashdata('message')): ?>
    <div class="modal" id="successModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <div class="modal-header bg-success py-3">
                    <h5 class="modal-title m-0 font-weight-bold text-white">Success</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body m-0 font-weight-bold">
                    <?php echo $this->session->flashdata('message'); ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<script>
    $(document).ready(function(){
        $('#successModal').modal('show');
    });
</script>  
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
        </a>

    

     

    <!-- Di dalam tampilan Anda pesan telah diupdate-->
 <?php if($this->session->flashdata('error_message')): ?>
<div id="errorModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header bg-info py-3">
            <h5 class="modal-title m-0 font-weight-bold text-white">Informasi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body m-0 font-weight-bold">
                <?php echo $this->session->flashdata('error_message'); ?>
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                </div>
        </div>
    </div>
</div>
<?php endif; ?>

<!-- Tampilkan modal jika ada pesan sukses -->
<?php if($this->session->flashdata('success_message')): ?>
<div id="successModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header bg-success py-3">
            <h5 class="modal-title m-0 font-weight-bold text-white">Success</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body m-0 font-weight-bold">
                <?php echo $this->session->flashdata('success_message'); ?>
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                </div>
        </div>
    </div>
</div>
<?php endif; ?>


<!-- Your JavaScript code -->
<script>
    // Tampilkan modal error jika ada pesan kesalahan
    $(document).ready(function() {
        $('#errorModal').modal('show');
    });

    // Tampilkan modal sukses jika ada pesan sukses
    $(document).ready(function() {
        $('#successModal').modal('show');
    });
</script>
<script src="<?php echo base_url()?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>      
