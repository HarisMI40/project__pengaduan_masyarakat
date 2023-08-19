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
        <section>
            <?php if(isset($_GET['pesan'])) :?>
                    <div class="alert alert-danger" role="alert">
                        <strong><?= $_GET['pesan'] ?></strong>
                    </div>
            <?php endif ?>
            <div class="card">
                <div class="card-body">
                    <form action="backend/proses-login.php" method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Name</label>
                            <input type="text" name="username" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Help text</small>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Password</label>
                            <input type="password" name="password" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Help text</small>
                        </div>
                        <button class="btn btn-primary">Login</button>
                        <a href="register.php">--- Register ---</a>

                    </form>
                </div>
            </div>
        </section>
    </div>
</body>

</html>