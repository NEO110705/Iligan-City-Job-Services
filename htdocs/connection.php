<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
</head>
<!--Run Database on Terminal 

php -S 0.0.0.0:8000 

-->
<body style="background-color: black; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; ">
  <?php
      $hostname = "127.0.0.1";
      $username = "mariadb";
      $password = "mariadb";
      $database = "mariadb";

      $connectDB = mysqli_connect($hostname, $username, $password, $database);

      if($connectDB) {
        echo "<h1 align='center' style='color: lime;'>Connected to database!</h1>";
      } else {
        echo "Failed to connect";
      }
  ?>
</body>
</html>