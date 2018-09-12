<?php
session_start();
//connect to the server
require_once '../connectToServer.php';

//define variables
$groupName = "";
$category1 = "";
$columnName = "";

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
$columnName = test_input($_POST['columnName']);

//input variables into database
$getCategory1Data = "SELECT DISTINCT category1data FROM table_data WHERE groupname='".$groupName. "' AND category1='".$category1. "'";
$getCategory1DataResult = mysqli_query($conn, $getCategory1Data);
if ($getCategory1DataResult->num_rows > 1){
while($category1DataRow = mysqli_fetch_array($getCategory1DataResult)){
    $category1data = $category1DataRow['category1data'];
  if ($category1data != NULL){
    $sql = "INSERT INTO table_data (groupname, category1, category1data, category2) VALUES ('$groupName', '$category1', '$category1data', '$columnName')";
    if ($conn->query($sql) === TRUE) {

    } else {
      echo '<script language="javascript">';
      echo 'alert("error creating table")';
      echo '</script>';
    }
  }
  }
}
else{
  $sql = "INSERT INTO table_data (groupname, category1, category2) VALUES ('$groupName', '$category1', '$columnName')";
  if ($conn->query($sql) === TRUE)
  {
    $log = "INSERT INTO change_log  (user, change_made) VALUES ('".$_SESSION['username']."', 'added column ".$category2." to ".$groupName."')";
    if ( $conn->query($log) === TRUE ){

    }
  }
   else {
    echo '<script language="javascript">';
    echo 'alert("error creating table")';
    echo '</script>';
  }
}
}

//close connection
require_once '../closeConnection.php';

?>
