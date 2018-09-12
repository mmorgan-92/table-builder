<?php
require_once 'connectToServer.php';
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
    include 'navbar.php';
    include 'getTableNamesNav.php';
    ?>
  <div>
  <?php
    include 'header.php';
  ?>

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
