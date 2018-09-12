
<?php
//connect to the server
$servername = "localhost";
$username = "root";
$password = 'B0tt0m92!';
$dbname = "table_builder";

// Create connection
$conn = new mysqli($servername, $username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
