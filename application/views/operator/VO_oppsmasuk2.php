?>
<body class="bg-info">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-9 col-md-12">
                <div class="card o-hidden border-3 shadow-lg my-5">                              
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Entri Pasien Masuk</h1>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url()?>Opps_masuk/register" method="post" class="user">
                        <table class="table table-bordered table-striped"> 
                            <tr>
                                   
                                    <th> Nomor Rekam Medis </th>
                                    <th>Nomor Registrasi</th>
                                    <th>Nama Pasien</th> 
                                </tr>
                                <tr>                                 
                                   
                                    <td> 
                                        <input type="number" class="form-control" id="nomorRM" name="nomorm" required 
                                        value="0">
                                    </td>
                                    <td>  
                                        <input type="text" class="form-control" id="Reg" name="reg" required readonly 
                                        value="0">
                                    </td> 
                                    <td> 
                                        <input type="text" class="form-control" id="nama" name="namapasien" required readonly 
                                        value=""> 
                                    </td>                                                                                                         
                                </tr>
                            </table>
                            <table class="table table-bordered table-striped"> 
                                <tr>
                                   
                                    <th>Tempat Lahir</th> 
                                    <th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>                                                                                              
                                </tr>
                                <tr>
                                   
                                    <td> 
                                        <input type="text" class="form-control" id="tempat" name="tempatlahir" required readonly
                                        value="">
                                    </td>
                                    <td> 
                                        <input type="date" class="form-control" id="lahir" name="tgl_lahir" required readonly 
                                        value=""> 
                                    </td>  
                                    <td> 
                                        <input type="text" class="form-control" id="jenisKelamin" name="kelamin" required readonly
                                        value=""> 
                                    </td> 
                                </tr>                                           
                            </table><hr> 
                            <table class="table table-bordered table-striped"> 
                                <tr>
                                   
                                    <th>Agama</th>  
                                    <th>Status Perkawinan</th> 
                                    <th>Pekerjaan</th>                                                                                              
                                </tr>
                                <tr>
                                   
                                    <td> 
                                        <input type="text" class="form-control" id="agamaPasien" name="agama" required readonly
                                        value=""> 
                                    </td>
                                    <td> 
                                        <input type="text" class="form-control" id="statusKawin" name="kawin" required readonly
                                        value=""> 
                                    </td>  
                                    <td> 
                                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" required readonly
                                        value=""> 
                                    </td> 
                                </tr>                                           
                            </table><hr>  
                            <table class="table table-bordered table-striped"> 
                                <tr>
                                  
                                    <th>Alamat</th> 
                                    <th> Status Pasien </th>
                                    <th>tanggal masuk</th>                                                                                       
                                </tr>
                                <tr>
                                    <td> 
                                        <input type="text" class="form-control" id="alamat" name="alamat" required readonly
                                         value=""> 
                                    </td> 
                                    <td> 
                                        <select class="form-control" id="statusPasien" name="status" required>
                                            <option value="-">--pilih --</option>
                                            <option value="baru">Pasien Baru</option>
                                            <option value="pindahan">Pasien Pindahan</option>                                           
                                        </select>            
                                    </td>
                                    <td> 
                                        <input type="date" class="form-control" name="tgl_masuk" required>
                                        <input type="hidden" class="form-control" name="petugas" required readonly
                                        value="<?php echo $this->session->userdata('name'); ?>" >                                        
                                    </td>           
                                    
                                </tr>                                           
                            </table><hr>                                                                                                                 
                            <table class="table table-bordered table-striped"> 
                                <tr>
                                   
                                    <th>Nama Ruangan </th>                                        
                                    <th>Kelas Perawatan</th>                        
                                    <th>cara Bayar</th>                                                             
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
                                            <input type="hidden" class="form-control" name="petugas" required readonly
                                        value="<?php echo $this->session->userdata('name'); ?>" >   
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
                            </table>  
                            
                                    <button class="btn btn-primary btn-user btn-block btn-oval" type="submit"><b>Simpan</b></button>
                                    <div class="text-center">
                                <a class="medium" href="<?= base_url();?>Opmobilisasi"><b>Kembali</b></a>
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
     <!-- ambil data pasien  --> 
     <script>
    $(document).ready(function(){
        $('#nomorRM').change(function(){
            var nomorRM = $(this).val();
            $.ajax({
                url: '<?php echo base_url("Upasienmasuk2/get_patient_data"); ?>',
                type: 'post',
                dataType: 'json',
                data: {nomorm: nomorRM},
                success: function(response){                          
                    if(response !== null && response !== ''){
                        // Jika data pasien ditemukan
                        $('#Reg').val(response.reg); // Isi input nomor registrasi pasien dengan data dari respons
                        $('#nama').val(response.namapasien); // Isi input nama pasien dengan data dari respons                              
                        $('#tempat').val(response.tempatlahir); // Isi input tempat lahir dengan data dari respons
                        $('#lahir').val(response.tgl_lahir); // Isi input tanggal lahir dengan data dari respons
                        $('#jenisKelamin').val(response.kelamin); // Isi input jenis kelamin dengan data dari respons
                        $('#agamaPasien').val(response.agama); // Isi input agama dengan data dari respons
                        $('#statusKawin').val(response.kawin); // Isi input status perkawinan dengan data dari respons
                        $('#pekerjaan').val(response.pekerjaan); // Isi input pekerjaan dengan data dari respons
                        $('#alamat').val(response.alamat); // Isi input alamat dengan data dari respons
                        // Isi inputan lainnya sesuai kebutuhan
                    } else {
                        // Jika data pasien tidak ditemukan
                        alert('Data pasien tidak ditemukan'); // Tampilkan pesan peringatan
                        $('#nama').val(''); // Kosongkan input nama pasien
                        $('#Reg').val(''); // Kosongkan input nomor registrasi pasien
                        $('#tempat').val(''); // Kosongkan input tempat lahir
                        $('#lahir').val(''); // Kosongkan input tanggal lahir
                        $('#jenisKelamin').val(''); // Kosongkan input jenis kelamin
                        $('#agamaPasien').val(''); // Kosongkan input agama
                        $('#statusKawin').val(''); // Kosongkan input status perkawinan
                        $('#pekerjaan').val(''); // Kosongkan input pekerjaan
                        $('#alamat').val(''); // Kosongkan input alamat
                        // Kosongkan inputan lainnya jika data pasien tidak ditemukan
                    }
                },
                error: function(xhr, status, error) {
                    alert('Terjadi kesalahan saat mengambil data pasien');
                    console.log(xhr.responseText);
                }
            });
        });
    });
</script>


<script src="<?php echo base_url()?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>      

