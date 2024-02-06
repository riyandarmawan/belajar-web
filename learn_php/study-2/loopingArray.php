<?php

// Menampilkan seluruh data pada array dengan looping

$dataSiswa = ["Aldi", "Rama", "Dzar", "Fauzi", "Kezia"];
echo "<br>";

// cara 1 dengan for
for($i = 0; $i < 5; $i++) {
    echo $dataSiswa[$i];
    echo "<br>";
}

// cara 2 dengan foreach
// cara baca : untuk tiap tiap (nilai terhadap $dataSiswa sebagai $rama)
foreach($dataSiswa as $rama) {
    echo "<h1>" . $rama . "</h1>";
    echo "<br>";
}

?>