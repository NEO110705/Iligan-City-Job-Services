<?php
include "connection.php";
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Services | InReach</title>
  <link href="nav-bar-styles.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
  <nav class="navbar bg-primary sticky-top">

    <div class="container">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4">
            <span class="navbar-brand fs-2 text-light">
              <a href="index.php" class="text-light text-decoration-none"><b>Reach</b></a>
            </span>
          </div>
          <div class="col-lg-4">
            <div class="container-fluid">
              <form class="d-flex" role="search">
                <input class="form-control me-2 col-lg-2" type="search" placeholder="Search for any service..." aria-label="Search">
                <button class="btn btn-info text-light" type="submit">Search</button>
              </form>
            </div>
          </div>
          <div class="col-lg-4 d-flex justify-content-end ">
            <a class="text-light links p-1 mx-2" href="log-in.php"> Log in </a>
            <a class="text-light btn btn-info links p-1 px-2" href="sign-up.php"> Sign up </a>
          </div>
        </div>
      </div>


    </div>

  </nav>

  <div>
    <div class="navigation-container">
      <div class="float-item">
        <p>You are here: <a href="index.php" class="hover">Home</a>/ Profile</p>
      </div>
    </div>
  </div>

</body>

</html>