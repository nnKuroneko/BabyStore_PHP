
<?php
include("alert.php");
?>

<?php

$mysqil=mysqli_connect("localhost","root","", "storebaby_db") or die(mysql_error());


		$username=$_POST['username'];
		$password=$_POST['password'];

		
			$result=mysqli_query($mysqil, "SELECT * FROM useracc WHERE username='$username' AND password='$password' ")
				or die ('cannot login' . mysql_error());
			$row=mysqli_fetch_array  ($result);
			$run_num_rows = mysqli_num_rows($result);
                        
                       // $update=" UPDATE useracc SET user_last_login="'date("m.d.y")'"
                       
							
						if ($run_num_rows > 0 )
						{
							session_start ();
							$_SESSION['id'] = $row['userid'];
                                                        $_SESSION['role'] = $row['role'];
                                                     
							//header( "refresh: 2; url=/NewProject_3/home.php" );
                                                        
                                              
                                                         echo '      <script>
       setTimeout(function() {
        swal({
            title: "เสร็จสิ้น",
            text: "เข้าสู่ระบบเรียบร้อยแล้ว",
            type: "success"
        }, function() {
            window.location = "/NewProject_3/home.php"; //หน้าที่ต้องการให้กระโดดไป
        });
    }, 1000);
</script>';
                                                         
                                                        $t_sql = "UPDATE useracc SET date=CURRENT_TIMESTAMP WHERE username = '$username'";
                                                        $t_result = mysqli_query($mysqil,$t_sql); 
						}
						
						else
						{
							 echo '      <script>
       setTimeout(function() {
        swal({
            title: "ผิดพลาด",
            text: "ยูสเซอร์หรือรหัสผิดพลาด โปรดลองใหม่อีกครั้ง",
            type: "error"
        }, function() {
            window.location = "/NewProject_3/login.php"; //หน้าที่ต้องการให้กระโดดไป
        });
    }, 1000);
</script>';
						}
	

?>
