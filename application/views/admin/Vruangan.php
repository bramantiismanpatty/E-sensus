<body class="bg-gradient-primary">

    <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                     <div class="card-body p-0">
                     <!-- Nested Row within Card Body -->
                         <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Entri Ruang Perawatan</h1>
                                        </div>
                            
                                        <form action="<?php echo base_url()?>Druangan/registrasi" method="post" class="user">                                
                                            <div class="form-group">
                                                <label>Kode Ruangan</label>
                                                <input type="text" class="form-control" name="koderuangan" required >
                                            </div>                                            

                                            <div class="form-group">
                                                <label>Nama Ruangan</label>
                                                <input type="text" class="form-control" name="namaruangan"  required >
                                        </div>
                                       
                                        <div class="form-group">
                                                <label>Kelas Perawatan</label>
                                                <select class="form-control" name='namakelas'required > 
                                                    <option value="">--pilih Kelas--</option>
                                                    <?php foreach($kls as $u) :?>               
                                                    <option value ="<?php echo $u->namakelas ?>"><?php echo $u->namakelas ?></option>                                                            
		                                            <?php endforeach ?> 
                                                </select>
                                        </div>

                                        <div class="form-group">
                                                <label>Tempat Tidur Tersedia</label>
                                                <input type="number" class="form-control" name="tidur"  required >
                                        </div>
                                       
                                        <button class="btn btn-primary btn-user btn-block"type="submit" class="fa fa-save"><b>Simpan</b> </button>
                                        </form>                            
                                    <div class="text-center">
                                    <a class="small" href="<?= base_url();?>Atruangan"><b>Kembali</b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    </div>

    <script src="<?php echo base_url()?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 