<body id="page-top">
    <div id="wrapper">
        <!-- ... (Sidebar code) ... -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">               
                <div class="container-fluid">
                    <!-- ... (Search form code) ... -->
                    <div class="card shadow mb-4">
                    <div class="card-header bg-custom-green py-3">
                             <h6 class="m-0 font-weight-bold text-white"> Monitoring Sensus Harian Rawat Inap</h6>
                        </div>
                        <?php
                               if((isset($_GET['namaruangan'])&& $_GET['namaruangan']!='') && 
                               (isset($_GET['tanggal'])  && $_GET['tanggal']!='')){
                                $ruangan = $_GET['namaruangan'];
                                $tanggal = $_GET['tanggal'];                                      
                               $tanggalruangan = $tanggal.$ruangan;           
                            }else{
                                $ruangan  = 'tidak ada ruangan di pilih';
                                $tanggal  = 'tidak ada Tanggal di pilih';                                      
                                $tanggalruangan = $tanggal.$ruangan;
                              
                                }                  
                        ?>
                        <div class="card-body">
                        <form class = "form-inline"> 
                                <div class="form-group mb-2 ml-3 "> 
                                    <label for="staticEmail12">ruangan :</label> 
                                            <select class="form-control ml-2" name='namaruangan'required > 
                                                <option value="">--pilih Ruangan--</option>
                                                <?php foreach($kelas as $u) :?>               
                                                <option value ="<?php echo $u->namaruangan ?>"><?php echo $u->namaruangan ?></option>                                     
                                                <?php endforeach ?> 
                                            </select>                                        
                                </div> 
                                <div class="form-group mb-2 ml-4 "> 
                                    <label for="staticEmail12">Tanggal :</label> 
                                    <input type='date' class="form-control ml-2"  name="tanggal" required ></input> 
                                                                     
                                </div> 
                                             
                           
                               
                                                           
                                <button type="submit" class="btn btn-primary mb-2 ml-auto "><i class="fa fa-eye"></i>Tampilkan</button>
                                
                                <a href="<?= base_url('Afalidasidaftar') ?>" class="btn btn-success mb-2 ml-2 "> <i class="fa fa-refresh"></i>refresh</a>                                            
                            
                            </form> 
                        </div>
                        <?php                                 
                            if((isset($_GET['namaruangan'])&& $_GET['namaruangan']!='') && 
                               (isset($_GET['tanggal'])  && $_GET['tanggal']!='')){
                                    $ruangan = $_GET['namaruangan'];
                                    $tanggal = $_GET['tanggal'];                                      
                                   $tanggalruangan = $tanggal.$ruangan;                
                                }else{
                                    $ruangan  = 'tidak ada ruangan di pilih';
                                    $tanggal  = 'tidak ada Tanggal di pilih';                                      
                                    $tanggalruangan = $tanggal.$ruangan;                                  
                                    }                                                      
                        ?>
                        <div class="alert alert-info">
                            Menampilkan Rawat Inap Ruangan : <span
                                class="font-weight-bold"><?php echo $ruangan ?> </span> Tanggal : <span
                                class="font-weight-bold"><?php echo  $tanggal ?></span>
                        </div>
                        <!-- Tab navigation -->
                        <ul class="nav nav-tabs" id="myTabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab1" data-toggle="tab" href="#table1" role="tab"
                                    aria-controls="table1" aria-selected="true">Pasien Masuk</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab2" data-toggle="tab" href="#table2" role="tab"
                                    aria-controls="table2" aria-selected="false">Pasien Pindah</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab3" data-toggle="tab" href="#table3" role="tab"
                                    aria-controls="table3" aria-selected="false">Pasien Di Pindahkan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab4" data-toggle="tab" href="#table4" role="tab"
                                    aria-controls="table4" aria-selected="false">Pasien Keluar</a>
                            </li>
                        </ul>
                        <!-- Tab content -->
                        <div class="tab-content" id="myTabsContent">
                            <!-- Table 1 -->
                            <div class="tab-pane fade show active" id="table1" role="tabpanel" aria-labelledby="tab1">
                                <div class="table-responsive">
                                    <table class="table table-bordered" width="100%" cellspacing="0">
                                        <!-- ... (Table header code) ... -->
                                        <thead>
                                            <tr>
                                                <th>No</th> 
                                                <th>Tanggal Masuk</th> 
                                                <th>Nomor Rekam Medis </th>
                                                <th>Nomor registrasi</th>
                                                <th>Nama Pasien</th> 
                                                <th>Nama Ruang Perawatan</th>
                                                <th>Nama Kelas</th>
                                                <th>Cara Pembayaran</th> 
                                                <th>Petugas</th>       
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php  
                                              $no = 1;                  
		                                      foreach($rekap as $u){ 
	                            	          ?>
		                                    <tr>
                                                <td><?php echo $no++ ?></td>  
                                                <td><?php echo $u->tgl_masuk ?></td>
                                                <td><?php echo $u->nomorm?></td> 
                                                <td><?php echo $u->reg?></td>				                       
                                                <td><?php echo ucfirst(strtolower($u->namapasien)) ?></td>                                     
                                                <td><?php echo $u->namaruangan?></td>
                                                <td><?php echo $u->namakelas?></td>
                                                <td><?php echo ucfirst(strtolower($u->carabayar))?></td> 
                                                <td><?php echo $u->petugas?></td>                      
			                                </tr>
			                                <?php                                     
                                            }?>                              
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Table 2 -->
                            <div class="tab-pane fade" id="table2" role="tabpanel" aria-labelledby="tab2">
                                <?php                                 
                                    if (isset($_GET['namaruangan']) && $_GET['namaruangan'] != '' &&
                                        isset($_GET['tanggal']) && $_GET['tanggal'] != '') {
                                        $ruangan = $_GET['namaruangan'];
                                         $tanggal = $_GET['tanggal'];
                                         }
                                 ?>
                                    <div class="alert alert-info">
                                            Menampilkan Pasien masuk Rawat Inap Ruangan :<span class="font-weight-bold"><?php echo $ruangan?> </span> 
                                            dari Tanggal :<span class="font-weight-bold"><?php echo  $tanggal?></span> 
                                    </div>                                     
                                <div class="table-responsive">
                                    <table class="table table-bordered" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Ruangan</th> 
                                                <th>Tanggal Pidahan</th> 
                                                <th>Nomor Rekam Medis </th>
                                                <th>Nomor registrasi</th>
                                                <th>Nama Pasien</th> 
                                                <th>tanggal masuk</th> 
                                                <th>Dari Ruangan </th>
                                                <th>Nama Kelas</th>
                                                <th>Cara Pembayaran</th> 
                                                <th>Petugas</th> 
                                            </tr>
                                        </thead>
                                        <tbody>                
                                        <?php     
                                        $no = 1;                  
                                        foreach($dari as $u){ 
                                        ?>
                                             <tr>
                                                <td><?php echo $no++ ?></td> 
                                                <td><?php echo $u->namaruanganpindah?></td> 
                                                <td><?php echo $u->tgl_pindah?></td>
                                                <td><?php echo $u->nomorm?></td> 
                                                <td><?php echo $u->reg?></td>                                  		                       
                                                <td><?php echo ucfirst(strtolower($u->namapasien)) ?></td>
                                                <td><?php echo $u->tgl_masuk?></td>	
                                                <td><?php echo $u->namaruangan?></td>
                                                <td><?php echo $u->namakelas?></td>
                                                <td><?php echo ucfirst(strtolower($u->carabayar))?></td>
                                                <td><?php echo $u->petugas?></td>                      
                                            </tr>                      
			                    
                                        <?php                                     
                                        }?>                      
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Table 3 -->
                            <div class="tab-pane fade" id="table3" role="tabpanel" aria-labelledby="tab3">
                                <div class="table-responsive">
                                    <table class="table table-bordered" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th> 
                                                <th>Tanggal Masuk</th> 
                                                <th>Nomor Rekam Medis </th>
                                                <th>Nomor registrasi</th>
                                                <th>Nama Pasien</th> 
                                                <th>Dipindahkan Keruangan</th>                   
                                                <th>Tanggal Pindah</th>
                                                <th>Lama Dirawat</th>
                                                <th>Cara Pembayaran</th> 
                                                <th>Petugas</th>   
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php  
                                              $no = 1;                  
		                                      foreach($pindah as $u){ 
	                            	          ?>
		                                    <tr>
                                                <td><?php echo $no++ ?></td>  
                                                <td><?php echo $u->tgl_masuk ?></td>
                                                <td><?php echo $u->nomorm?></td> 
                                                <td><?php echo $u->reg?></td>				                       
                                                <td><?php echo ucfirst(strtolower($u->namapasien)) ?></td>                                 
                                                <td><?php echo $u->namaruanganpindah?></td>
                                                <td><?php echo $u->tgl_pindah ?></td>
                                                <td><?php echo $u->lamarawat?></td>
                                                <td><?php echo ucfirst(strtolower($u->carabayar))?></td>  
                                                <td><?php echo $u->petugas?></td>                        
			                                </tr>
			                                <?php                                     
                                            }?>                              
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                             <!-- Table 4 -->
                            <div class="tab-pane fade" id="table4" role="tabpanel" aria-labelledby="tab4">
                                <div class="table-responsive">
                                    <table class="table table-bordered" width="100%" cellspacing="0">
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
                                                <th>Lama Dirawat</th>                                               
                                                <th>Cara Pembayaran</th>
                                                <th>Petugas</th>   
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <?php  
                                                $no = 1;                  
		                                        foreach($keluar as $u){ ?>
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
                                                <td><?php echo $u->lamarawat?></td>                                               
                                                <td><?php echo ucfirst(strtolower($u->carabayar))?></td> 
                                                <td><?php echo $u->petugas?></td>                         
			                                </tr>
			                                    <?php                                     
                                                }?>                              
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
    <script src="<?php echo base_url()?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 