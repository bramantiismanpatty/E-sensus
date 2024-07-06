
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
                                        <h1 class="h4 text-gray-900 mb-4">Entri Pasien Pindah Ruangan</h1>
                                        </div>                                        
                                        <form action="<?php echo base_url()?>Aps_ranap/dipindahkan" method="post" class="user">                               
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped">                                              
                                                    <?php foreach($pindah as $u) :?> 
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
                                                        </td> 
                                                        <td> 
                                                            <input type="text" class="form-control" id="jumlahPasienKeluar" name="namapasien" required required readonly
                                                             value="<?php echo $u->namapasien?>"> 
                                                            <input type="hidden" class="form-control" id="jumlahPasienKeluar" name="carabayar" required required readonly
                                                             value="<?php echo $u->carabayar?>"> 
                                                             <input type="hidden" class="form-control" id="masukkeluar" name="masukkeluar" required readonly
                                                            value="0">     
                                                        </td>                                                                                                         
                                                    </tr>
                                                </table>
                                                <hr> <hr>
                                                <lable><b>Ruangan Tujuan Dipindahkan</b></lable> 
                                                <table class="table table-bordered table-striped">  
                                                    <tr>
                                                        <th>Tanggal Pindah</th>                                        
                                                        <th>Nama Ruangan Dipindahkan </th>     
                                                        <th>Kelas </th>                                                              
		                                            </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="date" class="form-control" id="tanggalPindah" name="tgl_pindah" required>
                                                            <input type="hidden" class="form-control" id="lama" name='lamarawat' value='0' required readonly>  
                                                        </td>
                                                        <td>
                                                            <select class="form-control" id="namaruanganpindah" name='namaruanganpindah' required> 
                                                                    <option value="">Pilih Ruangan</option>
                                                                    <?php foreach($mutasi as $p) :?>                                                            
                                                                        <option value ="<?php echo $p->namaruangan ?>"><?php echo $p->namaruangan ?></option> 
                                                                    <?php endforeach ?>   
                                                            </select>                                            
                                                        </td>
                                                        <td>
                                                            <input type="hidden" class="form-control" id="koderuanganpindah" name="koderuanganpindah" required readonly 
                                                            value = '-'>
                                                            <input type="text" class="form-control"   id="namakelaspindah"   name="namakelaspindah" required readonly 
                                                            value = '-' >
                                                        </td>
                                                    </tr>  
                                                </table>                                         
                                                <hr>
                                                <div class="text-center">
                                                    <button class="btn btn-primary btn-user btn-block"type="submit" class="fa fa-save"><b>Simpan</b> </button>
                                                </div>
                                                <div class="text-center">
                                                    <a class="small" href="<?= base_url();?>Aps_ranap"><b>Kembali</b></a>
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
    
    <!-- Tampilkan modal jika ada pesan kesalahan -->
    <?php if($this->session->flashdata('error_message')): ?>
        <div id="errorModal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Error</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
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
                <div class="modal-body m-0 font-weight-bold text-white">
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

    


<!-- ... existing HTML code ... -->

<script>
document.getElementById('tanggalPindah').addEventListener('change', function () {
    // Get the selected date from the 'tanggalPindah' input
    var tanggalPindah = new Date(this.value);

    // Get the date from the 'tanggalMasuk' input
    var tanggalMasuk = new Date("<?php echo $u->tgl_masuk ?>");

    // Calculate the difference in days
    var differenceInDays = Math.floor((tanggalPindah - tanggalMasuk) / (1000 * 60 * 60 * 24));

    // Update the 'lamaRawat' input with the calculated difference
    document.getElementById('lama').value = (differenceInDays <= 0) ? 1 : differenceInDays;

    // Update the 'masukkeluar' input with the calculated difference
    if (differenceInDays <= 0) {
        document.getElementById('masukkeluar').value = 1;
    } else {
        document.getElementById('masukkeluar').value = differenceInDays;
     }
});
</script>

<script>
    document.getElementById('namaruanganpindah').addEventListener('change', function() {
        // Ambil nilai yang dipilih dari dropdown namaruanganpindah
        var selectedOption = this.value;

        // Cari data ruangan yang sesuai dengan opsi yang dipilih
        var selectedRuangan = <?php echo json_encode($mutasi); ?>.find(function(ruangan) {
            return ruangan.namaruangan === selectedOption;
        });

        // Jika data ruangan ditemukan, perbarui nilai kolom Kode Ruangan dan Nama Kelas
        if (selectedRuangan) {
            document.getElementById('koderuanganpindah').value = selectedRuangan.koderuangan;
            document.getElementById('namakelaspindah').value = selectedRuangan.namakelas;
        } else {
            // Jika tidak ditemukan, kosongkan nilai kolom Kode Ruangan dan Nama Kelas
            document.getElementById('koderuanganpindah').value = '';
            document.getElementById('namakelaspindah').value = '';
        }
    });
</script>

<script src="<?php echo base_url()?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 