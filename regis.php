<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Registrasi</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body>
    <div class="container">
        <div class="card">
        </div>
        <br>
        <h1>Silahkan Registrasi</h1>
        <div class="card-body">
            <form method="post" action="progres_regis.php">
                <div class="form-group">
                    <label style>Nama Lengkap : </label>
                    <input type="text" name="username" placeholder="Masukan Nama Lengkap Anda" required="" class="form-control">
                    <br>
                <div class="form-group">
                    <label>Username : </label>
                    <input type="password" name="password" placeholder="Masukan Username Anda" required="" class="form-control">
                    <br>
                <div class="form-group">
                    <label>Email : </label>
                    <input type="text" name="username" placeholder="Masukan Email Anda" required="" class="form-control">
                    <br>
                <div class="form-group">
                    <label>Nomor HP : </label>
                    <input type="text" name="username" placeholder="Masukan Nomor Anda" required="" class="form-control">
                    <br>      
                <div class="gender">
                    <span class="gender">Jenis Kelamin</span>
                    <div class="kategori">
                    <label for="">
                        <span class="dot one"></span>
                        <span class="gender">Laki-Laki</span>
                    </label>
                    <label for="">
                        <span class="dot one"></span>
                        <span class="gender">Perempuan</span>
                    </label>
                    </div>
                </div>
            </div>
                    <a class="btn btn-primary" href="index.php" role="button">Registrasi</a>
                    <!-- <button type="reset" class="btn btn-primary" value="Reset">Reset</button> -->
                    <!-- <button class="btn btn-primary" type="submit">Registrasi</button></a> -->
        </div>
</body>
</html>