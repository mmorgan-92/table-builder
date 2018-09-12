
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
$columnName = test_input($_POST['mainColumnName']);

$getCategory2 = "SELECT DISTINCT category2 FROM table_data WHERE groupname='".$groupName. "' AND category1='".$category1. "'";
$getCategory2DataResult = mysqli_query($conn, $getCategory2);
  while($category2DataRow = mysqli_fetch_array($getCategory2DataResult)){
    $category2data = $category2DataRow['category2'];
    if ($category2data != NULL){
      $sql = "INSERT INTO table_data (groupname, category1, category1data, category2) VALUES ('$groupName', '$category1', '$columnName', '$category2data')";
      if ($conn->query($sql) === TRUE)
      {
        $log = "INSERT INTO change_log  (user, change_made) VALUES ('".$_SESSION['username']."', 'added row ".$category1." to ".$groupName."')";
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
}

//close connection
require_once '../closeConnection.php';


?>
