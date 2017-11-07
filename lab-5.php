<?php

$n = 100000000000; //число

function format($n) {
    $n = (string) $n; //преобразуем число в строку
    $simv = strlen($n); //кол-во символов
    $part = ceil($simv / 3) - 1 ; //кол-во частей по 3 цифры
	$kolOst = $simv % 3; // целочисленный остаток от деления на 3 
	If ($kolOst == 0) {$kolOst = 3;}
	$first = substr($n, 0, $kolOst); // первая часть до запятой
	$svod = "";
	for ($i = 1; $i <= $part; $i++)
	{
	$part = ",".substr($n, $simv - (3 * $i), 3);
	$svod = $part.$svod;
	}
	$svod = $first.$svod;
	return $svod;
}
echo "исходное число $n<br>";
$n = format($n);
echo "число в новом формате $n";