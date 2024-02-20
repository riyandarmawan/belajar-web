<?php

// import konfigurasi koneksi database
include 'config_db.php';

// proses ambil data dari database
// 1. siapkan query untuk ambil data
$sql = 'SELECT * FROM siswa';

// 2. jalankan query dan tampung didalam sebuah variabel
$results = $koneksi->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center m-5">Data Siswa</h1>

        <!-- awal tabel -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NIS</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No. Telp</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($result = $results->fetch_assoc()) :
                ?>
                    <tr>
                        <th scope="row"><?= $no ?></th>
                        <td><?= $result['nis'] ?></td>
                        <td><?= $result['nama'] ?></td>
                        <td><?= $result['alamat'] ?></td>
                        <td><?= $result['no_telp'] ?></td>
                        <td><?= $result['tanggal_lahir'] ?></td>
                        <td>
                            <a href="/edit-siswa.php?nis=<?= $result['nis'] ?>" class="btn btn-warning">Edit</a>
                            <a href="/delete-siswa.php?nis=<?= $result['nis'] ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php
                    $no++;
                endwhile;
                ?>
            </tbody>
        </table>
        <!-- akhir tabel -->
    </div>

    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>