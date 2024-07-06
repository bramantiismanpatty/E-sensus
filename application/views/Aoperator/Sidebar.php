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
             <!-- <div class="sidebar-brand-text mx-3"><?php echo $this->session->userdata('access'); ?></div> --> 
                  <div class="sidebar-brand-text mx-3"><?php echo $this->session->userdata('namaruangan'); ?></div>                               
            </a>           
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url('operator'); ?>">
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
         <!--    <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pasien"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i> 
                    <span>Data Rawat Inap</span> 
                </a>
                <div id="pasien" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                     <div class="bg-white py-2 collapse-inner rounded">   
                    <h6 class="collapse-header">Custom Components:</h6>                    
                      <a class="collapse-item" href="Opmobilisasi">Mobilisasi Pasien</a>  
                      <a class="collapse-item" href="Opfalidasidaftar">Monitoring Pasien Ranap</a> 
                      <a class="collapse-item" href="Opmonitormasuk">Monitoring Pasien Masuk</a>                        
                      <a class="collapse-item" href="Opbatalpindah">Pasien Batal Pindah</a> 
                      <a class="collapse-item" href="Opbatalkeluar">Pasien Batal Pulang</a>                                                    
                    </div> 
                </div>   
            </li>  -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Data Sensus Ranap </span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Sensus Rawat Inap:</h6>  
                        <a class="collapse-item" href="Opfalidasidaftar">Monet Pasien Ranap</a>                     
                 <!--       <a class="collapse-item" href="Opsensus">Sensus Harian Rawat Inap</a>-->                       
                        <a class="collapse-item" href="Oplaporanharian">Monet Sensus Ranap</a>
                 <!--       <a class="collapse-item" href="Opsensus2">Monitoring Harian Sensus </a>--> 
                                                         
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collaps"
                    aria-expanded="true" aria-controls="collapseUtilitis">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Rekapitulasi </span>                 </a>
                <div id="collaps" class="collapse" aria-labelledby="headingUtilitis"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Rekap</h6>
                        <a class="collapse-item" href="Opsensus05">Rekap Sensus Ranap(RP1)</a> 
                        <a class="collapse-item" href="OprekapitulasiIndikator">Rekap Ruangan </a>
                        <a class="collapse-item" href="Oprekapitulasikelas">Rekap Kelas</a>
                <!--    <a class="collapse-item" href="Opmonetkelas">Monitoring Indikator Kelas</a>                            
                        <a class="collapse-item" href="Oprumahsakit"> Rekap Rumah Sakit</a>  -->            
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilitis"
                    aria-expanded="true" aria-controls="collapseUtilitis">
                    <i class="fas fa-fw fa-cog"></i>
                    <span> Data Indikator </span>
                </a>
                <div id="collapseUtilitis" class="collapse" aria-labelledby="headingUtilitis"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Rekap Indikator</h6> 
                        <a class="collapse-item" href="Oprekapitulasi">Data Indikator Ruangan </a>                        
                        <a class="collapse-item" href="OpdataindikatorKelas">Data Indikator Kelas </a>                       
                        <a class="collapse-item" href="Opdatarumahsakit">Data Indikator Rumah Sakit </a>                                             
                    </div>
                </div>
            </li>
             
             <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Report
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
                        <a class="collapse-item" href="Oplaporanpasienmasuk">Lap.Pasien Masuk</a>
                        <a class="collapse-item" href="Oppasienkeluar">Lap.Pasien Keluar </a>
                        <a class="collapse-item" href="Oppasienmati">Lap.Meninggal </a>                                           
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
                        <a class="collapse-item" href="Oplaporanruangan">Lap.Indikator Ruangan </a>
                        <a class="collapse-item" href="Opbangsal">Lap.Indikator Bangsal</a>
                        <a class="collapse-item" href="Oplaporankelas">Lap Indikator Kelas </a>
                        <a class="collapse-item" href="Oplaporanrumahsakit">Lap.Indikator Rumah Sakit</a>                       
                        <a class="collapse-item" href="Oplaporankematian">Lap. Kematian </a>                           
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
                        <a class="collapse-item" href="Opstatistikruangan">Statistik Ruangan </a>
                        <a class="collapse-item" href="Opstatistikkelas">Statistik Kelas</a>
                     <!--   <a class="collapse-item" href="OpperiodeStatistik">Per-Periode Statistik RS</a> -->
                        <a class="collapse-item" href="OpperiodeStatistik">Statistik Rumah Sakit</a> 
                        <a class="collapse-item" href="OpgRumahsakit">Grafik Bor Rumah Sakit </a>                                             
                    </div>
                </div>
            </li>
        <!--     <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collap"
                    aria-expanded="true" aria-controls="collapseUtilitis">
                    <i class="fas fa-fw fa-chart-line"></i>
                    <span>Laporan Grafik</span>
                </a>
                <div id="collap" class="collapse" aria-labelledby="headingUtilitis"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Grafik</h6>
                        <a class="collapse-item" href="OpgrafikRuangan">Grafik Ruangan Perawatan </a>  
                        <a class="collapse-item" href="OpgrafikKelas">Grafik Kelas Perawatan </a>  
                        <a class="collapse-item" href="OpgrafikRumahsakit">Grafik Rumah Sakit </a>
                        <a class="collapse-item" href="OpgRumahsakit">Grafik Bor Rumah Sakit </a>                        
                    </div>
                </div>
            </li>  -->
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
                    <span>Info Ruangan & Kelas </span>
                </a>
                <div id="tabel" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Informasi:</h6>  
                        <a class="collapse-item" href="Optabeluser">Info Petugas Sensus bangsal </a>                       
                        <a class="collapse-item" href="Optabeltidur">Info Kelas  </a>                      
                        <a class="collapse-item" href="Optabelruangan">Info Ruang Perawatan </a>
                    <!--<a class="collapse-item" href="Optabelkelas">Tabel Kelas Perawatan </a>   -->                                         
                    </div>
                </div>
            </li>           
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url("Goperator");?>">
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