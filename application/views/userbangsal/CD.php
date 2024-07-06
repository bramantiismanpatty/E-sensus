<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Pasien Masuk</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

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
                                        <h1 class="h4 text-gray-900 mb-4">Ubah Data Pasien Masuk</h1>
                                    </div>
                                    <form action="<?php echo base_url()?>Ukontrolpasienmasuk/update" method="post" class="user" id="updateForm">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped">
                                                <?php foreach($masuk as $u) :?>
                                                <tr>
                                                    <th>Tanggal masuk</th>
                                                    <th>Kode Ruangan </th>
                                                    <th>Nama Ruangan </th>
                                                    <th>Kelas Perawatan</th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="hidden" class="form-control" name="id" id="koderuangan" required value="<?php echo $u->id?>">
                                                        <input type="text" class="form-control" name="tgl_masuk" id="koderuangan" required value="<?php echo $u->tgl_masuk?>">
                                                    </td>
                                                    <td>
                                                        <select class="form-control" name="namaruangan" id="namaRuangan" required>
                                                            <!-- Isi dropdown dengan pilihan dari tabel ruangan -->
                                                            <?php foreach ($mutasi as $r): ?>
                                                            <!-- Periksa apakah nilai saat ini sama dengan $u->namaruangan -->
                                                            <?php if ($r->namaruangan == $u->namaruangan): ?>
                                                            <!-- Jika ya, tampilkan opsi yang dipilih, dan lanjutkan ke iterasi berikutnya -->
                                                            <option value="<?php echo $u->namaruangan; ?>" selected><?php echo $u->namaruangan; ?></option>
                                                            <?php else: ?>
                                                            <!-- Jika tidak, tampilkan opsi dari $r->namaruangan -->
                                                            <option value="<?php echo $r->namaruangan; ?>"><?php echo $r->namaruangan; ?></option>
                                                            <?php endif; ?>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="koderuangan" id="kodeRuangan" required value="<?php echo $u->koderuangan?>" >
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="namakelas" id="namaKelas" required value="<?php echo $u->namakelas?>">
                                                    </td>
                                                </tr>
                                                <?php endforeach ?>
                                            </table>
                                            <table class="table table-bordered table-striped">
                                                <tr>
                                                    <th> Nomor Rekam Medis </th>
                                                    <th>Nomor Registrasi</th>
                                                    <th>Nama Pasien</th>
                                                    <th>Cara Pembayaran</th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="number" class="form-control" name="nomorm" required value="<?php echo $u->nomorm?>">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="reg" name="reg" required value="<?php echo $u->reg?>">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" id="namapasien" name="namapasien" required value="<?php echo $u->namapasien?>">
                                                    </td>
                                                    <td>
                                                        <select class="form-control" id="carabayar" name="carabayar" required>
                                                            <option value="<?php echo $u->carabayar?>"><?php echo $u->carabayar?></option>
                                                            <option value="umum">Umum</option>
                                                            <option value="BPJS">BPJS</option>
                                                            <option value="asuransi">Asuransi</option>
                                                            <option value="perusahaan">Perusahaan</option>
                                                            <option value="askin">Askin</option>
                                                        </select>
                                                        <input type="hidden" class="form-control" name="petugas" required value="<?php echo $this->session->userdata('name'); ?>">
                                                    </td>
                                                </tr>
                                            </table>
                                            <hr>
                                            <button type="button" class="btn btn-primary btn-user btn-block" data-toggle="modal" data-target="#infoModal"><b>Simpan Perubahan</b></button>
                                        </div>
                                        <div class="text-center">
                                            <a class="small" href="<?= base_url();?>Ukontrolpasienmasuk"><b>Kembali</b></a>
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

    <!-- Modal Konfirmasi -->
    <div id="infoModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Konfirmasi</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menyimpan perubahan ini?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                    <button type="submit" class="btn btn-primary" id="submitForm">Ya</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Script untuk menampilkan modal saat tombol "Simpan Perubahan" ditekan -->
    <script>
        $(document).ready(function() {
            $('#infoModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget); // Tombol yang memicu modal
                var modal = $(this);
                $('#submitForm').click(function() {
                    $('#updateForm').submit(); // Kirim formulir jika pengguna menekan tombol "Ya"
                });
            });
        });
    </script>

    <script>
        document.getElementById('namaRuangan').addEventListener('change', function() {
            // Ambil nilai yang dipilih dari dropdown namaruangan
            var selectedOption = this.value;

            // Cari data ruangan yang sesuai dengan opsi yang dipilih
            var selectedRuangan = <?php echo json_encode($mutasi); ?>.find(function(ruangan) {
                return ruangan.namaruangan === selectedOption;
            });

            // Jika data ruangan ditemukan, perbarui nilai kolom Kode Ruangan dan Nama Kelas
            if (selectedRuangan) {
                document.getElementById('kodeRuangan').value = selectedRuangan.koderuangan;
                document.getElementById('namaKelas').value = selectedRuangan.namakelas;
            } else {
                // Jika tidak ditemukan, kosongkan nilai kolom Kode Ruangan dan Nama Kelas
                document.getElementById('kodeRuangan').value = '';
                document.getElementById('namaKelas').value = '';
            }
        });
    </script>
</body>

</html>
