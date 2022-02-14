<?php

$mysqli = new mysqli("localhost", "root", "", "storebaby_db");

$sql = "SELECT * from category";

$itemname = $_POST['product_name'];
$price = $_POST['product_price'];
$type = $_POST['product_type']; 
$images= $_POST['product_images']; 
$brand = $_POST['brand'];
$typeid = $_POST['product_type_id']; 
$category = $_POST['category']; 

$sql = "INSERT INTO product (product_name, product_price, product_type, product_images, brand, product_type_id, category ) "
. "VALUES ('{$itemname}', '{$price}', {$type}, '{$images}', {$brand}, '{$typeid}', {$category} ) ";

$result = $mysqli->query($sql);

if(!$result){
    echo "บันทึกรายการผิดพลาด<br>";
    echo '<a href=insertDataitem.php>ไปหน้าเพิ่มรายการ</a>';
}else{
    echo "บันทึกรายการเรียบร้อย<br>";
    echo '<a href=testbootstrap.php>ไปหน้าแรก</a>';
}




mysqli_close($mysqli); #ปิดฐานข้อมูล
?>