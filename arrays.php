<?php
/*numeric arrays*/

echo "<b>Numeric Arrays:-</b>";
echo "<br>";
$movie1 = array(0 => "Shaolin Monk",
               1 => "Drunken Master",
               2 => "American Ninja",
               3 => "Once upon a time in China",
               4 =>"Replacement Killers" );
echo $movie1[4];
echo "<br>";



$moviee[0] = 'Shaolin Monk';
$moviee[1] = 'Drunken Master';
$moviee[2] = 'American Ninja';
$moviee[3] = 'Once upon a time in China';
$moviee[4] = 'Replacement Killers';
echo $moviee[4];
echo "<br>";

echo "<b>Associative Arrays:-</b>";
echo "<br>";
/*associative array */

$persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Female");
print_r($persons); 
echo "<br>"; 
echo "Mary is a " . $persons["Mary"];
echo "<br>";

echo "<b>multi dimesional arrays:-</b>";
echo "<br>";
$movies2 =array(
    "comedy" => array("Pink Panther", "John English", "See no evil hear no evil"),
    "action" => array("Die Hard", "Expendables"),
    "epic" => array("The Lord of the rings"),
    "Romance" => array("Romeo and Juliet")
    );
    print_r($movies2);


 /*comparisons*/
 
$x = array('id' => 1);
$y = array('value' => 10);
$z = $x + $y;
echo "<br>";
echo $z;
echo "<br>";
if($x == $y)
{
echo "true";
}
else
{
echo "false";
}


$a = array("id" => 1);

$b = array("id" => "1");

if($a == $b)
{
    echo "<br>";
echo "true";
}
else
{
echo "<br>";
echo "false";

}


if($x === $y)
{
    echo "<br>";
echo "true";
}
else
{
    echo "<br>";
echo "false";
}

if($x != $y)
{
    echo "<br>";
echo "true";
}
else
{
    echo "<br>";
echo "false";
}


/*count*/
echo "<br>";
echo "<b>count function</b>";
echo "<br>";
echo "total count for movie1 array:-   ";
echo count($movie1);


/* is array*/ 
echo "<br>";
echo "<b>is array function</b>";
echo "<br>";
echo is_array($movie1);



/* sort functions */ 
echo "<br>";
echo "<b>sort function</b>";
echo "<br>";
sort($persons);

print_r($persons);
?>


