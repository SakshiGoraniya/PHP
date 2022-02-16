<?php
$my_url = "www.google.com";
if (preg_match("/gle/", $my_url))
{
	echo "the url $my_url contains gle";
}
else
{
	echo "the url $my_url does not contain gle";
}

$my_text="I Love Regular Expressions";

$my_array  = preg_split("/ /", $my_text);
echo "<br>";
print_r($my_array );

echo "<br>";
$text = "this is first line ";

$text = preg_replace("/first/", 'second', $text);

echo $text;
?>