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
                                        <table class="" id="" width="" cellspacing="0">                                    
                                        <form class = "form-inline">                                                                  
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <b><label for="staticEmail2">Bulan</label></b>
                                                    <select class="form-control" name="bulan"required >
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
                                                </div>                                      
                                                <div class="col-sm-6 mb-3 mb-sm-0"> 
                                                    <b><label for="staticEmail2">Tahun</label></b>
                                                        <select class="form-control" name="tahun"required >
                                                             <option value="">--pilih Tahun--</option>
                                                             <?php $tahun = date('Y');
                                                             for($i=2020; $i<$tahun+5;$i++){?>
                                                             <option value="<?php echo $i ?>"> <?php echo $i ?></option>
                                                             <?php }?>
                                                        </select><br>
                                                </div>
                                            </div>                                                                            
                                                <div class="form-group">  
                                                    <button type="submit" class="btn btn-success mb-2 "><i class='fas fa-pen'></i> pilih </button>
                                                </div>
                                            </div><br>                                            
                                        </form> 
                                    </div>                           
                                        <?php
                                            if((isset($_GET['bulan'])  && $_GET['bulan']!='')&&
                                            (isset($_GET['tahun'])  && $_GET['tahun']!='')){                                       
                                                $bulan    = $_GET['bulan'];
                                                $tahun    = $_GET['tahun'];                                            
                                                $kalender = $tahun. '-' .$bulan; 
                                           
                                            }else{  
                                                                    
                                                $kalender = "<font color='#ff0000'>Silihkan Pilih Bulan dan Tahun yang akan di Entri</font>";
                                            }
                                        ?>
                                    <div class="alert alert-info">
                                        Memilih Bulan :<span class="font-weight-bold"><?php echo $kalender?> 
                                    </div>
                             </div>                          

                                        <form action="<?php echo base_url()?>Rumahsakit/register" method="post" class="user">
                                         <div class="form-group row">                                            
                                         <input type="hidden" class="form-control" name="bulan" value ="<?php echo $kalender?>" required >                
                                        </div>                                                                        
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                     <label>Pasien Masuk</label>
                                                     <input type="number" class="form-control"name="masuk" required >
                                                 </div>
                                                <div class="col-sm-6">
                                                     <label>Pasien Keluar Hidup</label>
                                                    <input type="number" class="form-control"name="keluar"required>
                                                 </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <label>Pasien Meninggal</label>
                                                    <input type="number" class="form-control"name="mati"required>
                                                </div>                                        
                                                <div class="col-sm-6">
                                                    <label>Pasien Keluar Hidup dan Mati</label>
                                                    <input type="number" class="form-control"name="jlhkeluar"required >
                                                </div>
                                            </div>
                                     
                                            <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <label>Pasien Meninggal < 48 Jam</label>
                                                         <input type="number" class="form-control"name="matikurang"required>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label>Pasien Meninggal > 48 Jam</label>
                                                        <input type="number" class="form-control"name="matilebih"required >
                                                    </div>
                                            </div>
                                 
                                            <div class="form-group row">                                           
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                            <label>Lama Dirawat</label>
                                                            <input type="number" class="form-control"name="lama"required >
                                                    </div>
                                                    <div class="col-sm-6">
                                                            <label>Keluar Masuk Di Hari yang Sama</label>
                                                            <input type="number" class="form-control"name="daycare"required >
                                                    </div>
                                            </div>                                 
                                            <div class="form-group row">                                       
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <label>Hari Perawatan</label>
                                                        <input type="number" class="form-control"name="hp"required>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <label>Jumlah hari dalam periode bulan </label>
                                                        <select class="form-control" id="periodeHari" name="periode" required >
                                                            <option value="">--pilih --</option>
                                                            <option value="28">28</option>
                                                            <option value="29">29</option>
                                                            <option value="30">30</option>
                                                            <option value="31">31</option>                                                                                                  
                                                        </select>
                                                    </div>  
                                                </div>
                                            <div>
                                            <hr>
                                             <button class="btn btn-primary btn-user btn-block"type="submit" class="fa fa-save"><b>Simpan</b> </button>
                                             </div>
                                            </form>  
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url();?>Admin"><b>Kembali</b></a>
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