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
                                    <h1 class="h4 text-gray-900 mb-4">Entri Sensus Harian Rawat Inap</h1>
                                     </div><hr>
                                     <div class="card-body">
                                     <?php
                                             if((isset($_GET['namaruangan'])&& $_GET['namaruangan']!='') && 
                                             (isset($_GET['tanggal'])  && $_GET['tanggal']!='')){
                                              $namaruangan = $_GET['namaruangan'];
                                              $tanggal = $_GET['tanggal'];                                      
                                             $tanggalnamaruangan = $tanggal.$namaruangan;
                                            
                                  
                                          }else{
                                              $namaruangan  = 'tidak ada ruangan di pilih';
                                              $tanggal  = 'tidak ada Tanggal di pilih';                                      
                                              $tanggalnamaruangan = $tanggal.$namaruangan;
                                            
                                              }
                                    ?> 
                                        <form class = "form-inline"> 
                                        <div class="form-roup-mb-2">                                                                 
                                    <select class="form-control" name='namaruangan'required > 
                                        <option value="">--pilih Ruangan--</option>
                                        <?php foreach($kelas as $u) :?>               
		                                <option value ="<?php echo $u->namaruangan ?>"><?php echo $u->namaruangan ?></option>                                     
		                                <?php endforeach ?> 
                                    </select>
                                </div>
                                <div class="form-roup-mb-2 ml-3">                                               
                                    <input type='date' class="form-control" name="tanggal"required ></input>                                                   
                                </div>                                                   
                                                 <button type="submit" class="btn btn-primary mb-2 ml-3 "><i class="fa fa-eye"></i>Pilih</button>
                                                 <a href="<?= base_url('AAsensus') ?>" class="btn btn-success mb-2 ml-2 "> <i class="fa fa-refresh"></i>refresh</a> 
                                                                       
                                         </form> 
                                    </div>
                                    <?php
                                             if((isset($_GET['namaruangan'])&& $_GET['namaruangan']!='') && 
                                             (isset($_GET['tanggal'])  && $_GET['tanggal']!='')){
                                              $namaruangan = $_GET['namaruangan'];
                                              $tanggal = $_GET['tanggal'];                                      
                                             $tanggalnamaruangan = $tanggal.$namaruangan;
                                            
                                  
                                          }else{
                                              $namaruangan  = 'tidak ada ruangan di pilih';
                                              $tanggal  = 'tidak ada Tanggal di pilih';                                      
                                              $tanggalnamaruangan = $tanggal.$namaruangan;
                                            
                                              }
                                    ?> 
                                    <div class="alert alert-info">
                                    Menampilkan Data  :<span class="font-weight-bold"><?php echo $namaruangan?> </span> 
                                    </div>
                                            
                                    <form action="<?php echo base_url()?>AAsensus/register" method="post" class="user">
                                 
                                        <?php foreach($rekap as $u) :?> 
                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                         <label>kode Ruangan</label>                                        
                                                         <input type="text" class="form-control" readonly="" name="koderuangan" required
                                                        value="<?php echo $u->koderuangan?>">                                     
                                                     </div>                                         
                                                    <div class="col-sm-6 mb-3 mb-sm-0">                                    
                                                        <label>Ruang Perawatan</label>                                    
                                                        <input type="text" class="form-control" readonly="" name="namaruangan" required
                                                        value="<?php echo $u->namaruangan?>">                                    
                                                     </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                         <label>Kelas Perawatan</label>                                       
                                                         <input type="text" class="form-control" readonly="" name="namakelas" required
                                                          value="<?php echo $u->namakelas?>">                                     
                                                    </div>
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                         <label>Tempat Tidur Tersedia</label>                                       
                                                         <input type="number" class="form-control" readonly="" name="tidur" required
                                                         value="<?php echo $u->tidur?>">                                          
                                                    </div>
                                                </div>
                                       <?php endforeach ?> 
                                       <hr>
                                        <div class="form-group">
                                        <label>Tanggal Sensus Rawat Inap</label>
                                             <input type="date" class="form-control"  name="tanggal" required readonly
                                             value="<?php echo $tanggal?>">  
                                        </div>
                                        <hr>

                                        <div class="form-group row">
                                            <div class="col-sm-3 mb-3 mb-sm-0">
                                                <label>Pasien Awal</label>       
                                                <input type="number" class="form-control" id="pasienAwal" name="awal" required readonly
                                                value="<?php echo $awal; ?>">
                                            </div>
                                            <div class="col-sm-3">
                                                <label>Pasien masuk</label>
                                                <input type="number" class="form-control" id="pasienMasuk" name="masuk" required readonly
                                                value="<?= isset($jumlah_pasien_masuk) ? $jumlah_pasien_masuk : ''; ?>">
                                            </div>
                                            <div class="col-sm-3">
                                                <label>Pasien Pindahan</label>
                                                <input type="number" class="form-control" id="pasienPindahan" name="pindahan" required readonly
                                                value="<?= isset($jumlah_pasien_pindahan) ? $jumlah_pasien_pindahan: ''; ?>">
                                            </div>
                                            <div class="col-sm-3">
                                                <label>Jlh. Pasien Masuk</label>
                                                <input type="number" class="form-control" id="jumlahPasienMasuk" name="jlhmasuk" readonly value="0" >
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-3 mb-3 mb-sm-0">                                           
                                                <label>Pasien Di Pindahkan</label>
                                                <input type="number" class="form-control" id="dipindahkan" name="dipindahkan" required readonly
                                                value="<?= isset($jumlah_pasien_dipindahkan) ? $jumlah_pasien_dipindahkan: ''; ?>">
                                            </div>
                                            <div class="col-sm-3">
                                                <label>Pasien Keluar Hidup</label>
                                                <input type="number" class="form-control" id="keluarhidup" name="keluar" required readonly
                                                value="<?= isset($jumlah_pasien_keluarHidup) ? $jumlah_pasien_keluarHidup: ''; ?>">
                                            </div>
                                            <div class="col-sm-3">
                                                <label>Pasien Meninggal</label>
                                                <input type="number" class="form-control" id="mati" name="mati" required readonly 
                                                value="<?= isset($jumlah_pasien_keluarMati) ? $jumlah_pasien_keluarMati: ''; ?>">
                                            </div>
                                            <div class="col-sm-3">
                                                <label>Jlh.keluar hidup+mati</label>
                                                <input type="number" class="form-control" id="jumlahPasienKeluar" name="jlhkeluar" readonly value="0">
                                            </div>
                                        </div>
                                        <hr>
                                                                          
                                        <div class="form-group row">
                                            <div class="col-sm-4 mb-3 mb-sm-0">
                                                <label>Pasien Meninggal < 48 Jam</label>
                                                <input type="number" class="form-control"name="matikurang"required id="#" required readonly
                                                value="<?= isset($jumlah_pasien_matikurang) ? $jumlah_pasien_matikurang: ''; ?>">
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Pasien Meninggal > 48 Jam</label>
                                                <input type="number" class="form-control"name="matilebih"required id="#" required readonly
                                                value="<?= isset($jumlah_pasien_matilebih) ? $jumlah_pasien_matilebih: ''; ?>">
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Masih Dirawat</label>
                                                <input type="number" class="form-control" id="masihdirawat" name="sisa" readonly value="0">
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group row">                                       
                                            <div class="col-sm-4 mb-3 mb-sm-0">    
                                            <label>Masuk keluar Hari yang Sama</label>
                                            <input type="number" class="form-control" id="keluarharisama" name="masukkeluar" required readonly
                                            value="<?= isset($total_masukkeluar) ? $total_masukkeluar: ''; ?>">
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Lama Dirawat</label>
                                                <input type="number" class="form-control"name="lama"required readonly id="#" 
                                                value="<?= isset($total_lama_rawat) ? $total_lama_rawat: ''; ?>">
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Hari Perawatan</label>
                                                <input type="number" class="form-control" id="jumlahHariPerawatan" name="hp" readonly value="0">
                                                <input type="hidden" class="form-control" id="petugas" name="petugas" readonly 
                                                value="<?php echo $this->session->userdata('name'); ?>">
                                            </div>
                                        </div>                            
                                        <hr>                                       
                                        <?php if ($data_monet): ?>
                                         <!-- Tampilkan tombol simpan jika data belum ada -->
                                            <button class="btn btn-primary btn-user btn-block"type="submit" class="fa fa-save"><b>Approved</b></button>
                                        <?php else: ?>
                                        <!-- Tombol simpan dinonaktifkan jika data sudah ada -->
                                            <button class="btn btn-bahaya btn-user btn-block"type="submit" disabled class="fa fa-save"><b>Telah di approved</b></button>
                                        <?php endif; ?>  
                                    </form>  
                                    <div class="text-center">
                                    <a class="small" href="<?= base_url();?>admin"><b>Kembali</b></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

   

    
<script>
//Hitung JUMLAH PASIEN MASUK=================================================================
    // Definisikan fungsi untuk menjumlahkan nilai input
function hitungTotal() {
    var pasienAwal = document.getElementById('pasienAwal');
    var pasienMasuk = document.getElementById('pasienMasuk');
    var pasienPindahan = document.getElementById('pasienPindahan');
    var jumlahPasienMasukInput = document.getElementById('jumlahPasienMasuk');

    var nilaiPasienAwal = parseInt(pasienAwal.value) || 0;
    var nilaiPasienMasuk = parseInt(pasienMasuk.value) || 0;
    var nilaiPasienPindahan = parseInt(pasienPindahan.value) || 0;
    var jumlahTotal = nilaiPasienAwal + nilaiPasienMasuk + nilaiPasienPindahan;
    jumlahPasienMasukInput.value = jumlahTotal;
}

// Panggil fungsi hitungTotal saat halaman dimuat
document.addEventListener('DOMContentLoaded', function() {
    hitungTotal();
});
// Tambahkan event listener untuk mendeteksi perubahan nilai pada input
var inputs = document.querySelectorAll('#pasienAwal, #pasienMasuk, #pasienPindahan');
inputs.forEach(function(input) {
    input.addEventListener('change', hitungTotal);
});

//Hitung JUMLAH PASIEN keluar=================================================================
// Definisikan fungsi untuk menghitung total jumlah pasien keluar
    function hitungJumlahPasienKeluar() {
        var dipindahkan = parseInt(document.getElementById('dipindahkan').value) || 0;
        var keluarhidup = parseInt(document.getElementById('keluarhidup').value) || 0;
        var mati = parseInt(document.getElementById('mati').value) || 0;
        
        var jumlahPasienKeluar = dipindahkan + keluarhidup + mati;
        
        document.getElementById('jumlahPasienKeluar').value = jumlahPasienKeluar;
    }

    // Panggil fungsi hitungJumlahPasienKeluar saat halaman dimuat
    document.addEventListener('DOMContentLoaded', function() {
    hitungJumlahPasienKeluar();
    });

//Hitung MASIH DITAWAT=================================================================
    // Definisikan fungsi untuk menghitung jumlah pasien yang masih dirawat
    function hitungMasihDirawat() {
        var jumlahPasienMasuk = parseInt(document.getElementById('jumlahPasienMasuk').value) || 0;
        var jumlahPasienKeluar = parseInt(document.getElementById('jumlahPasienKeluar').value) || 0;
        
        var masihDirawat = jumlahPasienMasuk - jumlahPasienKeluar;
        
        document.getElementById('masihdirawat').value = masihDirawat;
    }

    // Panggil fungsi hitungMasihDirawat saat halaman dimuat
    document.addEventListener('DOMContentLoaded', function() {
        hitungMasihDirawat();
    });

//Hitung HARI PERAWATAN=================================================================
// Definisikan fungsi untuk menghitung jumlah hari perawatan
    function hitungJumlahHariPerawatan() {
        var masihDirawat = parseInt(document.getElementById('masihdirawat').value) || 0;
        var masukKeluarHariSama = parseInt(document.getElementById('keluarharisama').value) || 0;
        
        var jumlahHariPerawatan = masihDirawat + masukKeluarHariSama;
        
        document.getElementById('jumlahHariPerawatan').value = jumlahHariPerawatan;
    }

    // Panggil fungsi hitungJumlahHariPerawatan saat halaman dimuat
    document.addEventListener('DOMContentLoaded', function() {
    hitungJumlahHariPerawatan();
    });
   
</script>
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