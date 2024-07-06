<!DOCTYPE html>
<html>
<head>
    <title>SHE||Grafik Rumah Sakit</title>
    <link rel="icon" href="<?php echo base_url() ?>/assets/images/kalisat.ico" type="image/x-icon">
    <!-- Pastikan Anda memiliki koneksi internet untuk mengambil Chart.js dari CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
 <div class="container-fluid">                
    <div class="card mx-auto" style="width:49%">
            <div class="card-header py-4">
                <h4 class="m-0 font-weight-bold text-primary text-center">Grafik Bor Ruangan Perawatan Rumah Sakit</h4>
            </div>                         
        <form class="form-inline" method="GET" action="<?= base_url('GrafikRuangan_owner/generateChart') ?>" target="_blank">
            <table cellpadding="10"> 
                <thead>
                    <tr> 
                        <td>Dari Bulan </td>
                        <td>:</td> 
                        <td>
                            <select class="form-control" name="daribulan"required >
                                <option value="">--pilih Bulan--</option>
                                <option value="1">januari</option>
                                <option value="2">februari</option>
                                <option value="3">maret</option>
                                <option value="4">april</option>
                                <option value="5">mei</option>
                                <option value="6">juni</option>
                                <option value="7">juli</option>
                                <option value="8">agustus</option>
                                <option value="9">september</option>
                                <option value="10">oktober</option>
                                <option value="11">november</option>
                                <option value="12">desember</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-control" name="daritahun"required >
                                <option value="">--pilih Tahun--</option>
                                <?php $tahun = date('Y');
                                for($i=2020; $i<$tahun+5;$i++){?>
                                <option value="<?php echo $i ?>"> <?php echo $i ?></option>
                                <?php }?>
                            </select>
                        </td>
                    </tr>
                </thead> 
                <thead> 
                    <tr>
                        <td>Sampai Bulan</td>
                        <td>:</td>
                        <td>
                            <select class="form-control" name="sampbulan"required >
                                    <option value="">--pilih Bulan--</option>
                                    <option value="1">januari</option>
                                    <option value="2">februari</option>
                                    <option value="3">maret</option>
                                    <option value="4">april</option>
                                    <option value="5">mei</option>
                                    <option value="6">juni</option>
                                    <option value="7">juli</option>
                                    <option value="8">agustus</option>
                                    <option value="9">september</option>
                                    <option value="10">oktober</option>
                                    <option value="11">november</option>
                                    <option value="12">desember</option>
                                </select>
                            </td>
                        <td>
                            <select class="form-control" name="samptahun"required >
                                    <option value="">--pilih Tahun--</option>
                                    <?php $tahun = date('Y');
                                    for($i=2020; $i<$tahun+5;$i++){?>
                                    <option value="<?php echo $i ?>"> <?php echo $i ?></option>
                                    <?php }?>
                            </select>                           
                        </td>
                    </tr> 
                </thead>
            </table>  
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
                $first_bulan = $daribulan.$daritahun; // Add a space between month and year
                $second_bulan = $sampbulan.$samptahun; // Add a space between month and year
            } else {
                $daribulan = date('m') ;
                $daritahun =date('Y') ;
                $sampbulan = date('m') ;
                $samptahun =date('Y') ;
                $first_bulan = $daribulan.$daritahun; // Add a space between month and year
                $second_bulan = $sampbulan.$samptahun; // Add a space between month and year
                }
            ?>  
            <div class="text-center">
                    <button  type="submit" class="btn btn-primary mb-2 ml-2">Tampilkan</button>
                    <a href="GrafikRuangan_owner" class="btn btn-success mb-2 ml-2 "> <i class="fa fa-refresh"></i>refresh</a> 
           
                    <?php if (count($filter) > 0) { ?>
                    <!-- Jika ada data, tampilkan tombol untuk menghasilkan grafik -->
                    <button type="button" class="btn btn-success mb-2 ml-2" onclick="openNewTab()">Tampilkan Grafik</button>
                    <?php } ?>
                </div>
        </form>
    </div>
</div>

    <!-- Tabel untuk menampilkan data -->
    <?php if (count($filter) > 0) { ?>
        <!-- ... (tabel untuk menampilkan data seperti yang Anda cantumkan sebelumnya) ... -->
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Ruangan Perawatan</th>
                        <th>BOR</th>
                        <!-- Tambahkan kolom lain sesuai dengan data yang ingin ditampilkan -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($filter as $u) { ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $u->ruangan; ?></td>
                            <td><?php echo $u->bor; ?></td>
                            <!-- Tambahkan kolom lain sesuai dengan data yang ingin ditampilkan -->
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    <?php } else { ?>
        <!-- Jika tidak ada data, tampilkan pesan -->
        <div class="alert alert-warning"></div>
    <?php } ?>
    <script>
        // Ambil data BOR dan bulan/tahun dari tabel dan simpan dalam variabel JavaScript
        var borData = [];
        var labelData = [];
        <?php foreach ($filter as $u) { ?>
            borData.push(<?php echo $u->bor; ?>);
            labelData.push('<?php echo $u->ruangan; ?>');
        <?php } ?>

        // Buat grafik menggunakan Chart.js
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line', // Jenis grafik (misalnya: line, bar, pie, dll.)
            data: {
                labels: labelData, // Label bulan/tahun untuk sumbu x
                datasets: [{
                    label: 'BOR', // Label untuk data BOR
                    data: borData, // Data BOR
                    backgroundColor: 'rgba(75, 192, 192, 0.2)', // Warna latar belakang area grafik
                    borderColor: 'rgba(75, 192, 192, 1)', // Warna garis grafik
                    borderWidth: 1 // Ketebalan garis grafik
                }]
            },
            options: {
                // Opsi-opsi tambahan untuk penyesuaian grafik
            }
        });
    </script>

    <!-- Script untuk membuka tab baru ketika tombol "Tampilkan Grafik" ditekan 
    <script>
        function openNewTab() {
            const form = document.createElement('form');
            form.method = 'GET';
            form.action = '<?= base_url('GrafikRuangan_owner/generateChart') ?>';
            form.target = '_blank'; // Buka di tab baru

            const input = document.createElement('input');
            input.type = 'submit';

            form.appendChild(input);
            document.body.appendChild(form);

            form.submit();
        }
    </script>-->
</body>
</html>
