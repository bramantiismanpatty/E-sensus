<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SHE||RSUD KALISAT</title>
    <link rel="icon" href="bahan/dist/img/kalisat.ico" type="image/x-icon">
    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>latar/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>latar/css/sb-admin-2.min.css" rel="stylesheet">
   
    <style>
         .table {
            width: 100%;
            border-collapse: collapse;
        }

        /* CSS untuk header kolom */
        .table thead th {
            background-color: #f2f2f2;
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        /* CSS untuk sel data */
        .table tbody td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        /* CSS untuk baris ganjil */
        .table tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        /* CSS untuk baris saat hover */
        .table tbody tr:hover {
            background-color: #f2f2f2;
        }
        .bg-custom-yellow {
            background-color:#006400; /* Warna kuning pekat */
        }

        .bg-custom-green {
       /*  background-color:#006400; /* Warna hijau pekat #008000*/
            background-color:#004d00; /*  Warna hijau pekat #008000*/
        }
         /* Animasi untuk membuat tulisan berkedip */
    @keyframes blink {
        0% { opacity: 1; }
        50% { opacity: 0; }
        100% { opacity: 1; }
    }

    .perhatian {
        animation: blink 1s infinite; /* Menggunakan animasi blink dengan durasi 1 detik secara terus-menerus */
    }
    </style>

</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-custom-green sidebar sidebar-dark accordion font-weight-bold" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon ">
                    <i ><img src="<?php echo base_url() ?>bahan/dist/img/kalisat.png" width="40" height="40" alt="logo" /> </i>
                </div>
             <div class="sidebar-brand-text mx-3"><?php echo $this->session->userdata('access'); ?></div>  
               <!-- <div 
                    class="sidebar-brand-text mx-3"><?php echo $this->session->userdata('jabatan');  ?>
                </div> -->                                                           
            </a>           
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url('Admin'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                DATA
            </div>
            <!-- Nav Item - Pages Collapse Menu -->
            <!--<li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pasien"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Data Rawat Inap</span>
                </a>
                <div id="pasien" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>                      
                        <a class="collapse-item" href="Aps_ranap">Mobilisasi Pasien</a>
                        <a class="collapse-item" href="Afalidasidaftar">Monitoring Pasien Ranap</a> 
                        <a class="collapse-item" href="Amonitormasuk">Monitoring Pasien Masuk</a>                       
                        <a class="collapse-item" href="Abatalpindah">Pasien Batal Pindah</a>
                        <a class="collapse-item" href="Abatalkeluar">Pasien Batal Pulang</a>                                                    
                    </div>
                </div>
            </li>-->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Data Sensus Ranap </span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Sensus Rawat Inap:</h6>                      
                        <!--<a class="collapse-item" href="AAsensus">Sensus Harian Rawat Inap</a>-->                      
                        <a class="collapse-item" href="Alaporanharian">Monet Pasien Ranap</a>
                        <!--<a class="collapse-item" href="Asensus2">Monitoring Harian Sensus </a>-->
                        <a class="collapse-item" href="Asensus05">Rekap Sensus Ranap(RP1)</a>                                  
                    </div>
                </div>
            </li>
          <!--  <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilitis"
                    aria-expanded="true" aria-controls="collapseUtilitis">
                    <i class="fas fa-fw fa-cog"></i>
                    <span> Data Indikator </span>
                </a>
                <div id="collapseUtilitis" class="collapse" aria-labelledby="headingUtilitis"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Rekap Indikator</h6> 
                        <a class="collapse-item" href="Arekapitulasi">Data Rekapitulasi </a>
                        <a class="collapse-item" href="AdataindikatorKelas">Data Indikator Kelas </a>                       
                        <a class="collapse-item" href="Adatarumahsakit">Data Indikator Rumah Sakit </a> 
                                            
                    </div>
                </div>
            </li> -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collaps"
                    aria-expanded="true" aria-controls="collapseUtilitis">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Rekapitulasi </span> 
                </a>
                <div id="collaps" class="collapse" aria-labelledby="headingUtilitis"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Rekap Indikator</h6>
                        <a class="collapse-item" href="ArekapitulasiIndikator">Rekapitulasi Ruangan </a>
                        <a class="collapse-item" href="Arekapitulasikelas">Rekapitulasi Kelas</a>
                        <a class="collapse-item" href="Amonetkelas">Monitoring Indikator Kelas</a>                             
                        <a class="collapse-item" href="Arumahsakit"> Rekapitulasi Rumah Sakit</a>             
                    </div>
                </div>
            </li>  -->
             <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
             REPORT
            </div> 
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#coll"
                    aria-expanded="true" aria-controls="collapseUtilitis">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Laporan Rawat Inap</span>
                </a>
                <div id="coll" class="collapse" aria-labelledby="headingUtilitis"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Laporan Rawat Inap</h6>                       
                        <a class="collapse-item" href="Apasienmasuk">Lap.Pasien Masuk</a>
                        <a class="collapse-item" href="Apasienkeluar">Lap.Pasien Keluar </a>
                        <a class="collapse-item" href="Apasienmati">Lap.Pasien Meninggal </a>                                       
                    </div>
                </div>
            </li>   
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseU"
                    aria-expanded="true" aria-controls="collapseUtilitis">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Laporan Indikator</span>
                </a>
                <div id="collapseU" class="collapse" aria-labelledby="headingUtilitis"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Laporan Indikator</h6>                       
                        <a class="collapse-item" href="Alaporanruangan">Lap.Indikator Ruangan </a>
                        <a class="collapse-item" href="Abangsal">Lap.Indikator Bangsal</a>
                        <a class="collapse-item" href="Alaporankelas">Lap Indikator Kelas </a>
                        <a class="collapse-item" href="Alaporanrumahsakit">Lap.Indikator Rumah Sakit</a>                       
                        <a class="collapse-item" href="Alaporankematian">Lap. Kematian </a>                           
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Laporan Statistik</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Statistik</h6>
                        <a class="collapse-item" href="Astatistikruangan">Statistik Ruangan </a>
                        <a class="collapse-item" href="Astatistikkelas">Statistik Kelas</a>
                        <a class="collapse-item" href="AstatistikrumahSakit">Statistik Rumah Sakit</a>
                        <a class="collapse-item" href="AperiodeStatistik">Per-Periode Statistik RS</a> 
                        <a class="collapse-item" href="AgRumahsakit">Grafik Bor Rumah Sakit </a>                                             
                    </div>
                </div>
            </li>
        <!--    <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collap"
                    aria-expanded="true" aria-controls="collapseUtilitis">
                    <i class="fas fa-fw fa-chart-line"></i>
                    <span>Laporan Grafik</span>
                </a>
                <div id="collap" class="collapse" aria-labelledby="headingUtilitis"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Grafik</h6>
                        <a class="collapse-item" href="AgrafikRuangan">Grafik Ruangan Perawatan </a>  
                        <a class="collapse-item" href="AgrafikKelas">Grafik Kelas Perawatan </a>  
                        <a class="collapse-item" href="AgrafikRumahsakit">Grafik Rumah Sakit </a>
                        <a class="collapse-item" href="AgRumahsakit">Grafik Bor Rumah Sakit </a>                        
                    </div>
                </div>
            </li>  -->
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
            TAMBAHAN
            </div>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Data Master</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Master:</h6>
                        <a class="collapse-item" href="Adatapasien">Data Pasien</a>
                        <a class="collapse-item" href="Duser">Data Login </a>
                        <a class="collapse-item" href="Druangan">Data Ruangan</a>
                        <a class="collapse-item" href="Dkelas">Data Kelas</a>
                        <a class="collapse-item" href="<?= base_url("Ganti");?>">Ganti  Password</a>                       
                    </div>
                </div>
            </li>
           <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tabel"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Info Ruangan & Kelas </span>
                </a>
                <div id="tabel" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Informasi:</h6> 
                        <a class="collapse-item" href="Atabeluser">Info Pengguna </a>                              
                        <a class="collapse-item" href="Atabelruangan">Info Ruang Perawatan </a>
                        <a class="collapse-item" href="Atabelkelas">Info Kelas Perawatan </a>                                            
                    </div>
                </div>
            </li>  
           <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                <span>Logout</span></a>
            </li>           

           
            <hr class="sidebar-divider d-none d-md-block">            
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>     
        </ul>     
        <div id="content-wrapper" class="d-flex flex-column">           
            <div id="content">              
                <nav class="navbar navbar-expand navbar-light bg-custom-yellow topbar mb-4 static-top shadow">                    
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Search -->
                    <h3 class="h3 mb-0 text-white font-weight-bold ">Sensus Harian Elektronik</h3>                    
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">                                                           
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div style="display: flex; flex-direction: column; align-items: center;">
                                    <div style="margin-bottom:0px;">
                                        <span class="d-none d-lg-inline text-white font-weight-bold"><h5>Selamat Datang...<?php echo $this->session->userdata('name'); ?></h5></span>
                                    </div>
                                    <div>
                                        <span class="d-none d-lg-inline text-white font-weight-bold"><h6><?php echo $this->session->userdata('jabatan');  ?> </h6></span>
                                    </div>
                                </div>
                            </a>                 
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                     aria-labelledby="userDropdown">
                                     <a class="dropdown-item" href="Abiodata">
                                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Activitas Data Pasien
                                    </a>
                                    <a class="dropdown-item" href="Apenampakan">
                                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Activitas Pengguna
                                    </a>
                                    <a class="dropdown-item" href="Atruangan">
                                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Activitas Ruang Perawatan
                                    </a>
                                    <a class="dropdown-item" href="Atkelas">
                                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Activitas Kelas Rawat
                                    </a>                                
                                    
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                        </li>
                    </ul>
                </nav>
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>                        
                    </div>
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                           <b> Jumlah Akses Pengguna</b>
                                           <b></b></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$Jsandi;?></div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                              <b>Total Ruang Perawatan</b>
                                              <b></b></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$Jruangan;?></div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                              <b>Jumlah Kelas Perawatan</b>
                                              <b></b></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$Jkelas;?></div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                <b>Total Tempat Tidur Tersedia</b>
                                                <b></b></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">                                      
                                           <?php echo $jumlah;?></td>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
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
                        <span>Copyright @ G41221595 2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header bg-info py-3">
                    <h5 class="modal-title m-0 font-weight-bold text-white">Konfirmasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body m-0 font-weight-bold ">
                    Anda yakin akan meninggalkan program ini..? jika ya tekan logout
                </div>
                <div class="modal-footer">
                <div class="modal-body m-0 font-weight-bold">
                    @G41221595                  
                </div>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="<?= base_url('');?>Utama">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url()?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url()?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url()?>js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url()?>vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url()?>js/demo/chart-area-demo.js"></script>
    <script src="<?php echo base_url()?>js/demo/chart-pie-demo.js"></script>
   

</body>

</html>
