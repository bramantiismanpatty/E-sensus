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
                                            <h1 class="h4 text-gray-900 mb-4">Input Kelas Rawat</h1>
                                     </div>
                                
                                    <form action="<?php echo base_url()?>Dkelas/register" method="post" class="user">
                                
                                        <div class="form-group">
                                            <label>Kode Kelas</label>                                           
                                            <input type="text" class="form-control form-control-user"  name="kodekelas" value="<?php echo set_value('kode');?>"                                          
                                            placeholder="Masukan Kode Kelas Rawat">                                                                                                                    
                                         </div>                                        
                                         <div class="text-small text-danger"> <?php echo form_error('kodekelas'); ?></div>

                                     <div class="form-group">
                                     <label>Nama Kelas</label>    
                                        <input type="text" class="form-control form-control-user"  name="namakelas" value="<?php echo set_value('nama');?>"
                                        placeholder="Masukan Kelas Rawat">
                                     </div>
                                     <div class="text-small text-danger"> <?php echo form_error('namakelas'); ?></div>

                                     <div class="form-group">  
                                        <label>Tempat Tidur Tersedia</label>  
                                      <input type="text" class="form-control form-control-user"  name="tidur"value="<?php echo set_value('tidur');?>"
                                        placeholder="Masukan Jumlah Tempat tidur">
                                      </div>
                                      <div class="text-small text-danger"> <?php echo form_error('tidur'); ?></div>
                               
                                     <button class="btn btn-primary btn-user btn-block" value="simpan" type="submit" class="fa fa-save"><b> Save</b> </button>                                     
                                    </form>                            
                                    <div class="text-center">
                                    <a class="small" href="<?= base_url();?>Atkelas"><b>Kembali</b></a>
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
   