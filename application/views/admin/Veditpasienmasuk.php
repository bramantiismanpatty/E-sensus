
<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-9 col-md-12">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">                 
                     <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12"></div>
                                <div class="col-lg-12">
                                    <div class="p-5">                   
                                        <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Ubah Data Pasien Masuk</h1></div>                               
                                        <form action="<?php echo base_url()?>Amonitormasuk/update" method="post" class="user">                               
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped">                                              
                                                 <?php foreach($masuk as $u) :?>                                                    
                                                    <tr>
                                                        <th>Tanggal masuk</th>
                                                        <th>Kode Ruangan </th>  
                                                        <th>Nama Ruangan </th>                                        
                                                        <th>Kelas Perawatan</th>                                                                                                          
		                                            </tr>
                                                    <tr> 
                                                        <td>
                                                        <input type="hidden" class="form-control" name="id" id="koderuangan" required value="<?php echo $u->id?>">
                                                        <input type="text" class="form-control" name="tgl_masuk" id="koderuangan" required value="<?php echo $u->tgl_masuk?>"
                                                            >
                                                        </td>
                                                        <td>
                                                            <select class="form-control" name="namaruangan" id="namaRuangan" required>
                                                                <!-- Isi dropdown dengan pilihan dari tabel ruangan -->
                                                                <?php foreach ($mutasi as $r): ?>
                                                                    <!-- Periksa apakah nilai saat ini sama dengan $u->namaruangan -->
                                                                    <?php if ($r->namaruangan == $u->namaruangan): ?>
                                                                        <!-- Jika ya, tampilkan opsi yang dipilih, dan lanjutkan ke iterasi berikutnya -->
                                                                        <option value="<?php echo $u->namaruangan; ?>" selected><?php echo $u->namaruangan; ?></option>
                                                                    <?php else: ?>
                                                                        <!-- Jika tidak, tampilkan opsi dari $r->namaruangan -->
                                                                        <option value="<?php echo $r->namaruangan; ?>"><?php echo $r->namaruangan; ?></option>
                                                                    <?php endif; ?>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="koderuangan" id="kodeRuangan" required 
                                                            value="<?php echo $u->koderuangan?>" >
                                                            </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="namakelas" id="namaKelas" required 
                                                            value="<?php echo $u->namakelas?>">                                                           
                                                        </td>
                                                    </tr>                                                                      
                                                </table>                                              
                                                <table class="table table-bordered table-striped"> 
                                                    <tr>
                                                        <th> Momor Rekam Medis </th>
                                                        <th>Nomor Regustrasi</th>
                                                        <th>Nama Pasien</th> 
                                                        <th>Cara Pembayaran</th> 
                                                    </tr>
                                                    <tr>         
                                                        <td> 
                                                            <input type="number" class="form-control" name="nomorm" required 
                                                             value="<?php echo $u->nomorm?>">   
                                                        </td>
                                                        <td> 
                                                            <input type="text" class="form-control" id="reg" name="reg" required 
                                                            value="<?php echo $u->reg?>">   
                                                        </td> 
                                                        <td> 
                                                            <input type="text" class="form-control" id="namapasien" name="namapasien" required required 
                                                             value="<?php echo $u->namapasien?>">                                                                                            
                                                        </td>
                                                        <td>
                                                        <select class="form-control" id="carabayar" name="carabayar" required>
                                                            <option value="<?php echo $u->carabayar?>"><?php echo $u->carabayar?></option>
                                                            <option value="umum">umum</option>
                                                            <option value="BPJS">BPJS</option>
                                                            <option value="asuransi">Asuransi</option>
                                                            <option value="perusahaan">Perusahaan</option>
                                                            <option value="askin">Askin</option>
                                                        </select>                                                                               
                                                        <input type="hidden" class="form-control" name="petugas" required value="<?php echo $this->session->userdata('name'); ?>">                                                          
                                                        </td>                                                                                                                                
                                                    </tr>
                                                </table>
                                                <?php endforeach ?> <hr>   
                                                    <button class="btn btn-primary btn-user btn-block"type="submit" class="fa fa-save"><b>Simpan Perubahan</b> </button>
                                                </div>
                                                <div class="text-center">
                                                    <a class="small" href="<?= base_url();?>Amonitormasuk"><b>Kembali</b></a>
                                                </div>
                                            </div>
                                        </form>                                 
                                    </div>                              
                                </div>
                             </div>
                        </div>
                    </div>

                </div>
            </div>
     

    

    <script>
    document.getElementById('namaRuangan').addEventListener('change', function() {
        // Ambil nilai yang dipilih dari dropdown namaruangan
        var selectedOption = this.value;

        // Cari data ruangan yang sesuai dengan opsi yang dipilih
        var selectedRuangan = <?php echo json_encode($mutasi); ?>.find(function(ruangan) {
            return ruangan.namaruangan === selectedOption;
        });

        // Jika data ruangan ditemukan, perbarui nilai kolom Kode Ruangan dan Nama Kelas
        if (selectedRuangan) {
            document.getElementById('kodeRuangan').value = selectedRuangan.koderuangan;
            document.getElementById('namaKelas').value = selectedRuangan.namakelas;
        } else {
            // Jika tidak ditemukan, kosongkan nilai kolom Kode Ruangan dan Nama Kelas
            document.getElementById('kodeRuangan').value = '';
            document.getElementById('namaKelas').value = '';
        }
    });
</script>
<script src="<?php echo base_url()?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 