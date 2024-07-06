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
                                    <h1 class="h4 text-gray-900 mb-4">Perbaikan Sensus Harian Rawat Inap</h1>
                                     </div>
                       <?php foreach($sensus as $u) :?>
						<form action="<?php echo base_url().'sensus5/update'; ?>" method="post" class="user">
                            <div class="form-group row">
                                <div class="col-sm-3 mb-3 mb-sm-0">
                                    <label>Kode Ruangan</label>
                                    <input type="hidden" class="form-control" name="id" value="<?php echo $u->id ?>">
                                    <input type="text" class="form-control" name="kode" readonly 
                                    value ="<?php echo $u->kode ?>">
                                </div>
                                <div class="col-sm-3">
                                    <label>Ruang Perwatan</label>
                                    <input type="text" class="form-control" name=" ruangan"readonly 
                                    value ="<?php echo $u->ruangan ?>">
                                </div>
                                <div class="col-sm-3">
                                    <label>Kelas Perwatan</label>
                                    <input type="text" class="form-control" id="exampleInputEmail"name="nama" readonly 
                                    value ="<?php echo $u->nama ?>">
                                </div>
                                <div class="col-sm-3">
                                    <label>Jumlah Tempat Tidur</label>
                                    <input type="number" class="form-control" name=" tidur" readonly 
                                    value ="<?php echo $u->tidur ?>">
                                </div>   
                                </div>
                                <div class="col-sm-3 mb-3 mb-sm-0">
                                    <label>Tanggal Sensus Rawat Inap</label>
                                    <input type="date" class="form-control"name="tanggal"readonly 
                                    value ="<?php echo $u->tanggal ?>">
                                </div>
                                <b>
                                <hr>
                                <hr>
                                </b>
                                <div class="form-group row">
                                <div class="col-sm-3 mb-3 mb-sm-0">
                                    <label>Pasien Awal</label>
                                    <input type="number" class="form-control" id="pasienAwal" name="awal" required 
                                    value ="<?php echo $u->awal?>" >
                                </div>
                                <div class="col-sm-3">
                                    <label>Pasien Masuk</label>
                                    <input type="number" class="form-control" id="pasienMasuk" name="masuk" required
                                    value ="<?php echo $u->masuk?>" >
                                </div>
                                <div class="col-sm-3">
                                    <label>Pasien Pindahan</label>
                                    <input type="number" class="form-control" id="pasienPindahan" name="pindahan" required 
                                    value ="<?php echo $u->dipindahkan ?>" >
                                </div>
                                <div class="col-sm-3">
                                    <label>Jumlah Pasien Masuk</label>
                                    <input type="number" class="form-control" id="jumlahPasienMasuk" name="jlhmasuk" readonly 
                                    value ="<?php echo $u->jlhmasuk ?>" >
                                </div>
                                </div>
                                <div class="form-group row">
                                <div class="col-sm-3 mb-3 mb-sm-0">                                           
                                    <label>Pasien Di Pindahkan</label>
                                    <input type="number" class="form-control" id="dipindahkan" name="dipindahkan" required 
                                    value ="<?php echo $u->dipindahkan ?>" >
                                </div>
                                <div class="col-sm-3">
                                    <label>Pasien Keluar Hidup</label>
                                    <input type="number" class="form-control" id="keluarhidup" name="keluar" required  
                                    value ="<?php echo $u->keluar ?>" >  
                                </div>
                                <div class="col-sm-3">
                                    <label>Pasien Meninggal</label>
                                    <input type="number" class="form-control" id="mati" name="mati" required 
                                    value ="<?php echo $u->mati ?>" >
                                </div>
                                <div class="col-sm-3">
                                    <label>Jlh.keluar hidup+mati</label>
                                    <input type="number" class="form-control" id="jumlahPasienKeluar" name="jlhkeluar" readonly 
                                    value ="<?php echo $u->jlhkeluar ?>" >
                                </div>
                                </div>
                                <hr>                                   
                                
                                <div class="form-group row">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <label>Pasien Meninggal < 48 Jam</label>
                                    <input type="number" class="form-control"  id="#" name="matikurang" required
                                    value ="<?php echo $u->matikurang ?>" >
                                </div>
                                <div class="col-sm-4">
                                    <label>Pasien Meninggal > 48 Jam</label>
                                    <input type="number" class="form-control"  id="#" name="matilebih"required 
                                    value ="<?php echo $u->matilebih ?>" >
                                </div>
                                <div class="col-sm-4">
                                    <label>Masih Dirawat</label>
                                    <input type="number" class="form-control" id="masihdirawat" name="sisa" readonly 
                                    value ="<?php echo $u->sisa ?>" >
                                </div>
                                </div>
                                <hr>
                                            
                                <div class="form-group row">                                       
                                <div class="col-sm-4 mb-3 mb-sm-0">    
                                    <label>Masuk keluar Hari yang Sama</label>
                                    <input type="number" class="form-control" id="keluarharisama" name="daycare" required 
                                    value ="<?php echo $u->daycare ?>" >
                                </div>
                                <div class="col-sm-4">
                                    <label>Lama Dirawat</label>
                                    <input type="number" class="form-control"name="lama"required id="#" 
                                    value ="<?php echo $u->lama ?>" >
                                </div>
                                <div class="col-sm-4">
                                    <label>Hari Perawatan</label>
                                    <input type="number" class="form-control" id="jumlahHariPerawatan" name="hp" readonly  
                                    value ="<?php echo $u->hp ?>" >
                                    <input type="hidden" class="form-control" id="jumlahHariPerawatan" name="petugas" readonly  
                                    value =" <?php echo $this->session->userdata('name'); ?> " >
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
                                        
                                
                                <div class="form-group row">                               
                                    <div>                                    
                                    <button class="btn btn-primary btn-user btn-block"type="submit" class="fa fa-save"><b>Update</b></button>
                                     </div>
                                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
                                     <div>                                    
                                    <button class="btn btn-dark btn-user btn-block" <?= base_url();'sensus05'?> class="fa fa-save"><b>Kembali</b></button>
                                     </div>                                
                                </div>                                                                         
                        </form>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
        

    <script src="<?php echo base_url()?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 