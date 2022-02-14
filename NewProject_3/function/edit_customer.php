<?php
include("alert.php");
?>

<?php

		include ("../db/connect.php");
		include ("session.php");
			if(ISSET($_POST['edit']));
			{
				$id = $_SESSION['id'];
				
				
                                $password=$_POST['password'];      
                                $telephone=$_POST['telephone'];
                                $address=$_POST['address'];
                                $email=$_POST['email'];	
                               
			

				$q1 = mysqli_query($mysqil, "UPDATE useracc SET password='$password', telephone='$telephone' , email='$email' , address='$address' WHERE userid='$id' ") or die (mysqli_error());
							

                                         echo '      <script>
       setTimeout(function() {
        swal({
            title: "เสร็จสิ้น",
            text: "แก้ไขข้อมูลส่วนตัวเรียบร้อยแล้ว",
            type: "success"
        }, function() {
            window.location = "/NewProject_3/myaccount.php"; //หน้าที่ต้องการให้กระโดดไป
        });
    }, 1000);
</script>';
                                         
			}
                        
		
	?>


        
				
		