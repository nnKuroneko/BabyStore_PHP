<?php
include("alert.php");
?>


<?php

	$mysqil=mysqli_connect("localhost","root","", "storebaby_db") or die(mysql_error());
	

	$username=$_POST['username'];
        $password=$_POST['password'];
        $firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
        $email=$_POST['email'];	
	$telephone=$_POST['telephone'];
        $address=$_POST['address'];
        
	$check = mysqli_num_rows(mysqli_query($mysqil, "SELECT * FROM `useracc` WHERE `username` = '$username'"));
		if($check == 1)
			{
                                 echo '      <script>
       setTimeout(function() {
        swal({
            title: "ผิดพลาด",
            text: "Username นี้มีคนใช้แล้วโปรดลองใหม่อีกครั้ง",
            type: "error"
        }, function() {
            window.location = "/NewProject_3/register.php"; //หน้าที่ต้องการให้กระโดดไป
        });
    }, 1000);
</script>';
			}
			
			else
				{
					mysqli_query ($mysqil, "INSERT INTO useracc (username, password, firstname, lastname, email, telephone, address)
					VALUES ('$username', '$password', '$firstname', '$lastname', '$email', '$telephone', '$address')") 
					or die(mysqli_error($mysqil));	
                                        
                                          echo '      <script>
       setTimeout(function() {
        swal({
            title: "เสร็จสิ้น",
            text: "สมัครสมาชิกเรียบร้อยแล้ว คุณสามารถทำการเข้าสู่ระบบได้แล้ว",
            type: "success"
        }, function() {
            window.location = "/NewProject_3/login.php"; //หน้าที่ต้องการให้กระโดดไป
        });
    }, 1000);
</script>';
                                        
                            
				}				
					

?>