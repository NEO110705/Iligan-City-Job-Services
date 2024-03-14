<?php
include "connection.php";
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Services | Iligan City Community Services</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>

  <div class="container-fluid">
    <div class="row">
      <div class="col-2">
        <img src="uploads/websiteImages/logo-website.png" alt="Iligan City Official Seal">
      </div>
      <div class="col-6">
        <h1 class="display col ">Iligan City Community Services</h1>
        <h4 class="display col">Elevating Opportunities, Connecting Communities.</h4>
      </div>
      <div class="col-4"></div>
    </div>
  </div>



  <hr class="grid-item">
  <div>
    <div class="navigation-container">
      <div class="float-item">
        <p>You are here: <a href="index.php" class="hover">Home</a>/ Profile</p>
      </div>
      <div class="float-item">
        <p>
          <a href="log-in.php" class="hover">Log in</a>
          |
          <a href="sign-up.php" class="hover">Sign up</a>
        </p>
      </div>
    </div>
  </div>

  <hr class="grid-item">

  <div class="services-list-div" id="sticky">
    <p>Services</p>
  </div>

  <div class="box" id="myDiv">
    <div class="advisory-message">
      <div class="advisory-text-div">
        <h3>ADVISORY!</h3>
        <button class="advisory-remove-button" onclick="hideDiv()">&#10005;</button>
      </div>

      <div>
        <p class="advisory-paragraph">This Services Portal of Iligan City Community Services (ICCS), is dedicated to offering information about various services available in Iligan City. The details provided here are sourced from local service providers and adhere to the goals established by the Iligan Computer Institute.</p>
        <p class="advisory-paragraph">It's important to clarify that ICCS platform is not involved in the processing or facilitation of service applications. Any inquiries, service requests, or related questions should be directed to the respective service providers whose contact information is made available on this website.</p>
        <p class="advisory-paragraph">It's crucial to note that the Iligan City Community Services does not guarantee the accuracy, completeness, or suitability of the information presented on this platform. We disclaim any legal liability or responsibility for the outcomes arising from the use of the information provided. Users are encouraged to verify details directly with the concerned service providers.</p>
      </div>
    </div>
  </div>

  <script>
    function hideDiv() {
      var div = document.getElementById('myDiv');
      div.classList.add('hidden');
    }
  </script>

  <div class="container-fluid ">
    <div class="row ">
      <div class="col">
        <input type="search" name="search" id="search-bar" placeholder=" Search Services"></input>
        <input class="btn btn-primary btn-md" type="button" value="search"  id="search-button"
        style="--bs-btn-padding-y: 0.6rem; --bs-btn-padding-x: 1rem; --bs-btn-font-size: 1rem;"
        ></input>
      </div>
    </div>
  </div>


  <!-- Job and services list table -->
  <div class="job-and-services-list-container-div">

    <?php
    /*
$sql = "SELECT `service`, email, firstname, lastname, `address`, `description`, `phone-number`, `facebook-profile-link`
        FROM users
        WHERE `service` IS NOT NULL
          AND email IS NOT NULL
          AND firstname IS NOT NULL
          AND lastname IS NOT NULL
          AND `address` IS NOT NULL
          AND `description` IS NOT NULL
          AND `phone-number` IS NOT NULL
          AND `facebook-profile-link` IS NOT NULL
          ";

$query = mysqli_query($connectDB, $sql);

while ($row = mysqli_fetch_assoc($query)) {
    echo "Service: " . $row['service'] . "<br>";
    echo "Email: " . $row['email'] . "<br>";
    // Add other columns as needed
    echo "<br>";
}

mysqli_close($connectDB);
*/
    ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>