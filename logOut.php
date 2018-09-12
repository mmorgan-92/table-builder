<?php
session_start();
require_once 'connectToServer.php';
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset(); 

//change logged in table back to one so others can login
$changeID = " UPDATE loggedinusers SET number='1' WHERE id='1' ";
if (mysqli_query($conn, $changeID)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}


// destroy the session 
session_destroy(); 
$dropUndo = "DROP TABLE undo_table";
if (mysqli_query($conn, $dropUndo)) {
}
$dropRollback = "DROP TABLE rollback_table";
if (mysqli_query($conn, $dropRollback)) {
}

$conn->close();
header("location: index.php");
?>