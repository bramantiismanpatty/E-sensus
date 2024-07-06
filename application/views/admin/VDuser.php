<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Input data Pengguna</h1>
                                    </div>
                                    <form action="<?php echo base_url()?>Duser/register_class" method="post" class="user">
                                        <div class="form-group">
                                            <label><b>NIP / NIK</b></label>  
                                            <input type="text" class="form-control" name="nip" required placeholder="Masukan nomor NIP/NIK"> 
                                        </div>
                                        <div class="form-group">
                                            <label><b>Nama Lengkap</b></label>  
                                            <input type="text" class="form-control" name="user_name" required placeholder="Masukan nama lengkap">                                     
                                        </div>
                                        <div class="form-group">
                                            <label><b>Tempat Tugas</b></label> 
                                            <select class="form-control" name="tugas" required> 
                                                <option value="">--pilih tempat tugas--</option>
                                                <?php foreach ($tugas as $u) : ?>               
                                                    <option value="<?php echo $u->namaruangan; ?>"><?php echo $u->namaruangan; ?></option>                                     
                                                <?php endforeach; ?> 
                                            </select>                                           
                                        </div>
                                        <div class="form-group">
                                            <label><b>Jabatan</b></label>  
                                            <input type="text" class="form-control" name="jabatan" required placeholder="masukan jabatan">
                                        </div>
                                        <div class="form-group">
                                            <label><b>Username</b></label>  
                                            <input type="text" class="form-control" name="username" required placeholder="Masukan Username">
                                        </div>
                                        <div class="form-group">
                                            <label><b>Password</b></label>  
                                            <input type="password" class="form-control" name="user_password" required placeholder="Masukan password">
                                        </div>
                                        <label><b>Pilih Hak Akses</b></label>   
                                        <div class="form-group">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="level" id="level" value="admin">
                                                <label class="form-check-label">Admin</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="level" id="level" value="visitor">
                                                <label class="form-check-label">Visitor</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="level" id="level" value="operator">
                                                <label class="form-check-label">Operator</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="level" id="level" value="user_bangsal">
                                                <label class="form-check-label">User Bangsal</label>
                                                <input type="hidden" class="form-control" name="user_status" required readonly value="1">
                                            </div>                         
                                        </div> 
                                        <div class="text-small text-danger"><?php echo form_error('level'); ?></div>
                                        <button class="btn btn-primary btn-user btn-block" type="submit"><b>Save</b></button>
                                    </form>                            
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url();?>Apenampakan"><b>Kembali</b></a>
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

    <script>
        $(document).ready(function() {
            // Tampilkan modal error jika ada pesan kesalahan
            $('#errorModal').modal('show');
            // Tampilkan modal sukses jika ada pesan sukses
            $('#successModal').modal('show');
        });
    </script>

    <script src="<?php echo base_url()?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
