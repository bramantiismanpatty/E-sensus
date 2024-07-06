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
                    <div class="card-header bg-info py-3">
                            <h6 class="m-0 font-weight-bold text-white">Laporan Pasien Meninggal Rawat Inap</h6>
                        </div>
                        <div class="card-body">
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
                            <form class = "form-inline"> 
                                <div class="form-roup-mb-2 ml-3"> 
                                    <p>dari tanggal</p>                                               
                                    <input type='date' class="form-control" name="first_date"required ></input>                                                   
                                </div>
                                <div class="form-roup-mb-2 ml-3">
                                    <p>sampai tanggal</p>                                                
                                    <input type='date' class="form-control" name="second_date"required ></input>                                                   
                                </div>                                           
                                    <button type="submit" class="btn btn-primary mb-2 ml-auto "><i class="fa fa-eye"></i>Tampilkan</button>
                                
                                <a href="<?= base_url('Vpasienmati') ?>" class="btn btn-success mb-2 ml-2 "> <i class="fa fa-refresh"></i>refresh</a>                                            
                            
                                 <!-- <?php if(count($pulang) > 0) {?>
                                    <a href="<?php echo base_url('Vpasienmati/cetak?'),'&first_date='.$first_tanggal,'&second_date='.$second_tanggal?>" class="btn btn-success mb-2 ml-2 "> <i class="fa fa-print"></i>catak </a> 
                                 
                                <?php }else{?>
                                    <button type="button" class="btn btn-danger mb-2 ml-2" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-print"></i>Cetak</button>
                                <?php }?>-->  

                            </form> 
                        </div>
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

                        <div class="alert alert-info">
                                    Menampilkan Data Pasien Meninggal  Rawat Inap 
                                   dari Tanggal :<span class="font-weight-bold"><?php echo  $first_tanggal?>  sampai Tanggal :<span class="font-weight-bold"><?php echo $second_tanggal?></span> 
                                   
                                </div>                                       
                        <div class="table-responsive">                                
                            <table class="table table-bordered"  width="100%" cellspacing="0">                                   
                                <thead>
                                    <tr>
                                        <th>No</th> 
                                        <th>Tanggal Masuk</th> 
                                        <th>Nomor Rekam Medis </th>
                                        <th>Nomor registrasi</th>
                                        <th>Nama Pasien</th> 
                                        <th>Ruang Perawatan</th>   
                                        <th>Kelas</th>      
                                        <th>Tanggal Keluar</th>                                
                                        <th>Cara Keluar</th> 
                                        <th>Kondisi Keluar</th> 
                                        <th>Cara Pembayaran</th>  		                   		
		                            </tr>
                                    </thead>
                                    <tbody>
                                    <?php  
                                    $no = 1;                  
                                    foreach($pulang as $u){ ?>
		                                <tr>
                                            <td><?php echo $no++ ?></td>  
                                            <td><?php echo $u->tgl_masuk ?></td>
                                            <td><?php echo $u->nomorm?></td> 
                                            <td><?php echo $u->reg?></td>				                       
                                            <td><?php echo ucfirst(strtolower($u->namapasien)) ?></td>                                       
                                            <td><?php echo $u->namaruangan?></td>
                                            <td><?php echo $u->namakelas?></td> 
                                            <td><?php echo $u->tgl_keluar?></td>                                                
                                            <td><?php echo ucfirst(strtolower($u->carakeluar))?></td>
                                            <td><?php echo ucfirst(strtolower($u->keadaankeluar))?></td>                                                                                          
                                            <td><?php echo ucfirst(strtolower($u->carabayar))?></td>
                                                                       
			                            </tr>
			                            <?php                                     
                                        }?>                              
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

    

     

</body>
</html>