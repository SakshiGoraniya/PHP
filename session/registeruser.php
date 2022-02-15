<?php
session_start();

echo "Welcome  ";
 $em=$_POST['email'];
 echo "<br>";
  setcookie("user_email", $em, time()+ 600000,'/'); 
  $_SESSION['id']=1;
  echo $em;
?>
