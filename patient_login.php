<?php
session_start();

include "connection.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the username and password from the form
    $username = $_POST["username"];
    $password = $_POST["pass1"];

    echo $username . " " . $password;

    $query = "SELECT * FROM patient WHERE username = '$username' AND pass1 = '$password' LIMIT 1";

    echo "<br>";

    echo $query;

    $result = mysqli_query($conn, $query);

    if ($result) {
        $_SESSION['username'] = $username;
        header("Location: patient_homepage.php");
    }


}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Patient Login Page</title>
    <style>
        body {
            background-color: cornsilk;
        }
    </style>
</head>

<body>
    <form method="POST">

        <h2 style="text-align: left;">Patient login </h2>
        <label for="username">Username:</label>
        <input type="text" placeholder="Enter username" id="username" name="username" required><br><br>

        <label for="pass1">Password:</label>
        <input type="text" placeholder="Enter password" id="pass1" name="pass1" required><br><br>

        <button type="submit">Login</button>
        <a href="welcome_page.php"><button type="button" class="cancel">Cancel</button></a><br>

        <a style="font-family: cursive;" href="patient_registration_form.php">Don't have an account? Sign up</a>
    </form>
</body>

</html>