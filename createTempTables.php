<?php

$createUndo = " CREATE TABLE undo_table LIKE table_data " ;
if ( $conn->query($createUndo) === TRUE ){
    $transferUndo = "INSERT undo_table SELECT * FROM table_data";
    if ( $conn->query($transferUndo) === TRUE ){
    }
}
else{
    echo "error";
}

$createRollback = " CREATE TABLE rollback_table LIKE table_data";
if ( $conn->query($createRollback) === TRUE ){
    $transferRollback = "INSERT rollback_table SELECT * FROM table_data";
    if ( $conn->query($transferRollback) === TRUE ){
    }
}
else{
    echo "error";
}
?>