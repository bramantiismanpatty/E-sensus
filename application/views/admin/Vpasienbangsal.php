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
                    <div class="card-header bg-custom-green py-3">
                             <h6 class="m-0 font-weight-bold text-white"> Pasien Bangsal Perawatan</h6>
                        </div>
                        <div class="card-body">
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
                             
                        ?>

                            <form class = "form-inline"> 
                                <div class="form-roup-mb-2">                                                                                          
                                    <select class="form-control" name='koderuangan' required> 
                                        <option value="">--pilih Ruangan--</option>
                                            <?php 
                                            $unique_koderuangan = array(); // array untuk menyimpan nilai unik
                                            foreach($kelas as $u) :
                                            if (!in_array($u->koderuangan, $unique_koderuangan)) { // memeriksa apakah sudah ada dalam array
                                                $unique_koderuangan[] = $u->koderuangan; // jika belum, tambahkan ke array unik
                                        ?>               
                                            <option value ="<?php echo $u->koderuangan ?>"><?php echo $u->koderuangan ?></option>                                     
                                        <?php 
                                            }
                                        endforeach; 
                                        ?> 
                                    </select>
                                </div>
                                <div class="form-roup-mb-2 ml-3"> 
                                    <select class="form-control" name="bulan"required >
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
                                <button type="submit" class="btn btn-primary mb-2 ml-auto "><i class="fa fa-eye"></i>Tampilkan</button>
                                
                                <a href="<?= base_url('Abangsal') ?>" class="btn btn-success mb-2 ml-2 "> <i class="fa fa-refresh"></i>refresh</a>                                            
                            
                                <?php if(count($bangsal) > 0) {?>
                                    <a href="<?php echo base_url('Abangsal/cetak?koderuangan='.$ruang),'&bulan='.$bulan,'&tahun='.$tahun?>" class="btn btn-success mb-2 ml-2" target="_blank"> <i class="fa fa-print"></i>catak </a> 
                                 
                                <?php }else{?>
                                    <button type="button" class="btn btn-danger mb-2 ml-2" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-print"></i>Cetak</button>
                                <?php }?>

                            </form> 
                        </div>
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
                        ?>

                        <div class="alert alert-info">
                                    Menampilkan Data Bangsal Perawatan :<span class="font-weight-bold"><?php echo $ruang?> </span> 
                                    <span>Bulan : <?php echo $bulan?></span>  <?php echo $tahun?></span>  
                                   
                                </div>                                       
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
		                                foreach($bangsal as $u){ 
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
                            </div>
                        </div>
                    </div>

                 </div>
             </div>
        </div>
    </div>

      

   
       
   

    <!-- komen hapus -->
    <script>
            function confirmDialog() {
            return confirm('Apakah anda yakin akan menghapus data  ini?')
            }   
    </script>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
        </a>

    
    <script src="<?php echo base_url()?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 