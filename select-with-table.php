<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uncle";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Code, Name, DOB, Number FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table border><tr><th>ID</th> 
  <th>Name</th>  
  <th>DOB</th> 
   <th>Number</th>
  </tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["Code"]."</td>  <td>".$row["Name"]."</td>
    <td>".$row["gender"]."</td>  <td>".$row["date_of_birth"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>