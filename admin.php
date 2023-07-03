<!-- <?php
// session_start();

// include "connection.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $defaultPassword = "1234"; // Default password

    $password = $_POST['password']; // Get the submitted password from the form

    if ($password === $defaultPassword) {
        // Password is correct, redirect to a different webpage
        header("Location: admintables.php");
        exit;
    } else {
        // Password is incorrect, display an error message or redirect to an error page
        echo "Incorrect password. Please try again.";
        // Or: header("Location: errorpage.php");
        // You can handle the error case based on your requirements
        exit;
    }
}
?> -->

<form action="process.php">
    <label for="password">Set Default Password:</label>
    <input type="password" name="password" id="password" required>
    <button type="submit">Submit</button>
</form>