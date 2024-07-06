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
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Monitoring Pasien Keluar Rawat Inap</h6>
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
                                
                                <a href="<?= base_url('Ubatalkeluar') ?>" class="btn btn-success mb-2 ml-2 "> <i class="fa fa-refresh"></i>refresh</a>                                            
                            
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
                                    Menampilkan Data Pasien Pulang :<span class="font-weight-bold"><?php echo $ruangan?> </span> 
                                   dari Tanggal :<span class="font-weight-bold"><?php echo  $tanggal?></span> 
                                   
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
                                         
                                        <th>Option</th>             	
		                            </tr>
                                    </thead>
                                    <tbody>
                                     <?php  
                                     $no = 1;                   
		                            foreach($batal as $u){ 
	                            	?>
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
                                          
                                        
                                        







                                        <td class="text-center">                                        
                                          <a onclick="openConfirmModal(<?= $u->id_pasienkeluar ?>)" class="btn btn-danger btn-sm" href="#">
                                          <i class='fas fa-times-circle'></i> Batal
                                        </td>
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

      
        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
     <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
     <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<!-- Di dalam tampilan Anda pesan telah diubah-->
<?php if($this->session->flashdata('message')): ?>
    <div class="modal" id="successModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header bg-success py-3">
                    <h5 class="modal-title m-0 font-weight-bold text-white">Success</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body m-0 font-weight-bold">
                    <?php echo $this->session->flashdata('message'); ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<script>
    $(document).ready(function(){
        $('#successModal').modal('show');
    });
</script>  

  <!-- komen hapus -->
 
<div class="modal" id="confirmModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <div class="modal-header bg-info py-3">
                    <h5 class="modal-title m-0 font-weight-bold text-white">Success</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body m-0 font-weight-bold">
            Apakah anda yakin akan menghapus Data Ini ?></b> 
            </div>
            <div class="modal-footer">
                <a id="confirmButton" class="btn btn-danger btn-sm">Ya</a>
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Tidak</button>
            </div>
        </div>
    </div>
</div>

<script>
    function openConfirmModal(id_pasienkeluar) {
        $('#confirmModal').modal('show');
        $('#confirmButton').attr('href', '<?= base_url("AA_batal/hapus_data") ?>/' + id_pasienkeluar);
    }
</script>



<!-- Di dalam tampilan Anda pesan telah terhapus-->
<?php if($this->session->flashdata('message')): ?>
    <div class="modal" id="successModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header bg-success py-3">
                    <h5 class="modal-title m-0 font-weight-bold text-white">Success</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body m-0 font-weight-bold">
                    <?php echo $this->session->flashdata('message'); ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<script>
    $(document).ready(function(){
        $('#successModal').modal('show');
    });
</script>  

</body>
</html>