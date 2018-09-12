
<?php
//connect to the server
require_once '../connectToServer.php';

//define variables
$groupName = "";
$category1 = "";
$category1data = "";
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
$category1data = test_input($_POST['category1data']);
$columnName = test_input($_POST['mainColumnName']);

echo $category1data;
echo $columnName;
//input variables into database
$sql = "UPDATE table_data SET category1data = '$columnName' where groupname = '$groupName' AND category1data = '$category1data'";
  if ($conn->query($sql) === TRUE) {
    $log = "INSERT INTO change_log  (user, change_made) VALUES ('".$_SESSION['username']."', 'changed product name ".$category1data." to ".$columnName."')";
    if ( $conn->query($log) === TRUE ){

    }
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
