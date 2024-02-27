<?php
      $hostname = "127.0.0.1";
      $username = "mariadb";
      $password = "mariadb";
      $database = "mariadb";
      
      $connectDB = mysqli_connect($hostname, $username, $password, $database);

/*Run Database on Terminal 

php -S 0.0.0.0:8000 

*/