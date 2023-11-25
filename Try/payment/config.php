<?php
$servername = "localhost";
$username = "desko2023_assemble_desk";
$password = "47gNz%xM!3dZ";
$databaseName = "desko2023_assemble_desk";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$databaseName);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>