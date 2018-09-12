<?php
//connect to the server
require_once '../connectToServer.php';
session_start();
//define variables
$groupName = "";
$mainColumnName = "";
$columnNames = array("");
$lenght = 0;

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
$groupName = test_input($_POST['tableName']);
$mainColumnName = test_input($_POST['mainColumnName']);
$columnNames = $_POST['columnName[]'];
$length = sizeof($columnNames);

for($i = 0; $i < $length; $i++)
{
  $columnNames[$i] = test_input($columnNames[$i]);
}


for ($i = 0; $i < $length; $i++)
{
  $sql = "INSERT INTO table_data (groupname, category1, category2) VALUES ('$groupName', '$mainColumnName', '$columnNames[$i]')";
  if ($conn->query($sql) === TRUE) 
  {

  } 
  else {
    echo '<script language="javascript">';
    echo 'alert("error creating table")';
    echo '</script>';
  }
}
$log = "INSERT INTO change_log  (user, change_made) VALUES ('".$_SESSION['username']."', 'added table ".$groupName."')";
if ( $conn->query($log) === TRUE ){

}

//close connection
$conn->close();
?>
