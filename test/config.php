<!doctype html>
<! config.php >
<?php
   $servername = "localhost";
$username = "parsons1_admin";
$password = "dl07988509tx";
$database ="parsons1_arcdads";
// Create connection
$conn = new mysqli($servername, $username, $password,$database );

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully to $servername, $username, $password,$database";
?>