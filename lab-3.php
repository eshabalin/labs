<?php

$text = "Testovajastroka";

$n = 5;//ñòîðîíà êâàäðàòà
$r = round($n/2);//êîëè÷åñòâî êðóãîâ ïî ñïèðàëè
$s = 0;//ïîðÿäêîâûé íîìåð â ìàññèâå òåñòîâîé ñòðîêè

for ($k = 1; $k <= $r; $k++)
{
	for ($leftStolb = $k; $leftStolb <= $n-$k+1; $leftStolb++)//âåðõíÿÿ ñòðîêà
	{	if ($text[$s])
		{$table[$k][$leftStolb] = $text[$s];
		$s++;}
		else {$table[$k][$leftStolb] = "";}
	}
	for ($upStr = $k+1; $upStr <= $n-$k+1; $upStr++)//ïðàâàÿ ñòîðîíà
	{	if ($text[$s])
		{$table[$upStr][$n-$k+1] = $text[$s];
		$s++;}
		else {$table[$upStr][$n-$k+1] = "";}
	}
	for ($rightStolb = $n-$k; $rightStolb >= $k; $rightStolb--)//íèæíÿÿ ñòðîêà
	{
		if ($text[$s])
		{$table[$n-$k+1][$rightStolb] = $text[$s];
		$s++;}
		else {$table[$n-$k+1][$rightStolb] = "";}
	}
	for ($downStr = $n-$k; $downStr >= $k+1; $dowsnStr--)//ëåâàÿ ñòîðîíà
	{	
		if ($text[$s])
		{$table[$downStr][$k] = $text[$s];
		$s++;}
		else {$table[$downStr][$k] = "";}
	}	
}
echo '<table>';//âûâîä íà ïå÷àòü
for ($tr= 1; $tr <= $n; $tr++)
{echo '<tr>';
	for ($td = 1; $td <= $n; $td++) 
	{
	echo '<td>'.$table[$tr][$td].'</td>';
	}
echo '</tr>';
}
echo '</table>';
