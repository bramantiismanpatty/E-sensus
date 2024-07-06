<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
         <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">              
                <div class="container-fluid">                   
                    <div class="card shadow mb-4">
                    <div class="card-header bg-custom-samping py-3">
                             <h6 class="m-0 font-weight-bold text-white"> Informasi Petugas Sensus Ruang Perawatan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div align = 'right'></div>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">                                
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>NIP Pengguna</th>
                                            <th>Nama Pengguna</th>
                                            <th>Tempat tugas</th>
                                            <th>Jabatan</th>
                                            <th>Otoritas </th>			                      		
		                                </tr>
                                    </thead>
                                    <tbody>
                                     <?php 
		                                $no = 1;
		                                foreach($userbangsal as $u){ 
	                            	?>
		                                <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $u->nip ?></td>
                                            <td><?php echo $u->user_name ?></td>
                                            <td><?php echo $u->namaruangan?></td>
                                            <td><?php echo $u->jabatan ?></td>
                                            <td><?php echo $u->level ?></td>                    
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
    </div>
    
        <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
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
    </div>

     <!-- komen hapus -->
     <script>
            function confirmDialog() {
            return confirm('Apakah anda yakin akan menghapus data siswa ini?')
            }   
    </script>
   
   <script src="<?php echo base_url()?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>      
