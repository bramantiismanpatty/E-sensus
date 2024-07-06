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
                                     <?php foreach($kls as $u) :?>
                                    <form action="<?php echo base_url()?>Atkelas/update" method="post" class="user">
                                
                                        <div class="form-group">
                                            <p>Kode Kelas</p>
                                            <input type="hidden" class="form-control form-control-user" name="id" value="<?php echo $u->id ?> " required>
                                            <input type="text" class="form-control form-control-user" name="kodekelas" value ="<?php echo $u->kodekelas?>" required>                                                                             
                                         </div>                                        
                                         

                                     <div class="form-group">
                                            <p>Kelas Rawat</p>
                                            <input type="text" class="form-control form-control-user" name="namakelas" value ="<?php echo $u->namakelas ?>" required>
                                        
                                     </div>
                                    

                                     <div class="form-group">
                                            <p>Jumlah Tempat tidur</p>
                                            <input type="text" class="form-control form-control-user" name="tidur"value="<?php echo $u->tidur ?>" required>                                       
                                      </div>
                                     
                               
                                     <button class="btn btn-primary btn-user btn-block" value="simpan" type="submit" class="fa fa-save"><b> Save</b> </button>                                     
                                    </form>                            
                                    <div class="text-center">
                                    <a class="small" href="<?= base_url();?>Atkelas"><b>Kembali</b></a>
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

   