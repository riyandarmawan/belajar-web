<?php

include 'config_db.php';

// buat query delete
$sql = 'DELETE FROM siswa WHERE nis=' . $_GET['nis'];

// jalankan query
$koneksi->query($sql);

// arahkan halaman ke list siswa
header('Location:daftar_siswa.php');
