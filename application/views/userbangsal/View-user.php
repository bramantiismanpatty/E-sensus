<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SHE||RSUD KALISAT</title>
    <link rel="icon" href="assets/images/kalisat.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="modal/images/icon/kalisat.ico">
    <link rel="stylesheet" href="modal/css/bootstrap.min.css">
    <link rel="stylesheet" href="modal/css/font-awesome.min.css">
    <link rel="stylesheet" href="modal/css/themify-icons.css">
    <link rel="stylesheet" href="modal/css/metisMenu.css">
    <link rel="stylesheet" href="modal/css/owl.carousel.min.css">
    <link rel="stylesheet" href="modal/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="modal/css/typography.css">
    <link rel="stylesheet" href="modal/css/default-css.css">
    <link rel="stylesheet" href="modal/css/styles.css">
    <link rel="stylesheet" href="modal/css/responsive.css">
    <!-- modernizr css -->
    <script src="modal/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                <span class="sidebar-brand-text mx-3"><h6 class="text-white bg-dark"><b> <?php echo $this->session->userdata('access'); ?></b></h6></span>   
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="active">
                                <a href="userbangsal" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                            </li>
                            <li>
                                <a href="Umobilisasi" aria-expanded="true"><i class="ti-layers-alt"></i>
                                    <span>Pasien Ranap</span></a>
                            </li>
                            <li>
                                <a href="Ukontrolpasienmasuk" aria-expanded="true"><i class="ti-layers-alt"></i>
                                    <span>Perbaikan Pasien Masuk</span></a>
                            </li>
                                <!--
                            <li>
                                <a href="Ubatalpindah" aria-expanded="true"><i class="ti-layers-alt"></i>
                                    <span>Pasien Bata Pindah</span></a>
                            </li>
                            <li>
                                <a href="Ubatalkeluar" aria-expanded="true"><i class="ti-layers-alt"></i>
                                    <span>Pasien Bata Keluar</span></a>
                            </li>
                                                      
                            <li>   -->
                                <a href="Usensus" aria-expanded="true"><i class="ti-layers-alt"></i>
                                    <span>Sensus Harian Ranap</span></a>
                            </li>
                           <!--
                            <li>
                                <a href="Ulaporanhariansensus" aria-expanded="true"><i class="ti-files"></i>
                                <span>Lapoaran Harian sensus</span></a>
                            </li>
                             -->
                            <li>
                                <a href= "Gouser" aria-expanded="true"><i class="ti-unlock"></i>
                                <span>Ubah Password</span></a>
                            </li>
                            <li>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"> <i class="ti-control-stop"></i>
                                    Logout
                                </a>
                            </li>                    
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                           
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>                  
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Sensus Harian Elektronik</h4>                            
                            <ul class="breadcrumbs pull-left">
                                <li><a href="userbangsal">Home</a></li>
                                <li><span>Dashboard</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="modal/images/author/kali.png" alt="avatar">
                            <h6 class="user-name dropdown-toggle"  data-toggle="dropdown"class="text-white bg-dark"><b> Hai..<?php echo $this->session->userdata('name'); ?></b></h6>
                                                                     
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <!-- sales report area start -->
                <div class="sales-report-area mt-5 mb-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-bed"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h5 class="header-title mb-0">Tempat Tidur Tersedia</h5>
                                        <p> <a  href="Utabeltidur" class="text-primary">view</a></p>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2> <?php echo $jumlah;?></h2>
                                        <span> </span>
                                    </div>
                                </div>
                                <canvas id="coin_sales1" height="100"></canvas>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-hospital-o"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h5 class="header-title mb-0">Ruang Perawatan</h5>                                       
                                        <p><a  href="Utabelruang" class="text-primary">view</a></p>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2><?=$Jruangan;?></h2>
                                        <span> </span>
                                    </div>
                                </div>
                                <canvas id="coin_sales2" height="100"></canvas>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="single-report">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-stethoscope"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h5 class="header-title mb-0">Kelas Rawat</h5>
                                        <p><a  href="Utabelkelas" class="text-primary">view</a></p>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2><?=$Jkelas;?></h2>
                                       
                                    </div>
                                </div>
                                <canvas id="coin_sales3" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
               
                  
                </div>
                <!-- row area start-->
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2023. G41221595.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
     <!-- Logout Modal-->
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
                    Anda yakin akan meninggalkan program ini..? jika ya tekan log Out
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="<?= base_url('');?>Utama">Log Out</a>
                </div>
            </div>
        </div>
    </div>

    <!-- page container area end -->
    
    <!-- jquery latest version -->
    <script src="modal/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="modal/js/popper.min.js"></script>
    <script src="modal/js/bootstrap.min.js"></script>
    <script src="modal/js/owl.carousel.min.js"></script>
    <script src="modal/js/metisMenu.min.js"></script>
    <script src="modal/js/jquery.slimscroll.min.js"></script>
    <script src="modal/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="modal/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="modal/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="modal/js/plugins.js"></script>
    <script src="modal/js/scripts.js"></script>
</body>

</html>
