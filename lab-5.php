<?php

$n = 100000000000; //�����

function format($n) {
    $n = (string) $n; //����������� ����� � ������
    $simv = strlen($n); //���-�� ��������
    $part = ceil($simv / 3) - 1 ; //���-�� ������ �� 3 �����
	$kolOst = $simv % 3; // ������������� ������� �� ������� �� 3 
	If ($kolOst == 0) {$kolOst = 3;}
	$first = substr($n, 0, $kolOst); // ������ ����� �� �������
	$svod = "";
	for ($i = 1; $i <= $part; $i++)
	{
	$part = ",".substr($n, $simv - (3 * $i), 3);
	$svod = $part.$svod;
	}
	$svod = $first.$svod;
	return $svod;
}
echo "�������� ����� $n<br>";
$n = format($n);
echo "����� � ����� ������� $n";