<?php
$_SESSION["userId"] = $loggedInUserId; //this code fetches the user ID of the user who is logged-in in the session.
$sessionId = $_SESSION["userId"];
$query = "SELECT * FROM user WHERE userId = $sessionId";
$user = mysqli_fetch_assoc(mysqli_query($conn, $query));