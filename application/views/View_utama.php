<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head section content -->
</head>
<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <!-- Your sidebar code goes here -->
        <!-- End of Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">           
            <div id="content">              
                <nav class="navbar navbar-expand navbar-light bg-custom-yellow topbar mb-4 static-top shadow">                    
                    <!-- Topbar content goes here -->
                </nav>
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <!-- Your page content goes here -->
                    <!-- Example Chart Area -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Example Chart</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <!-- Chart canvas goes here -->
                                        <canvas id="chartContainer"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content Row -->
                    <!-- Your other content goes here -->
                 </div>
            </div>
        </div>
    </div>           
    <!-- Footer -->
    <!-- Your footer content goes here -->
    <!-- End of Footer -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <!-- Your logout modal content goes here -->
    <!-- End of Logout Modal-->
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <!-- Page level custom scripts -->
    <script>
        // Load data from PHP (use AJAX if needed)
        var data = <?php echo json_encode(generateChart()); ?>;
        // Initialize chart using Chart.js
        var ctx = document.getElementById('chartContainer').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar', // Chart type (e.g., bar, line, pie, etc.)
            data: data, // Data passed from PHP
            options: {
                // Set chart options if needed
            }
        });
    </script>
</body>
</html>
