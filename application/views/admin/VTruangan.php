<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
         <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Begin Page Content -->
            <div class="container-fluid">                    
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header bg-custom-green py-3">
                             <h6 class="m-0 font-weight-bold text-white"> Ruangan Perawatan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="card-body">
                                    <div align = 'right'>
                                        <a href="Truangan" class="btn btn-sm btn-success"> <i class="fa fa-refresh"></i>refresh</a>
                                        <a href="Druangan" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Add</a>
                                    </div>
                                </div>
                                <table class="table table-bordered table-striped"> 
                                   
                                    <thead>
                                    <tr>
			                        <th>NO</th>
			                        <th>Kode Ruangan</th>
                                    <th>Nama Ruangan</th>
			                        <th>Kelas Rawat</th>
			                        <th>Jumlah Tempat Tidur</th>
			                        <th>Option</th>    		
		                            </tr>
                                    </thead>
                                    <tbody>
                                     <?php 
		                                $no = 1;
		                                foreach($ruang as $u){ 
	                            	?>
		                            <tr>
			                            <td><?php echo $no++ ?></td>
                                        <td><?php echo $u->koderuangan ?></td>
                                        <td><?php echo $u->namaruangan ?></td>
			                            <td><?php echo $u->namakelas ?></td>
			                            <td><?php echo $u->tidur ?></td>
			                            <td class="text-center">                
                                        <a href="<?= base_url('Atruangan/edit').'/'.$u->id ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a> 
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
    </div>

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
            $('#confirmButton').attr('href', '<?= base_url("Atruangan/hapus") ?>/' + id);
         }
    </script>
    <script>
            function confirmDialog() {
            return confirm('Apakah anda yakin akan menghapus data ruangan ini?')
            }   
    </script>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
        </a>

    
    <script src="<?php echo base_url()?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      
