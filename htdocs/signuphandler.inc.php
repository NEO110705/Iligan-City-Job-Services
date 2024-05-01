<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = filter_input(INPUT_POST, "firstname", FILTER_SANITIZE_STRING);
    $lastname = filter_input(INPUT_POST, "lastname", FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $password = $_POST["password"];

    if (!$email) {
        die("Invalid email address.");
    }

    try {
        require_once "databaseConnection.php";

        $query = "INSERT INTO users (firstname, lastname, email, `password`) VALUES (?, ?, ?, ?);";
        $statement = $conn->prepare($query);
        
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $statement->execute([$firstname, $lastname, $email, $hashedPassword]);

        $conn = null;
        $statement = null;

        header("Location: profile.php");
        exit();

    } catch (PDOException $errorMsg) {
        die("Failed to insert data to Database: " . $errorMsg->getMessage());
    }

} else {
    header("Location: signup.php");
    exit();
}
?>
