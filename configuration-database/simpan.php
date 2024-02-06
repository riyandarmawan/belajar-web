<?php

include 'config_db.php';

// siapkan query
$sql = "INSERT INTO siswa(nis,nama,alamat,no_telp,tanggal_lahir) VALUES('".$_POST["nis"]."','".$_POST["nama"]."','".$_POST["alamat"]."','".$_POST["no_telepon"]."','".$_POST["tanggal_lahir"]."')";
$koneksi->query($sql);

?>