<?php

$expr = '5 8 3 + *';
echo calc($expr);
function calc($str)
{
	$stack = array();
	
	$token = strTok($str, ' ');
	
	while ($token !== false)
	{
		if (in_array($token, array('*', '/', '+', '-', '^')))
		{
			if (count($stack) < 2)
				throw new Exception("������������ ������ � ����� ��� �������� '$token'");
			$b = array_pop($stack);
			$a = array_pop($stack);
			switch ($token)
			{
				case '*': $res = $a*$b; break;
				case '/': $res = $a/$b; break;
				case '+': $res = $a+$b; break;
				case '-': $res = $a-$b; break;
				case '^': $res = pow($a,$b); break;
			}
			array_push($stack, $res);
		} elseif (is_numeric($token))
		{
			array_push($stack, $token);
		} else
		{
			throw new Exception("������������ ������ � ���������: $token");
		}
		$token = strtok(' ');
	}
	if (count($stack) > 1)
		throw new Exception("���������� ���������� �� ������������� ���������� ���������");
	return array_pop($stack);
}
?>