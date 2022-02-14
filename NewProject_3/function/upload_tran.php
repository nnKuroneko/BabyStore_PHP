<?php
include("alert.php");
?>


<?php

		include ("../db/connect.php");
			if(ISSET($_POST['upload_tran']));
			{

				   $banking = $_POST['banking'];
                                 $tid = $_POST['transaction_id'];
        
             $code = rand(0,98987787866533499);
                                
                                $name = $code.$_FILES["tran_image"] ["name"];
								$type = $_FILES["tran_image"] ["type"];
								$size = $_FILES["tran_image"] ["size"];
								$temp = $_FILES["tran_image"] ["tmp_name"];
								$error = $_FILES["tran_image"] ["error"];
										
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
										move_uploaded_file($temp,"../tranimage/".$name);
			

				$q1 = mysqli_query($mysqil, "UPDATE transaction set tran_image='$name' WHERE transaction_id='$tid' ") or die (mysqli_error());
                                
                                $q2 = mysqli_query($mysqil, "UPDATE transaction set Banking='$banking' WHERE transaction_id='$tid' ") or die (mysqli_error());
                      
				
				 echo '      <script>
       setTimeout(function() {
        swal({
            title: "เสร็จสิ้น",
            text: "อัปโหลดเรียบร้อยแล้ว",
            type: "success"
        }, function() {
            window.location = "../summary.php?tid='.$tid.'"; //หน้าที่ต้องการให้กระโดดไป
        });
    }, 1000);
</script>';
				
                                
			}}
                        

			}
		
	?>