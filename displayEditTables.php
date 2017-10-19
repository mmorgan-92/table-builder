
<?php
// main file for displaying the tables from the database
// it creates a pipeline of the different parts of a table in order to dynamically display trader_cdlhikkakemod

//connect to the server
require_once 'connectToServer.php';

//declare variables
$linkTest = "none";

// start looping though database
// get all fo the distinct group names and  manin category for each table
$sql = "SELECT DISTINCT groupname,category1 FROM opspage_copy";
$result = mysqli_query($conn, $sql);
  // start loop for each table
  while($row = mysqli_fetch_array($result)) {
    echo "<div class='container tableBody'>"; // contain for the table

      // create header for the table
      echo "<div class='container tableTitle'>"; // container for table title and buttons
        echo "<div class='row'style='float: right; padding-right: 2%'>";
          echo "<div class='col-lg-12'>";
            include 'deleteFiles/deleteTable.php';
          echo "</div>";
        echo "</div>";
        echo "<div class='row'style='text-align: center;'>";
          echo "<div class='col-sm-12'>";
            echo "<h2 style='padding-left: 5%;'>" .$row["groupname"]."</h2>"; // output the title of the table
          echo "</div>";
        echo "</div>";

      // get the top buttons from the server
      $getTopButtons = "SELECT DISTINCT top_button_name, top_button_link FROM opspage_copy WHERE groupname='" .$row['groupname']. "'";
      $getTopButtonsRusult = mysqli_query($conn, $getTopButtons);
      if ($getTopButtonsRusult->num_rows > 0)
      {
        echo "<div class='row' style='margin-bottom: 1%; text-align: center;'>";

            // loop through top buttons
            while ($createTopButtonRow = mysqli_fetch_array($getTopButtonsRusult)){
              if($createTopButtonRow['top_button_name'] != NULL){
                echo "<div class='col-md-2 btn-primary' style=' text-align: center; padding: 5px; border-radius: 5px; margin-right: 1%;'>";

                //  echo "<div class='row' style='display: -webkit-flex;'>";
                //    echo "<div class='col-lg-10' style='text-align: center;'>";
                      echo "<a style='text-decoration: none; color: #ffffff; padding-right: 2%;' href=\"".$createTopButtonRow['top_button_link']."\">" .$createTopButtonRow['top_button_name'] .  "</a>";
          //          echo "</div>";
            //        echo "<div class='col-lg-2' style='text-align: center;'>";
                      include 'deleteFiles/deleteTopButton.php';
          //          echo "</div>";
                  echo "</div>";

              }
            }
        echo "</div>";
        echo "<div class='row'>";
          echo "<div class='col-sm-12' style='float: left; padding-left: 1%;'>";
            include 'createModalFiles/createTopButtonModal.php'; // modal to create top button
          echo "</div>";
        echo "</div>";
      echo"</div>";  // end of table header
      }

      // create table
      echo "<table class='well table table-responsive' style='margin-top: 1%;' id='". $row['groupname']."'>";
        echo "<thead>";
          echo "<th>" .$row['category1']."</th>";
          $getCategory2 = "SELECT DISTINCT category2 FROM opspage_copy WHERE groupname='".$row['groupname']."' AND category1='".$row['category1']. "' AND category2 IS NOT NULL";
          $getCategory2Result = mysqli_query($conn, $getCategory2);
            if ($getCategory2Result->num_rows > 0){
              while($category2Row = mysqli_fetch_array($getCategory2Result)) {
                echo "<th>" . $category2Row['category2'];
                include 'deleteFiles/deleteColumn.php';
                echo"</th>";
              }
            }
            echo "<th>";
              include 'createModalFiles/createNewColumnModal.php';
            echo "</th>";
          echo "</thead>";
          //create table body
          echo "<tbody>";
          //get list of data in category 1
          $getCategory1Data = "SELECT DISTINCT category1data FROM opspage_copy WHERE groupname='".$row['groupname']. "' AND category1='".$row['category1']. "' AND category1data IS NOT NULL ";
          $getCategory1DataResult = mysqli_query($conn, $getCategory1Data);
          while($category1DataRow = mysqli_fetch_array($getCategory1DataResult)){
            //start a new row
            echo "<tr>";
              // output category1
              echo "<td>";
                echo "<div class='row tableProducts'>";
                  echo "<div class='col-sm-4'";
                    echo "<h5 style='margin-right: 1%;'>".$category1DataRow['category1data']."</h4>";
                  echo "</div>";
                  echo "<div class='col-sm-2'";
                    include 'deleteFiles/deleteProduct.php';
                  echo "</div>";
                echo "</div>";
              echo "</td>";
              // start new column
              echo "<td>";
                // get category2
                $getCategory2B = "SELECT DISTINCT category2 FROM opspage_copy WHERE groupname='".$row['groupname']."' AND category1='".$row['category1']. "' AND category1data IS NOT NULL AND category2 IS NOT NULL";
                $getCategory2ResultB = mysqli_query($conn,$getCategory2B);
                // loop through category2's
                while($category2RowB = mysqli_fetch_array($getCategory2ResultB)){
                  // get data from category2
                  $getCategory2Data = "SELECT DISTINCT data FROM opspage_copy WHERE groupname='" .$row['groupname']. "' AND category1='" .$row['category1']. "' AND category1data='" . $category1DataRow['category1data'] . "' AND category2='" .$category2RowB['category2']. "' AND data IS NOT NULL";
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
                        echo "<div class='row tableProducts'>";
                          echo "<div class='col-sm-4'>";
                            echo "<a class='data' href=\"" . $category2DataLinkRow['link'] . "\">" . $category2DataRow['data'] . "  </a>";
                          echo "</div>";
                          echo "<div class='col-sm-2'>";
                            include 'deleteFiles/deleteData.php';
                          echo "</div>";
                        echo "</div>";
                            echo "<br>";
                      }
                      else{
                        echo "<div class='row tableProducts'>";
                          echo "<div class='col-sm-4'>";
                            echo "<p class='data'>".$category2DataRow['data'] . "</p>";
                          echo "</div>";
                          echo "<div class='col-sm-2'>";
                            include 'deleteFiles/deleteDataNoLink.php';
                            echo "<br>";
                          echo "</div>";
                        echo "</div>";
                      }
                    }
                  }
                  echo "<div class='row' style='float: left;'>";
                  include 'createModalFiles/createNewTableDataModal.php';
                  echo "</div>";
                  echo "<td>";
                }
                echo "</tr>";
              }
              echo "<tr>";
                echo "<td>";
                echo "<div class='row' style='float: right;'>";
                      include 'createModalFiles/createNewMainColumnModal.php';
                      echo "</div>";
                echo "</td>";
              echo "</tr>";
            echo "</tbody>";
          echo "</table>";
        echo "</div>";

        }

$conn->close();
?>
