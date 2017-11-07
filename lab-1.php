<?php



$a=4;
$b=5;

print "a=$a;";
print "b=$b;";

$a = $a ^ $b;
$b = $b ^ $a;
$a = $a ^ $b;

print "a=$a;b=$b";

//var_dump($a, $b);
?>
