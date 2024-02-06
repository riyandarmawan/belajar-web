<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="login-box mx-auto mt-5" style="width: 350px;">
        <h1 class="mb-3">Silahkan Login</h1>
        <form action="checkLogin.php" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan username anda">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="Password" class="form-control" name="password" id="password" placeholder="Masukkan password anda">
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Login</button>
                <button class="btn btn-danger" type="reset">Reset</button>
            </div>
        </form>
    </div>
</body>

</html>