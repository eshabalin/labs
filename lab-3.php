<?php

//Написать функцию с параметрами (“строка”, “положительное_число”), 
//которая выводит строку змейкой в квадрат с длиной стороны “положительное_число”,

$text = "Testovajastroka";

$n = 5;//сторона квадрата
$r = round($n/2);//количество кругов по спирали
$s = 0;//порядковый номер в массиве тестовой строки

for ($k = 1; $k <= $r; $k++)
{
	for ($leftStolb = $k; $leftStolb <= $n-$k+1; $leftStolb++)
	{	if ($text[$s])
		{$table[$k][$leftStolb] = $text[$s];
		$s++;}
		else {$table[$k][$leftStolb] = "";}
	}
	for ($upStr = $k+1; $upStr <= $n-$k+1; $upStr++)
	{	if ($text[$s])
		{$table[$upStr][$n-$k+1] = $text[$s];
		$s++;}
		else {$table[$upStr][$n-$k+1] = "";}
	}
	for ($rightStolb = $n-$k; $rightStolb >= $k; $rightStolb--)
	{
		if ($text[$s])
		{$table[$n-$k+1][$rightStolb] = $text[$s];
		$s++;}
		else {$table[$n-$k+1][$rightStolb] = "";}
	}
	for ($downStr = $n-$k; $downStr >= $k+1; $dowsnStr--)
	{	
		if ($text[$s])
		{$table[$downStr][$k] = $text[$s];
		$s++;}
		else {$table[$downStr][$k] = "";}
	}	
}
echo '<table>';
for ($tr= 1; $tr <= $n; $tr++)
{echo '<tr>';
	for ($td = 1; $td <= $n; $td++) 
	{
	echo '<td>'.$table[$tr][$td].'</td>';
	}
echo '</tr>';
}
echo '</table>';
