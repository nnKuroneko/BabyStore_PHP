
<?php

$mysqli = new mysqli("localhost", "root", "", "storebaby_db");

$itemname = $_POST['product_name'];
$price = $_POST['product_price'];
$type_id = $_POST['product_type'];
$details = $_POST['product_details'];
$brand = $_POST['brand'];
$cat_id = $_POST['category'];
$id = $_POST['product_id'];

$sql = "Update product SET "
        . "product_name='".$itemname."',"
        . "product_price=".$price.","
        . "product_type='".$type_id."',"
        . "product_details='".$details."',"
        . "brand='".$brand."',"
        . "category='".$cat_id."' "
        . "WHERE product_id=".$id;

        //echo $sql;
$result = $mysqli->query($sql);

if(!$result){

    echo "<script>alert('บันทึกรายการผิดพลาด')</script>";
    header( "refresh: 1; url=/NewProject_3/admin/listitem.php" );
}else{

    echo "<script>alert('บันทึกรายการเรียบร้อย')</script>";
    header( "refresh: 1; url=/NewProject_3/admin/listitem.php" );
    exit(0);
}


mysqli_close($mysqli);
?>



















































<!--
<?php

$mysqli = new mysqli("localhost", "root", "", "storebaby_db");

$itemname = $_POST['product_name'];
$price = $_POST['product_price'];
//$type = $_POST['product_type'];
//$cat = $_POST['category'];
$id = $_POST['id'];

$sql = "Update product SET "
        . "product_name='".$itemname."',"
        . "product_price=".$price." "
        . "WHERE id=".$id;


//$sql = "Update product SET "
//        . "product_name=".$itemname."," . "product_price='".$price."'," . "product_type=".$type." " . "category=".$cat." "
//        . "WHERE id=".$id;

        //echo $sql;
$result = $mysqli->query($sql);

if(!$result){
    echo " $sql  ";
    echo 'บันทึกรายการผิดพลาด<br>';
    echo '<a href=/babystore/testbootstrap.php>ไปแก้รายการ</a>';
}else{
    echo 'บันทึกรายการเรียบร้อย<br>';
    header( "refresh: 1; url=/babystore/testbootstrap.php" );
    exit(0);
}


mysqli_close($mysqli);
?>
-->