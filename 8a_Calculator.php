<form method="post">
	<input type="number" step=any name="a" placeholder="Enter a number" required><br>
	<input type="number" step=any name="b" placeholder="Enter a number" required><br>
	<input type="submit" value="Calculate">
</form>

<?php
//Simple Calculator
if(isset($_POST['a']))
{
	$a = $_POST['a'];
	$b = $_POST['b'];

	echo "<h3>$a + $b = " . ($a + $b) . "</h3>" .
	 	 "<h3>$a - $b = " . ($a - $b) . "</h3>" .
	 	 "<h3>$a * $b = " . ($a * $b) . "</h3>" .
	 	 "<h3>$a / $b = " . ($b == 0? "Division by zero" : ($a / $b)) . "</h3>" .
	 	 "<h3>$a % $b = " . ($b == 0? "Division by zero" : ($a % $b)) . "</h3>";	
}
?>