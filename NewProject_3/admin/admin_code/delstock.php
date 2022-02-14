<?php
session_start();
$mysqli = new mysqli("localhost", "root", "", "storebaby_db");

if(isset($_SESSION['role'])){
    $admin_role = $_SESSION['role'];
    $id= $_GET['id'];

    if($admin_role=="admin"){
        $sql = "Delete from stock where stock_id=".$id;

        $result = $mysqli->query($sql);
        header( "refresh: 1; url=/NewProject_3/admin/stock.php" );
        exit(0);
    }
}
    $mysqli->close();
?>