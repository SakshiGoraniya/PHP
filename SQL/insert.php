<?php
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$dbname = 'local';  
  
$conn = mysqli_connect($host, $user, $pass,$dbname);

$sql = 'INSERT INTO employee(Email,Name,Salary) VALUES ("sakshigoraniya13@gmail.com","Sakshi",9000)';  

$r=mysqli_query($conn,$sql);
if($r)
{
    echo "succesful";
}
else{
    echo "fail";
}
?>