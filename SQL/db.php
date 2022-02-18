<?php  
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$conn = mysqli_connect($host, $user, $pass);  
$db="local";
if(! $conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}  
echo 'Connected successfully';  

$conn1=mysqli_select_db($conn,$db);
if ($conn)
{
  echo "database selected";
}
else{
  echo "database not selected";
}
?>  