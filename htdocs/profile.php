<?php
session_start();
include_once "databaseConnection.php";
include "changeName.php";
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Services | InReach</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top btn-hover-bg-primary shadow">
      <div class="container">
        <div class="col">
          <a class="navbar-brand fs-2" href="index.php">
            In<b>Reach</b>
            <img src="img/logo.png" alt="InReach Logo" width="45" height="45" class="d-inline-block align-text-top fs-2">
          </a>
        </div>
      </div>
    </nav>
  </header>

  <div class="container-fluid p-0">
    <div class="row gx-0 fullscreen">
      <div class="col-lg-5 col-md-5 col-sm-12">
        <div class="bg-light box h-100 d-flex row border border-1 p-0 m-0 ">

          <?php
          
          if(isset($_SESSION["loggedInUserId"])) {

              $userId = $_SESSION["loggedInUserId"];
          
              echo "Logged in user ID: " . $userId;

          } else {

              echo "<script>window.location.href='login.php';</script>";
              exit(); 
          }
          

          $userId = $_SESSION["loggedInUserId"];
          $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM user WHERE userId = $userId"));

        ?>

          <form class="form" id="form" action="" enctype="multipart/form-data" method="post">
            <div class="upload d-flex row">
              <?php
              $userId = $user["userId"];
              $firstname = $user["firstname"];
              $lastname = $user["lastname"];
              $email = $user["email"];
              $profilePicture = $user["profilePicture"];
              ?>

              <div class="row mt-5 d-flex justify-content-center">
                <div class="d-flex justify-content-center col-7 col-md-8">
                  <!-- Profile Picture Container with Fixed Aspect Ratio -->
                  <div class="embed-responsive embed-responsive-1by1" style="max-width: 250px;">
           
                    <img class="rounded-circle border border-5 shadow border-primary p-1 img-fluid embed-responsive-item" src="<?php
                                                                                                                                if ($_SESSION['loggedInUserId']) {
                                                                                                                                  $profilePicture = $user["profilePicture"];
                                                                                                                                  $defaultProfilePicture = "img/defaultProfilePicture.png";

                                                                                                                                  if ($profilePicture !== null) {
                                                                                                                                    echo "img/" . $profilePicture;
                                                                                                                                  } else {
                                                                                                                                    echo $defaultProfilePicture;
                                                                                                                                  }
                                                                                                                         
                </div>                                                                                                              
                </div>
              </div>

              <div class="row mb-4">
                <input type="hidden" name="firstname" value="<?php echo $firstname; ?>">
                <input type="file" name="profilePicture" id="profilePicture" accept=".jpg, .jpeg, .png">
              </div>
            </div>
          </form>
          <script type="text/javascript">
            // When profile picture changes value, it automatically changes
            document.getElementById("profilePicture").onchange = function() {
              document.getElementById("form").submit();
            };
          </script>
          <?php
          if (isset($_FILES["profilePicture"]["name"])) {
            $userId = $user["userId"];
            $firstname = $user["firstname"];
            $lastname = $user["lastname"];

            $imageName = $_FILES["profilePicture"]["name"];
            $imageSize = $_FILES["profilePicture"]["size"];
            $tmpName = $_FILES["profilePicture"]["tmp_name"];

            // Image validation
            $validImageExtension = ['jpg', 'jpeg', 'png'];
            $imageExtension = explode('.', $imageName);
            $imageExtension = strtolower(end($imageExtension));
            if (!in_array($imageExtension, $validImageExtension)) {
              echo "
                  <script>
                    alert('Invalid Image Extension');
                    window.location.href = 'profile.php';
                  </script>";
            } elseif ($imageSize > 1200000) {
              echo "
                  <script>
                    alert('Image Size Is Too Large');
                    window.location.href = 'profile.php';
                  </script>";
            } else {
              $newImageName = $username . " - " . date("Y.m.d") . " - " . date("h.i.sa"); // Generate new image name
              $newImageName .= '.' . $imageExtension;
              $query = "UPDATE user SET profilePicture = '$newImageName' WHERE userId = $userId";
              mysqli_query($conn, $query);
              move_uploaded_file($tmpName, 'img/' . $newImageName);
              echo "
                  <script>
                    window.location.href = 'profile.php';
                  </script>";
            }
          }
          ?>

          <div class="row">
            <h1 class="text-dark mb-0 fs-3">
              <span id="firstname"><?php echo $firstname; ?></span>
              <span id="lastname"><?php echo $lastname; ?></span>
              <button class="button p-0 me-2"></button>
              <span class="badge text-bg-primary fs-6  m-0">Verified user &#10003</span>
            </h1>
            <h6 class="fw-light text-secondary ">&#128231; <?php echo $email; ?></h6>
          </div>
          <div class="description">
            <form action="" method="post" id="form" class="form">
              <div class="mb-3">
