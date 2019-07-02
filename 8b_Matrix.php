<?php
include "8b_matlib.php";

$a = array( array(10,20,30), 
			array(4,15,16), 
			array(17,12,9));
$b = array( array(11,12,31), 
			array(20,15,22), 
			array(17,8,6));

echo "<br>Matrix A<br>";
matrix_print($a);

echo "<br>Matrix B<br>";
matrix_print($b);

//Matrix Transpose
echo "<br>Matrix Transpose A<sup>T</sup><br>";
matrix_print(matrix_transpose($a));

//Matrix Multiplication
echo "<br>Matrix Product A x B<br>";
matrix_print(matrix_product($a, $b));

//Matrix Additon
echo "<br>Matrix Sum A + B<br>";
matrix_print(matrix_sum($a, $b));
?>