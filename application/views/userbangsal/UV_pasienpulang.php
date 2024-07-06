
<body class="bg-gradient-success">
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
                                            <h1 class="h4 text-gray-900 mb-4"> Entri Pasien Keluar</h1>
                                        </div>
                                        <form action="<?php echo base_url()?>Umobilisasi/keluar" method="post" class="user">                               
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped">                                             
                                                 <?php foreach($keluar as $u) :?> 
                                                    <lable><b>Ruangan Asal</b> </lable> 
                                                    <tr>
                                                        <th>Nama Ruangan </th>                                        
                                                        <th>Kelas Perawatan</th>     
                                                        <th>tanggal masuk</th>                                                               
		                                            </tr>
                                                    <tr>                                  
                                                        <td>
                                                            <input type="hidden" class="form-control" name="koderuangan" required readonly
                                                                value="<?php echo $u->koderuangan?>" >                                      
                                                            <input type="text" class="form-control" name="namaruangan" required readonly
                                                            value="<?php echo $u->namaruangan?>" >                                   
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="namakelas" required readonly
                                                            value="<?php echo $u->namakelas?>" >
                                                            <input type="hidden" class="form-control" name="petugas" required readonly
                                                            value="<?php echo $this->session->userdata('name'); ?>" >
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" id="tanggalMasuk"name="tgl_masuk" required readonly
                                                            value="<?php echo $u->tgl_masuk?>">                                        
                                                        </td>                                      
                                                    </tr>                                   
                                                </table>
                                                <?php endforeach ?> <hr>   
                                                <table class="table table-bordered table-striped"> 
                                                    <tr>
                                                        <th> Momor Rekam Medis </th>
                                                        <th>Nomor Regustrasi</th>
                                                        <th>Nama Pasien</th> 
                                                    </tr>
                                                    <tr>         
                                                        <td> 
                                                            <input type="number" class="form-control" name="nomorm" required readonly
                                                             value="<?php echo $u->nomorm?>">   
                                                        </td>
                                                        <td> 
                                                            <input type="text" class="form-control" id="pasienhidup" name="reg" required readonly
                                                            value="<?php echo $u->reg?>">  
                                                            <input type="hidden" class="form-control" id="masukkeluar" name="masukkeluar" required readonly
                                                            value="0">   
                                                        </td> 
                                                        <td> 
                                                            <input type="text" class="form-control" id="jumlahPasienKeluar" name="namapasien" required required readonly
                                                             value="<?php echo $u->namapasien?>"> 
                                                            <input type="hidden" class="form-control" id="jumlahPasienKeluar" name="carabayar" required required readonly
                                                             value="<?php echo $u->carabayar?>">   
                                                        </td>                                                                                                         
                                                    </tr>
                                                </table>                                               
                                                 <hr> <hr>
                                                <table class="table table-bordered table-striped"> 
                                                    <tr>
                                                        <th>Tanggal Keluar</th>
                                                        <th>Cara Keluar   </th>
                                                        <th>Keadaan Keluar</th> 
                                                    </tr>
                                                        <td>
                                                            <input type="date" class="form-control" id="tanggalKeluar" name="tgl_keluar" required>
                                                            <input type="hidden" class="form-control" id="lama" name='lamarawat' value='0' required readonly>       
                                                        </td>
                                                        <td>
                                                            <select class="form-control" id="carakeluar" name='carakeluar' required onchange="updateKeadaanKeluar()"> 
                                                                <option value="">Pilih Cara Keluar</option>                                                                                                                    
                                                                <option value="hidup">Hidup</option>                                                                
                                                                <option value="meninggal">Meninggal</option> 
                                                            </select> 
                                                        </td> 
                                                        <td>
                                                            <select class="form-control" id="keadaankeluar" name='keadaankeluar' required> 
                                                                <option value="">Pilih Kondisi</option>                                                                                                                    
                                                                <option value="sembuh">Sembuh</option>
                                                                <option value="kontrol">Kontrol Rawat Jalan</option> 
                                                                <option value="rujuk">Dirujuk ke RS lain</option>                                                               
                                                                <option value="pulang_paksa">Pulang Paksa</option>
                                                                <option value="meninggal_kurang_48_jam">Meninggal kurang dari 48 jam</option>
                                                                <option value="meninggal_lebih_48_jam">Meninggal lebih dari 48 jam</option>                                                              
                                                            </select>                 
                                                        </td>                                          
                                                    </tr>                                                
                                                </table>                                     
                                                <hr> <hr>
                                                <div class="text-center">
                                                    <button class="btn btn-primary btn-user btn-block"type="submit" class="fa fa-save"><b>Simpan</b> </button>
                                                </div>
                                                <div class="text-center">
                                                    <a class="medium" href="<?= base_url();?>Umobilisasi"><b>Kembali</b></a>
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
        </div>
    </div> 

    <script>
        function updateKeadaanKeluar() {
        var carakeluar = document.getElementById("carakeluar").value;
        var keadaankeluar = document.getElementById("keadaankeluar");

        // Reset opsi
        keadaankeluar.innerHTML = '<option value="">Pilih Kondisi</option>';

        // Tambahkan opsi berdasarkan pilihan "Cara Keluar"
        if (carakeluar === "hidup") {
            keadaankeluar.innerHTML += '<option value="sembuh">Sembuh</option>';
            keadaankeluar.innerHTML += '<option value="kontrol">Kontrol Rawat Jalan</option>';
            keadaankeluar.innerHTML += '<option value="rujuk">Dirujuk ke RS lain</option>';
            keadaankeluar.innerHTML += '<option value="pulang_paksa">Pulang Paksa</option>';
        } else if (carakeluar === "meninggal") {
            keadaankeluar.innerHTML += '<option value="meninggal_kurang_48_jam">Meninggal kurang dari 48 jam</option>';
            keadaankeluar.innerHTML += '<option value="meninggal_lebih_48_jam">Meninggal lebih dari 48 jam</option>';
        }
    }
    </script>           
    
   
   

   


<!-- ... existing HTML code ... -->

<script>
    document.getElementById('tanggalKeluar').addEventListener('change', function () {
        // Get the selected date from the 'tgl_pindah' input
        var tanggalKeluar = new Date(this.value);

        // Get the date from the 'tgl_masuk' input
        var tanggalMasuk = new Date("<?php echo $u->tgl_masuk ?>");

        // Calculate the difference in days
        var differenceInDays = Math.floor((tanggalKeluar - tanggalMasuk) / (1000 * 60 * 60 * 24));

        // Update the 'lamaRawat' input with the calculated difference
        document.getElementById('lama').value = (differenceInDays <= 0) ? 1 : differenceInDays;
    });
</script>

<script>
   document.getElementById('tanggalKeluar').addEventListener('change', function () {
    // Get the selected date from the 'tgl_pindah' input
    var tanggalKeluar = new Date(this.value);

    // Get the date from the 'tgl_masuk' input
    var tanggalMasuk = new Date("<?php echo $u->tgl_masuk ?>");

    // Check if 'tgl_pindah' is equal to 'tgl_masuk'
    var isTglPindahEqualTglMasuk = tanggalKeluar.toDateString() === tanggalMasuk.toDateString();

    // Update the 'masukkeluar' input based on the condition
    document.getElementById('masukkeluar').value = isTglPindahEqualTglMasuk ? 1 : 0;
});

</script>

    

</body>

</html>