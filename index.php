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
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
            <img src="img/logo.png" width="100" height="50" alt="">
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Beranda</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">Profil Sekolah</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Pendaftaran</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/N0LmdoMY2z4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <br>
                <h1 class="masthead-heading mb-0">Selamat Datang Di SMK Pesat IT XPRO</h1>
                <br>
                <p class="masthead-subheading font-weight-light mb-0">“Sekolah umum berbasis Keagamaan Berkarakter Akhlak Mulia, Pilihan anak – anak terpilih”</p>
            </div>
        </header>
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Beranda</h2>
                <br>
                <div class="row justify-content-center">
                            <img class="img-fluid" src="img/img1.jpg" width="1920" height="600" alt="..." />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
                <br>
                <div class="row">
                    <div class="col-lg-4 ms-auto">
                    <h3>Visi & Motto</h3>
                    <p class="lead">Terwujudnya siswa – siswi sebagai calon tenaga kerja yang berkarakter Akhlak Mulia, Cerdas, & Terampil.
                    <br><br>
                    Berawal dari Masjid, berakhir di Masjid.</p></div>
                    <div class="col-lg-4 me-auto">
                    <h3>Identitas Sekolah</h3>
                    <p class="lead">Sekolah Umum Berbasis Keagamaan Berkarakter Akhlak Mulia, Pilihan Anak – anak terpilih</p></div>
                </div>
            </div>
        </section>
        <section class="page-section" id="contact">
            <div class="container">
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Pendaftaran</h2>
                <br>
<?php
    require 'koneksi.php';

//cek apakah tombol sudah ditekan atau belum
        if ( isset($_POST ["submit"])){
    
        var_dump($_POST); die;

    
        if (tambah($_POST) > 0){
            echo "
                <script>
                    alert('data berhasil ditambahkan !');
                    document.location.href = 'index.php';
                </script>
                 ";
        }else {
            echo "
            <script>
                alert('data gagal ditambahkan !');
                document.location.href = 'index.php';
            </script>
                ";
        }
    }
?>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="nama" name="nama" type="text" placeholder="Masukkan Nama Lengkap Anda" data-sb-validations="required" />
                                <label for="name">Nama Lengkap</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Nama Lengkap harus diisi.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="ttl" name="tll" type="text" placeholder="Masukkan Nama Lengkap Anda" data-sb-validations="required" />
                                <label for="name">Tempat Tanggal Lahir</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Nama Lengkap harus diisi.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="wn" name="wn" type="text" placeholder="Masukkan Nama Lengkap Anda" data-sb-validations="required" />
                                <label for="name">Warga Negara</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Nama Lengkap harus diisi.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="almt" name="almt" type="text" placeholder="Masukkan Nama Lengkap Anda" data-sb-validations="required" />
                                <label for="name">Alamat</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Nama Lengkap harus diisi.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">Email harus diisi.</div>
                                <!-- <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div> -->
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="nohp" name="nohp" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Nomor HP</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">Nomor HP harus diisi.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="askl" name="askl" type="text" placeholder="Masukkan Nama Lengkap Anda" data-sb-validations="required" />
                                <label for="name">Asal Sekolah</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Asal Sekolah harus diisi.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="na" name="na" type="text" placeholder="Masukkan Nama Lengkap Anda" data-sb-validations="required" />
                                <label for="name">Nama Ayah</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Nama Ayah harus diisi.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="ni" name="ni" type="text" placeholder="Masukkan Nama Lengkap Anda" data-sb-validations="required" />
                                <label for="name">Nama Ibu</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Nama Ibu harus diisi.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="pkot" name="pkot" type="text" placeholder="Masukkan Nama Lengkap Anda" data-sb-validations="required" />
                                <label for="name">Penghasilan Kedua Orang Tua</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Penghasilan Kedua Orang Tua harus diisi.</div>
                            </div>
                            <table>
                                <tr><td><h6>Uploud Foto 4x6</h6></td><td></td></tr>
                                <tr><td><input type="file" value="upload gambar"/></td></tr> <br>
                                <!-- <tr><td><input type="submit" value="kirim"/></td><td></td></tr> -->
                            </table>
                            <br>
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <button class="btn btn-primary btn-xl" id="submit" type="submit">Kirim</button>
                        </form>
                        <?php
                include('koneksi.php');

                if (isset($_POST['submit'])) {
                
                    $id = $_GET['id'];
                    $nama = $_POST['nama'];
                    $ttl = $_POST['ttl'];
                    $wn = $_POST['wn'];
                    $almt = $_POST['almt'];
                    $email = $_POST['email'];
                    $nohp = $_POST['nohp'];
                    $askl = $_POST['askl'];
                    $na = $_POST['na'];
                    $ni = $_POST['ni'];
                    $pkot = $_POST['pkot'];

                    mysqli_query($koneksi, "INSERT INTO cs VALUES ('null','$nama','$ttl','$wn','$almt','$email','$nohp','$askl','$na','$ni','$pkot')") or die(mysqli_error($koneksi));

                           echo "<script>alert('Data Berhasil Disimpan.');window.location='index.php';</script>";
                }
                ?>

                    </div>
                </div>
            </div>
        </section>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; galeeer 2022</small></div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
