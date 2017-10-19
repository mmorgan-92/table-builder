<?php
//connect to the server
require_once '../connectToServer.php';

//define variables
$groupName = "";
$category1 = "";
$btnName = "";
$btnLink = "";

//funtion to sanatize input
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

// input for data into database
//test if for has been submited and filled out
if(isset($_POST)==true && empty($_POST)==false){
//sanatize input
$groupName = test_input($_POST['groupName']);
$category1 = test_input($_POST['category1']);
$btnName = test_input($_POST['buttonName']);
$btnLink = test_input($_POST['buttonLink']);

//input variables into database
  $sql = "INSERT INTO opspage_copy (groupname, category1, top_button_name, top_button_link) VALUES ('$groupName', '$category1', '$btnName', '$btnLink')";
  if ($conn->query($sql) === TRUE) {

  } else {
    echo '<script language="javascript">';
    echo 'alert("error creating table")';
    echo '</script>';
  }
}

//close connection
require_once '../closeConnection.php';

header('Location: ../editTable.php');
?>
