<?php
/*if else*/
echo "<b>if else:-</b>";
$first_number = 7;

$second_number = 21;

if ($first_number > $second_number){

echo "$first_number is greater than $second_number";

}else{

echo "$second_number is greater than $first_number";

}
echo "<br>";

$today = "wednesday";

switch($today){

case "sunday":

echo "pray for us sinners.";

break;

case "wednesday":

echo "ladies night, take her out for dinner";

break;

case "saturday":

echo "take care as you go out tonight.";

break;

default:

echo "have a nice day at work";

break;

}

?>
