<?php
include 'connectToServer.php';

$deleteTable = " TRUNCATE TABLE table_data";
if ($conn->query($deleteTable) === TRUE){
    $copyTable = "INSERT table_data SELECT * FROM undo_table";
    if ($conn->query($copyTable) === TRUE){
        include 'closeConnection.php';
        header('location: editTable.php');
    }
}
include 'closeConnection.php';

?>
