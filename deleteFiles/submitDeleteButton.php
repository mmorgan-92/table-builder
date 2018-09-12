<?php
//connect to the server
require_once '../connectToServer.php';
session_start();

//define variables
$groupName = "";
$category1 = "";
$topButtonName = "";


//funtion to sanatize input
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}


if (isset($_POST['groupName']) && !empty($_POST['groupName'])) {
      $groupName = test_input($_POST['groupName']);
    }
    else{
      echo "groupName needs to be set";
    }
if (isset($_POST['category1']) && !empty($_POST['category1'])) {
          $category1 = test_input($_POST['category1']);
  }
  else{
        echo "category1 needs to be set";
        }
if (isset($_POST['topButtonName']) && !empty($_POST['topButtonName'])) {
                  $topButtonName = test_input($_POST['topButtonName']);
}
else{
      echo "category12 needs to be set";
    }

    
$deleteTable = " TRUNCATE TABLE undo_table";
if ($conn->query($deleteTable) === TRUE){
    $copyTable = "INSERT undo_table SELECT * FROM table_data";
    if ($conn->query($copyTable) === TRUE){
    }
}

$sql = "DELETE FROM table_data WHERE groupname='$groupName' AND category1='$category1' AND top_button_name='$topButtonName'";
if ($conn->query($sql) === TRUE) 
{
  $log = "INSERT INTO change_log  (user, change_made) VALUES ('".$_SESSION['username']."', 'deleted top button ".$topButtonName." from ".$groupName."')";
  if ( $conn->query($log) === TRUE ){

  }
}
else
 {
  echo '<script language="javascript">';
  echo 'alert("error deleting data from table")';
  echo '</script>';
}

require_once '../closeConnection.php';

?>
