<?php


function kilometers_to_miles($kilometers)
{
$miles_scale = 0.62;
return $kilometers * $miles_scale;
}
echo kilometers_to_miles(100);
echo "<br>";
echo kilometers_to_miles(200);
?>
