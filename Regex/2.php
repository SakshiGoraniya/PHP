<?php
$txt="phplanguage";
if(preg_match('/^ph/',$txt))
{
    echo "ph is presnet in txt var";
}
else{
    echo "not found";
}
echo "<br>";
$txt1="www.google.com";
if(preg_match('/com$/',$txt1))
{
    echo "it is a website";
}
else{
    echo "not found";
}
?>
