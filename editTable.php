<?php
// check if user has valid session
session_start();
//Assign the current timestamp as the user's
//latest activity
$_SESSION['last_action'] = time();

if (isset($_SESSION['username']))
{
  require_once 'connectToServer.php';
}
else{
    header("location: login.php");
}
?>



<!Doctype html>

<head>

<title>Ops Page</title>
<?php
  include 'head.php';
?>

</head>

<body>
  <?php
    include 'editTableNavbar.php';
    include 'getTableNamesNav.php';
    include 'header.php';
  ?>

  <div class="container">
    <div class="row" style='text-align: center; padding-bottom: 3%;'>
      <div class=span12>
        <?php
        include 'createModalFiles/createNewTable.php';
        ?>
      </div>
    </div>
  </div>

  <!-- sidebar with table names -->
  <div class='row'>
    <div class='col-md-2'>
      <div class="sidebarCol" data-spy="affix">
        <h1> Tables </h1>
          <?php
          include 'getTableNames.php';
            ?>
      </div>
    </div>

  <!-- dynamically dispalys table based on selection from sidebar -->
    <div class='col-md-10' id="displayEditTable">
      <div class="dynamicEditTable" id="dynamicEditTable" style="margin-top:50px">

      </div>
    </div>
  </div>
</body>

<?php
$conn->close(); // close database connection
?>
