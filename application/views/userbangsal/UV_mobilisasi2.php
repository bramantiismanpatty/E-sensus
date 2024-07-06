<body id="page-top">
    <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <div class="container-fluid">
                    <div class="card shadow mb-8">
                        <label class="perhatian" align="center"><H4> PERHATIAN !</H4></label>
                        <?php
                        // Tampilkan pesan peringatan jika ada tanggal yang belum terisi untuk ruangan yang sedang aktif
                        $activeRuangan = $this->session->userdata('namaruangan');
                        if (!empty($tanggal_selanjutnya) && isset($tanggal_selanjutnya[$activeRuangan])) {
                            echo '<div class="alert alert-warning" role="alert">';
                            echo '<ol>';
                            echo '<li>Sensus harian rawat inap Ruangan ' . $activeRuangan . ' pada tanggal ' . $tanggal_selanjutnya[$activeRuangan] . '<strong style="text-decoration: underline;"> BELUM TERISI</strong></li><br>';
                            echo '</ol>';
                            echo '</div>';
                        }
                        ?>
                        <div class="card-header bg-custom-samping py-3">
                            <h6 class="m-0 font-weight-bold text-white"> Mobilisasi Pasien Rawat Inap</h6>
                        </div>
                        <div class="card-body">                       
                            <form class="form-inline" action="<?= base_url('Umobilisasi2') ?>" method="get"> 
                                <div class="form-group mb-2 ml-4"> 
                                    <label for="staticEmail12">Tanggal :</label> 
                                    <input type='date' class="form-control ml-2" name="tanggal" required ></input>                                                                      
                                </div>                                               
                                <button type="submit" class="btn btn-primary mb-2 ml-auto"><i class="fa fa-eye"></i> Tampilkan</button>
                                <a href="<?= base_url('Upasienmasuk2') ?>" class="btn btn-success mb-2 ml-2"><i class="fa fa-plus"></i> Pasien Masuk</a>                                  
                                <a href="<?= base_url('Umobilisasi') ?>" class="btn btn-info mb-2 ml-2"><i class="fa fa-refresh"></i> Refresh</a>                   
                            </form> 
                        </div>
                        <?php
                        $tanggal = $this->input->get('tanggal'); // Ambil tanggal dari input GET
                        if (!empty($tanggal)) {
                             $data['rekap'] = $this->Mpasienmasuk->get_data_by_room_and_date($namaruangan, $tanggal);
                        } else {
                             $data['rekap'] = []; // Jika tidak ada tanggal yang dipilih, set data kosong
                        }
                        ?>
                        <div class="alert alert-info"                     
                            Menampilkan Pasien masuk Rawat Inap Ruangan: <span class="font-weight-bold"><?php echo $namaruangan ?></span> 
                            dari Tanggal: <span class="font-weight-bold"><?php echo $tanggal ?></span>                                    
                        </div> 
                        <?php if ($this->session->flashdata('message')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $this->session->flashdata('message'); ?>
                            </div>
                        <?php endif; ?>                    
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">                                
                                    <thead>
                                        <tr>
                                            <th>No</th> 
                                            <th>Tanggal Masuk</th> 
                                            <th>Nomor Rekam Medis</th>
                                            <th>Nomor registrasi</th>
                                            <th>Nama Pasien</th> 
                                            <th>Nama Ruang Perawatan</th>
                                            <th>Nama Kelas</th>
                                            <th>Cara Pembayaran</th> 
                                            <th><b>Action</b></th>              		
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  
                                        $no = 1;                  
                                        foreach($rekap as $u){ 
                                        ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>  
                                                <td><?php echo $u->tgl_masuk ?></td>
                                                <td><?php echo $u->nomorm ?></td> 
                                                <td><?php echo $u->reg ?></td>				                       
                                                <td><?php echo ucfirst(strtolower($u->namapasien)) ?></td>                                     
                                                <td><?php echo $u->namaruangan ?></td>
                                                <td><?php echo $u->namakelas ?></td>
                                                <td><?php echo $u->carabayar ?></td>                                                   
                                                <td class="text-center">                                                                         
                                                    <?php
                                                    if (!empty($keluar)) {
                                                        // Jika nomor yang dipilih sudah ada pada tabel pasienkeluar
                                                        $selectedNomorm = $u->nomorm; // Gantilah dengan atribut yang sesuai
                                                        $isNomormInKeluar = false;

                                                        foreach ($keluar as $row) {
                                                            if ($row['nomorm'] == $selectedNomorm) { // Gantilah dengan atribut yang sesuai
                                                                $isNomormInKeluar = true;
                                                                break;
                                                            }
                                                        }
                                                        if ($isNomormInKeluar) {
                                                            // nomor sudah ada dalam pasienkeluar, tombol merah tidak aktif
                                                            ?>                                              
                                                                <a href="#" class="btn btn-danger mb-2 ml-auto" disabled style="display: none;"><i class="fa fa-check"></i> Dipindahkan</a>    
                                                                <a href="#" class="btn btn-danger mb-2 ml-auto" disabled><i class="fa fa-check"></i> <b>Keluar</b></a>
                                                            <?php
                                                        } else {
                                                            // nomor belum ada dalam pasienkeluar, tombol biru aktif                                                    
                                                            ?>
                                                            <a href="<?= base_url('Umobilisasi/edit1').'/'.$u->id ?>" class="btn btn-warning mb-2 ml-2" onclick="dipindahkan()"><i class="fa fa-edit"></i> Dipindahkan</a>   
                                                            <a href="<?= base_url('Umobilisasi/edit2').'/'.$u->id ?>" class="btn btn-primary mb-2 ml-auto"><i class="fa fa-edit"></i> Keluar</a>
                                                            <?php
                                                        }
                                                    } else {
                                                        // Jika data keluar kosong, tombol biru aktif
                                                        ?>
                                                        <a href="<?= base_url('Umobilisasi/edit1').'/'.$u->id ?>" class="btn btn-warning mb-2 ml-2" onclick="dipindahkan()"><i class="fa fa-edit"></i> Dipindahkan</a>    
                                                        <a href="<?= base_url('Umobilisasi/edit2').'/'.$u->id ?>" class="btn btn-primary mb-2 ml-auto"><i class="fa fa-edit"></i> Keluar</a>
                                                        <?php
                                                    }
                                                    ?>                                    
                                                </td>                                       
                                            </tr>	                       
                                        <?php                                     
                                        }?>
                                    </tbody>                                   
                                </table>                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
        </div>       
    </div> 
    <script src="<?php echo base_url()?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
