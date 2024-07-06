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
                                        <h1 class="h4 text-gray-900 mb-4">Entri Indikator Rumah Sakit</h1>
                                    </div>
                                    <div class="card-body">  
                                        <form>
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped"> 
                                                    <tr>
                                                        <th><b>Bulan</b></th>
                                                        <th><b>Tahun</b></th>                                                   
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <select class="form-control" id="bulan" name="bulan" required >
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
                                                            <select class="form-control" id="tahun"  name="tahun" required >
                                                                    <option value="">--pilih Tahun--</option>
                                                                    <?php $tahun = date('Y');
                                                                    for($i=2020; $i<$tahun+5;$i++){?>
                                                                    <option value="<?php echo $i ?>"> <?php echo $i ?></option>
                                                                    <?php }?>
                                                            </select><br>
                                                        </td>                                         
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4">
                                                            <button type="submit" class="btn btn-success mb-2"><i class='fas fa-pen'></i> pilih</button>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </form>                      
                                    </div>                           
                                    <?php
                                        if((isset($_GET['bulan'])  && $_GET['bulan']!='')&&
                                        (isset($_GET['tahun'])  && $_GET['tahun']!='')){                                       
                                            $bulan    = $_GET['bulan'];
                                            $tahun    = $_GET['tahun'];                                            
                                            $kalender = $tahun . '-' . $bulan . '-' . '01'; 
                                        }else{  
                                            $bulan = date('m') ;
                                            $tahun= date('Y') ;                     
                                            $kalender = $tahun . '-' . $bulan . '-' . '01'; 
                                        }
                                    ?>
                                    <div class="alert alert-info">
                                        Memilih Bulan :<span class="font-weight-bold"><?php echo $kalender?> 
                                    </div>                                                      
                                    <form action="<?php echo base_url()?>Adatarumahsakit/register" method="post" class="user">
                                    <?php if(isset($hasil_rekap) && $hasil_rekap !== false): ?>  
                                        <div class="table-responsive">                               
                                            <table class="table table-bordered"  width="100%" cellspacing="0">
                                                <table class="table table-bordered table-striped"> 
                                                    <tr>
                                                        <th>Bulan / Tahun</th>
                                                        <th>Jumlah hari dalam periode bulan </th>                                       
                                                        <th>Tempat Tidur Tersedia</th>
                                                        <th> Pasien Masuk </th>	                            
		                                            </tr>
                                                    <tr>                                 
                                                        <td> 
                                                            <input type="text" class="form-control" id="tahunBulan" name="bulan" readonly required 
                                                            value ="<?php echo $kalender?>"  >                                     
                                                        </td>
                                                        <td> 
                                                            <input type="text" class="form-control" id="periodeHari" name="periode" required readonly
                                                            value ="-" >                                            
                                                        </td>
                                                        <td>                                             
                                                            <input type="text" class="form-control" readonly id="tempatTidur" name="tidur" required  value ="<?php echo $jumlah;?>">
                                                        </td>
                                                        <td> 
                                                            <input type="number" class="form-control" name="masuk" required
                                                            value="<?php echo $hasil_rekap['total_masuk']; ?>" >
                                                        </td>
                                                    </tr>
                                                </table>
                                                <table class="table table-bordered table-striped"> 
                                                    <tr>                                        
                                                        <th>Pasien Keluar Hidup</th> 
                                                        <th>Pasien Meninggal</th>                                       
                                                        <th>Meninggal kurang 48 jam</th>
                                                        <th>Meninggal Lebih 48 jam</th>                                      
                                                    </tr>
                                                    <tr>                                
                                                        <td> 
                                                            <input type="number" class="form-control" id="pasienhidup" name="keluar" required readonly
                                                                value="<?php echo $hasil_rekap['total_keluar']; ?>" >
                                                        </td>
                                                        <td> 
                                                            <input type="number" class="form-control" id="pasienMati" name="mati" required readonly
                                                                value="<?php echo $hasil_rekap['total_mati']; ?>" >
                                                        </td>                                            
                                                        <td> 
                                                            <input type="number" class="form-control"name="matikurang"required readonly
                                                                value="<?php echo $hasil_rekap['total_matikurang']; ?>" >
                                                        </td>     
                                                        <td> 
                                                            <input type="number" class="form-control" id="matiLebih" name="matilebih"required readonly
                                                                value="<?php echo $hasil_rekap['total_matilebih']; ?>" >
                                                        </td>                                           
                                                    </tr>
                                                </table>
                                                <table class="table table-bordered table-striped"> 
                                                    <tr>
                                                        <th>Pasien Keluar hidup + Meninggal</th> 
                                                        <th>Keluar Masuk Di Hari yang Sama </th>
                                                        <th>Lama Dirawat</th> 
                                                        <th>Hari Perawatan</th>                                                                               
                                                     </tr>
                                                     <tr>
                                                        <td> 
                                                            <input type="text" class="form-control" id="jumlahPasienKeluar" name="jlhkeluar" required readonly
                                                            value="<?php echo $hasil_rekap['total_jlhkeluar']; ?>" >
                                                        </td> 
                                                        <td> 
                                                            <input type="number" class="form-control"name="masukkeluar"required readonly
                                                            value="<?php echo $hasil_rekap['total_masukkeluar']; ?>" >
                                                        </td>
                                                        <td> 
                                                            <input type="number" class="form-control" id="lamaDirawat" name="lama" required readonly
                                                            value="<?php echo $hasil_rekap['total_lama']; ?>" >
                                                        </td>
                                                        <td> 
                                                            <input type="number" class="form-control" id="hariPerawatan" name="hp" required readonly
                                                            value="<?php echo $hasil_rekap['total_hp']; ?>" >
                                                            <input type="hidden" class="form-control" id="hariPerawatan" name="petugas" required readonly
                                                            value="<?php echo $this->session->userdata('name'); ?>">
                                                        </td>
                                                    </tr>
                                                </table>
                                                <?php else: ?>
                                                <p>Belum ada bulan yang dipilih.</p>
                                                <?php endif; ?>
                                                <table class="table table-bordered table-striped"> 
                                                    <tr> 
                                                        <th>BOR</th>
                                                        <th>AvLOS</th>
                                                        <th>TOI</th> 
                                                        <th>BTO</th>                                      
                                                        <th>NDR</th>
                                                        <th>GDR</th>       
                                                     </tr>
                                                     <tr>
                                                        <td class="text-center" width="10%"> <input type="text"  id="jumlahbor"   class="form-control"     name="bor"     readonly value="0" ></td>
                                                        <td class="text-center" width="10%"> <input type="text"  id="jumlahavlos" class="form-control "    name="avlos"   readonly value="0" ></td>
                                                        <td class="text-center" width="10%"> <input type="text"  id="jumlahToi"   class="form-control "    name="toi"     readonly value="0" ></td> 
                                                        <td class="text-center" width="10%"> <input type="Text"  id="totalBto"    class="form-control"     name="bto"     readonly value="0"  ></td>                                          
                                                        <td class="text-center" width="10%"> <input type="text"  id="jumlahNdr"   class="form-control "    name="ndr"     readonly value="0" ></td>
                                                        <td class="text-center" width="10%"> <input type="text"  id="jumlahGdr"   class="form-control "    name="gdr"     readonly value="0" ></td>
                                                     </tr>
                                                </table>
                                            </table>
                                        </div>                                        
                                        <hr>
                                        <div class="text-center">
                                             <button class="btn btn-primary btn-user btn-block"type="submit" class="fa fa-save"><b>Simpan</b> </button>
                                        </div>
                                        <div class="text-center">
                                            <a class="small" href="<?= base_url();?>admin"><b>Kembali</b></a>
                                        </div>
                                     </form>                                   
                                </div>                                    
                            </div>                                 
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </div>
     
         
   <!-- bor-->
   <script>
    // Menunggu halaman selesai dimuat
        document.addEventListener("DOMContentLoaded", function() {
        // Memanggil fungsi hitungJumlahBor() secara otomatis
        hitungJumlahBor();
    });

    var hariPerawatanInput = document.getElementById("hariPerawatan");
    var tempatTidurInput   = document.getElementById("tempatTidur");
    var periodeHariInput   = document.getElementById("periodeHari");
    var jumlahborOutput    = document.getElementById("jumlahbor");

    hariPerawatanInput.addEventListener("input", hitungJumlahBor);
    tempatTidurInput.addEventListener("input", hitungJumlahBor);
    periodeHariInput.addEventListener("change", hitungJumlahBor);

    function hitungJumlahBor() {
        var hariPerawatan = parseFloat(hariPerawatanInput.value) || 0;
        var tempatTidur   = parseFloat(tempatTidurInput.value) || 0;
        var periodeHari   = parseFloat(periodeHariInput.value) || 0;

        var jumlahBor = (hariPerawatan / (tempatTidur * periodeHari)) * 100;
        jumlahborOutput.value = jumlahBor.toFixed(2);
    }
</script>

<!--Avlos-->
<script>
    // Menunggu halaman selesai dimuat
    document.addEventListener("DOMContentLoaded", function() {
        // Memanggil fungsi hitungJumlahAvlos() secara otomatis
        hitungJumlahAvlos();
    });

    var lamaDirawatInput    = document.getElementById("lamaDirawat");
    var jumlahPasienElement = document.getElementById("jumlahPasienKeluar");   
    var jumlahAvlosOutput   = document.getElementById("jumlahavlos");

    lamaDirawatInput.addEventListener("input", hitungJumlahAvlos);
    jumlahPasienElement.addEventListener("input", hitungJumlahAvlos);

    function hitungJumlahAvlos() {
        var lamaDirawat  = parseFloat(lamaDirawatInput.value) || 0;
        var jumlahPasien = parseFloat(jumlahPasienElement.value) || 0;

        var jumlahAvlos = (lamaDirawat / jumlahPasien);
        jumlahAvlosOutput.value = jumlahAvlos.toFixed(2);
    }
</script>

<!--Toi-->
<script>
    var hariPerawatanInput  = document.getElementById("hariPerawatan");
    var tempatTidurInput    = document.getElementById("tempatTidur");
    var periodeHariInput    = document.getElementById("periodeHari");
    var jumlahPasienElement = document.getElementById("jumlahPasienKeluar");
    var jumlahToiOutput     = document.getElementById("jumlahToi");

    // Memanggil fungsi hitungJumlahToi() secara otomatis saat halaman dimuat
    document.addEventListener("DOMContentLoaded", function() {
        hitungJumlahToi();
    });

    hariPerawatanInput.addEventListener("input", hitungJumlahToi);
    tempatTidurInput.addEventListener("input", hitungJumlahToi);
    periodeHariInput.addEventListener("change", hitungJumlahToi);
    jumlahPasienElement.addEventListener("input", hitungJumlahToi);

    function hitungJumlahToi() {
        var hariPerawatan = parseFloat(hariPerawatanInput.value) || 0;
        var tempatTidur   = parseFloat(tempatTidurInput.value) || 0;
        var periodeHari   = parseFloat(periodeHariInput.value) || 0;
        var jumlahPasien  = parseFloat(jumlahPasienElement.value) || 0;

        var jumlahToi = (((tempatTidur * periodeHari) - hariPerawatan) / jumlahPasien);
        jumlahToiOutput.value = jumlahToi.toFixed(2);
    }
</script>

<!--NDR-->
<script>
    var matiLebihInput       = document.getElementById("matiLebih");
    var jumlahPasienElement  = document.getElementById("jumlahPasienKeluar");   
    var jumlahNdrOutput      = document.getElementById("jumlahNdr");

    matiLebihInput.addEventListener("input", hitungJumlahNdr);
    jumlahPasienElement.addEventListener("input", hitungJumlahNdr);

    document.addEventListener("DOMContentLoaded", function() {
        hitungJumlahNdr();
    });


    function hitungJumlahNdr() {
        var matiLebih    = parseFloat(matiLebihInput.value) || 0;
        var jumlahPasien = parseFloat(jumlahPasienElement.value) || 0;

        var jumlahNdr = ((matiLebih / jumlahPasien) * 1000);
        jumlahNdrOutput.value = jumlahNdr.toFixed(2);
    }
</script>

<!--GDR-->
<script>
    var pasienMatiInput      = document.getElementById("pasienMati");
    var jumlahPasienElement  = document.getElementById("jumlahPasienKeluar");   
    var jumlahGdrOutput      = document.getElementById("jumlahGdr");

    pasienMatiInput.addEventListener("input", hitungJumlahGdr);
    jumlahPasienElement.addEventListener("input", hitungJumlahGdr);

    document.addEventListener("DOMContentLoaded", function() {
        hitungJumlahGdr();
    });

    function hitungJumlahGdr() {
        var pasienMati    = parseFloat(pasienMatiInput.value) || 0;
        var jumlahPasien = parseFloat(jumlahPasienElement.value) || 0;

        var jumlahGdr = ((pasienMati / jumlahPasien) * 1000);
        jumlahGdrOutput.value = jumlahGdr.toFixed(2);
    }
</script>

<!--BTO-->
<script>
    var pasienKeluarInput = document.getElementById("jumlahPasienKeluar");
    var tempatTidurInput = document.getElementById("tempatTidur");
    var totalBtoOutput = document.getElementById("totalBto");

    // Memanggil fungsi hitungTotalBto() secara otomatis saat halaman dimuat
    document.addEventListener("DOMContentLoaded", function() {
        hitungTotalBto();
    });

    pasienKeluarInput.addEventListener("input", hitungTotalBto);

    function hitungTotalBto() {
        var pasienKeluar = parseFloat(pasienKeluarInput.value) || 0;
        var tempatTidur = parseFloat(tempatTidurInput.value) || 0;

        var totalBto = (pasienKeluar / tempatTidur).toFixed(2); // Menggunakan toFixed() untuk membulatkan hasil menjadi 2 angka di belakang koma
        totalBtoOutput.value = totalBto;
    }
</script>

<!--/////////////////////////////////////////////////////////////////////////////////////////-->
                                   
                                          
    <script>
    // Fungsi untuk menghitung jumlah hari dalam sebuah bulan
    function getDaysInMonth(tahun, bulan) {
        return new Date(tahun, bulan, 0).getDate();
    }

    // Fungsi untuk memperbarui jumlah hari berdasarkan masukan tahun dan bulan
    function updateDays() {
        var nilaiTahunBulan = document.getElementById("tahunBulan").value;
        var tahunBulan = nilaiTahunBulan.split("-"); // Mengasumsikan $kalender dalam format "YYYY-MM"
        var tahun = parseInt(tahunBulan[0]);
        var bulan = parseInt(tahunBulan[1]);

        var jumlahHari = getDaysInMonth(tahun, bulan);

        document.getElementById("periodeHari").value = jumlahHari;
    }

    // Panggil fungsi updateDays saat memuat halaman dan setiap kali nilai tahunBulan berubah
    updateDays();
    document.getElementById("tahunBulan").addEventListener("input", updateDays);
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