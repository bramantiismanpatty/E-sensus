<body>
    <h5>Grafik Bor Rumah Sakit</h5>
        <div class="card-body">                           
            <form class="form-inline" method="GET" action="<?= base_url('AgrafikRumahsakit/generateChart') ?>" target="_blank">
                <table cellpadding="10"> 
                    <thead>
                        <tr> 
                            <td>Dari Bulan </td>
                            <td>:</td> 
                            <td>
                                <select class="form-control" name="bulan" required>
                                    <option value="">--pilih Bulan--</option>
                                    <option value="01">januari</option>
                                    <option value="02">februari</option>
                                    <option value="03">maret</option>
                                    <option value="04">april</option>
                                    <option value="05">mei</option>
                                    <option value="06">juni</option>
                                    <option value="07">juli</option>
                                    <option value="08">agustus</option>
                                    <option value="09">september</option>
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
                                    <option value="01">januari</option>
                                    <option value="02">februari</option>
                                    <option value="03">maret</option>
                                    <option value="04">april</option>
                                    <option value="05">mei</option>
                                    <option value="06">juni</option>
                                    <option value="07">juli</option>
                                    <option value="08">agustus</option>
                                    <option value="09">september</option>
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
                        $first_bulan = $daritahun. '-' .$daribulan;
                        $second_bulan =$samptahun. '-' .$sampbulan;
                    } else {
                        $daribulan = date('m') ;
                        $daritahun =date('Y') ;
                        $sampbulan = date('m') ;
                        $samptahun =date('Y') ;
                        $first_bulan = $daritahun. '-' .$daribulan;
                        $second_bulan =$samptahun. '-' .$sampbulan;
                    }
                ?>    

                <button type="submit" class="btn btn-primary mb-2 ml-auto">Tampilkan</button>
                <a href="AgrafikRumahsakit" class="btn btn-success mb-2 ml-2 "> <i class="fa fa-refresh"></i>refresh</a>  
                <?php if (count($filter) > 0) { ?>
                    <!-- Jika ada data, tampilkan tombol untuk menghasilkan grafik -->
                    <button type="button" class="btn btn-success mb-2 ml-2" onclick="openNewTab()">Tampilkan Grafik</button>
                <?php } ?>
            </form>
        </div>

    <!-- Tabel untuk menampilkan data -->
    <?php if (count($filter) > 0) { ?>
        <!-- ... (tabel untuk menampilkan data seperti yang Anda cantumkan sebelumnya) ... -->
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                        <th>Nomor</th>
                        <th>Bulan / Tahun</th>
                        <th>BOR</th>
                        <th>AVLOS</th>
                        <th>TOI</th>                                   			                       
                        <th>BTO</th>    		                       
                        <th>NDR</th>    		                      		                        
                        <th>GDR</th>       
                        <!-- Tambahkan kolom lain sesuai dengan data yang ingin ditampilkan -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($filter as $u) { ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo date('Y-m', strtotime($u->bulan)) ?></td>    
                            <td><?php echo $u->bor; ?></td>
                            <td><?php echo $u->avlos         ?>   </td>			                       
                            <td><?php echo $u->toi           ?>   </td>
                            <td><?php echo $u->bto           ?>   </td>
                            <td><?php echo $u->ndr           ?>   </td>
                            <td><?php echo $u->gdr           ?>   </td>  
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
    <!--<script>
        // Ambil data BOR dan bulan/tahun dari tabel dan simpan dalam variabel JavaScript
        var borData = [];
        var labelData = [];
        <?php foreach ($filter as $u) { ?>
            borData.push(<?php echo $u->bor; ?>);
            labelData.push('<?php echo $u->bulan; ?>');
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
            form.action = '<?= base_url('Bagan/generateChart') ?>';
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
