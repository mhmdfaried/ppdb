<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SMK INFORMATIKA PESAT</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link href="styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <img src="img/logo.png" width="100" height=45" alt="">
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="index.php">Beranda</a></li>
                    <!-- <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.php">Profil Sekolah</a></li> -->
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="daftar.php">Pendaftaran</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- <h1>Silahkan Login</h1> -->
    <div class="card-body">
        <section class="page-section" id="contact">
            <div class="container">
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Login</h2>
                <br>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="POST"
                            action="progres_login.php">
                            <div class="form-floating mb-3">
                                <input type="text" name="un" class="form-control"
                                    placeholder="Masukkan Nama Lengkap Anda" data-sb-validations="required" required=""
                                    autofocus="" />
                                <label for="name">Username</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Username harus
                                    diisi.
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" name="pw" class="form-control"
                                    placeholder="Masukkan Nama Lengkap Anda" data-sb-validations="required" />
                                <label for="name">Password</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Password harus
                                    diisi.
                                </div>
                            </div>
                            <a href="index.php"> <button type="button" class="btn btn-primary">Kembali</button> </a>
                            <button type="submit" class="btn btn-primary" name="submit" value="simpan">Login</button>
                            <!-- <a href="dtbs.php"><button class="btn btn-primary" id="submitButton" type="submit">Login</button> </a> -->
                        </form>
                        <!-- Menampung jika ada pesan -->
                        <?php if(isset($_GET['pesan'])) {  ?>
                        <label style="color:red;"><?php echo $_GET['pesan']; ?></label>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
</body>

</html>