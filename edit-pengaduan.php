<?php 
include 'backend/cek_login.php';
include 'backend/koneksi.php';

$id = $_GET['id'];
$query = $koneksi->query("select * from pengaduan where id_pengaduan=$id");
$data = $query->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bs/css/bootstrap.min.css">
</head>
<body>
    <?php include("layouts/navbar.php") ?>
    <div class="container">
        <h1>Edit Pengaduan</h1>
        <form action="backend/proses-edit-pengaduan.php?id=<?= $id ?>" method="post">
                <div class="mb-3">
                  <label for="" class="form-label">Isi Laporan</label>
                  <textarea class="form-control" name="isi_laporan" id="" rows="3"><?= $data['isi_laporan'] ?></textarea>
                </div>

                <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
</body>
</html>