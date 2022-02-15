<?php
session_start();
echo "Welcome  ";
 $fname=$_POST['firstname'];
 echo "<br>";
  setcookie("user_name", $fname, time()+ 600000,'/'); 
  echo $_POST['lastname'];
  echo $u;

  $_SESSION['id']=1;
?>

