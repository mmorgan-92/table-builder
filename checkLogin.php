<?php

session_start();

include "connectToServer.php";

$error = '';
$username = "";
$pwd = "";
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

// test username
if (isset($_POST['uname'])){
  $username = test_input($_POST['uname']);
}
else{
  echo "username needs to be set";
  header("location: index.php");
}

// test password
if (isset($_POST['psw'])){
  $pwd = test_input($_POST['psw']);
}
else{
  echo " password needs to be set";
  header("location: index.php");
}


//search database for the username
$login = "SELECT * FROM login WHERE username='$username' AND password='$pwd'";
$getLogin = mysqli_query($conn, $login);
$validate = mysqli_num_rows($getLogin);

if ($validate == 1){
  $_SESSION['login_user'] = $username; //initialize SessionHandler
  header("location: editTable.php"); //redirect to edit the tables
}
else{
  echo "Username or Password is invalid";
  header("location index.php");
}

include 'closeConnection.php';
 ?>
