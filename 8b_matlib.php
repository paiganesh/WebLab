<?php
function matrix_print($matrix)	//Print matrix in rows & column form
{
	foreach ($matrix as $array)
		echo implode("&nbsp;nbsp;", $array) . "<br>";
}

function matrix_sum($a, $b)	//Addition of Matrix a & b
{
	$rows_a = count($a);	$cols_a = count($a[0]);
	$rows_b = count($b);	$cols_b = count($b[0]);
	if ($rows_a != $rows_b || $cols_a != $cols_b) 
	{
		echo "Matric order mismatch.";
		return;
	}

	for($i = 0; $i < $rows_a; $i++)
		for($j = 0; $j < $cols_a; $j++)	
			$c[$i][$j] = $a[$i][$j] + $b[$i][$j];
	return $c;
}

function matrix_product($a, $b)	//Multiply matrix a & b
{
	$rows_a = count($a);	$cols_a = count($a[0]);
	$rows_b = count($b);	$cols_b = count($b[0]);
	if ($cols_a != $rows_b) 
	{
		echo "Matric order mismatch.";
		return;
	}

	for($i = 0; $i < $rows_a; $i++)
	{
		for($j = 0; $j < $cols_b; $j++)	
		{
			$c[$i][$j] = 0;
			for($k = 0; $k < $cols_a; $k++)	
			{
				$c[$i][$j] += $a[$i][$k] * $b[$k][$j];
			}
		}
	}
	return $c;
}

function matrix_transpose($a)	//Compute Matrix Transpose
{
	$rows = count($a);	$cols = count($a[0]);
	for($i = 0; $i < $rows; $i++)
		for($j = 0; $j < $cols; $j++)	
			$b[$i][$j] = $a[$j][$i];
	return $b;
}
?>