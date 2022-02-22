<?php

$connect = mysqli_connect("localhost", "root", "password", "taxibooking");  
$uid = mysqli_real_escape_string("' OR 1 = 1 -- ");
$pwd = mysqli_real_escape_string("1234");
$sql = "SELECT id FROM booking WHERE id = '$uid' AND password = '$pwd'";
echo $sql;

?>

