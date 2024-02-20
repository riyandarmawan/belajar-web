<?php

include 'config_db.php';

// buat query untuk mendapatkan data siswa sesuai dengan nis
$sql = 'SELECT * FROM siswa WHERE nis=' . $_GET['nis'];

// jalankan query
$result = $koneksi->query($sql);

// variable untuk menyimpan data siswa
$siswa = $result->fetch_assoc();

// echo '<pre>';
// print_r($siswa);
// echo '</pre>';

// proses update siswa
// isset() = digunakan untuk menegecek ada tidaknya suatu variabel
if (isset($_POST['nis'])) {
    // buat query update berdasarkan nis
    $sql = 'UPDATE siswa SET nis="' . $_POST['nis'] . '",nama="' . $_POST['nama'] . '",alamat="' . $_POST['alamat'] . '",no_telp="' . $_POST['no_telp'] . '",tanggal_lahir="' . $_POST['tanggal_lahir'] . '" WHERE nis=' . $_GET['nis'];

    // jalankan query
    $koneksi->query($sql);

    // arahkan halaman ke list siswa
    header('Location:daftar_siswa.php');
}

// akhir proses update siswa

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form ubah siswa</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center align-items-center">
                <div style="width: 500px;" class="p-3">
                    <h1 class="mt-5 text-center">Form Tambah Data Siswa</h1>
                    <form class="mt-3" action="" method="post">
                        <div class="mb-3">
                            <label for="nis" class="form-label">NIS</label>
                            <input type="number" class="form-control" id="nis" name="nis" aria-describedby="emailHelp" value="<?= $siswa['nis'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" value="<?= $siswa['nama'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" aria-describedby="emailHelp" value="<?= $siswa['alamat'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="no_telepon" class="form-label">No. Telp</label>
                            <input type="tel" class="form-control" id="no_telepon" name="no_telp" aria-describedby="emailHelp" value="<?= $siswa['no_telp'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" aria-describedby="emailHelp" value="<?= $siswa['tanggal_lahir'] ?>">
                        </div>
                        <div class="d-flex">
                            <button type="submit" class="btn btn-primary w-50 mx-1">Kirim</button>
                            <button type="reset" class="btn btn-danger w-50 mx-1">batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>