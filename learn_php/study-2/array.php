<?php
// deklarasi array tanpa index
$siswa = ["Aldi", "Rama", "Dzar"];

// cara mengambil nilai array tanpa index
echo "Nama siswa : ".$siswa[0];

// deklarasi array dengan index
$dataSiswa = [
// format : index => nilai/value
    "nama" => "Aldi",
    "kelas" => "XI-RPL",
    "usia" => 16
];

// cara mengambil nilai array dengan index
echo "<br>";
echo "Data siswa <br>";
echo "Nama : ".$dataSiswa["nama"]."<br>";
echo "Kelas : ".$dataSiswa["kelas"]."<br>";
echo "Usia : ".$dataSiswa["usia"]." tahun";

// Menambah data array yang baru
$siswa[] = "Fauzi";
print_r($siswa);

// Mengganti data array
echo "<br>";
$siswa[1] = "Dhani";
print_r($siswa);
?>