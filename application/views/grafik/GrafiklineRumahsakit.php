<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHE||RSUD KALISAT</title>
    <link rel="icon" href="<?php echo base_url() ?>assets/images/kalisat.ico" type="image/x-icon">
   
    <!-- Masukkan CSS di sini -->
    <style>
        /* CSS untuk styling tabel */
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
    </style>
   
    <!-- Pastikan Anda memiliki koneksi internet untuk mengambil Chart.js dan chartjs-plugin-datalabels dari CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
    <header>
        <table>
            <?php
            if (
                isset($_GET['daribulan']) && $_GET['daribulan'] != '' &&
                isset($_GET['daritahun']) && $_GET['daritahun'] != '' &&
                isset($_GET['sampbulan']) && $_GET['sampbulan'] != '' &&
                isset($_GET['samptahun']) && $_GET['samptahun'] != ''
            ) {
                $daribulan = $_GET['daribulan'];
                $daritahun = $_GET['daritahun'];
                $sampbulan = $_GET['sampbulan'];
                $samptahun = $_GET['samptahun'];
                $first_bulan = $daritahun. '-' .$daribulan;
                $second_bulan = $samptahun. '-' .$sampbulan;
            } else {
                $daribulan = date('m');
                $daritahun = date('Y');
                $sampbulan = date('m');
                $samptahun = date('Y');
                $first_bulan = $daritahun. '-' .$daribulan;
                $second_bulan = $samptahun. '-' .$sampbulan;
            }
            ?>       
            <tr>
                <td rowspan="2"><img src="<?php echo base_url() ?>bahan/dist/img/RSUD.png" width="200" height="60" class="user-image" alt="User Image"/></td>
            </tr>
        </table>            
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span><h5><b>Grafik Bed Occupancy Rate (BOR) Rumah Sakit</b></h5></span>
                <span><h5><b>dari Bulan: <?php echo $daribulan?>-<?php echo $daritahun?> sampai Bulan: <?php echo $sampbulan?>-<?php echo $samptahun?></b></h5></span>             
            </div>
        </div>
    </header>
</head>

<body>
    <canvas id="myChart"></canvas>
    <script>
        var graphData = <?php echo $graphData ?>;
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: graphData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    datalabels: {
                        anchor: 'end',
                        align: 'top',
                        formatter: function(value, context) {
                            return value;
                        },
                        font: {
                            weight: 'bold'
                        }
                    }
                }
            },
            plugins: [ChartDataLabels]
        });
    </script>
</body>
</html>
