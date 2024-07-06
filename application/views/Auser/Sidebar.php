<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-custom-samping sidebar sidebar-dark accordion font-weight-bold" id="accordionSidebar">

         <!-- Sidebar - Brand -->
         <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon ">
                    <i ><img src="<?php echo base_url() ?>bahan/dist/img/kalisat.png" width="40" height="40" alt="logo" /> </i>
                </div>
               <!-- <div class="sidebar-brand-text mx-3"><?php echo $this->session->userdata('access'); ?></div>  -->
                <div 
                    class="sidebar-brand-text mx-3"><?php echo $this->session->userdata('namaruangan');  ?>
                </div>                                       
            </a>   
                     
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('userbangsal'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Divider --> 
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
            Data
            </div>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pasien"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Data Rawat Inap</span>
                </a>
                <div id="pasien" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Rawat Inap:</h6>                      
                            <a class="collapse-item" href="Umobilisasi">Mobilisasi Pasien</a>
                            <a class="collapse-item" href="Ukontrolpasienmasuk">Edit Data Pasien Ranap</a>
                <!--        <a class="collapse-item" href="Opmonitormasuk">Monitoring Pasien Masuk</a>-->                       
                <!--        <a class="collapse-item" href="Ubatalpindah">Pasien Batal Pindah</a>-->
                <!--        <a class="collapse-item" href="Ubatalkeluar">Pasien Batal Pulang</a>-->                                                    
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Data Sensus Ranap </span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Sensus Ranap:</h6>                      
                        <a class="collapse-item" href="Usensus">Sensus Harian Rawat Inap</a>                      
                 <!--   <a class="collapse-item" href="Ulaporanhariansensus">Lap.Harian Sensus</a> -->                                              
                    </div>
                </div>
            </li>
           
        
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
            Tambahan
            </div>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tabel"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Info Runganan & Kelas </span>
                </a>
                <div id="tabel" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Informasi:</h6>                      
                        <a class="collapse-item" href="Utabeltidur">Info Tempat Tidur </a>                      
                        <a class="collapse-item" href="Utabelruang">Info Ruang Perawatan </a>
                        <a class="collapse-item" href="Utabelkelas">Info Kelas Perawatan </a>                                            
                    </div>
                </div>
            </li>           
           
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url("Gouser");?>">
                <i class="fa fa-key" aria-hidden="true"></i>
                    <span>Ganti Password</span></a>
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
                <nav class="navbar navbar-expand navbar-light bg-custom-atas topbar mb-4 static-top shadow">                   
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
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>