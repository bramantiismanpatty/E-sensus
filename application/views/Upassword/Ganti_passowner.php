<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
          <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                     <div class="card-body p-5">
                     <!-- Nested Row within Card Body -->
                         <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">                                    
                                     <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Ubah Password</h1>
                                     </div>
									<form method="post" action="<?php echo base_url()?>Gpassowner/aksi">
									    <div class="form-group">
                                            <p>Password Baru</p>									
											<input type="password" class="form-control form-control-user" name="passbaru" id="name" placeholder="New Password"/>
									    </div>
                                        <div class="text-small text-danger"> <?php echo form_error('passbaru'); ?></div>

									    <div class="form-group">
                                            <p>Ulangi Password Baru</p>									
											<input type="password" class="form-control form-control-user" name="ulangpass" id="name" placeholder="New Password"/>
									    </div>
                                        <div class="text-small text-danger"> <?php echo form_error('ulangpass'); ?></div>

		                                 <button type="submit" class="btn btn-success btn-user btn-block">Change Password </button>
                                        <br>
                                        </form>                            
                                  <!--   <div class="text-center">
                                    <a class="btn btn-dark btn-user btn-block" href="<?= base_url();?>visitor"><b>Dashboard</b></a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>   
  <!--<script src="<?php echo base_url()?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->