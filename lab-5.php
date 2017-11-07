<?php

$n = 100000000000; //число

function format($n) {
    $n = (string) $n; //преобразуем в строку
    $simv = strlen($n); //вычисляем кол-во символов
    $part = ceil($simv / 3) - 1 ; //вычисляем кол-во частей по 3 символа
	$kolOst = $simv % 3; // остаток
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
echo "исходное чисто $n<br>";
$n = format($n);
echo "измененное число $n";
