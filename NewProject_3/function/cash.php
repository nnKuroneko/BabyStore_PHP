<?php

	include('db/connect.php');
	if (isset($_POST['cash']))
{
	$useracc = $_POST['useracc'];
	$product = $_POST['product_name'];
	$total = $_POST['product_price'];
	$destination = $_POST['destination'];
	
	
		mysql_query("INSERT INTO `transaction` (useracc, product, size, amount, payment) VALUES ('$useracc', '$product', $total, '$destination', 'COD')")
			or die (mysql_error());				
}
?>