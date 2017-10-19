<link rel="stylesheet" type="text/css" href="css/style.css">
<?php
// main file for displaying the tables from the database
// it creates a pipeline of the different parts of a table in order to dynamically display trader_cdlhikkakemod

//connect to the server
require_once 'connectToServer.php';

//declare variables
$linkTest = "none";

//start looping though database
// get all fo the distinct group names and  manin category for each table
$sql = "SELECT DISTINCT groupname,category1 FROM opspage_copy";
$result = mysqli_query($conn, $sql);
  // start loop for each table
  while($row = mysqli_fetch_array($result)) {
    echo "<div class='container'>";
    echo "<div class='container tableTitle'>";
      echo "<div class='row' style='text-align: center; display: flex;'>";
        echo "<div class='col-lg-11'>";
          echo "<h2>" .$row["groupname"]."</h2>"; // output the title of the table
        echo "</div>";
        echo "<div class='col-lg-1'>";
          echo "<br>";
        echo "</div>";
      echo "</div>";
      $getTopButtons = "SELECT DISTINCT top_button_name, top_button_link FROM opspage_copy WHERE groupname='" .$row['groupname']. "'";  // get the top buttons from the server
      $getTopButtonsRusult = mysqli_query($conn, $getTopButtons);
      if ($getTopButtonsRusult->num_rows > 0)
      {
        echo "<div class='row' style='text-align: center;'>";
          echo "<div class='col-sm-12'>";
            echo "<div class='btn-group'>";
            // loop through top buttons
            while ($createTopButtonRow = mysqli_fetch_array($getTopButtonsRusult)){
              if($createTopButtonRow['top_button_name'] != NULL){
                echo "<a class='btn btn-primary' href=\"".$createTopButtonRow['top_button_link']."\">" .$createTopButtonRow['top_button_name']."</a>";
              }
            }
            echo "</div>";
          echo "</div>";
        echo "</div>";
      echo"</div><br>";
      }

      // create table
      echo "<table class='table table-bordered' id='". $row['groupname'] ."'>";
        echo "<thead>";
        if ($row['category1'] != NULL){
          echo "<th>" .$row['category1']."</th>";
        }
          $getCategory2 = "SELECT DISTINCT category2 FROM opspage_copy WHERE groupname='".$row['groupname']."' AND category1='".$row['category1']. "' AND category2 IS NOT NULL";
          $getCategory2Result = mysqli_query($conn, $getCategory2);
            if ($getCategory2Result->num_rows > 0){
              while($category2Row = mysqli_fetch_array($getCategory2Result)) {
                echo "<th>" . $category2Row['category2'];
                echo"</th>";
              }
            }

          echo "</thead>";
          //create table body
          echo "<tbody>";
          //get list of data in category 1
          $getCategory1Data = "SELECT DISTINCT category1data FROM opspage_copy WHERE groupname='".$row['groupname']. "' AND category1='".$row['category1']. "' AND category1data IS NOT NULL ";
          $getCategory1DataResult = mysqli_query($conn, $getCategory1Data);
          if ($getCategory1DataResult->num_row > 0 ){
          while($category1DataRow = mysqli_fetch_array($getCategory1DataResult)){
            //start a new row
            echo "<tr>";
              // output category1
              echo "<td>";
                echo $category1DataRow['category1data'];
              echo "</td>";
              // start new column
              echo "<td>";
                // get category2
                $getCategory2B = "SELECT DISTINCT category2 FROM opspage_copy WHERE groupname='".$row['groupname']."' AND category1='".$row['category1']. "' and category1data IS NOT NULL";
                $getCategory2ResultB = mysqli_query($conn,$getCategory2B);
                // loop through category2's
                while($category2RowB = mysqli_fetch_array($getCategory2ResultB)){
                  // get data from category 2
                  $getCategory2Data = "SELECT DISTINCT data FROM opspage_copy WHERE groupname='" .$row['groupname']. "' AND category1='" .$row['category1']. "' AND category1data='" . $category1DataRow['category1data'] . "' AND category2='" .$category2RowB['category2']. "'";
                  $getCategory2DataResult = mysqli_query($conn, $getCategory2Data);
                  //check if data exists
                  if ($getCategory2DataResult->num_rows > 0){
                    //if data exists loop through the data
                    while($category2DataRow = mysqli_fetch_array($getCategory2DataResult)){
                      // check if link is associated with data
                      $getCategory2DataLink = "SELECT DISTINCT link FROM opspage_copy WHERE groupname='" .$row['groupname']. "' AND category1='" .$row['category1']. "' AND category2='" .$category2RowB['category2']. "' AND data='" .$category2DataRow['data']. "'";
                      $getCategory2DataLinkResult = mysqli_query($conn, $getCategory2DataLink);
                      $category2DataLinkRow = mysqli_fetch_array($getCategory2DataLinkResult);
                      if ($category2DataLinkRow['link'] != NULL){
                        echo "<a style='display: inline;' href=\"" . $category2DataLinkRow['link'] . "\">" . $category2DataRow['data'] . "  </a>";

                        echo "<br>";
                      }
                      else{
                        echo "<p>".$category2DataRow['data'] . "</p>";
                        echo "<br>";
                      }
                    }
                  }
                  echo "<td>";
                }
                echo "</tr>";
              }
            }
            echo "</tbody>";
          echo "</table>";
        echo "</div>";

        }

$conn->close();
?>
