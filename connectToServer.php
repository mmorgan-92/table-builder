
<?php
//connect to the server
$servername = getenv('IP');
$username = getenv('C9_USER');
$password = "";
$dbname = "oppspage";
$dbport = 3306;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $dbport);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
