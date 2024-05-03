<?php
          $_SESSION["userId"] = 7; //change this id to whoever is currently logged in
          $sessionId = $_SESSION["userId"];
          $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM user WHERE userId = $sessionId"));
?>
