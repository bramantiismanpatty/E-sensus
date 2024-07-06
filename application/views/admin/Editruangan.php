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
                                 <div class="text-center"><h5 class="m-0 font-weight-bold text-primary">Edit Ruangan Perawatan</h5> </div>
                       
                                <?php foreach($ruang as $u) :?>
						        <form action="<?php echo base_url().'Atruangan/update'; ?>" method="post" class="user">                       
                                    <div class="form-group">                                   
                                         <label>Kode Ruangan</label>
                                         <input type="hidden" class="form-control" name="id" value="<?php echo $u->id ?>">
                                         <input type="text" class="form-control"name="koderuangan" required value ="<?php echo $u->koderuangan ?>">                                           
                                     </div>                                   
                               
                                     <div class="form-group">                                   
                                        <label>Nama Ruangan</label>	
                                        <input type="text" class="form-control" name="namaruangan" required value="<?php echo $u->namaruangan ?>">                                                                   
                                    </div>
                                                                  
                                    <div class="form-group">
                                   
                                        <label>Kelas Perawatan</label>
                                        <select class="form-control" name='namakelas'required > 
                                            <option value="<?php echo $u->namakelas ?>"><?php echo $u->namakelas ?></option>
                                            <?php foreach($kls as $n) :?>               
                                            <option value ="<?php echo $n->namakelas ?>"><?php echo $n->namakelas ?></option>                                                            
		                                    <?php endforeach ?> 
                                        </select>
                                    </div> 

                                    <div class="form-group">                                   
                                        <label>Tempat Tidur Tersedia</label>	
                                        <input type="text" class="form-control" name="tidur" required value="<?php echo $u->tidur?>">                                                                      
                                    </div>
                                                                                              
                                    <div class="form-group">                               
                                                                    
                                        <button class="btn btn-primary btn-user btn-block"type="submit" class="fa fa-save"><b>Update</b></button>
                                    </div>
                                      
                                                                 
                                        <button class="btn btn-success btn-user btn-block" <?= base_url();'Atruangan'?> class="fa fa-save"><b>Kembali</b></button>
                                     </div>                                
                                     </div>                                                                         
                                </form>
                                <?php endforeach; ?>
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