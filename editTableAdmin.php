<?php
// check if user has valid session
session_start();
if (isset($_SESSION['username']))
{

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

<div class="container" style="margin-top:50px">
<?php
  if ($_SESSION['access'] == 'admin')
  {
  include 'displayEditTablesAdmin.php';
  }
  else{
    include 'distplayEditTables'
  }
?>
</div>
</body>
