<?php 

require_once("connection.php");

// Create database
$sql = "CREATE DATABASE DrugDispencingTool";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

?>