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
                                            <h1 class="h4 text-gray-900 mb-4">Perbaikan Indikator Kelas Rawat Inap</h1>
                                        </div>
                                        <?php foreach($rekap as $u) :?>
						                <form action="<?php echo base_url().'Amonetkelas/update'; ?>" method="post" class="user">
                                            <div class="form-group">
                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0"> 
                                                        <label>Kode kelas</label>                                      
                                                        <input type="hidden" class="form-control form-control-user" name="id" value="<?php echo $u->id ?>">
                                                        <input type="text" class="form-control form-control-user" name="kodekelas"required readonly
                                                        value ="<?php echo $u->kodekelas ?>">

                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label>Bulan</label> 
                                                        <input type="text" class="form-control form-control-user" name="bulan"  required readonly
                                                        value ="<?php echo $u->bulan ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <label>Kelas Perawatan</label> 
                                                        <input type="text" class="form-control form-control-user" name="namakelas" required readonly
                                                        value ="<?php echo $u->namakelas ?>">                                           
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label>Tempat Tidur</label> 
                                                        <input type="text" class="form-control form-control-user" readonly id="tempatTidur" name="tidur" required  readonly
                                                        value="<?php echo $u->tidur?>">                                      
                                                    </div>
                                                </div>
                                            </div>
                                            <table class="table table-bordered"  width="100%" cellspacing="0">
                                                <table class="table table-bordered table-striped"> 
                                                    <tr>
                                                        <th>Jumlah hari dalam periode bulan </th> 
                                                        <th>Pasien Masuk</th>
                                                        <th>Pasien Keluar Hidup</th>
                                                        <th>Pasien Keluar Mati</th>
                                                        <th>Jumlah Keluar Hidup + Mati</th>                                                                
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control" id="periodeHari" name="periode" required readonly
                                                            value ="<?php echo $u->periode?>">  
                                                        </td>
                                                        <td>
                                                            <input type="number" class="form-control "name="masuk"required
                                                             value ="<?php echo $u->masuk?>">
                                                        </td>
                                                        <td>
                                                            <input type="number" class="form-control" id="pasienhidup" name="keluar" required 
                                                             value="<?php echo $u->keluar?>">
                                                         </td>
                                                         <td>
                                                            <input type="number" class="form-control" id="pasienMati" name="mati" required 
                                                            value="<?php echo $u->mati?>">
                                                        </td>
                                                        <td>
                                                            <input type="number" class="form-control" id="jumlahPasienKeluar" name="jlhkeluar" required
                                                            value="<?php echo $u->jlhkeluar?>">
                                                        </td>                                           
                                                    </tr> 
                                                </table>
                                                <table class="table table-bordered table-striped">
                                                    <tr>                                                                                       
                                                        <th>Pasien Mati Kurang 48 Jam </th>
                                                        <th>Pasien Mati Lebih 48 Jam </th>
                                                        <th>Masukkeluar di hari yang sama</th>                                            
                                                        <th>Lama Dirawat </th>
                                                        <th>Hari Perawatan </th>                                                                                                          
                                                    </tr>                                  
                                                    <tr>
                                                        <td>
                                                            <input type="number" class="form-control "name="matikurang"required
                                                            value ="<?php echo $u->matikurang ?>">
                                                        </td>
                                                        <td>
                                                            <input type="number" class="form-control" id="matiLebih" name="matilebih" required 
                                                            value="<?php echo $u->matilebih?>">
                                                        </td>
                                                        <td>
                                                            <input type="number" class="form-control" name="masukkeluar" required
                                                            value ="<?php echo $u->masukkeluar?>">
                                                        </td>
                                                        <td> 
                                                            <input type="number" class="form-control" id="lamaDirawat" name="lama" required 
                                                            value="<?php echo $u->lama?>"> 
                                                        </td>
                                                        <td>
                                                            <input type="number" class="form-control" id="hariPerawatan" name="hp" required 
                                                            value="<?php echo $u->hp?>">
                                                             <input type="hidden" class="form-control" id="hariPerawatan" name="petugas" required 
                                                            value=" <?php echo $this->session->userdata('name'); ?> ">
                                                        </td>
                                                    </tr> 
                                                </table>
                                                <table class="table table-bordered table-striped">
                                                    <tr>                                                                                       
                                                        <th>BOR</th>
                                                        <th>AVLOS</th>
                                                        <th>TOI</th>                                            
                                                        <th>BTO</th>
                                                        <th>NDR</th>
                                                        <th>GDR</th>                                                                                                          
                                                    </tr>
                                                     <tr>
                                                        <td><input type="text"  id="jumlahbor"   class="form-control"  name="bor"    value ="<?php echo $u->bor ?>"   readonly></td>
                                                        <td><input type="text"  id="jumlahavlos" class="form-control " name="avlos"  value ="<?php echo $u->avlos ?>" readonly></td>
                                                        <td><input type="text"  id="jumlahToi"   class="form-control " name="toi"    value ="<?php echo $u->toi ?>"   readonly></td>
                                                        <td><input type="text"  id="totalBto"    class="form-control"  name="bto"    value ="<?php echo $u->bto ?>"   readonly></td> 
                                                        <td><input type="text"  id="jumlahNdr"   class="form-control " name="ndr"    value ="<?php echo $u->ndr ?>"   readonly></td>
                                                        <td><input type="text"  id="jumlahGdr"   class="form-control " name="gdr"    value ="<?php echo $u->gdr ?>"   readonly></td>
                                                    </tr>
                                                </table>                               
                                            </table>
                                            <div class="form-group">                               
                                                <div>                                    
                                                    <button class="btn btn-primary btn-user btn-block"type="submit" class="fa fa-save"><b>Update</b></button>
                                                </div>                                    
                                            <div class="text-center">                                  
                                                <a class="menium" href="<?= base_url();?>Amonetkelas"><b>Kembali</b></a>                                                               
                                            </div>                                                                         
                                        </form>
                                        <?php endforeach; ?>
                                    </div>
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
  
        var lamaDirawatInput    = document.getElementById("lamaDirawat");
        var jumlahPasienElement = document.getElementById("jumlahPasienKeluar");   
        var jumlahAvlosOutput   = document.getElementById("jumlahavlos");

        lamaDirawatInput.addEventListener("input", hitungJumlahAvlos);
        jumlahPasienElement.addEventListener("input", hitungJumlahAvlos);
        

        function hitungJumlahAvlos() {
            var lamaDirawat  = parseFloat(lamaDirawatInput.value) || 0;
            var jumlahPasien = parseFloat(jumlahPasienElement.value) || 0;
            

            var jumlahAvlos = (lamaDirawat / jumlahPasien) ;
            jumlahAvlosOutput.value = jumlahAvlos.toFixed(2);
        }
    </script>
    <!--Toi-->
    <script>
        var hariPerawatanInput  = document.getElementById("hariPerawatan");
        // var tempatTidurInput    = document.getElementById("tempatTidur");
        var tempatTidur = <?php echo $u->tidur ?>; // Nilai tempat tidur dari database
        var periodeHariInput    = document.getElementById("periodeHari");
        var jumlahPasienElement = document.getElementById("jumlahPasienKeluar");
        var jumlahToiOutput     = document.getElementById("jumlahToi");

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
  
        var matiLebihInput = document.getElementById("matiLebih");
        var jumlahPasienElement= document.getElementById("jumlahPasienKeluar");   
        var jumlahNdrOutput = document.getElementById("jumlahNdr");

        matiLebihInput.addEventListener("input", hitungJumlahNdr);
        jumlahPasienElement.addEventListener("input", hitungJumlahNdr);
        

        function hitungJumlahNdr() {
            var matiLebih    = parseFloat(matiLebihInput.value) || 0;
            var jumlahPasien = parseFloat(jumlahPasienElement.value) || 0;
            

            var jumlahNdr = ((matiLebih / jumlahPasien)*1000) ;
            jumlahNdrOutput.value = jumlahNdr.toFixed(2);
        }
    </script>

    <!--GDR-->
    <script>
    
        var pasienMatiInput = document.getElementById("pasienMati");
        var jumlahPasienElement= document.getElementById("jumlahPasienKeluar");   
        var jumlahGdrOutput = document.getElementById("jumlahGdr");

        pasienMatiInput.addEventListener("input", hitungjumlahGdr);
        jumlahPasienElement.addEventListener("input", hitungjumlahGdr);
        

        function hitungjumlahGdr() {
            var pasienMati    = parseFloat(pasienMatiInput.value) || 0;
            var jumlahPasien = parseFloat(jumlahPasienElement.value) || 0;
            

            var jumlahGdr = ((pasienMati / jumlahPasien)*1000) ;
            jumlahGdrOutput.value = jumlahGdr.toFixed(2);
        }
    </script>

<script>
    var pasienKeluarInput = document.getElementById("jumlahPasienKeluar");
    var tempatTidurInput = document.getElementById("tempatTidur");
    var totalBtoOutput = document.getElementById("totalBto");

    // Memanggil fungsi hitungTotalBto() secara otomatis saat halaman dimuat
   // document.addEventListener("DOMContentLoaded", function() {
   //     hitungTotalBto();
    //});

    pasienKeluarInput.addEventListener("input", hitungTotalBto);

    function hitungTotalBto() {
        var pasienKeluar = parseFloat(pasienKeluarInput.value) || 0;
        var tempatTidur = parseFloat(tempatTidurInput.value) || 0;

        var totalBto = (pasienKeluar / tempatTidur).toFixed(2); // Menggunakan toFixed() untuk membulatkan hasil menjadi 2 angka di belakang koma
        totalBtoOutput.value = totalBto;
    }
</script>


<script src="<?php echo base_url()?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 