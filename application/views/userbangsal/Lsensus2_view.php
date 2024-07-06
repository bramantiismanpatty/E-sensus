<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SHE||User</title>
    <link rel="icon" href="assets/images/kalisat.ico" type="image/x-icon">
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
     <link rel="icon" href="assets/images/kalisat.ico" type="image/x-icon">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	
</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="userbangsal">                
                <div class="sidebar-brand-text mx-3">Data Sensus Harian Rawat Inap<sup></sup></div></a>             
            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="Userbangsal">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>              
        </ul>
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
                                <form class="form-inline w-100 navbar-search " >
                                    <div class="input-group ">
                                        <input align ='left' type="text" class="form-control bg-light border-0 small"
                                            
                                            aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary " type="button">
                                                    <i class="fas fa-search fa-sm mb-2 ml-auto"></i>
                                                 </button>
                                            </div>
                                    </div>
                                </form>
                            </div>
                        </li>                      
                </nav>
                <!-- Begin Page Content -->
                <div class="container-fluid">                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Sensus Harian Rawat Inap</h6>
                        </div>
                        <div class="card-body">
                            <form class = "form-inline"> 
                                <div class="form-roup-mb-2">                                                                 
                                    <select class="form-control" name='ruangan'required > 
                                        <option value="">--pilih Ruangan--</option>
                                        <?php foreach($kelas as $u) :?>               
		                                <option value ="<?php echo $u->ruangan ?>"><?php echo $u->ruangan ?></option>                                     
		                                <?php endforeach ?> 
                                    </select>
                                </div>
                                <div class="form-roup-mb-2 ml-3">                                               
                                    <input type='date' class="form-control" name="tanggal"required ></input>                                                   
                                </div>                                           
                                <button type="submit" class="btn btn-primary mb-2 ml-auto "><i class="fa fa-eye"></i>Tampilkan</button>
                                <a href="sensus2_userbangsal" class="btn btn-success mb-2 ml-2 "> <i class="fa fa-refresh"></i>refresh</a>                                            
                            </form> 
                        </div>
                        <!-- <?php
                                    if((isset($_GET['ruangan'])&& $_GET['ruangan']!='') && 
                                       (isset($_GET['tanggal'])  && $_GET['tanggal']!='')){
                                        $ruangan = $_GET['ruangan'];
                                        $tanggal = $_GET['tanggal'];                                      
                                        $tanggalruangan = $ruangan.$tanggal;

                                       }else{
                                        $ruangan  = 'tidak ada ruangan di pilih';
                                        $tanggal  = 'tidak ada Tanggal di pilih';                                      
                                       //$tanggalruangan = $tanggal.$ruangan;
                                        $ruangantanggal = $ruangan.$tanggal;
                                       }
                        ?> -->


                        <div class="alert alert-info">
                                    Menampilkan Data Sensus Harian Rawat Inap Ruangan :<span class="font-weight-bold"><?php echo $ruangan?> </span> 
                                   Tanggal :<span class="font-weight-bold"><?php echo $tanggal?> </span> 
                                   
                                </div>                                       
                        <div class="table-responsive">                                
                            <table class="table table-bordered"  width="100%" cellspacing="0">                                   
                                <thead>
                                    <tr>
                                    <th>Tanggal</th>
                                    <th>kode Ruang Rawat</th>
                                    <th> Nama Ruang Rawat</th>
                                    <th>Kelas Rawat</th>
                                    <th>Jumlah Tempat Tidur</th>			                       
			                        <th>Pasien Awal </th>
    		                        <th>Pasien Masuk</th>
    		                        <th>Pasien Dipindahkan</th> 
    		                        <th>Jumlah PAsien</th>
			                        <th>Pasien Di Pindahkan</th>
    		                        <th>Pasien Keluar Hidup</th>
    		                        <th>Pasien meninggal</th>
			                        <th>Meninggal kurang 48 jam</th>
    		                        <th>Meninggal Lebih 48 jam</th>
                                    <th>Jumlah Pasien Keluar hidup+mati</th>
                                    <th>Pasien Masih dirawat</th>
                                     <th>Pasien masuk Keluar di hari yang sama</th>
                                     <th>Lama Di Rawat</th>
                                    <th>Hari Perawatan</th>               
			                        <th>Option</th>    		
		                            </tr>
                                    </thead>
                                    <tbody>
                                     <?php 
		                               
		                                foreach($rekap as $u){ 
	                            	?>
		                            <tr>
                                    <td><?php echo $u->tanggal?></td>
                                        <td><?php echo $u->kode ?></td>
                                        <td><?php echo $u->ruangan ?></td>
			                            <td><?php echo $u->nama ?></td>			                            
			                            <td><?php echo $u->tidur ?></td> 

				                        <td><?php echo $u->awal ?></td>
				                        <td><?php echo $u->masuk ?></td>
				                        <td><?php echo $u->pindahan ?></td>
                                        <td><?php echo $u->jlhmasuk ?></td>

                                        <td><?php echo $u->dipindahkan ?></td>
				                        <td><?php echo $u->keluar ?></td>
				                        <td><?php echo $u->mati?></td>
                                        <td><?php echo $u->matikurang?></td>
				                        <td><?php echo $u->matilebih?></td>
				                        <td><?php echo $u->jlhkeluar ?></td>

                                        <td><?php echo $u->sisa?></td>
				                        <td><?php echo $u->daycare?></td>
                                        <td><?php echo $u->lama?></td>
                                        <td><?php echo $u->hp?></td>
				                        
			                            <td class="text-center">                
                                            <a href="<?= base_url('Sensus2_userbangsal/edit').'/'.$u->id ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a> 
                                           <!--  <a onclick="return confirmDialog()" class="btn btn-danger btn-sm" href="<?= base_url('sensus5_admin/hapus').'/'.$u->id ?>">
                                            <i class="fa fa-trash"></i></a>-->
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

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                    <span>Copyright &copy; G41221595 2023</span>
                    </div>
                </div>
        </footer>
            <!-- End of Footer -->

       
       
   

    <!-- komen hapus -->
    <script>
            function confirmDialog() {
            return confirm('Apakah anda yakin akan menghapus data ini?')
            }   
    </script>
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

