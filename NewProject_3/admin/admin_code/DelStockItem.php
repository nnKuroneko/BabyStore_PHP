<?php

$mysqli = new mysqli("localhost", "root", "", "storebaby_db");

$sql = "SELECT * from stock";

$pid = $_POST['product_id'];


 $result = mysqli_query($mysqli, "SELECT * FROM `stock` WHERE product_id='$pid'") or die(mysqli_error());
                                                $row = mysqli_fetch_array($result);

                                                $old_stck = $row['qty'];
                                                $new_stck = $_POST['new_stck'];
                                                $total = $old_stck - $new_stck;

                                                $que = mysqli_query($mysqli, "UPDATE `stock` SET `qty` = '$total' WHERE `product_id`='$pid'") or die(mysqli_error());


if(!$result){
     echo "<script>alert('บันทึกรายการผิดพลาด')</script>";
    header( "refresh: 2; url=http://localhost:1337/NewProject_3/admin/listitem.php" );
}else{
    echo "<script>alert('บันทึกรายการเรียบร้อย')</script>";
    header( "refresh: 2; url=http://localhost:1337/NewProject_3/admin/listitem.php" );
}




mysqli_close($mysqli); #ปิดฐานข้อมูล
?>