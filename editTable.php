<!Doctype html>

<?php
include 'session.php';
?>

<head>

<title>Opps Page</title>

<?php
  include 'navbar.php';
  include 'head.php';
?>

</head>

<body>

<?php
  include 'header.php';
?>

<div class="container">
  <div class="row" style='text-align: center; padding-bottom: 3%;'>
    <div class=col-sm-12>
      <?php
      include 'createModalFiles/createNewTable.php';
      ?>
    </div>
  </div>
</div>

<?php
  include 'displayEditTables.php';
?>

</body>
