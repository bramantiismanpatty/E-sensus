<!DOCTYPE html>
<html>
<head>
    <title>Grafik BOR Rumah Sakit</title>
    <link rel="icon" href="<?php echo base_url() ?>/assets/images/kalisat.ico" type="image/x-icon">
    <!-- Pastikan Anda memiliki koneksi internet untuk mengambil Chart.js dari CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <header >      
       <table >
         <tr>
            <td rowspan="2"><img src="<?php echo base_url() ?>bahan/dist/img/kalisat.png"  width="100" height="70" class="user-image" alt="User Image"/></td>
            <td style="font-weight:bold;"><H3><b>Grafik Bed Occupancy Rate (BOR)  Rumah Sakit </b></H3></td>      
        </tr>
        <tr>
            <td style="font-weight:bold;"><b>RSD Kalisat Jember </b></td>       
        </tr>
    </table>
    </header>
</head>
<body>
    <?php if (empty($graphData)) { ?>
        <div class="alert alert-warning">Tidak ada data yang sesuai untuk ditampilkan.</div>
    <?php } else { ?>
        <div class="modal-body">
            <canvas id="myChart"></canvas>
        </div>

        <!-- Script untuk membuat grafik -->
        <script>
            // Ambil data grafik dari controller dan parse menjadi objek JavaScript
            var graphData = <?php echo $graphData; ?>;
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line', // Jenis grafik (misalnya: line, bar, pie, dll.)
                data: graphData, // Data grafik dari controller
                options: {
                    // Opsi-opsi tambahan untuk penyesuaian grafik
                }
            });
        </script>
    <?php } ?>
</body>
</html>
