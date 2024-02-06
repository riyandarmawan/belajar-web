<?php

$nilaiMahasiswa = [
    ["nama" => "Setyawan", "tugas" => 70, "kehadiran" => 65, "uts" => 65, "uas" => 65],
    ["nama" => "Hermanto", "tugas" => 65, "kehadiran" => 70, "uts" => 70, "uas" => 60],
    ["nama" => "Sutyoso", "tugas" => 85, "kehadiran" => 50, "uts" => 75, "uas" => 86],
    ["nama" => "Mariam", "tugas" => 78, "kehadiran" => 75, "uts" => 79, "uas" => 75],
    ["nama" => "Handoyo", "tugas" => 70, "kehadiran" => 80, "uts" => 80, "uas" => 68],
    ["nama" => "Sutrisno", "tugas" => 88, "kehadiran" => 80, "uts" => 65, "uas" => 70],
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Mahasiswa</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <h1 class="text-center">Daftar nilai mahasiswa</h1>
    <div class="container mt-4">
        <table class="table table-sm table-bordered table-hover border-black">
            <thead class="align-middle text-center">
                <tr>
                    <th rowspan="2" class="bg-secondary text-light">Nama Mahasiswa</th>
                    <th rowspan="2" class="bg-secondary text-light">Tugas</th>
                    <th rowspan="2" class="bg-secondary text-light">Kehadiran</th>
                    <th colspan="2" class="bg-secondary text-light">Ujian</th>
                </tr>
                <tr>
                    <th class="bg-secondary text-light">UTS</th>
                    <th class="bg-secondary text-light">UAS</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($nilaiMahasiswa as $nilai) { ?>

                    <tr>
                        <td><?= $nilai["nama"] ?></td>
                        <td><?= $nilai["tugas"] ?></td>
                        <td><?= $nilai["kehadiran"] ?></td>
                        <td><?= $nilai["uts"] ?></td>
                        <td><?= $nilai["uas"] ?></td>
                    </tr>
                    
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>