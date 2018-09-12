<?php
//connect to the server
require_once '../connectToServer.php';

//define variables
$groupName = "";


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

    $deleteTable = " TRUNCATE TABLE undo_table";
if ($conn->query($deleteTable) === TRUE){
    $copyTable = "INSERT undo_table SELECT * FROM table_data";
    if ($conn->query($copyTable) === TRUE){
    }
}

  $sql = "DELETE FROM table_data WHERE groupname='$groupName'";
  if ($conn->query($sql) === TRUE)
  {
    $log = "INSERT INTO change_log  (user, change_made) VALUES ('".$_SESSION['username']."', 'deleted table ".$groupName."')";
    if ( $conn->query($log) === TRUE ){

    }
  } 
  else {
    echo '<script language="javascript">';
    echo 'alert("error deleting table")';
    echo '</script>';
  }

    require_once '../closeConnection.php';

    header('Location: ../editTable.php');
?>
