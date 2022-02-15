<?php
session_start();
$u=$_COOKIE['user_name'];
echo "cookie is $u";
echo "<br>";
$id=$_SESSION['id'];
echo $id;

?>