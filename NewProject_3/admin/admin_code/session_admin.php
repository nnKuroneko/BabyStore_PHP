<?php
session_start();

if(!ISSET($_SESSION['id']))
	{
                echo "<script>alert('คุณไม่มีสิทธ์เข้าสู่หน้านี้')</script>";              
		echo "<script>window.location = 'admin_login.php';</script>";
                
	}

?>