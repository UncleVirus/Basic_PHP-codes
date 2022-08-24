<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Uncle_bd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO students (name, D.O.B, Number )
VALUES ('Allan Mutoto', '2000-07-07', 0718976489)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>