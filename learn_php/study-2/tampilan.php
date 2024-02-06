<?php

$kendaraan = [
    ["merek" => "Volvo", "stok" => 12, "terjual" => 10],        //0
    ["merek" => "BMW", "stok" => 20, "terjual" => 5],           //1
    ["merek" => "Land Rover", "stok" => 11, "terjual" => 4],    //2
    ["merek" => "Rush", "stok" => 15, "terjual" => 14],         //3
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kendaraan</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <h1 class="text-center">Data Kendaraan</h1>
    <div class="container mt-4">
        <table class="table table-sm table-bordered table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Merek</th>
                    <th>Stok</th>
                    <th>Terjual</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($kendaraan as $transportasi) {
                ?>
                    <tr>
                        <td> <?= $no ?></td>
                        <td> <?= $transportasi["merek"] ?> </td>
                        <td> <?= $transportasi["stok"] ?> </td>
                        <td> <?= $transportasi["terjual"] ?> </td>
                    </tr>
                <?php
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>