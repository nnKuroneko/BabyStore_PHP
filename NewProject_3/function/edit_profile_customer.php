<?php
include("alert.php");
?>

<?php

		include ("../db/connect.php");
		include ("session.php");
			if(ISSET($_POST['edit_profile']));
			{
				$id = $_SESSION['id'];
				

                                $code = rand(0,98987787866533499);
                                
                                $name = $code.$_FILES["user_profile"] ["name"];
								$type = $_FILES["user_profile"] ["type"];
								$size = $_FILES["user_profile"] ["size"];
								$temp = $_FILES["user_profile"] ["tmp_name"];
								$error = $_FILES["user_profile"] ["error"];
										
								if ($error > 0){
									die("Error uploading file! Code $error.");}
								else
								{
									if($size > 30000000000) //conditions for the file
									{
										die("Format is not allowed or file size is too big!");
									}
									else
									{
										move_uploaded_file($temp,"../profile/".$name);
			

				$q1 = mysqli_query($mysqil, "UPDATE useracc SET user_profile='$name' WHERE userid='$id' ") or die (mysqli_error());
							
                                        
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
                                    
				
				
				//exit(header( "refresh: 1; url=/NewProject_3/admin/listitem.php" ));
				
                                
			}}
                        

			}
		
	?>