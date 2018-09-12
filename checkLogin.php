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
  include 'closeConnection.php';
  session_unset(); 
  session_destroy(); 
  header("location: login.php");
}

// test password
if (isset($_POST['psw'])){
  $pwd = test_input(md5($_POST['psw']));
}
else{
  echo " password needs to be set";
  include 'closeConnection.php';
  session_unset(); 
  session_destroy(); 
  header("location: login.php");
}

$login = "SELECT * FROM users WHERE username='$username' AND password='$pwd'";
$getLogin = mysqli_query($conn, $login);
$validate = mysqli_num_rows($getLogin);

if ($validate == 1){
  include 'closeConnection.php';
  $_SESSION['username'] = $username; // repalce blank username with validated user SessionHandler
  $_SESSION['password'] = $pwd;
  header("location: checkNumUsers.php"); //redirect to edit the tables
}
else{
  echo "Username or Password is invalid";
  include 'closeConnection.php';
  session_unset(); 
  session_destroy(); 
  header("location: index.php");
}
 ?>
