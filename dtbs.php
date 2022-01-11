<!DOCTYPE html>
<html>

<head>
    <title>DATA SISWA</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="styles.css" rel="stylesheet" />
<body>

    <div class="container col-md-8 mt-4">
        <h1>DATA SISWA</h1>
        <!-- <div class="card"> -->
            <!-- <div class="card-header bg-dark text-white ">
                <a href="tambah.php" class="btn btn-sm btn-primary float-right">Tambahkan</a>
            </div> -->
            <div class="card-body">
                <table class="table table-bordered table-dark">
                    <thead>
                        <tr>
                        <th>No</th>
                		<th>Nama Lengkap</th>
                		<th>Tempat Tanggal Lahir</th>
                		<th>Warga Negara</th>
                		<th>Alamat</th>
                		<th>Email</th>
                		<th>Nomor HP</th>
                		<th>Asal Sekolah</th>
                		<th>Nama Ayah</th>
                		<th>Nama Ibu</th>
                		<th>Penghasilan Orang Tua</th>
                		<th>Foto</th>
                		<th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include('koneksi.php');
                        $data = mysqli_query($conn, "SELECT * FROM cs") or die(mysqli_error($koneksi));


                        $no = 1;
                        while ($row = mysqli_fetch_assoc($data)) {
                        ?>

                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $row['nama']; ?></td>
                                <td><?= $row['ttl']; ?></td>
                                <td><?= $row['wn']; ?></td>
                                <td><?= $row['almt']; ?></td>
				                <td><?= $row['email']; ?></td>
				                <td><?= $row['nohp']; ?></td>
				                <td><?= $row['askl']; ?></td>
				                <td><?= $row['na']; ?></td>
				                <td><?= $row['ni']; ?></td>
                                <td>Rp <?= $row['pkot']; ?> /bulan </td>
                                <td><?= $row['img']; ?></td>
                                <td>
                                    <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('anda yakin ingin hapus?');">Hapus</a>
                                </td>
                            </tr>

                        <?php $no++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>