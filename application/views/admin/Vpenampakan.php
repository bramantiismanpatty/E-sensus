<body id="page-top">   
    <div id="wrapper">        
        <hr class="sidebar-divider d-none d-md-block">      
            <div id="content-wrapper" class="d-flex flex-column">      
                <div class="container-fluid">          
                    <div class="card shadow mb-4">
                    <div class="card-header bg-custom-green py-3">
                             <h6 class="m-0 font-weight-bold text-white"> Informasi User</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="card-body">
                                    <div align = 'right'>
                                        <a href="Apenampakan" class="btn btn-sm btn-success"> <i class="fa fa-refresh"></i>refresh</a>
                                        <a href="Duser" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Add</a>
                                    </div>
                                </div>
                                <table class="table table-bordered table-striped">                              
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>NIP Pengguna</th>
                                        <th>Nama Pengguna</th>
                                        <th>Tempat Tugas</th>
                                        <th>Jabatan</th>
                                        <th>username</th>
                                        <!-- <th>Password</th>-->
                                        <th>Otoritas User</th>
                                        <th>Option</th>    		
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
                                        <td><?php echo $u->namaruangan ?></td>
                                        <td><?php echo $u->jabatan ?></td>
                                        <td><?php echo $u->username ?></td>
			                            <!-- <td><?php echo $u->user_password ?></td>-->
                                        <td><?php echo $u->level ?></td>
                                      
			                            <td class="text-center">                
                                          <a href="<?= base_url('Apenampakan/edit').'/'.$u->id ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a> 
                                        <!-- <a href="<?= base_url('Apenampakan/hapus').'/'.$u->id ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a> 
                                          <?php echo anchor('Apenampakan/hapus/'.$u->id,'<i class="fa fa-trash"></i></a>', array('class'=>'delete', 'onclick'=>"return confirmDialog();"));?>  -->
                                          <a onclick="openConfirmModal(<?= $u->id ?>)" class="btn btn-danger btn-sm" href="#">
                                                <i class='fas fa-times-circle'></i>
                                                </a> 
                                        </td>
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
   <!-- konfirmasi hapus-->  
    <div class="modal" id="confirmModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info py-3">
                    <h5 class="modal-title m-0 font-weight-bold text-white">Konfirmasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                 </div>
                <div class="modal-body m-0 font-weight-bold">
                    Apakah anda yakin akan Menghapus Data Ini ?
                </div>
                <div class="modal-footer">
                    <a id="confirmButton" class="btn btn-danger btn-sm">Ya</a>
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Tidak</button>
                </div>
            </div>
        </div>
    </div>
    <script>
    function openConfirmModal(id) {
        $('#confirmModal').modal('show');
        $('#confirmButton').attr('href', '<?= base_url("Apenampakan/hapus") ?>/' + id);
    }
</script>

     <!-- komen hapus -->
     <script>
            function confirmDialog() {
            return confirm('Apakah anda yakin akan menghapus data user ini?')
            }   
    </script>
   <script src="<?php echo base_url()?>vendor/jquery/jquery.min.js"></script>
   <script src="<?php echo base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   
 