<?php
include 'connectToServer.php';

$deleteTable = " TRUNCATE TABLE table_data";
if ($conn->query($deleteTable) === TRUE){
    $copyTable = "INSERT table_data SELECT * FROM rollback_table";
    if ($conn->query($copyTable) === TRUE){
                
        $deleteUndo = " TRUNCATE TABLE undo_table";
        if ($conn->query($deleteUndo) === TRUE){
            $copyUndo = "INSERT undo_table SELECT * FROM table_data";
            if ($conn->query($copyUndo) === TRUE){
                include 'closeConnection.php';
                header('location: editTable.php');
            }
        }
    }
}
include 'closeConnection.php';
?>