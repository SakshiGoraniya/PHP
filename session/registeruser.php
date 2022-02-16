<?php
session_start();

echo "Welcome  ";
 $em=$_POST['email'];
 echo "<br>";
  setcookie("user_email", $em, time()+ 600000,'/'); 
  $_SESSION['id']=1;

  
if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $em)) {
echo "$em is a valid email address";
}
else
{
  echo "$em is NOT a valid email address";
}
echo "<br>";
 $id =$_SESSION['id'];
 echo "your ID is $id";
?>
