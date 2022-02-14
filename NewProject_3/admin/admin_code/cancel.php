		<?php
		$mysqli = new mysqli("localhost", "root", "", "storebaby_db");
		
		$t_id = $_GET['id'];
		
		mysqli_query($mysqli, "UPDATE transaction SET order_stat = 'Cancelled' WHERE transaction_id = '$t_id'") or die(mysqli_error());
								
		 echo "<script>alert('บันทึกรายการเรียบร้อยแล้ว')</script>";
    header( "refresh: 2; url=http://localhost:1337/NewProject_3/admin/transaction.php" );	
		
		?>