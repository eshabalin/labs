<?php

$text = "Testovajastroka";

$n = 5;//сторона квадрата
$r = round($n/2);//количество кругов по спирали
$s = 0;//порядковый номер в массиве тестовой строки

for ($k = 1; $k <= $r; $k++)
{
	for ($stolb = $k; $stolb <= $n-$k+1; $stolb++)//верхняя строка
	{	if ($text[$s])
		{$table[$k][$stolb] = $text[$s];
		$s++;}
		else {$table[$k][$stolb] = "";}
	}
	for ($str = $k+1; $str <= $n-$k+1; $str++)//правая сторона
	{	if ($text[$s])
		{$table[$str][$n-$k+1] = $text[$s];
		$s++;}
		else {$table[$str][$n-$k+1] = "";}
	}
	for ($stolb = $n-$k; $stolb >= $k; $stolb--)//нижняя строка
	{
		if ($text[$s])
		{$table[$n-$k+1][$stolb] = $text[$s];
		$s++;}
		else {$table[$n-$k+1][$stolb] = "";}
	}
	for ($str = $n-$k; $str >= $k+1; $str--)//левая сторона
	{	
		if ($text[$s])
		{$table[$str][$k] = $text[$s];
		$s++;}
		else {$table[$str][$k] = "";}
	}	
}
echo '<table>';//вывод на печать
for ($tr= 1; $tr <= $n; $tr++)
{echo '<tr>';
	for ($td = 1; $td <= $n; $td++) 
	{
	echo '<td>'.$table[$tr][$td].'</td>';
	}
echo '</tr>';
}
echo '</table>';
