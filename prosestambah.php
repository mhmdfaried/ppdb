<?php
    // koneksi database
    include 'koneksi.php'; 
    
    // menangkap data yang di kirim dari form
    $id = $_POST;
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
    $img = $_FILES['img']['name'];
    
    // menginput data ke database
    mysqli_query($conn,"INSERT INTO cs VALUES('','$nama','$ttl','$tl','$wn','$almt','$email','$nohp','$askl','$na','$ni','$pkot','$img')") or die(mysqli_error($koneksi));

    echo "<script>alert('Data Berhasil Disimpan.');window.location='index.php';</script>";

    
    // mengalihkan halaman kembali ke index.php
    header("location:index.php");
    
?>