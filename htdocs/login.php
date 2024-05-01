<?php
include "databaseConnection.php";
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="sign-up-css.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Sign up - InReach</title>
</head>

<body>
<?php 
  include "header.php";
?>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-7 col-sm-8 col-lg-5 col-xxl-4 border px-5 shadow rounded-4 mt-5 bg-white">
            <form action="formhandler.inc.php">
                <div class=" mb-3 mt-4">
                    <h2 class="text-center">Login</h2>
                </div>
                
                <div class=" form-floating  mb-3">
                    <input type="email" class="form-control shadow-sm" id="email" name="email" placeholder="Enter your email" required>
                    <label for="email" class="form-label">Email:</label>
                    <div class="form-text">We'll never share your email with anyone else.</div>
                </div>

                <div class=" form-floating  mb-3">
                    <input type="password" class="form-control shadow-sm" id="password" name="password" placeholder="Enter your password" required>
                    <label for="password" class="form-label">Password:</label>
                </div>
        
                <div class="d-grid mb-4">
                    <button type="submit" class="btn btn-lg btn-primary shadow">Login</button>
                </div>
                <div>
                    <p class="text-center">Doesn't have an account? <a href="signUp.php"><u>Sign up</u></a></p>
                </div>
            </form>
        </div>
    </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>