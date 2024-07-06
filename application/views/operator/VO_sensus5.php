<body id="page-top">   
    <div id="wrapper">      
        <div id="content-wrapper" class="d-flex flex-column">           
            <div id="content">             
                <div class="container-fluid">       
                    <div class="card shadow mb-4">
                        <div class="card-header bg-custom-samping py-3">
                             <h6 class="m-0 font-weight-bold text-white"> Rekapilulasi Sensus Harian Rawat Inap</h6>
                        </div>
                        <div class="card-body">
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
                        <form class = "form-inline"> 
                            <div class="form-roup-mb-2"> 
                                <p>ruangan</p>                                                                
                                <select class="form-control" name='namaruangan'required > 
                                    <option value="">--pilih Ruangan--</option>
                                    <?php foreach($kelas as $u) :?>               
                                    <option value ="<?php echo $u->namaruangan ?>"><?php echo $u->namaruangan ?></option>                                     
                                    <?php endforeach ?> 
                                </select>
                            </div>
                                <div class="form-roup-mb-2 ml-3"> 
                                <p>dari tanggal</p>                                               
                                    <input type='date' class="form-control" name="first_date"required ></input>                                                   
                                </div>
                            <div class="form-roup-mb-2 ml-3">
                                <p>sampai tanggal</p>                                                
                                    <input type='date' class="form-control" name="second_date"required ></input>                                                   
                            </div>                                           
                                <button type="submit" class="btn btn-primary mb-2 ml-auto "><i class="fa fa-eye"></i>Tampilkan</button>
                                
                                <a href="<?= base_url('Opsensus05') ?>" class="btn btn-success mb-2 ml-2 "> <i class="fa fa-refresh"></i>refresh</a>                                            
                            
                                <?php if(count($rekap) > 0) {?>
                                    <a href="<?php echo base_url('Opsensus05/cetak?namaruangan='.$ruang),'&first_date='.$first_tanggal,'&second_date='.$second_tanggal?>" class="btn btn-success mb-2 ml-2 " target="_blank"> <i class="fa fa-print"></i>catak </a> 
                                    
                                <?php }else{?>
                                    <button class="btn btn-danger mb-2 ml-2" data-toggle="modal" data-target="#cetakModal"><i class="fa fa-print"></i>Cetak</button>
                                <?php }?>
                        </form> 
                     </div>
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
                        <div class="alert alert-info">
                                    Menampilkan Data Sensus Harian Rawat Inap Ruangan :<span class="font-weight-bold"><?php echo $ruang?> </span> 
                                   dari Tanggal :<span class="font-weight-bold"><?php echo  $first_tanggal?>  sampai Tanggal :<span class="font-weight-bold"><?php echo $second_tanggal?></span> 
                        </div>                                       
                        <div class="table-responsive">
                        <?php
                            $jlh_peserta = count ($rekap);
                            if ($jlh_peserta > 0) {?>                               
                            <table class="table table-bordered"  width="100%" cellspacing="0">                                   
                                <thead>
                                    <tr>
                                        <th>Tanggal</th> 
                                        <th>Pasien Awal </th>
                                        <th>Pasien Masuk</th>
                                        <th>Pasien Pindahan</th> 
                                        <th>Jumlah PAsien Masuk</th>
                                        <th>Pasien Di Pindahkan</th>
                                        <th>Pasien Keluar Hidup</th>
                                        <th>Pasien meninggal</th>
                                        <th>Meninggal kurang 48 jam</th>
                                        <th>Meninggal Lebih 48 jam</th>
                                        <th>Jumlah Pasien Keluar hidup+mati</th>
                                        <th>Pasien Masih dirawat</th>
                                        <th>Pasien masuk Keluar di hari yang sama</th>
                                        <th>Lama Di Rawat</th>
                                        <th>Hari Perawatan</th>                                                 
			                            <!--  <th>Option</th> -->   		
		                            </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $sum_awal           =0;
                                    $sum_masuk          =0;
                                    $sum_pindahan       =0;
                                    $sum_jlhmasuk       =0;

                                    $sum_dipindahkan    =0;
                                    $sum_keluar         =0;
                                    $sum_mati           =0;
                                    $sum_matikurang     =0;
                                    $sum_matilebih      =0;
                                    $sum_jlhkeluar      =0;
                                    
                                    $sum_sisa           =0;
                                    $sum_masukkeluar    =0;
                                    $sum_lama           =0;       
                                    $sum_hp             =0;    
                                    
                                    foreach($rekap as $u){ 
                                ?>
		                            <tr>
                                        <td><?php echo $u->tanggal?></td> 
                                        <td><?php echo $u->awal ?></td>
				                        <td><?php echo $u->masuk ?></td>
				                        <td><?php echo $u->pindahan ?></td>
                                        <td><?php echo $u->jlhmasuk ?></td>

                                        <td><?php echo $u->dipindahkan ?></td>
				                        <td><?php echo $u->keluar ?></td>
				                        <td><?php echo $u->mati?></td>
                                        <td><?php echo $u->matikurang?></td>
				                        <td><?php echo $u->matilebih?></td>
				                        <td><?php echo $u->jlhkeluar ?></td>

                                        <td><?php echo $u->sisa?></td>
				                        <td><?php echo $u->masukkeluar?></td>
                                        <td><?php echo $u->lama?></td>
                                        <td><?php echo $u->hp?></td>                  
			                          <!--  <td class="text-center">                
                                            <a href="<?= base_url('Opsensus05/edit').'/'.$u->id ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a> 
                                            <a onclick="return confirmDialog()" class="btn btn-danger btn-sm" href="<?= base_url('Opsensus05/hapus').'/'.$u->id ?>">
                                             <i class="fa fa-trash"></i></a>                                       
                                        </td> -->
			                        </tr>
			                         <?php 
                                      $sum_awal+=$u          ->awal ;
                                      $sum_masuk+=$u         ->masuk ;
                                      $sum_pindahan+=$u      ->pindahan ;
                                      $sum_jlhmasuk+=$u      ->jlhmasuk ;
 
                                      $sum_dipindahkan+=$u   ->dipindahkan ;                                    
                                      $sum_keluar+=$u        ->keluar ;
                                      $sum_mati+=$u          ->mati ;
                                      $sum_matikurang+=$u    ->matikurang;
                                      $sum_matilebih+=$u     ->matilebih ;
                                      $sum_jlhkeluar+=$u     ->jlhkeluar;
 
                                      $sum_sisa+=$u          ->sisa;                                   
                                      $sum_masukkeluar+=$u   ->masukkeluar ;                                                         
                                      $sum_lama+=$u           ->lama ;
                                      $sum_hp+=$u             ->hp ;
                                    }?>                              
                                </tbody>
                                <tbody>       
                                    <tr style="font-weight:bold;" >
                                        <td colspan='1'>Jumlah</td>
                                        <td><?php echo $sum_awal ?></td>
                                        <td><?php echo $sum_masuk?>
                                        <td><?php echo $sum_pindahan?></td>
                                        <td><?php echo $sum_jlhmasuk?></td>

                                        <td><?php echo $sum_dipindahkan?></td>
                                        <td><?php echo $sum_keluar?></td>          
                                        <td><?php echo $sum_mati?></td>
                                        <td><?php echo $sum_matikurang?></td>
                                        <td><?php echo $sum_matilebih?></td>
                                        <td><?php echo $sum_jlhkeluar?></td>

                                        <td><?php echo $sum_sisa?></td>
                                        <td><?php echo $sum_masukkeluar?></td>
                                        <td><?php echo $sum_lama?></td>
                                        <td><?php echo $sum_hp?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <?php }else{?>
                                    <span class="badge badge-danger" style="font-size:14px;"><i class="fa fa-warning" style="font-size:20px;color:red"></i>Tidak ada data !!</span>               
                            <?php }	?> 
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
                    <h5 class="modal-title m-0 font-weight-bold text-white">Konfirmasi</h5>
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
    </div> -->                           
   
       
   

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

     

