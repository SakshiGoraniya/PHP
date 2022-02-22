<?php
$connect = mysqli_connect("localhost", "root", "password", "taxibooking");  

$uid = "' OR 1 = 1 -- ";

$pwd = "1234";

$sql = "SELECT id FROM booking WHERE id = '$uid' AND password = '$pwd';";

echo $sql;
$ql=mysqli_query($connect,$sql);
if($ql)
{
echo "success";
}
else{
    echo 'error';
}
while($row = mysqli_fetch_assoc($ql))
{
print  $row["id"];
echo "<br>";

}
?>