<?php
//Track webpage visitors count
session_start();

$filename = "counter.txt";
!file_exists($filename) && file_put_contents($filename, "0");

if(!isset($_SESSION['count']))
{
	$_SESSION['count'] = file_get_contents($filename) + 1;
	file_put_contents($filename, $_SESSION['count']);
}
else 
	$_SESSION['count'] = file_get_contents($filename);
?>

<h1 style='text-align:center; margin-top:150px'>
	Visitors count : <?php echo $_SESSION['count'] ?> 
</h1>