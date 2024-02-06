<?php

// buat koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "latihan_basdat");

// cek kondisi ke database
if($koneksi->connect_error) {
    die("Connection failed : ". $koneksi->connect_error);
}

// // menambahkan data pada tabel
// $sql = "INSERT INTO siswa(nis,nama,alamat,no_telp,tanggal_lahir) VALUES ('210707','Tatang','Kp. Patung Singa no. 123', '0899765643','2007-07-21')";
// // eksekusi query
// $koneksi->query($sql);
?>