<?php

$mysqli = new mysqli("localhost", "root", "", "storebaby_db");

if (!empty($_FILES["product_image"])){
    $targetdir = "photo/";
    $filename = basename($_FILES["product_image"]["name"]);  //me.jps
    $targetpath = $targetdir.$filename; // images/me.jpg
    $filetype = pathinfo($targetpath,PATHINFO_EXTENSION);
    
    $allowtype = array('jpg','jpeg','png','jfif');
    if(in_array($filetype,$allowtype)){
        if(move_uploaded_file($_FILES["product_image"]["tmp_name"], $targetpath)){
            $insert = $db->query("insert into product (product_name, product_price, product_type, product_images, brand, product_type_id, category )"
                    . "values ('".$_POST['product_name']."','".$_POST['product_price']."','".$_POST['product_type']."','".$filename."','".$_POST['brand']."','".$_POST['product_type_id']."','".$_POST['category']."',)");
       
            if($insert){
                echo '$insert';
                echo "บันทึก";
                echo '<a href=NewProject_3/admin/additem.php>ไปหน้าเพิ่มรายการ</a>';
            }else{
                echo '$insert';
                echo "ไม่บันทึก";
                echo '<a href=NewProject_3/admin/additem.php>ไปหน้าเพิ่มรายการ</a>';
            }
        }
    }
}

$mysqli->close();
?>