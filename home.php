<?php
    
    include("backend/cek_login.php");
    include("backend/koneksi.php");

    $nik = $_SESSION['nik'];

    $query = $koneksi->query("select * from pengaduan where nik='$nik'");
    $data = $query->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="bs/css/bootstrap.min.css">
</head>
<body>
  <?php include "layouts/navbar.php" ?>
    <div class="container">
        <h2 class="text-center mb-5">Selamat Datang <br /> Di Aplikasi Pengaduan Masyarakat</h2>
        <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Tgl Pengaduan</th>
                <th>isi_laporan</th>
                <th>Foto</th>
                <th>status</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>

        <?php foreach($data as $data) : ?>
            <tr>
                <td><?= $data['tgl_pengaduan'] ?></td>
                <td><?= $data['isi_laporan'] ?></td>
                <td><img width="100px" src="assets/image/<?= $data['foto'] ?>"></td>
                <td><?= $data['status'] ?></td>
                <td>
                    <a href="detail-pengaduan.php?id=<?= $data['id_pengaduan'] ?>" class="btn btn-primary btn-sm"><img src="assets/icon/detail.svg" width="20px"></a>
                    <a href="edit-pengaduan.php?id=<?= $data['id_pengaduan'] ?>" class="btn btn-success btn-sm"><img src="assets/icon/edit.svg" width="20px"></a>
                    <a href="backend/proses-hapus-pengaduan.php?id=<?= $data['id_pengaduan'] ?>" class="btn btn-danger btn-sm"><img src="assets/icon/delete.svg" width="20px"></a>
                </td>
            </tr>
        <?php endforeach ?>

        <tfoot>
            <tr>
                <th>Tgl Pengaduan</th>
                <th>isi_laporan</th>
                <th>Foto</th>
                <th>status</th>
                <th>#</th>
            </tr>
        </tfoot>
    </table>

    </div>


    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        new DataTable('#example');
    </script>
</body>
</html>