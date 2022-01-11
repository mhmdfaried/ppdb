<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Halaman Login</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body background = "img2.jpg"> 
    <div class="container">
        <div class="card">
        </div>
        <br>
        <!-- <h1>Silahkan Login</h1> -->
        <div class="card-body">
        <section class="page-section" id="contact">
            <div class="container">
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Login</h2>
                <br>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Masukkan Nama Lengkap Anda" data-sb-validations="required" />
                                <label for="name">Username</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Username harus diisi.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="password" placeholder="Masukkan Nama Lengkap Anda" data-sb-validations="required" />
                                <label for="name">Password</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Password harus diisi.</div>
                            </div>
                            <a href="index.php"> <button type="button" class="btn btn-primary">Kembali</button> </a>
                            <a href="dtbs.php"> <button type="button" class="btn btn-primary">Login</button> </a>
                            <!-- <a href="dtbs.php"><button class="btn btn-primary" id="submitButton" type="submit">Login</button> </a> -->
                        </div>
                </div>
            </div>
        </section>
</body>
</html>