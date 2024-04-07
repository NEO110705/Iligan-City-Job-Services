<?php
include "connection.php";
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="sign-up-css.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Log in - Iligan City Community Services</title>
</head>

<body>
  <div class="container-fluid">

    <div class="row align-items-center">
      <div class="col"></div>
      <div class="col">
        <form class="mt-5" action="formhandler.inc.php" class="col">
          <div class="mb-3">
            <h1 class="heading" style="text-align: center;">Log in</h1>
          </div>
          
          <div class="mb-3">
            <label class="form-label" for="email">Email:</label>
            <input class="form-control" type="email" name="email" placeholder="Enter your email" required>
          </div>

          <div class="mb-3">
            <label class="form-label" type="password" name="password" placeholder="Enter your password">Password:</label>
            <input class="form-control" type="password" name="password" placeholder=" Create password" required>
          </div>
          <div class="d-grid mb-4">
            <submit type="button" class="btn btn-primary">Log in</submit>
          </div>
          <div>
            <p style="text-align: center;">Doesn't have an account?<a href="sign-up.php"> <u>Sign up</u></a></p>
          </div>
        </form>
      </div>
      <div class="col"></div>
    </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>