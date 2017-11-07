<?php

//$roof = array(2, 5, 1, 2, 3, 7, 7, 6); 
for ($i = 0; $i < 9; $i++)	{$roof[] = rand(1, 9);} 

$kolvo = count($roof);
for ($i = 0; $i < $kolvo; $i++)
{
print "$roof[$i] ";
}
$left = 0; 
$right = $kol-1;
$max = max($roof);
$leftmax = $roof[$left];
$rightmax = $roof[$right];
$size = 0;
while ($leftmax < $max) {
	$left++;
	if ($leftmax < $roof[$left]) {
		$leftmax = $roof[$left];
	}
	else {
		$size += $leftmax - $roof[$left];
	}
}
while ($rightmax < $max)
{
	$right--;
	if ($rightmax < $roof[$right])
	{
		$rightmax = $roof[$right];
	}
	else
	{
		$size += $rightmax - $roof[$right];
	}
}
while ($left != $right)
{
	$size += $leftmax - $roof[$left];
	$left++;
}
print "water = $size";
