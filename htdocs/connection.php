<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <?php
      $hostname = "127.0.0.1";
      $username = "mariadb";
      $password = "mariadb";
      $database = "mariadb";

      $connectDB = mysqli_connect($hostname, $username, $password, $database);

      if($connectDB) {
        echo "Connected to database";
      } else {
        echo "Failed to connect";
      }
  ?>
</body>
</html>