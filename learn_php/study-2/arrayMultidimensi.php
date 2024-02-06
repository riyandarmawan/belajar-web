<?php

// array multidimensi
$kendaraan = [
    ["merek" => "Volvo", "stok" => 12, "terjual" => 10],        //0
    ["merek" => "BMW", "stok" => 20, "terjual" => 5],           //1
    ["merek" => "Land Rover", "stok" => 11, "terjual" => 4],    //2
    ["merek" => "Rush", "stok" => 15, "terjual" => 14],         //3
];

// echo $kendaraan[0]["merek"];

// ini digunakan jika struktur yang dimiliki array tidak kita ketahui
// echo "<pre>";
// print_r($kendaraan);
// echo "</pre>";

foreach($kendaraan as $yosep) {
    echo $yosep["merek"] . " Stok tersedia " . $yosep["stok"] . "<br>";
}

?>