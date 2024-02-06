<?php

$dataGuru = [
	["nama" => "Didin", "usia" => 35, "alamat" => "Jalan Tengah 140" , "pendidikan" => "S1"],
	["nama" => "Sutarman" , "usia" => 30, "alamat" => "Jalan Veteran 150" , "pendidikan" => "S1"],
	["nama" => "Delima" , "usia" => 25, "alamat" => "Jalan Ipik gandamanah 40 " , "pendidikan" => "S1"],
	["nama" => "Sutrisna" , "usia" => 35, "alamat" => "Jalan Sudirman 140 " , "pendidikan" => "S1"],
];

echo "Data pak Sutarman : <br>";
echo "Nama : " . $dataGuru[1]["nama"] . "<br>";
echo "Usia : " . $dataGuru[1]["usia"] . "<br>";
echo "Alamat : " . $dataGuru[1]["alamat"] . "<br>";
echo "Pendidikan     : " . $dataGuru[1]["pendidikan"] . "<br>";

?>