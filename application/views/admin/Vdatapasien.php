<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-9 col-md-12">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">       
                        <div class="row">
                            <div class="col-lg-12"></div>
                                <div class="col-lg-12">
                                    <div class="p-5">                            
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Data Pasien</h1>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url()?>Adatapasien/register" method="post" class="user">                                                
                            <table class="table table-bordered table-striped"> 
                                <tr>
                                    <th>Nomor Rekam Medis </th>                                        
                                    <th>nomor Registrasi</th>     
                                    <th>Nama Pasien</th>                                                               
                                </tr>
                                <tr>                                  
                                    <td>                                                                                
                                    <input type="number" class="form-control" id="nomorRm" name="nomorm" required
                                            value = '-'>                                           
                                    </td>
                                    <td>
                                    <input type="text" class="form-control" id="reg" name="reg" required
                                        value="0">
                                    </td>

                                    <td> 
                                    <input type="text" class="form-control" id="namaPasien" name="namapasien" required
                                        value="-">                               
                                    </td>                            
                                </tr>                                   
                            </table>  
                            <table class="table table-bordered table-striped"> 
                                <tr>
                                    <th>tempat lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                </tr>
                                <tr>
                                    <td> 
                                        <input type="text" class="form-control" name="tempatlahir" required 
                                            value="-">
                                    </td>
                                    <td> 
                                        <input type="date" class="form-control" id="tangalLahir" name="tgl_lahir" required
                                        value="0">
                                    </td>  
                                    <td> 
                                        <select class="form-control" id="agama" name="kelamin" required>
                                            <option value="-">--pilih --</option>
                                            <option value="pria">Laki - laki</option>
                                            <option value="wanita">Perempuan</option>
                                            <option value="lainnya">lainnya</option>                               
                                        </select>            
                                    </td>                                                                                                                 
                                </tr>
                            </table>
                            <table class="table table-bordered table-striped"> 
                                <tr>
                                    <th>Agama</th> 
                                    <th>Status Perkawinan</th> 
                                    <th>Pekerjaan</th>                                                                                              
                                </tr>
                                <tr>
                                    <td> 
                                        <select class="form-control" id="agama" name="agama" required>
                                            <option value="-">--pilih --</option>
                                            <option value="islam">Islam</option>
                                            <option value="kristen">Kristen</option>
                                            <option value="katholik">Katholik</option>
                                            <option value="hindu">Hindu</option>
                                            <option value="budha">Budha</option>
                                            <option value="konghucu">konghucu</option>
                                            <option value="kepercayaan">kepercayaan</option>
                                           
                                        </select>            
                                    </td> 
                                    <td> 
                                        <select class="form-control" id="kawin" name="kawin" required>
                                            <option value="">--pilih --</option>
                                            <option value="belum kawin">Belum Kawin</option>
                                            <option value="kawin">Kawin</option>
                                            <option value="duda">Duda</option>
                                            <option value="janda">Janda</option>                                          
                                        </select>                     
                                    </td> 
                                    <td> 
                                        <select class="form-control" id="pekerjaan" name="pekerjaan" required>
                                            <option value="-">--pilih --</option>
                                            <option value="belum kerja">Belum Bekerja</option>
                                            <option value="pelajar">Pelajar</option>  
                                            <option value="mahasiswa">Mahasiswa</option>                                            
                                            <option value="pns">PNS</option>
                                            <option value="tni">TNI</option>
                                            <option value="polri">Polri</option>
                                            <option value="karyawan">Karyawan Swasta</option>
                                            <option value="pengusaha">pengusaha</option>
                                            <option value="pensiunan">Pensiunan</option>
                                            <option value="ibu rumah tangga">Ibu Rumah Tangga</option>
                                            <option value="lainnya">Lain-lain</option>
                                        </select>                     
                                    </td> 
                                </tr>                                           
                            </table>
                                <label>Alamat </label>
                                <input type="text" class="form-control" name="alamat" required 
                                value="-">
                                    
                            <hr>
                                        <button class="btn btn-primary btn-user btn-block btn-oval" type="submit"><b>Simpan</b></button>
                                    <div class="text-center">
                                        <a class="medium" href="<?= base_url();?>Abiodata"><b>Kembali</b></a>
                                    </div>                              
                        </form>  
                    </div>              
                 </div>   
            </div>
        </div>
    </div>
       
   
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
                    <div class="modal-body m-0 font-weight-bold">
                    @G41221595                  
                    </div>
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