<?php


//create arrays for tables
$tableNames = array();
$tableNamesForIDs = array();



$newSql = "SELECT DISTINCT groupname FROM table_data"; // get all the distinct group names and  manin category for each table
$newResult = mysqli_query($conn, $newSql); // create a array of the distinct group names and main categories

while($newRow = mysqli_fetch_array($newResult)) {    // start loop for each table
    array_push($tableNames, $newRow['groupname']);
    array_push($tableNamesForIDs, removeSpaces($newRow['groupname']));
}

//echo '<pre>'; print_r($tableNames); echo '</pre>';
//echo '<pre>'; print_r($tableNamesForIDs); echo '</pre>';
    $arrlength = count($tableNames);
//echo $arrlength;

?>

<?php
$i = 0;
while ($i < $arrlength){
?>
    <div>
        <h5 class='sidebarTables' data-target="#displayEditTable" data-group="<?php echo $tableNames[$i]; ?>" data-id="<?php echo $tableNamesForIDs[$i]; ?>" >
            <?php
                echo "$tableNames[$i]";
            ?>
        </h5>
    </div>

<?php
    $i++;
}
?>