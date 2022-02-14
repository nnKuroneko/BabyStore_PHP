<?php
include("alert.php");
?>

<?php
session_start();

if(!ISSET($_SESSION['id']))
	{

                echo '      <script>
       setTimeout(function() {
        swal({
            title: "ผิดพลาด",
            text: "โปรดเข้าสู่ระบบ",
            type: "error"
        }, function() {
            window.location = "/NewProject_3/login.php"; //หน้าที่ต้องการให้กระโดดไป
        });
    }, 1000);
</script>';
                
	}
	

?>