<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bs/css/bootstrap.min.css">
</head>

<body>
    <div class="container d-flex justify-content-center mt-5">
        <section style="width:500px">
            <?php if(isset($_GET['pesan'])) :?>
                    <div class="alert alert-danger" role="alert">
                        <strong><?= $_GET['pesan'] ?></strong>
                    </div>
            <?php endif ?>
            <div class="card">
                <div class="card-body">
                    <form action="backend/proses-register.php" method="post">
                        <div class="mb-3">
                            <label for="nik" class="form-label">NIK</label>
                            <input type="text" name="nik" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Help text</small>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Help text</small>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Help text</small>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Help text</small>
                        </div>
                        <div class="mb-3">
                            <label for="notelp" class="form-label">No. Telepon</label>
                            <input type="text" name="notelp" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Help text</small>
                        </div>
                        <button class="btn btn-primary">Registrasi</button>
                        <a href="login.php">--- Login ---</a>

                    </form>
                </div>
            </div>
        </section>
    </div>
</body>

</html>