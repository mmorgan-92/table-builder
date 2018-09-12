
<?php
  session_start();
  session_unset(); 
  session_destroy(); 
?>
<h1> Sorry someone is already editing the page at this time </h1>
<a href="index.php">go back</a>