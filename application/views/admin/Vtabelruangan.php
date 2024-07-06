<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content"> 
                <!-- Begin Page Content -->
                <div class="container-fluid">                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                    <div class="card-header bg-custom-green py-3">
                             <h6 class="m-0 font-weight-bold text-white"> Ruangan Perawatan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div align = 'right'> </div>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">                                   
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Kode Ruangan</th>
                                            <th>Nama Ruangan</th>
                                            <th>Kelas Rawat</th>
                                            <th>Jumlah Tempat Tidur</th>			                          		
		                                </tr>
                                    </thead>
                                    <tbody>
                                     <?php 
		                                $no = 1;
		                                foreach($kelas as $u){ 
	                            	?>
		                                <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $u->koderuangan ?></td>
                                            <td><?php echo $u->namaruangan ?></td>
                                            <td><?php echo $u->namakelas ?></td>
                                            <td><?php echo $u->tidur ?></td>		                            
                                      	 </tr>
			                        <?php }?>                              
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>s       
    </div>

    <!-- komen hapus -->
    <script>
            function confirmDialog() {
            return confirm('Apakah anda yakin akan menghapus data siswa ini?')
            }   
    </script>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
        </a>

    
    <script src="<?php echo base_url()?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 