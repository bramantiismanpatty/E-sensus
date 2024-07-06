
                <!-- Begin Page Content -->
                <div class="container-fluid">                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                    <div class="card-header bg-custom-samping py-3">
                          <h6 class="m-0 font-weight-bold text-white"> Informasi Kelas Rawat</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    
                                    <thead>
                                    <tr>
			                        <th>NO</th>
			                        <th>Kode Kelas</th>
			                        <th>Kelas Rawat</th>
			                       
			                          		
		                            </tr>
                                    </thead>
                                    <tbody>
                                     <?php 
		                                $no = 1;
		                                foreach($kls as $u){ 
	                            	?>
		                            <tr>
			                            <td><?php echo $no++ ?></td>
                                        <td><?php echo $u->kodekelas ?></td>
			                            <td><?php echo $u->namakelas ?></td>			                           
			                           
			                           
			                        </tr>
			                        <?php }?>                              
                                    </tbody>
                                </table>
                         </div>
                      </div>
                 </div>
             </div>
        </div>
 
 <!-- Bootstrap core JavaScript --> 
     <script src="<?php echo base_url()?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>  
    
</body>
</html>