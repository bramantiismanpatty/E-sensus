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
                        <div class="card-header bg-custom-samping py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Informasi Kelas Rawat</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">                                    
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Kode Kelas</th>
                                            <th>Kelas Rawat</th>
                                            <th>Jumlah Tempat Tidur</th>			                          		
		                                </tr>
                                    </thead>
                                    <tbody>
                                     <?php 
		                                $no = 1;
		                                foreach($kls as $u){ 
	                            	?>
		                                <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $u->kodekelas ?></td>
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
    </div>       
    </div>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
        </a>

    

     
        <script src="<?php echo base_url()?>vendor/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>      
