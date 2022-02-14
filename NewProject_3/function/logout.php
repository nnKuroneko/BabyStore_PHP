<?php
include("alert.php");
?>

<?php
	
	session_start();
	session_destroy();
	
		
                 echo '      <script>
       setTimeout(function() {
        swal({
            title: "เสร็จสิ้น",
            text: "ออกจากระบบเรียบร้อยแล้ว",
            type: "success"
        }, function() {
            window.location = "/NewProject_3/index.php"; //หน้าที่ต้องการให้กระโดดไป
        });
    }, 1000);
</script>';
?>