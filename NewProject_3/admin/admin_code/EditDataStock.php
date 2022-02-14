
<?php

$mysqli = new mysqli("localhost", "root", "", "storebaby_db");

$qty = $_POST['qty'];
$id = $_POST['stock_id'];

$sql = "Update stock SET "
        . "qty=".$qty." "
        . "WHERE stock_id=".$id;

        //echo $sql;
$result = $mysqli->query($sql);

if(!$result){
    
    echo "<script>alert('บันทึกรายการผิดพลาด')</script>";
    header( "refresh: 1; url=/NewProject_3/admin/stock.php" );
}else{
  
    echo "<script>alert('บันทึกรายการเรียบร้อย')</script>";
    header( "refresh: 1; url=/NewProject_3/admin/stock.php" );
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