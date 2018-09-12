<?php
    session_start();
    require_once 'connectToServer.php';
    $myID = "SELECT number FROM loggedinusers WHERE id='1'";
    $myIDresult = mysqli_query($conn, $myID);
    $ID = mysqli_fetch_array($myIDresult);
    $value = (int) $ID['number'];
    if ($value == 1)
    {
        $changeID = " UPDATE loggedinusers SET number='2' WHERE id='1' ";
        if (mysqli_query($conn, $changeID)) {
            
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
            header("location: editTable.php");
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
    else{
        $conn->close(); // close database connection
        header("location: sorry.php");

    }
    $conn->close(); // close database connection
?>