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
                                        <h1 class="h4 text-gray-900 mb-4">Ubah data Pengguna</h1>
                                    </div>
	                                <form action="<?php echo site_url('Apenampakan/update'); ?>" method="post">
		                                <input type="hidden" name="id" value="<?php echo $sandi[0]->id; ?>">
		                                <div class="form-group">
                                            <label>NIP / NIK</label>
                                            <input type="text" name="nip" class="form-control" value="<?php echo $sandi[0]->nip; ?>">
		                                </div>
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input type="text" name="user_name" class="form-control" value="<?php echo $sandi[0]->user_name; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Tempat Tugas</label>
                                            <select name="namaruangan" class="form-control">
                                                <?php foreach($tugas as $u): ?>
                                                <option value="<?php echo $u->namaruangan; ?>" <?php echo $u->namaruangan == $sandi[0]->namaruangan ? 'selected' : ''; ?>><?php echo $u->namaruangan; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Jabatan</label>
                                            <input type="text" name="jabatan" class="form-control" value="<?php echo $sandi[0]->jabatan; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="username" class="form-control" value="<?php echo $sandi[0]->username; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="user_password" class="form-control" value="<?php echo $sandi[0]->user_password; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Level</label>
                                            <select name="level" class="form-control">
                                                <option value="admin" <?php echo $sandi[0]->level == 'admin' ? 'selected' : ''; ?>>Admin</option>
                                                <option value="visitor" <?php echo $sandi[0]->level == 'visitor' ? 'selected' : ''; ?>>Visitor</option>
                                                <option value="operator" <?php echo $sandi[0]->level == 'operator' ? 'selected' : ''; ?>>Operator</option>
                                                <option value="user_bangsal" <?php echo $sandi[0]->level == 'user_bangsal' ? 'selected' : ''; ?>>User Bangsal</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select name="user_status" class="form-control">
                                                <option value="1" <?php echo $sandi[0]->user_status == '1' ? 'selected' : ''; ?>>Aktif</option>
                                                <option value="0" <?php echo $sandi[0]->user_status == '0' ? 'selected' : ''; ?>>Tidak Aktif</option>
                                            </select>
                                        </div>
		                                <button type="submit" class="btn btn-primary">Update</button>
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
