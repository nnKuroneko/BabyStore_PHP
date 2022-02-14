<?php
include('../db/connect.php');

$id = $_POST['id'];

 mysqli_query($mysqil, "DELETE FROM product WHERE product_id = '$id'") or die(mysqli_error());

?>