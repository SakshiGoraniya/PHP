<?php    
$filename = "myfile.txt";    
$handle = fopen($filename, "a");//open file in read mode    
  
//$contents = fread($handle, filesize($filename));//read file    
 $t="hello"; 
fwrite($handle,$t);  

fclose($handle);//close file   
echo "File written successfully";   
?>    