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

    <body>
        <section class="page-section" id="contact">
            <div class="container">
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Pendaftaran</h2>
                <br>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="POST"
                            action="prosestambah.php" enctype="multipart/form-data">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="nama" name="nama" type="text"
                                    placeholder="Masukkan Nama Lengkap Anda" data-sb-validations="required" />
                                <label for="name">Nama Lengkap</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Nama Lengkap harus diisi.
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="ttl" name="ttl" type="text"
                                    placeholder="Masukkan Nama Lengkap Anda" data-sb-validations="required" />
                                <label for="name">Tempat Lahir</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Nama Lengkap harus diisi.
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="tl" name="tl" type="date"
                                    placeholder="Masukkan Nama Lengkap Anda" data-sb-validations="required" />
                                <label for="name">Tanggal Lahir</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Nama Lengkap harus diisi.
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="wn" name="wn" type="text"
                                    placeholder="Masukkan Nama Lengkap Anda" data-sb-validations="required" />
                                <label for="name">Warga Negara</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Nama Lengkap harus diisi.
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="almt" name="almt" type="text"
                                    placeholder="Masukkan Nama Lengkap Anda" data-sb-validations="required" />
                                <label for="name">Alamat</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Nama Lengkap harus diisi.
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" name="email" type="email"
                                    placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">Email harus diisi.</div>
                                <!-- <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div> -->
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="nohp" name="nohp" type="tel"
                                    placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Nomor HP</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">Nomor HP harus diisi.
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="askl" name="askl" type="text"
                                    placeholder="Masukkan Nama Lengkap Anda" data-sb-validations="required" />
                                <label for="name">Asal Sekolah</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Asal Sekolah harus diisi.
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="na" name="na" type="text"
                                    placeholder="Masukkan Nama Lengkap Anda" data-sb-validations="required" />
                                <label for="name">Nama Ayah</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Nama Ayah harus diisi.
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="ni" name="ni" type="text"
                                    placeholder="Masukkan Nama Lengkap Anda" data-sb-validations="required" />
                                <label for="name">Nama Ibu</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Nama Ibu harus diisi.
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="pkot" name="pkot" type="text"
                                    placeholder="Masukkan Nama Lengkap Anda" data-sb-validations="required" />
                                <label for="name">Penghasilan Kedua Orang Tua</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Penghasilan Kedua Orang
                                    Tua harus diisi.</div>
                            </div>
                            <table>
                                <tr>
                                    <td>
                                        <h6>Uploud Foto 4x6</h6>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><input type="file" name="img" required="" /></td>
                                </tr> <br>
                                <!-- <tr><td><input type="submit" value="kirim"/></td><td></td></tr> -->
                            </table>
                            <br>
                            <button type="submit" class="btn btn-primary btn-xl" name="submit"
                                value="simpan">Submit</button>
                            <!-- <button class="btn btn-primary btn-xl" id="submit" type="submit">Kirim</button> -->
                        </form>



                    </div>
                </div>
            </div>
        </section </body>

</html>