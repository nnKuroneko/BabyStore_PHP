<?php
include("alert.php");
?>

<?php

$mysqil=mysqli_connect("localhost","root","", "storebaby_db") or die(mysql_error());


        $email=$_POST['email'];
        $resetpassword= mysqli_real_escape_string($mysqil, $_POST['resetpassword']);
        $cresetpassword= mysqli_real_escape_string($mysqil, $_POST['cresetpassword']);
        
        if($resetpassword !== $cresetpassword){
             
                         echo '      <script>
       setTimeout(function() {
        swal({
            title: "ผิดพลาด",
            text: "รหัสผ่านไม่ตรงกันโปรดลองใหม่อีกครั้ง",
            type: "error"
        }, function() {
            window.location = "/NewProject_3/password_forget.php"; //หน้าที่ต้องการให้กระโดดไป
        });
    }, 1000);
</script>';
                        }
        else{
      
       
            $result=mysqli_query($mysqil, "SELECT * FROM useracc WHERE email='$email'")
                or die ('cannot resetpassword' . mysql_error());
            $row=mysqli_fetch_array  ($result);
            $run_num_rows = mysqli_num_rows($result);
                        
                       // $update=" UPDATE useracc SET user_last_login="'date("m.d.y")'"
                       
                            
                        if ($run_num_rows > 0 )
                        {
                                
                                 
                                  echo '      <script>
       setTimeout(function() {
        swal({
            title: "เสร็จสิ้น",
            text: "แก้ไขเรียบร้อยแล้ว",
            type: "success"
        }, function() {
            window.location = "/NewProject_3/login.php"; //หน้าที่ต้องการให้กระโดดไป
        });
    }, 1000);
</script>';
                                 
                                 
                                  $t_sql = "UPDATE useracc SET password=$resetpassword WHERE email = '$email'";
                                $t_result = mysqli_query($mysqil,$t_sql); 
                        }
                        
                        
                        else
                        {
                             echo '      <script>
       setTimeout(function() {
        swal({
            title: "ผิดพลาด",
            text: "อีเมลล์ของคุณไม่ถูกต้อง  โปรดลองใหม่อีกครั้ง",
            type: "error"
        }, function() {
            window.location = "/NewProject_3/password_forget.php"; //หน้าที่ต้องการให้กระโดดไป
        });
    }, 1000);
</script>';

                        }
    
        }
?>

