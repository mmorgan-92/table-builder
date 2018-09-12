<?php

session_start();

//connect to the server
require_once 'connectToServer.php';

if (isset($_SESSION['username']))
{
  //Assign the current timestamp as the user's
  //latest activity
  $_SESSION['last_action'] = time();


  //declare variables
  $linkTest = "none";
  $groupName = "";

  if ( isset($_POST['groupName']) && !empty($_POST['groupName']) ) {
      $groupName = $_POST['groupName'];
  }
  else{
    echo "groupName needs to be set";
    }
  //start looping though database
  // get all fo the distinct group names and main category for each table
  $sql = "SELECT DISTINCT category1 FROM table_data WHERE groupname='$groupName'";
  $result = mysqli_query($conn, $sql);
  // start loop for each table
  while($row = mysqli_fetch_array($result)) {
    echo "<div class='container editTables'>"; // contain for the table
    // create header for the table
      echo "<div class='container tableTitle'>"; // container for table title and buttons
          echo "<div class='row'style='text-align: center;'>";
            echo "<div class='col-sm-12'>";
              echo "<h2>" .$groupName."</h2>"; // output the title of the table
              include 'deleteFiles/deleteTable.php';
            echo "</div>";
          echo "</div>";

          echo "<div id='topButtons'>"; // div to contain buttons  
          // get the top buttons from the server
          $getTopButtons = "SELECT DISTINCT top_button_name, top_button_link FROM table_data WHERE groupname='" .$groupName. "'";
          $getTopButtonsRusult = mysqli_query($conn, $getTopButtons);
          if ($getTopButtonsRusult->num_rows > 0)
          {
            echo "<div class='row' style='margin-bottom: 1%; text-align: center;'>";
              // loop through top buttons
              while ($createTopButtonRow = mysqli_fetch_array($getTopButtonsRusult)){
                if($createTopButtonRow['top_button_name'] != NULL){
                  echo "<div class='col-md-4 tableBtn' style=' text-align: center; padding: 5px; border-radius: 5px; margin-right: 1%; margin-bottom: 1em;'>";
                    echo "<a style='text-decoration: none; color: #ffffff; padding-right: 2%;' href=\"".$createTopButtonRow['top_button_link']."\">" .$createTopButtonRow['top_button_name'] .  "</a>";
                    include 'deleteFiles/deleteTopButton.php';
                  echo "</div>"; // close div
                }
              }
            echo "</div>"; // close topButtons
            echo "<div class='row'>";
              echo "<div class='col-sm-12'>";
                include 'createModalFiles/createTopButtonModal.php'; // modal to create top button
              echo "</div>"; // close column
            echo "</div>"; // close row
        echo "</div>"; // close table title
          }
        echo"</div>";  // end of table header
        // create table
        echo "<table class='well table table-responsive' style='margin-top: 1%;' id='". $groupName."'>";
        echo "<thead>";
          echo "<th>" .$row['category1']."</th>";
          $getCategory2 = "SELECT DISTINCT category2 FROM table_data WHERE groupname='".$groupName."' AND category1='".$row['category1']. "' AND category2 IS NOT NULL";
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
          $getCategory1Data = "SELECT DISTINCT category1data FROM table_data WHERE groupname='".$groupName. "' AND category1='".$row['category1']. "' AND category1data IS NOT NULL ";
          $getCategory1DataResult = mysqli_query($conn, $getCategory1Data);
          $products = array('');
          while($category1DataRow = mysqli_fetch_array($getCategory1DataResult)){
            if ($category1DataRow['category1data'] != NULL ){
              array_push($products, $category1DataRow['category1data']);
            }
          }
          sort($products);
          // sort array alphabetcally
          $arrlength = count($products);
          if ($arrlength > 0){
            for ($x= 1; $x < $arrlength; $x++){
              //start a new row
              echo "<tr>";
                // output category1
              echo "<td style='vertical-align:middle'>";
                  echo "<div class='tableProducts'>";
                    echo "<div>";

                    echo "</div>";
                    echo "<div>";
                      echo "<b>".$products[$x]."</b>";
                      include 'deleteFiles/deleteProduct.php';
                      include 'createModalFiles/changeProduct.php';
                    echo "</div>";
                  echo "</div>";
                echo "</td>";

                // start new column

                // get category2
                $getCategory2B = "SELECT DISTINCT category2 FROM table_data WHERE groupname='".$groupName."' AND category1='".$row['category1']. "' AND category1data IS NOT NULL AND category2 IS NOT NULL";
                $getCategory2ResultB = mysqli_query($conn,$getCategory2B);

                echo "<td style='vertical-align:middle'>";

                  // loop through category2's
                  while($category2RowB = mysqli_fetch_array($getCategory2ResultB)){
                    // get data from category2
                    $getCategory2Data = "SELECT DISTINCT data FROM table_data WHERE groupname='" .$groupName. "' AND category1='" .$row['category1']. "' AND category1data='" . $products[$x] . "' AND category2='" .$category2RowB['category2']. "' AND data IS NOT NULL";
                    $getCategory2DataResult = mysqli_query($conn, $getCategory2Data);
                    //check if data exists
                    if ($getCategory2DataResult->num_rows > 0){
                      //if data exists loop through the data
                      while($category2DataRow = mysqli_fetch_array($getCategory2DataResult)){
                        // check if link is associated with data
                        $getCategory2DataLink = "SELECT DISTINCT link FROM table_data WHERE groupname='" .$groupName. "' AND category1='" .$row['category1']. "' AND category2='" .$category2RowB['category2']. "' AND data='" .$category2DataRow['data']. "'";
                        $getCategory2DataLinkResult = mysqli_query($conn, $getCategory2DataLink);
                        $category2DataLinkRow = mysqli_fetch_array($getCategory2DataLinkResult);
                        if ($category2DataLinkRow['link'] != NULL){
                          if ($category2DataRow != NULL){
                            echo "<div class='tableProducts'>";
                              echo "<div>";
                                include 'deleteFiles/deleteData.php';
                              echo "</div>";
                              echo "<div>";
                                echo "<a class='data dlink' href=\"" . $category2DataLinkRow['link'] . "\">" . $category2DataRow['data'] . "  </a>";
                              echo "</div>";
                            echo "</div>";
                          }
                        }
                        else{
                          if ($category2DataRow != NULL){
                            echo "<div class='tableProducts'>";
                              echo "<div>";
                                include 'deleteFiles/deleteDataNoLink.php';
                              echo "</div>";
                              echo "<div>";
                                echo "<div class='data'>".$category2DataRow['data'] . "</div>";
                              echo "</div>";
                            echo "</div>";
                          }
                        }
                      }
                    }
                    echo "<div>";
                    include 'createModalFiles/createNewTableDataModal.php';
                    echo "</div>";
                    echo "<td style='vertical-align:middle'>";
                  }
                  echo "</tr>";
                }
              }
              echo "<tr>";
                echo "<td style='vertical-align:middle'>";
                echo "<div>";
                      include 'createModalFiles/createNewMainColumnModal.php';
                      echo "</div>";
                echo "</td>";
              echo "</tr>";
            echo "</tbody>";
          echo "</table>";
        echo "</div>";

        }
      }
      else {
        //declare variables
$linkTest = "none";
$groupName = "";

if (isset($_POST['groupName']) && !empty($_POST['groupName'])) {
    $groupName = $_POST['groupName'];
  }
  else{
    echo "groupName needs to be set";
  }
//start looping though database
// get all fo the distinct group names and main category for each table
$sql = "SELECT DISTINCT category1 FROM table_data WHERE groupname='$groupName'";
$result = mysqli_query($conn, $sql);
// start loop for each table
while($row = mysqli_fetch_array($result)) {
    echo "<div class='container editTables'>"; // contain for the table

      // create header for the table
      echo "<div class='container tableTitle'>"; // container for table title and buttons
        echo "<div class='row'>";
          echo "<div class='col-lg-12'>";

          echo "</div>";
        echo "</div>";
        echo "<div class='row'style='text-align: center;'>";
          echo "<div class='col-sm-12'>";
            echo "<h2>" .$groupName."</h2>"; // output the title of the table
          echo "</div>";
        echo "</div>";

        echo "<div id='topButtons'>"; // div to contain buttons  
          // get the top buttons from the server
          $getTopButtons = "SELECT DISTINCT top_button_name, top_button_link FROM table_data WHERE groupname='" .$groupName. "'";
          $getTopButtonsRusult = mysqli_query($conn, $getTopButtons);
          if ($getTopButtonsRusult->num_rows > 0)
          {
            echo "<div class='row' style='margin-bottom: 1%; text-align: center;'>";

                // loop through top buttons
                while ($createTopButtonRow = mysqli_fetch_array($getTopButtonsRusult)){
                  if($createTopButtonRow['top_button_name'] != NULL){
                    echo "<div class='col-md-4 tableBtn' style=' text-align: center; padding: 5px; border-radius: 5px; margin-right: 1%; margin-bottom: 1em;'>";

                    //  echo "<div class='row' style='display: -webkit-flex;'>";
                    //    echo "<div class='col-lg-10' style='text-align: center;'>";
                          echo "<a style='text-decoration: none; color: #ffffff; padding-right: 2%;' href=\"".$createTopButtonRow['top_button_link']."\">" .$createTopButtonRow['top_button_name'] .  "</a>";
              //          echo "</div>";
                      echo "</div>";

                  }
                }
            echo "</div>"; // close topButtons
          echo "</div>";
          }
      echo"</div>";  // end of table header
      // create table
      echo "<table class='well table table-responsive' style='margin-top: 1%;' id='". $groupName."'>";
      echo "<thead>";
        echo "<th>" .$row['category1']."</th>";
        $getCategory2 = "SELECT DISTINCT category2 FROM table_data WHERE groupname='".$groupName."' AND category1='".$row['category1']. "' AND category2 IS NOT NULL";
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
        $getCategory1Data = "SELECT DISTINCT category1data FROM table_data WHERE groupname='".$groupName. "' AND category1='".$row['category1']. "' AND category1data IS NOT NULL ";
        $getCategory1DataResult = mysqli_query($conn, $getCategory1Data);
        $products = array('');
        while($category1DataRow = mysqli_fetch_array($getCategory1DataResult)){
          if ($category1DataRow['category1data'] != NULL ){
            array_push($products, $category1DataRow['category1data']);
          }
        }
        sort($products);
        // sort array alphabetcally
        $arrlength = count($products);
        if ($arrlength > 0){
          for ($x= 1; $x < $arrlength; $x++){
            //start a new row
            echo "<tr>";
              // output category1
            echo "<td style='vertical-align:middle'>";
                echo "<div class='tableProducts'>";
                    echo "<b>".$products[$x]."</b>";
                echo "</div>";
              echo "</td>";

              // start new column

              // get category2
              $getCategory2B = "SELECT DISTINCT category2 FROM table_data WHERE groupname='".$groupName."' AND category1='".$row['category1']. "' AND category1data IS NOT NULL AND category2 IS NOT NULL";
              $getCategory2ResultB = mysqli_query($conn,$getCategory2B);

              echo "<td style='vertical-align:middle'>";

                // loop through category2's
                while($category2RowB = mysqli_fetch_array($getCategory2ResultB)){
                  // get data from category2
                  $getCategory2Data = "SELECT DISTINCT data FROM table_data WHERE groupname='" .$groupName. "' AND category1='" .$row['category1']. "' AND category1data='" . $products[$x] . "' AND category2='" .$category2RowB['category2']. "' AND data IS NOT NULL";
                  $getCategory2DataResult = mysqli_query($conn, $getCategory2Data);
                  //check if data exists
                  if ($getCategory2DataResult->num_rows > 0){
                    //if data exists loop through the data
                    while($category2DataRow = mysqli_fetch_array($getCategory2DataResult)){
                      // check if link is associated with data
                      $getCategory2DataLink = "SELECT DISTINCT link FROM table_data WHERE groupname='" .$groupName. "' AND category1='" .$row['category1']. "' AND category2='" .$category2RowB['category2']. "' AND data='" .$category2DataRow['data']. "'";
                      $getCategory2DataLinkResult = mysqli_query($conn, $getCategory2DataLink);
                      $category2DataLinkRow = mysqli_fetch_array($getCategory2DataLinkResult);
                      if ($category2DataLinkRow['link'] != NULL){
                        if ($category2DataRow != NULL){
                          echo "<div class='tableProducts'>";
                            echo "<a class='data dlink' href=\"" . $category2DataLinkRow['link'] . "\">" . $category2DataRow['data'] . "  </a>";
                          echo "</div>";
                        }
                      }
                      else{
                        if ($category2DataRow != NULL){
                          echo "<div class='tableProducts'>";;
                            echo "<div class='data'>".$category2DataRow['data'] . "</div>";
                          echo "</div>";
                        }
                      }
                    }
                  }
                  echo "<td style='vertical-align:middle'>";
                }
                echo "</tr>";
              }
            }
          echo "</tbody>";
        echo "</table>";
      echo "</div>";

      }
      }
$conn->close();
?>

