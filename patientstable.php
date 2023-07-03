<?php
require_once("connection.php");

// ...

// database insert SQL code
if ($pass1 == $pass2) {
    $sql = "INSERT INTO Patient (`username`, `pass1`, `fname`, `lname`, `DOB`, `gender`, `email`, `phone`) VALUES ('$username','$pass1', '$fname', '$lname', '$DOB', '$gender', '$email', '$phone')";

    // insert in database 
    if ($conn->query($sql) === TRUE) {
        echo "New patient record created successfully";
    } else {
        echo "Registration unsuccessful";
    }
} else {
    echo "Password did not match";
}

// Fetch and display patient records
$selectQuery = "SELECT * FROM Patient";
$result = $conn->query($selectQuery);

if ($result->num_rows > 0) {
    echo "<h2>Patient Records</h2>";
    echo "<table>";
    echo "<tr><th>Username</th><th>First Name</th><th>Last Name</th><th>Date of Birth</th><th>Gender</th><th>Email</th><th>Phone</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['fname'] . "</td>";
        echo "<td>" . $row['lname'] . "</td>";
        echo "<td>" . $row['DOB'] . "</td>";
        echo "<td>" . $row['gender'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['phone'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No patient records found.";
}

$conn->close();
?>