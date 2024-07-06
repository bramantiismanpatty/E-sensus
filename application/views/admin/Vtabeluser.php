<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
         <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">              
                <div class="container-fluid">                   
                    <div class="card shadow mb-4">
                    <div class="card-header bg-custom-green py-3">
                             <h6 class="m-0 font-weight-bold text-white"> Informasi Pengguna</h6>
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
		                                foreach($sandi as $u){ 
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
    
    <script src="<?php echo base_url()?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 