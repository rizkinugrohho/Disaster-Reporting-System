<?php
session_start();
if(isset($_SESSION['login']))
{
  header("Location: dashboard.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>

  <div class="container mt-5 pt-5">

    <div class="row justify-content-center">
      <div class="col-md-4 text-center">
        <?php if(isset($_GET['alert']) && $_GET['alert'] === 'gagal') : ?>
          <div class="alert alert-danger" role="alert">
           Username / Password Salah !
          </div>
        <?php endif; ?>
      </div>
    </div>

    <div class="row justify-content-center mt-5">
      <div class="col-md-4 text-center">
        <h3>Silahkan Login!</h3>
      </div>
    </div>

    <div class="row justify-content-center mt-4">
      <div class="col-md-4">
        <form action="cek_login.php" method="post">

          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="username" placeholder="Masukkan username..." name="username" autocomplete="off" autofocus required>
            <label for="username">Username</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="password" placeholder="Masukkan password..." name="password" required>
            <label for="password">Password</label>
          </div>
          <div class="d-grid gap-2 mt-4">
            <button class="btn btn-primary" type="submit">Masuk</button>
          </div>

        </form>
      </div>
    </div>
  </div>

  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>