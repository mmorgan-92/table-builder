<?php
// main file for displaying the tables from the database
// it creates a pipeline of the different parts of a table in order to dynamically display trader_cdlhikkakemod

//connect to the server
////////////////////////////////////
require_once 'connectToServer.php';
////////////////////////////////////

//declare variables
////////////////////////////////////
$linkTest = "none"; //holder for the link variable
$idName = ''; // holder for id name
////////////////////////////////////

// start looping though database and get the distinct groupname and category1 info
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
$sql = "SELECT DISTINCT groupname,category1 FROM table_data"; // get all the distinct group names and  manin category for each table
$result = mysqli_query($conn, $sql); // create a array of the distinct group names and main categories

while($row = mysqli_fetch_array($result)) {    // start loop for each table

$idName = $row['groupname'];
$idName = str_replace(' ', '', $idName);
$idName = str_replace('(', '', $idName);
$idName = str_replace(')', '', $idName);
$idName = str_replace('/', '', $idName);
$idName = str_replace('\\', '', $idName);
$idName = str_replace('{', '', $idName);
  $idName = str_replace('}', '', $idName);
  $idName = str_replace('=', '', $idName);
  $idName = str_replace('+', '', $idName);
  $idName = str_replace('>', '', $idName);
  $idName = str_replace('<', '', $idName);
  $idName = str_replace('?', '', $idName);

// start building tables
echo "<div class='container normalTable'>"; // contain for the table

  echo "<div class='tableTitle'>"; // container for table title and buttons
    echo "<div class='row'style='text-align: center;'>"; // create row inside of the container to put and center title of the table
      echo "<div class='col-md-12'>"; // make column inside of the row span the whole row
        echo "<h2>" .$row["groupname"]."</h2>"; // output the title of the table
      echo "</div>"; // close column
    echo "</div>";  // close row
    // get the top buttons from the server
    $getTopButtons = "SELECT DISTINCT top_button_name, top_button_link FROM table_data WHERE groupname='" .$row['groupname']. "'";
    $getTopButtonsRusult = mysqli_query($conn, $getTopButtons);  // create an array of top buttons
    if ($getTopButtonsRusult->num_rows > 0) // check if there are any top buttons to display, if so continue.
    {
      echo "<div class='row' style='margin-bottom: 1%;'>"; // create new row to include the top buttons
        echo "<div class='text-center'>";
          echo "<div class='btn-group'>";  // create a button group
            // loop through top buttons array
            while ($createTopButtonRow = mysqli_fetch_array($getTopButtonsRusult)){
              // check if top button exists
              if($createTopButtonRow['top_button_name'] != NULL){
                echo "<a class='btn topBtn' href=\"".$createTopButtonRow['top_button_link']."\">" .$createTopButtonRow['top_button_name'] . "</a>"; // print top button
              }
            }
          echo "</div>";  // close button group
        echo "</div>";  //  close div that centers the buttons
      echo "</div>";  //  close row for the buttons
      }
      echo "<div class='row' style='text-align: center;'>";
      echo "<div class='span12'>";
        echo "<i class='fa fa-bars' data-toggle='collapse' href='#".$idName."'></i>";
      echo "</div>";
      echo "</div>";
  echo"</div>";  // close title container
// end of the table header that contains the title and top buttons
//////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////



// create the head of the table containing all of the categories for the table. The first row is category 1 and the rest are category2
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
  echo "<div class='panel-collapse collapse' id='".$idName."'>";
    echo "<table class='table table-responsive table-hover' style='margin-top: 1%;'>";  // start of the table
      echo "<thead class='well'>";  // create the head of the table
        echo "<th>" .$row['category1']."</th>";  // print the value of category 1
          // get the distinct category2 values from the data base using the already known values of groupname and category1. Make sure category 2 is not null
          $getCategory2 = "SELECT DISTINCT category2 FROM table_data WHERE groupname='".$row['groupname']."' AND category1='".$row['category1']. "' AND category2 IS NOT NULL";
          $getCategory2Result = mysqli_query($conn, $getCategory2);  // put category2 values into an array
          // make sure there are values in the array to print out
          if ($getCategory2Result->num_rows > 0){
            // if values exist loop through the array
            while($category2Row = mysqli_fetch_array($getCategory2Result)) {
              echo "<th>" . $category2Row['category2'];  //  print the values of category2
              echo"</th>";  // close category2 entry (th) so another one can be made
              }
            }
            // holder space to make table look nice. If you are editing be careful here, deleting this on accident could break the table.
        echo "<th>";
        echo "</th>";
      echo "</thead>";
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////

//create table body
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////

      echo "<tbody>";
      //get list of data in category 1 (this will be the first column nof the table)
      $getCategory1Data = "SELECT DISTINCT category1data FROM table_data WHERE groupname='".$row['groupname']. "' AND category1='".$row['category1']. "' AND category1data IS NOT NULL ";
      $getCategory1DataResult = mysqli_query($conn, $getCategory1Data); //  put category1 data into an array
      $products = array();
      while($category1DataRow = mysqli_fetch_array($getCategory1DataResult)){
        array_push($products, $category1DataRow['category1data']);
      }
      sort($products);
      // sort array alphabetcally
      $arrlength = count($products);
      for ($x= 0; $x < $arrlength; $x++){
        //start a new row
        echo "<tr>";
          // output category1
          echo "<div class='row tableProducts'>";
            echo "<td style='vertical-align:middle'>";
              echo "<div class='col-sm-12'";
                echo "<h5>".$products[$x]."</h5>";
                echo "";
              echo "</div>";  // close column in row
            echo "</td>";  //  close particular data entry but still stay in the same row of the table
            // start new column (remember, we are still in the same row of the table, the new columns are all the category2 data)
            echo "<td style='vertical-align:middle'>";
            // get category2 (we need to get all these values again, so lets put them in an array)
            $getCategory2B = "SELECT DISTINCT category2 FROM table_data WHERE groupname='".$row['groupname']."' AND category1='".$row['category1']. "' AND category1data IS NOT NULL AND category2 IS NOT NULL";
            $getCategory2ResultB = mysqli_query($conn,$getCategory2B);  // put the categoy2 values into the array
            // loop through category2's
            while($category2RowB = mysqli_fetch_array($getCategory2ResultB)){
              // get data from category2  (now it's time to get the actual data)
              $getCategory2Data = "SELECT DISTINCT data FROM table_data WHERE groupname='" .$row['groupname']. "' AND category1='" .$row['category1']. "' AND category1data='" . $products[$x] . "' AND category2='" .$category2RowB['category2']. "' AND data IS NOT NULL";
              $getCategory2DataResult = mysqli_query($conn, $getCategory2Data); // put all the data that is accosicated with the current category2 value into an array
              //check if data exists
              if ($getCategory2DataResult->num_rows > 0){
                //if data exists loop through the data
                while($category2DataRow = mysqli_fetch_array($getCategory2DataResult)){
                  // check if link is associated with data (some data has links others don't. We need to make sure we can handle both)
                  $getCategory2DataLink = "SELECT DISTINCT link FROM table_data WHERE groupname='" .$row['groupname']. "' AND category1='" .$row['category1']. "' AND category1data='".$products[$x]."' AND category2='" .$category2RowB['category2']. "' AND data='" .$category2DataRow['data']. "'";
                  $getCategory2DataLinkResult = mysqli_query($conn, $getCategory2DataLink); //  put the data that has a link into an array
                  $category2DataLinkRow = mysqli_fetch_array($getCategory2DataLinkResult);
                  // at this point we don't know if there is a link or not. If not the value will be NULL, so that is how we will differenciate
                  if ($category2DataLinkRow['link'] != NULL){
                    echo "<div class='tableProducts'>";  // create div with class table products
                      echo "<div>";
                        echo "<a class='data dlink' href=\"" . $category2DataLinkRow['link'] . "\">" . $category2DataRow['data'] . "  </a>";  // print out data with link
                      echo "</div>";
                    echo "</div>";  // close container
                  }
                  // if link values was null, ingore the link
                  else{
                    echo "<div class='tableProducts'>";
                      echo "<div>";
                        echo "<div class='data'>".$category2DataRow['data'] . "</div>";  // print out value (notice no link)
                      echo "</div>";
                    echo "</div>";  // close container
                  }
                } // end of single data entry loop
              } // end of single category2 data loop
              echo "<td style='vertical-align:middle'>";  // spacing value. For the love of god don't delete this;
            }  //  end of category2 loop
            echo "</td>";
          echo "</div>";
        echo "</tr>";  // close up row.
      }  // end of row loop. The next row will start with the next category1 data element
      echo "</tbody>";  //  close the body of the table
////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////

    echo "</table>";  //  close the table
  echo "</div>";
echo "</div>";  // close up table container
        }
/////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////

// close database connection
$conn->close();
?>
