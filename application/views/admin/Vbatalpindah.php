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
                    <div class="card-header bg-custom-green py-3">
                             <h6 class="m-0 font-weight-bold text-white"> Monitoring Pasien Pindah ruangan Rawat Inap</h6>
                        </div>
                        <?php                                                             
                            if((isset($_GET['namaruangan'])&& $_GET['namaruangan']!='') && 
                            (isset($_GET['tgl_pindah'])  && $_GET['tgl_pindah']!='')){
                            $ruangan = $_GET['namaruangan'];
                            $tanggal = $_GET['tgl_pindah'];                                      
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
                                    <input type='date' class="form-control ml-2"  name="tgl_pindah" required ></input>                                                                     
                                </div>                                              
                                <button type="submit" class="btn btn-primary mb-2 ml-auto "><i class="fa fa-eye"></i>Tampilkan</button>
                                
                                <a href="<?= base_url('Abatalpindah') ?>" class="btn btn-success mb-2 ml-2 "> <i class="fa fa-refresh"></i>refresh</a>                                         
                            </form> 
                        </div>
                        <?php                                  
                             if((isset($_GET['namaruangan'])&& $_GET['namaruangan']!='') && 
                             (isset($_GET['tgl_pindah'])  && $_GET['tgl_pindah']!='')){
                              $ruangan = $_GET['namaruangan'];
                              $tanggal = $_GET['tgl_pindah'];                                      
                             $tanggalruangan = $tanggal.$ruangan;         
                          }else{
                              $ruangan  = 'tidak ada ruangan di pilih';
                              $tanggal  = 'tidak ada Tanggal di pilih';                                      
                              $tanggalruangan = $tanggal.$ruangan;                            
                              }
                        ?>

                        <div class="alert alert-info">
                                    Menampilkan Data Pasien Pindah Ruangan Rawat :<span class="font-weight-bold"><?php echo $ruangan?> </span> 
                                    Tanggal :<span class="font-weight-bold"><?php echo  $tanggal?></span>                                   
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
                                        <th>Tanggal Dipindah </th>                                
                                        <th>Ruang Rawat Dindahan</th>                                        
                                        <th>Petugas</th>      
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
                                        <td><?php echo $u->tgl_pindah?></td>                                                
                                        <td><?php echo $u->namaruanganpindah?></td>
                                        <td><?php echo $u->petugas?></td>            
                                        <td class="text-center">                                       
                                        <a onclick="openConfirmModal(<?= $u->id ?>)" class="btn btn-danger btn-sm" href="#">
                                            <i class='fas fa-times-circle'></i> Batal
                                        </a>                            
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
   

    <!-- komen hapus -->
    <script>
            function confirmDialog() {
            return confirm('Apakah anda yakin akan membatalkan nomor RM <?php echo $u->nomorm?> nama pasien <?php echo ucfirst(strtolower($u->namapasien)) ?> yang akan keluar rumah sakit?')
            }  
             
    </script>
       <div class="modal" id="confirmModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header bg-info py-3">
                    <h5 class="modal-title m-0 font-weight-bold text-white">Konfirmasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body m-0 font-weight-bold ">
                Apakah anda yakin akan Membatalkan Pasien Pindah Ruangan ?</b>
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
            $('#confirmButton').attr('href', '<?= base_url("Abatalpindah/Batal") ?>/' + id);
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

<script src="<?php echo base_url()?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 