<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SHE||Sensus Harian Ranap</title>

    <!-- Custom fonts for this template-->
     <link rel="icon" href="assets/images/kalisat.ico" type="image/x-icon">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
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
                                             if((isset($_GET['namaruangan'])&& $_GET['namaruangan']!='')){
                                                 $ruang = $_GET['namaruangan'];                                                                
                                                 $pilih = $ruang;

                                            }else{
                                                $ruang  = 'tidak ada ruangan di pilih';
                                                $pilih = $ruang;
                                             }
                                    ?> 
                                        <form class = "form-inline"> 
                                            <div class="form-roup-mb-2">                                                                 
                                                <select class="form-control" name='namaruangan'required > 
                                                    <option value="">--pilih Ruangan--</option>
                                                     <?php foreach($ruangan as $u) :?>                                                            
		                                             <option value ="<?php echo $u->namaruangan ?>"><?php echo $u->namaruangan ?></option> 
                                                     <?php endforeach ?>   
                                                 </select>
                                            </div>                                                                
                                                 <button type="submit" class="btn btn-primary mb-2 ml-3 "><i class="fa fa-eye"></i>Pilih</button>
                                                                       
                                         </form> 
                                    </div>
                                    <?php
                                             if((isset($_GET['namaruangan'])&& $_GET['namaruangan']!='')){
                                                 $ruang = $_GET['namaruangan'];                                                                
                                                 $pilih = $ruang;

                                            }else{
                                                $ruang  = 'tidak ada ruangan di pilih';
                                                $pilih = $ruang;
                                             }
                                    ?> 
                                    <div class="alert alert-info">
                                    Menampilkan Data  :<span class="font-weight-bold"><?php echo $ruang?> </span> 
                                    </div>
                                            
                                    <form action="<?php echo base_url()?>Asensus/register" method="post" class="user">
                                 
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
                                             <input type="date" class="form-control"  name="tanggal" required
                                             >
                                        </div>
                                        <hr>

                                        <div class="form-group row">
                                            <div class="col-sm-3 mb-3 mb-sm-0">                                           
                                                <label>Pasien Awal</label>
                                                <input type="number" class="form-control" id="pasienAwal" name="awal" required value="0">
                                            </div>
                                            <div class="col-sm-3">
                                                <label>Pasien masuk</label>
                                                <input type="number" class="form-control" id="pasienMasuk" name="masuk" required value="0" >
                                            </div>
                                            <div class="col-sm-3">
                                                <label>Pasien Pindahan</label>
                                                <input type="number" class="form-control" id="pasienPindahan" name="pindahan" required value="0" >
                                            </div>
                                            <div class="col-sm-3">
                                                <label>Jlh. Pasien Masuk</label>
                                                <input type="number" class="form-control" id="jumlahPasienMasuk" name="jlhmasuk" readonly value="0" >
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-3 mb-3 mb-sm-0">                                           
                                                <label>Pasien Di Pindahkan</label>
                                                <input type="number" class="form-control" id="dipindahkan" name="dipindahkan" required value="0">
                                            </div>
                                            <div class="col-sm-3">
                                                <label>Pasien Keluar Hidup</label>
                                                <input type="number" class="form-control" id="keluarhidup" name="keluar" required value="0">  
                                            </div>
                                            <div class="col-sm-3">
                                                <label>Pasien Meninggal</label>
                                                <input type="number" class="form-control" id="mati" name="mati" required value="0">
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
                                                <input type="number" class="form-control"name="matikurang"required id="#" value="0">
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Pasien Meninggal > 48 Jam</label>
                                                <input type="number" class="form-control"name="matilebih"required id="#" value="0">
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
                                            <input type="number" class="form-control" id="keluarharisama" name="masukkeluar" required value="0">
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Lama Dirawat</label>
                                                <input type="number" class="form-control"name="lama"required id="#" value="0">
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Hari Perawatan</label>
                                                <input type="number" class="form-control" id="jumlahHariPerawatan" name="hp" readonly value="0">
                                                <input type="hidden" class="form-control" id="jumlahHariPerawatan" name="petugas" readonly 
                                                value="<?php echo $this->session->userdata('name'); ?>">
                                            </div>
                                        </div>

                                        <script>
    // Mendapatkan referensi ke elemen-elemen input
    var pasienAwalInput = document.getElementById('pasienAwal');
    var pasienMasukInput = document.getElementById('pasienMasuk');
    var pasienPindahanInput = document.getElementById('pasienPindahan');
    var jumlahPasienMasukOutput = document.getElementById('jumlahPasienMasuk');

    var dipindahkanInput = document.getElementById('dipindahkan');
    var keluarhidupInput = document.getElementById('keluarhidup');
    var matiInput = document.getElementById('mati');
    var jumlahPasienKeluarOutput = document.getElementById('jumlahPasienKeluar');

    var masihdirawatInput = document.getElementById('masihdirawat');
    var MasihDirawatInput = document.getElementById('masihdirawat');
    var KeluarharisamaInput = document.getElementById('keluarharisama');
    var jumlahHariPerawatanOutput = document.getElementById('jumlahHariPerawatan');

    // Mendaftarkan event listener untuk setiap input
    pasienAwalInput.addEventListener('input', hitungJumlahPasienMasuk);
    pasienMasukInput.addEventListener('input', hitungJumlahPasienMasuk);
    pasienPindahanInput.addEventListener('input', hitungJumlahPasienMasuk);

    dipindahkanInput.addEventListener('input', hitungJumlahPasienKeluar);
    keluarhidupInput.addEventListener('input', hitungJumlahPasienKeluar);
    matiInput.addEventListener('input', hitungJumlahPasienKeluar);

    masihdirawatInput.addEventListener('input', hitungJumlahHariPerawatan);
    KeluarharisamaInput.addEventListener('input', hitungJumlahHariPerawatan);

    // Fungsi untuk menjumlahkan inputan dan menampilkan hasilnya
    function hitungJumlahPasienMasuk() {
        var pasienAwal = parseInt(pasienAwalInput.value) || 0;
        var pasienMasuk = parseInt(pasienMasukInput.value) || 0;
        var pasienPindahan = parseInt(pasienPindahanInput.value) || 0;
        var jumlahPasienMasuk = pasienAwal + pasienMasuk + pasienPindahan;
        jumlahPasienMasukOutput.value = jumlahPasienMasuk;

        hitungMasihDirawat();
        hitungJumlahHariPerawatan();
    }

    function hitungJumlahPasienKeluar() {
        var dipindahkan = parseInt(dipindahkanInput.value) || 0;
        var keluarhidup = parseInt(keluarhidupInput.value) || 0;
        var mati = parseInt(matiInput.value) || 0;
        var jumlahPasienKeluar = dipindahkan + keluarhidup + mati;
        jumlahPasienKeluarOutput.value = jumlahPasienKeluar;

        hitungMasihDirawat();
        hitungJumlahHariPerawatan();
    }

    function hitungMasihDirawat() {
        var jumlahPasienMasuk = parseInt(jumlahPasienMasukOutput.value) || 0;
        var jumlahPasienKeluar = parseInt(jumlahPasienKeluarOutput.value) || 0;
        var hitungMasihDirawat = jumlahPasienMasuk - jumlahPasienKeluar;
        masihdirawatInput.value = hitungMasihDirawat;

        hitungJumlahHariPerawatan();
    }

    function hitungJumlahHariPerawatan() {
    var masihdirawat = parseInt(masihdirawatInput.value) || 0;
    var keluarharisama = parseInt(KeluarharisamaInput.value) || 0;
    var jumlahHariPerawatan = masihdirawat + keluarharisama;
    jumlahHariPerawatanOutput.value = jumlahHariPerawatan;
}

</script>

                                            
                                       
                                        <hr>
                                        <button class="btn btn-primary btn-user btn-block"type="submit" class="fa fa-save"><b>Simpan</b> </button>
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

</body>

</html>