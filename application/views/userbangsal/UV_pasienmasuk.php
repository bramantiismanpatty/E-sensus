<body class="bg-info">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-9 col-md-12">
                <div class="card o-hidden border-3 shadow-lg my-5">                              
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Entri Pasien Masuk</h1>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url()?>Upasienmasuk/register" method="post" class="user">                                                
                            <table class="table table-bordered table-striped"> 
                                <tr>
                                    <th>Nama Ruangan </th>                                        
                                    <th>Kelas Perawatan</th>     
                                    <th>tanggal masuk</th>                                                               
                                </tr>
                                <tr>                                  
                                    <td>                                                                                
                                        <select class="form-control" id="namaRuangan" name='namaruangan' required> 
                                                <option value="">Pilih Ruangan</option>
                                                <?php foreach($kelas as $p) :?>                                                            
                                                <option value ="<?php echo $p->namaruangan ?>"><?php echo $p->namaruangan ?></option> 
                                                <?php endforeach ?>   
                                        </select>                                                      
                                    </td>
                                    <td>
                                        <input type="hidden" class="form-control" id="kodeRuangan" name="koderuangan" required readonly 
                                            value = '-'>
                                        <input type="text" class="form-control"   id="namaKelas"   name="namakelas" required readonly 
                                            value = '-' >
                                        
                                    </td>
                                    <td>
                                        <input type="date" class="form-control" name="tgl_masuk" required>
                                        <input type="hidden" class="form-control" name="petugas" required readonly
                                        value="<?php echo $this->session->userdata('name'); ?>" >                                        
                                    </td>                                      
                                </tr>                                   
                            </table>  
                            <table class="table table-bordered table-striped"> 
                            <tr>
                                   
                                    <th> Nomor Rekam Medis </th>
                                    <th>Nomor Regustrasi</th>
                                </tr>
                                <tr>
                                   
                                    <td> 
                                    <input type="hidden" class="form-control" name="nomorm" required 
                                            value="baru">
                                        <input type="number" class="form-control" name="nomorm" required 
                                            value="0">
                                    </td>
                                    <td> 
                                        <input type="text" class="form-control" id="pasienhidup" name="reg" required
                                        value="0">
                                    </td>                                                                                                         
                                </tr>
                            </table>
                            <table class="table table-bordered table-striped"> 
                                <tr>
                                    <th>Nama Pasien</th> 
                                    <th>Cara Pembayaran</th>                                                                                              
                                </tr>
                                <tr>
                                    <td> 
                                        <input type="text" class="form-control" id="jumlahPasienKeluar" name="namapasien" required 
                                            value=""> 
                                    </td> 
                                    <td> 
                                        <select class="form-control" id="periodeHari" name="carabayar" required>
                                            <option value="">--pilih --</option>
                                            <option value="umum">umum</option>
                                            <option value="BPJS">BPJS</option>
                                            <option value="asuransi">Asuransi</option>
                                            <option value="perusahaan">Perusahaan</option>
                                            <option value="askin">Askin</option>
                                        </select>                     
                                    </td> 
                                </tr>                                           
                            </table><hr>
                                    <button class="btn btn-primary btn-user btn-block btn-oval" type="submit"><b>Simpan</b></button>
                                    <div class="text-center">
                                <a class="medium" href="<?= base_url();?>Umobilisasi"><b>Kembali</b></a>
                                    </div>                              
                        </form>  
                    </div>              
                 </div>   
            </div>
        </div>
    </div>
       
   
       


        <!-- Tampilkan modal jika ada pesan kesalahan -->
        <?php if($this->session->flashdata('error_message')): ?>
        <div id="errorModal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header bg-info py-3">
                    <h5 class="modal-title m-0 font-weight-bold text-white">Informasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body m-0 font-weight-bold">
                        <?php echo $this->session->flashdata('error_message'); ?>
                    </div>
                    <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                        </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <!-- Tampilkan modal jika ada pesan sukses -->
        <?php if($this->session->flashdata('success_message')): ?>
        <div id="successModal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header bg-success py-3">
                    <h5 class="modal-title m-0 font-weight-bold text-white">Success</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body m-0 font-weight-bold">
                        <?php echo $this->session->flashdata('success_message'); ?>
                    </div>
                    <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                        </div>
                </div>
            </div>
        </div>
        <?php endif; ?>


        <!-- Your JavaScript code -->
        <script>
            // Tampilkan modal error jika ada pesan kesalahan
            $(document).ready(function() {
                $('#errorModal').modal('show');
            });

            // Tampilkan modal sukses jika ada pesan sukses
            $(document).ready(function() {
                $('#successModal').modal('show');
            });
        </script>

        <script src="<?php echo base_url()?>vendor/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        
     <!-- select no klik  -->   
        <script>
        document.getElementById('namaRuangan').addEventListener('change', function() {
        // Ambil nilai yang dipilih dari dropdown namaruanganpindah
        var selectedOption = this.value;

        // Cari data ruangan yang sesuai dengan opsi yang dipilih
        var selectedRuangan = <?php echo json_encode($kelas); ?>.find(function(ruangan) {
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
</body>
</html>