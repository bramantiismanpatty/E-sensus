<body id="page-top">   
    <div id="wrapper">        
        <hr class="sidebar-divider d-none d-md-block">      
            <div id="content-wrapper" class="d-flex flex-column">      
                <div class="container-fluid">          
                    <div class="card shadow mb-4">
                    <div class="card-header bg-custom-green py-3">
                             <h6 class="m-0 font-weight-bold text-white"> Informasi Data Pasien</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div align = 'right'>
                                    <a href="Abiodata" class="btn btn-sm btn-success"> <i class="fa fa-refresh"></i>refresh</a>
                                    <a href="Adatapasien" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Add</a>
                                    <a href="<?php echo base_url('Abiodata/cetak')?>" class="btn btn-sm btn-info" target="_blank">  <i class="fa fa-print"></i>cetak</a>
                                   
                                  
                                   
                                </div>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">                                
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
                    </div>
                </div>
            </div>
        </div>     
    </div>
    
        <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>-->

     <!-- komen hapus -->
     <script>
            function confirmDialog() {
            return confirm('Apakah anda yakin akan menghapus data user ini?')
            }   
    </script>
  
  <script src="<?php echo base_url()?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 