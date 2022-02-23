<?php
$myObj = new stdClass();
$myObj->name = "sakshi";
$myObj->age = 21;
$myObj->city = "New York";

$myJSON = json_encode($myObj);

echo $myJSON;
?>
