<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form tambah siswa</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center align-items-center">
                <div style="width: 500px;" class="p-3">
                    <h1 class="mt-5 text-center">Form Tambah Data Siswa</h1>
                    <form class="mt-3" action="simpan.php" method="post">
                        <div class="mb-3">
                            <label for="nis" class="form-label">NIS</label>
                            <input type="number" class="form-control" id="nis" name="nis" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="no_telepon" class="form-label">No. Telp</label>
                            <input type="tel" class="form-control" id="no_telepon" name="no_telepon" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" aria-describedby="emailHelp">
                        </div>
                        <div class="d-flex">
                            <button type="submit" class="btn btn-primary w-50 mx-1">Kirim</button>
                            <button type="reset" class="btn btn-danger w-50 mx-1">batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>