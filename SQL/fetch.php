<?php
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$dbname = 'local';  
  
$conn = mysqli_connect($host, $user, $pass,$dbname);


$sql_stmt = "SELECT * FROM employee"; 
  
    
     $result = mysqli_query($conn,$sql_stmt);
   
     
	if (!$result)     
		die("Database access failed: " . mysqli_error()); 
    
        
		$rows = mysqli_num_rows($result); 
  
    
	if ($rows) {     
    
	while ($row = mysqli_fetch_array($result)) {         
		echo 'ID: ' . $row['Id'] . '<br>';         
		echo 'Email: ' . $row['Email'] . '<br>';        
		echo 'Name: ' . $row['Name'] . '<br>';         
		echo 'Salary: ' . $row['Salary'] . '<br>';         
	     
	} 
} 
?>