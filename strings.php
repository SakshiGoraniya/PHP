<?php
$name='Alicia';
echo "$name is friends with kalinda";


$baby_name = "Shalon";
echo "<br>";
echo <<<EOT

    When $baby_name was a baby,

    She used to look like a "boy".

EOT;
echo "<br>";
$settings = explode(';', “host=localhost; db=sales; uid=root; pwd=demo”);

print_r($settings);
?>