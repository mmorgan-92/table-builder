<?php
session_start();
//connect to the server
require_once '../connectToServer.php';

//define variables
$groupName = "";
$category1 = "";
$category1Data = "";
$category2 = "";
$data = "";
$dataLink = "";

//funtion to sanatize input
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
echo $data;
return $data;
}

// input for data into database
//test if for has been submited and filled out
if(isset($_POST)==true && empty($_POST)==false){
//sanatize input
$groupName = test_input($_POST['groupName']);
$category1 = test_input($_POST['category1']);
$category1Data = test_input($_POST['category1Data']);
$category2 = test_input($_POST['category2']);
$data = test_input($_POST['newTableData']);
$dataLink = test_input($_POST['newTableDataLink']);

//input variables into database

if ($dataLink === "none"){
  $sql = "INSERT INTO table_data (groupname, category1, category1data, category2, data) VALUES ('$groupName', '$category1', '$category1Data', '$category2', '$data')";
  if ($conn->query($sql) === TRUE) 
  {
    $log = "INSERT INTO change_log  (user, change_made) VALUES ('".$_SESSION['username']."', 'added data ".$data." to ".$category1." in " .$groupName."')";
    if ( $conn->query($log) === TRUE ){
  
    }
  }
   else {
    echo '<script language="javascript">';
    echo 'alert("error creating table data")';
    echo '</script>';
  }
}
else {
  $sql = "INSERT INTO table_data (groupname, category1, category1data, category2, data, link) VALUES ('$groupName', '$category1', '$category1Data', '$category2', '$data', '$dataLink')";
  if ($conn->query($sql) === TRUE) {

  } else {
    echo '<script language="javascript">';
    echo 'alert("error creating table data")';
    echo '</script>';
  }
}
}
//close connection
require_once '../closeConnection.php';

?>
