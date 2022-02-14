<?php

$mysqli = new mysqli("localhost", "root", "", "storebaby_db");

$sql = "SELECT * from category";


$cat = $_POST['category'];
$ptype = $_POST['product_type'];
$ptypeid = $_POST['product_type_id']; 

$sql = "INSERT INTO category (category ,product_type, product_type_id) "
. "VALUES ( '{$cat}', '{$ptype}', {$ptypeid} ) ";

$result = $mysqli->query($sql);

if(!$result){
    echo "<script>alert('บันทึกรายการผิดพลาด')</script>";
    header( "refresh: 2; url=http://localhost:1337/NewProject_3/admin/addtype.php" );
}else{
    echo "<script>alert('บันทึกรายการเรียบร้อย')</script>";
    header( "refresh: 2; url=http://localhost:1337/NewProject_3/admin/addtype.php" );
}




mysqli_close($mysqli); #ปิดฐานข้อมูล
?>