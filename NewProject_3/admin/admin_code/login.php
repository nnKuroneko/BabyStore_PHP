<?php

    $mysqli = new mysqli("localhost", "root", "", "storebaby_db");
    
if (isset($_POST['adminlogin'])){
   
   $username=$_POST['username'];
   $password=$_POST['password'];

		
			$result=mysqli_query($mysqli, "SELECT * FROM admin WHERE username='$username' AND password='$password' ")
				or die ('cannot login' . mysql_error());
			$row=mysqli_fetch_array  ($result);
			$run_num_rows = mysqli_num_rows($result);
                        
                       // $update=" UPDATE useracc SET user_last_login="'date("m.d.y")'"
                       
							
						if ($run_num_rows > 0 )
						{
							session_start ();
							$_SESSION['id'] = $row['adminid'];                                                      
                                                        $_SESSION['role'] = $row['role'];
                                                        
                                                        echo "<script>alert('เข้าสู่ระบบเรียบร้อยแล้ว')</script>";	
							header( "refresh: 2; url=/NewProject_3/admin/index.php" );
                                                        
                                                        $t_sql = "UPDATE admin SET date=CURRENT_TIMESTAMP WHERE username = '$username'";
                                                        $t_result = mysqli_query($mysqli,$t_sql); 
						}
						
						else
						{                                                                                            
                                                    echo "<script>alert('ไม่พบบัญชีนี้ในระบบ')</script>";	 
                                                        header( "refresh: 2; url=/NewProject_3/admin/admin_login.php" );
                                                        exit(0);
						}
        
          
    
}
?>
       