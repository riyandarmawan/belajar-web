<?php

require 'array.php';

highest();

if (isset($_GET["sortir"]) && $_GET["sortir"] == "highest") {
    highest();
} elseif (isset($_GET["sortir"]) && $_GET["sortir"] == "lowest") {
    lowest();
} elseif (isset($_GET["sortir"]) && $_GET["sortir"] == "rating") {
    rating();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="header align-items-center d-flex justify-content-between mt-3">
                    <p class="m-0">Menampilkan 30 dari 100</p>
                    <div class="kanan align-items-center d-flex column-gap-3">
                        <p class="m-0">Urutkan</p>
                        <form action="" method="get" class="d-flex algin-items-center">
                            <select class="form-select" aria-label="Default select examplfke" name="sortir">
                                <option value="highest" <?= isset($_GET["sortir"]) && $_GET["sortir"] == "highest" ? "selected" : "" ?>>Harga Tertinggi</option>
                                <option value="lowest" <?= isset($_GET["sortir"]) && $_GET["sortir"] == "lowest" ? "selected" : "" ?>>Harga Terendah</option>
                                <option value="rating" <?= isset($_GET["sortir"]) && $_GET["sortir"] == "rating" ? "selected" : "" ?>>Ulasan</option>
                            </select>
                            <button class="btn" type="submit"><i data-feather="search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3 row-gap-3">
            <?php foreach ($dataProduk["produk"] as $produk) : ?>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="card shadow">
                        <div class="gambar border-bottom">
                            <img src="<?= $produk["thumbnail"] ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <p class="card-title fw-semibold m-0 fs-6 title"><?= $produk["title"] ?></p>
                            <p class="card-title fw-bold m-0 fs-5">$ <?= $produk["price"] ?></p>
                            <p class="card-title fw-semibold m-0 box-icon"><i class="icon" data-feather="flag"></i><?= $produk["brand"] ?></p>
                            <p class="card-text fw-semibold m-0 box-icon"><i class="icon" data-feather="star"></i><?= $produk["rating"] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="row">
            <div class="col">
                <nav aria-label="Page navigation example" class="mt-5">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <script>
        feather.replace();
    </script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>