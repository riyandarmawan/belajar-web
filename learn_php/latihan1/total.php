<?php

$harga = 6000000;
$diskon = $harga * 2.5/100;
$totalBayar = $harga - $diskon;

echo "Program Harga Komputer";
echo "<br>Harga Komputer : Rp " . $harga;
echo "<br>Diskon : Rp " . $diskon;
echo "<br>Total Bayar : Rp " . $totalBayar;

?>