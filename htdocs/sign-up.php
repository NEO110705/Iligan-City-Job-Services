<?php
  include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <title>Services - Iligan City Job Services</title>
</head>
<body>
  <h3>Sign up</h3>

    <form action="formhandler.inc.php" method="POST">
    <input type="text" name="firstname" placeholder="First name" required><br><br>
    <input type="text" name="lastname" placeholder="Last Name" required><br><br>
    <input type="text" name="email" placeholder="Email" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <input type="text" name="service" placeholder="Service to offer eg. Tutoring" required><br><br>
    <button>Sign in</button>
   </form>
</body>
</html>