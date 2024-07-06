<body id="page-top">   
  <div id="wrapper">       
    <div id="content-wrapper" class="d-flex flex-column">               >
      <div id="content">                  
        <div class="container-fluid">    
            <div class="card shadow mb-4">
              <div class="card-header bg-custom-samping py-3">
                <h6 class="m-0 font-weight-bold text-white"> Monitoring Sensus Harian Pasien  Rawat Inap</h6>
              </div>
              <div class="card-body">
                <?php
                    if((isset($_GET['tanggal'])&& $_GET['tanggal']!='')){
                          $tanggal = $_GET['tanggal'];                                                                          
                          $tampilkan = $tanggal;
                    }else{
                          $tanggal  = date("d M Y");                                                                      
                        $tampilkan = $tanggal;                                     
                      }
                ?>
                <form class = "form-inline"> 
                  <div class="form-roup-mb-2">                                                                 
                    <input type='date' class="form-control" name="tanggal"required ></input>  
                  </div>                                                                          
                  <button type="submit" class="btn btn-primary mb-2 ml-auto "><i class="fa fa-eye"></i>Tampilkan</button> 
                  <a href="<?= base_url('Oplaporanharian') ?>" class="btn btn-success mb-2 ml-2 " > <i class="fa fa-refresh"></i>refresh</a>                                                           
                                                                            
                </form> 
              </div>
              <div class="alert alert-info">Laporan Pasien Harian Rawat Inap :<span class="font-weight-bold"><?php echo $tanggal?> </span></div>                                       
              <div class="table-responsive">                                
                <table class="table table-bordered"  width="100%" cellspacing="0">                                   
                  <thead>
                        <tr>
                            <th>No.</th>
                            <th> Nama Ruang Rawat</th>
                            <th>Kelas Rawat</th>
                            <th>Jumlah Tempat Tidur</th>		                       
                            <th>Pasien Masuk</th>
                            <th>Pasien Keluar Hidup</th>
                            <th>Pasien meninggal</th>
                            <th>Meninggal kurang 48 jam</th>
                            <th>Meninggal Lebih 48 jam</th>                                   
                            <th>Pasien Masih dirawat</th>
                            <th>Masuk keluar di hari yang sama</th>
                            <th>Lama Di Rawat</th> 
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
                      $sum_sisa           =0;
                      $sum_masukkeluar    =0;
                      $sum_lama           =0;       
                    
                      $no = 1;
                    foreach($rekap as $u){ 
                  ?>
		                    <tr>
                                        
                            <td><?php echo $no++ ?></td>  
                            <td><?php echo $u->namaruangan ?></td>
                            <td><?php echo $u->namakelas ?></td>			                            
                            <td><?php echo $u->tidur ?></td> 

                            <td><?php echo $u->masuk ?></td>				                                                       
                            <td><?php echo $u->keluar ?></td>

                            <td><?php echo $u->mati?></td>
                            <td><?php echo $u->matikurang?></td>
                            <td><?php echo $u->matilebih?></td>	

                            <td><?php echo $u->sisa?></td>
                            <td><?php echo $u->masukkeluar?></td>
                            <td><?php echo $u->lama?></td>  
                            <td><?php echo $u->petugas?></td>                   
			                  </tr>
			            <?php
                                    
                        $sum_masuk+=$u         ->masuk ;                                                                    
                        $sum_keluar+=$u        ->keluar ;

                        $sum_mati+=$u          ->mati ;
                        $sum_matikurang+=$u    ->matikurang;
                        $sum_matilebih+=$u     ->matilebih ; 

                        $sum_sisa+=$u          ->sisa;                                   
                        $sum_masukkeluar+=$u   ->masukkeluar ;                                                         
                        $sum_lama+=$u           ->lama ;                                  
                                     
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

                            <td><?php echo $sum_sisa?></td>
                            <td><?php echo $sum_masukkeluar?></td>
                            <td><?php echo $sum_lama?></td>         
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
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title fs-5" id="exampleModalLabel">Informasi</h13>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          Data tidak ada
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          
          </div>
        </div>
      </div>
    </div>
    
      

    <!-- komen hapus -->
    <script>
            function confirmDialog() {
            return confirm('Apakah anda yakin akan menghapus data sensus ini?')
            }   
    </script>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
        </a>

    
<script src="<?php echo base_url()?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>      
