<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Hugo 0.79.0"> 
    <link rel="icon" href="assets/brand/icon.svg" type="image/gif" sizes="16x16">
        <title>Signin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

 
    <!-- Bootstrap core CSS -->
<link href="page/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body>
      <form class="form-signin" method="POST" action="cek_login.php">
        <div class="text-center mb-4">
        <img class="mb-4" src="assets/brand/Untitled.svg" alt="" width="190" height="50">
          <h1 class="h3 mb-3 font-weight-normal">Login</h1>
        </div>

        <div class="form-label-group">
          <select class="form-control" name="level">
            <option value="Admin">Admin</option>
            <option value="User">User</option>
          </select>
        </div>
        
        <div class="form-label-group">
          <input type="text" class="form-control" name="username" placeholder="Masukan Username Anda!" required autofocus>
        </div>

        <div class="form-label-group">
          <input type="password" class="form-control" name="password" placeholder="Masukan Password Anda!" required>
        </div>

        <div class="button">
           <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        </div>
        <a href="www.google.com">belum punya akun</a>
        <p class="mt-5 mb-3 text-muted text-center">&copy; SMKN 1 GUNUNGPUTRI | 2020-<?= date('Y') ?></p>
      </form>
    </body>
</html>
