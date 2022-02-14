<?php
$mysqli = new mysqli("localhost", "root", "", "storebaby_db");

$id = $_POST['id'];

 mysqli_query($mysqli, "DELETE FROM product WHERE product_id = '$id'") or die(mysqli_error());

?>