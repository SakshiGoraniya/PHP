<?php
/*explicit type cast*/
$a = 1;
$b = 1.5;
$c = $a + $b;
$c = $a + (int) $b;
echo $c;
echo "<br>";

/* var dump to find data type*/

var_dump($a);
var_dump($b);
$c = "I Love PHP";
var_dump($c);
$d = true;
var_dump($d);

?>