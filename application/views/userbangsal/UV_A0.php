<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
         <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                        <!-- Sidebar Toggle (Topbar) -->
                        <form class="form-inline">
                            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                            </button>
                        </form>           
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                    </nav>               
                    <div class="container-fluid">                   
                    <div class="card shadow mb-8">
                    <label class="perhatian" > PERHATIAN !</label>
                    <?php
                      // Tampilkan pesan peringatan jika ada tanggal yang belum terisi
                        if (!empty($tanggal_selanjutnya)) {
                            echo '<div class="alert alert-warning" role="alert">';
                            echo '<ol>';
                            foreach ($tanggal_selanjutnya as $index => $tanggal) {
                              
                            echo '<li>Sensus harian rawat inap Ruangan ' . $index . ' pada tanggal ' . $tanggal .'<strong style="text-decoration: underline;"> BELUM TERISI</strong></li><br>';
                            }
                            echo '</ol>';
                            echo '</div>';
                        }
                    ?>
                        <div class="card-header py-6">
                            <h6 class="m-0 font-weight-bold text-primary"> Mobilisasi Pasien Rawat Inap</h6>
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
                                <div class="form-group mb-1 ml-1 "> 
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
                                <a href="<?= base_url('Upasienmasuk') ?>" class="btn btn-success mb-2 ml-2 "><i class="fa fa-plus"></i>Pasien Masuk</a>                    
                                <a href="<?= base_url('A2') ?>" class="btn btn-info mb-2 ml-2 "> <i class="fa fa-refresh"></i>refresh</a>                   
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
                                    Menampilkan Pasien masuk Rawat Inap Ruangan :<span class="font-weight-bold"><?php echo $ruangan?> </span> 
                                   dari Tanggal :<span class="font-weight-bold"><?php echo  $tanggal?></span>                                    
                        </div> 
                        <?php if ($this->session->flashdata('message')): ?>
                        <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('message'); ?>
                        </div>
                        <?php endif; ?>                    
                        <div class="card-body">
                            <div class="table-responsive">
                                <div align = 'right'></div>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">                                
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
                                            <th><b>Action</b></th>              		
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
                                            <td><?php echo $u->carabayar?></td>                                                   
                                            <td class="text-center">                                                                         
                                            <?php
                                            if (!empty($keluar)) {
                                                // Jika nomor yang dipilih sudah ada pada tabel pasienkeluar
                                                $selectedNomorm = $u->nomorm; // Gantilah dengan atribut yang sesuai
                                                $isNomormInKeluar = false;

                                                foreach ($keluar as $row) {
                                                    if ($row['nomorm'] == $selectedNomorm) { // Gantilah dengan atribut yang sesuai
                                                        $isNomormInKeluar = true;
                                                        break;
                                                    }
                                                }
                                                    if ($isNomormInKeluar) {
                                                    // nomor sudah ada dalam pasienkeluar, tombol merah tidak aktif
                                                    ?>                                              
                                                        <a href="#" class="btn btn-danger mb-2 ml-auto" disabled style="display: none;"><i class="fa fa-check"></i>Dipindahkan</a>    
                                                        <a href="#" class="btn btn-danger mb-2 ml-auto" disabled><i class="fa fa-check"></i><b>Keluar</b></a>
                                                    <?php
                                                } else {
                                                    // nomor belum ada dalam pasienkeluar, tombol biru aktif                                                    
                                                    ?>
                                                     <a href="<?= base_url('A2/edit1').'/'.$u->id ?>" class="btn btn-warning mb-2 ml-2" onclick="dipindahkan()" ><i class="fa fa-edit"></i>Dipindahkan</a>   
                                                    <a href="<?= base_url('A2/edit2').'/'.$u->id ?>" class="btn btn-primary mb-2 ml-auto"><i class="fa fa-edit"></i>Keluar</a>
                                                    <?php
                                                }
                                            } else {
                                                // Jika data keluar kosong, tombol biru aktif
                                                ?>
                                                <a href="<?= base_url('A2/edit1').'/'.$u->id ?>" class="btn btn-warning mb-2 ml-2" onclick="dipindahkan()"><i class="fa fa-edit"></i>Dipindahkan</a>    
                                                <a href="<?= base_url('A2/edit2').'/'.$u->id ?>" class="btn btn-primary mb-2 ml-auto"><i class="fa fa-edit"></i>Keluar</a>
                                                <?php
                                            }
                                            ?>                                    
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
    </div> 
     <!-- MODAL BERHASIL DISIMPAN-->
     <?php if($this->session->flashdata('pesan')): ?>
    <div class="modal" id="Modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success py-3">
                    <h5 class="modal-title m-0 font-weight-bold text-white">Success</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body m-0 font-weight-bold">
                <?php echo $this->session->flashdata('pesan'); ?>
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
        $('#Modal').modal('show');
    });
</script>


    <!-- Include jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Include Bootstrap JS library -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
  

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
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
    <script>
     $(document).ready( function () {
     $('#myTable').DataTable();
      } );
    </script>

    <!-- Tampilkan modal jika ada pesan kesalahan -->
    <?php if($this->session->flashdata('error_message')): ?>
        <div id="errorModal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header bg-info py-3">
                    <h5 class="modal-title m-0 font-weight-bold text-white">Informasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body m-0 font-weight-bold">
                        <?php echo $this->session->flashdata('error_message'); ?>
                    </div>
                    <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                        </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <!-- Tampilkan modal jika ada pesan sukses -->
        <?php if($this->session->flashdata('success_message')): ?>
        <div id="successModal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header bg-success py-3">
                    <h5 class="modal-title m-0 font-weight-bold text-white">Success</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body m-0 font-weight-bold">
                        <?php echo $this->session->flashdata('success_message'); ?>
                    </div>
                    <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                        </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
          <!-- Your JavaScript code -->
          <script>
            // Tampilkan modal error jika ada pesan kesalahan
            $(document).ready(function() {
                $('#errorModal').modal('show');
            });

            // Tampilkan modal sukses jika ada pesan sukses
            $(document).ready(function() {
                $('#successModal').modal('show');
            });
        </script>

    
    
  </body>
</html>