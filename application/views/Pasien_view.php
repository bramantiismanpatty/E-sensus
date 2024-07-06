<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient View</title>
</head>
<body>
    <form>
        <table>
            <tr>
                <td>Nomor Rekam Medis:</td>
                <td><input type="number" class="form-control" id="nomor" name="nomorm" required value="0"></td>
                <td><button type="button" onclick="getPatientData()">Cari</button></td> <!-- Menggunakan onclick untuk memanggil fungsi -->
            </tr>
            <tr>
                <td>Nama:</td>
                <td><input type="text" class="form-control" id="nama" name="nama" required></td>
            </tr>
            <tr>
                <td>Tempat Lahir:</td>
                <td><input type="text" class="form-control" id="tempat" name="tempat" required></td>
            </tr>
            <tr>
                <td>Tanggal Lahir:</td>
                <td><input type="date" class="form-control" id="lahir" name="lahir" required></td>
            </tr>
        </table>
    </form>

    <div id="patient_data"></div>

    <script>
    // Fungsi untuk mengambil data pasien secara otomatis
    function getPatientData() {
        // Ambil nilai nomor rekam medis dari input
        var nomor_rm = document.getElementById('nomor').value;
        
        // Kirim permintaan AJAX ke server untuk mendapatkan data pasien
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Setelah mendapatkan respon dari server, tampilkan data pasien
                var response = JSON.parse(this.responseText);
                if (response.error) {
                    // Jika terjadi kesalahan, tampilkan pesan error
                    document.getElementById("patient_data").innerHTML = '<p>' + response.error + '</p>';
                } else {
                    // Jika data berhasil ditemukan, tampilkan informasi pasien
                    document.getElementById("nama").value = response.namapasien;
                    document.getElementById("tempat").value = response.tempatlahir;
                    document.getElementById("lahir").value = response.tgl_lahir;
                }
            }
        };
        // Ganti URL sesuai dengan URL yang diinginkan untuk mengambil data pasien
        xhttp.open("GET", "<?php echo base_url('Pasien/get_patient_data');?>" + "?nomorm=" + nomor_rm, true);
        xhttp.send();
    }
</script>
</body>
</html>
