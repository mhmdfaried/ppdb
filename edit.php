<!DOCTYPE html>
<html>

<head>
    <title>EDIT DATA SISWA</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
    type="text/css" />
<link href="styles.css" rel="stylesheet" />

<body>
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
    <br>    
    <br>
    <br>
    <br>
    <div class="container col-md-6 mt-4">
        <h1>Edit Data Siswa</h1>
        <div class="card">
            <div class="card-header bg-dark text-white ">

            </div>
            <div class="card-body">
                <?php
                include('koneksi.php');

                $id = $_GET['id'];

                $data = mysqli_query($conn, "SELECT * FROM cs where id = '$id'");
                $row = mysqli_fetch_assoc($data);

                ?>
                <form action="" method="post" role="form" enctype="multipart/form-data">
                <input type="hidden" name="gl" value="<?= $row["img"]; ?>">
                    <div class="form-group">
                        <label>Nama Lengkap : </label>
                        <input type="hidden" name="id" required="" class="form-control" value="<?= $row['id']; ?>">
                        <input type="text" name="nama" required="" class="form-control" value="<?= $row['nama']; ?>">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Tempat Lahir : </label>
                        <input type="text" name="ttl" required="" class="form-control" value="<?= $row['ttl']; ?>">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Tanggal Lahir : </label>
                        <input type="date" name="tl" required="" class="form-control" value="<?= $row['tl']; ?>">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Warga Negara : </label>
                        <input type="text" name="wn" required="" class="form-control" value="<?= $row['wn']; ?>">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Alamat : </label>
                        <input type="text" name="almt" required="" class="form-control" value="<?= $row['almt']; ?>">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Email : </label>
                        <input type="text" name="email" required="" class="form-control" value="<?= $row['email']; ?>">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Nomor HP : </label>
                        <input type="text" name="nohp" required="" class="form-control" value="<?= $row['nohp']; ?>">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Asal Sekolah : </label>
                        <input type="text" name="askl" required="" class="form-control" value="<?= $row['askl']; ?>">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Nama Ayah : </label>
                        <input type="text" name="na" required="" class="form-control" value="<?= $row['na']; ?>">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Nama Ibu : </label>
                        <input type="text" name="ni" required="" class="form-control" value="<?= $row['ni']; ?>">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Penghasilan Kedua Orang Tua : </label>
                        <input type="text" name="pkot" required="" class="form-control" value="<?= $row['pkot']; ?>">
                    </div>
                    <br>
                    <table>
                        <tr>
                            <td>
                                <h6>Upload Foto 4x6</h6>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <img width="120px" src="<?php echo "img/".$row['img']; ?>"></img> 
                            </td>
                            <td>
                                <input type="file" name="img" class="form-control"
                                    value="<?= $row['img']; ?>"></td>
                        </tr> <br>
                        <!-- <tr><td><input type="submit" value="kirim"/></td><td></td></tr> -->
                    </table>
                    <br>



                    <a href="dtbs.php" class="btn btn-primary">Batalkan</a>

                    <button type="submit" class="btn btn-primary" name="submit" value="simpan">Update Data</button>
                </form>

                <?php
            
            if (isset($_POST['submit'])) {
                $id = $_POST['id'];
                $nama = $_POST['nama'];
                $ttl = $_POST['ttl'];
                $tl = $_POST['tl'];
                $wn = $_POST['wn'];
                $almt = $_POST['almt'];
                $email = $_POST['email'];
                $nohp = $_POST['nohp'];
                $askl = $_POST['askl'];
                $na = $_POST['na'];
                $ni = $_POST['ni'];
                $pkot = $_POST['pkot'];
                $gl = $_POST['gl'];
                if ( $_FILES ['img']['error']=== 4 ){
                    $gambar = $gl;
                } else {
                    $gambar = upload();
                }
                

                    mysqli_query($conn, "UPDATE cs SET nama='$nama' , ttl='$ttl' , wn='$wn' , almt='$almt' , almt='$almt' , email='$email' , nohp='$nohp' , askl='$askl' , na='$na' , ni='$ni' , pkot='$pkot',img='$gambar'   where id ='$id'") or die(mysqli_error($conn));

                    echo "<script>alert('data berhasil diupdate.');window.location='dtbs.php';</script>";
                    
                    function upload(){
                        $foto = $_FILES['img']['name'];
                        $tmp_file = $_FILES['img']['tmp_name'];
                        move_uploaded_file($tmp_file , 'img/'. $foto);
                        return $foto;
                    }
                }



                ?>
            </div>
        </div>
        <br>    
    </div>


    <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>