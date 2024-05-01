<?php

include "databaseConnection.php";

$sql = "SELECT u.userId, u.firstname, u.lastname, u.email, u.profilePicture, u.status,
        s.serviceProviderId, s.services, s.description, s.address
        FROM user u
        INNER JOIN serviceProvider s ON u.userId = s.userId";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    session_start(); // Start the session
    $_SESSION['userData'] = array(); // Initialize an array to store user data
    while($row = $result->fetch_assoc()) {
        $_SESSION['userData'][] = $row; // Store each row in the session variable
    }
    session_write_close(); // Close the session
}

$conn->close();

?>
