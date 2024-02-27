<?php
    /* Check if the user actually submitted the form.  If not send the user back to sign up page */
    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $service = $_POST["service"];

        try {
            require_once "connection.php";

            $query = "INSERT INTO users (firstname, lastname, email, `password`, `service`) VALUES (?, ?, ?, ?, ?);";

            $statement = $connectDB->prepare($query);

            $statement->execute([$firstname, $lastname, $email, $password, $service]);

            $connectDB = null;
            $statement = null;

            header("Location: profile.php");

            die();

        } catch (PDOException $errorMsg) {
            die("Failed to insert data to Database: " . $errorMsg->getMessage());
        }

    } else {
        header("Location: ../sign-up.php");
        die();
    }
?>
