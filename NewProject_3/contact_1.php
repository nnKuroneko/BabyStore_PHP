<!doctype html>

<?php
include("function/session.php");
include("db/connect.php");

?>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BabyStore - Contacts </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/slicknav.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    


 <?php

include("HeadBarMenu_1.php");
?>

    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/support6.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">
                <div class="d-none d-sm-block mb-5 pb-4">
                  
                      <iframe src="https://www.google.com/maps/d/u/0/embed?mid=15zbmTqah5fFNPOiObs1afuVfE9rPnyag" width="1280" height="580"></iframe>
                      <br>
                <div class="row">
                    <div class="col-12">
                        <br>
                        <h2 class="contact-title">แจ้งปัญหา</h2>
                    </div>
                    <div class="col-lg-8">
                        <?php
$id = (int) $_SESSION['id'];

$query = mysqli_query($mysqil, "SELECT * FROM useracc WHERE userid = '$id' ");
$fetch = mysqli_fetch_array($query); {


    $firstname = $fetch['firstname'];
    $email = $fetch['email'];
}
?>
                        
                        <form class="form-contact contact_form" method="post">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <p class="help-block">ข้อความ</p>
                                        <textarea class="form-control w-100" name="message" id="message" type="text" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'พิมพ์ข้อความ'" placeholder=" พิมพ์ข้อความ" required></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <p class="help-block">ชื่อของคุณ</p>
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'ใส่ชื่อของคุณ'" placeholder="ใส่ชื่อของคุณ" value="<?php echo $firstname; ?>" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <p class="help-block">อีเมลล์ของคุณ</p>
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'ใส่อีเมลล์ของคุณ'" placeholder="ใส่อีเมลล์ของคุณ" value="<?php echo $email; ?>" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <p class="help-block">หัวข้อ</p>
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'แจ้งปัญหาเรื่อง'" placeholder="แจ้งปัญหาเรื่อง" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

                                <button type="submit" name="send" class="button button-contactForm boxed-btn">ยืนยัน</button>
                                
                            </div>
                        </form>
                   
                         <?php
			if (isset($_POST['send']))
				{
                            $mysqli = new mysqli("localhost", "root", "", "storebaby_db");
					$message = $_POST['message'];
					$name = $_POST['name'];
					$email = $_POST['email'];
					$subject = $_POST['subject'];
                                        $cid = $_SESSION['id'];
                                    
			

				$q1 = mysqli_query($mysqli, "INSERT INTO contacts ( email,subject, name, message, contact_stat, userid )
				VALUES ('$email','$subject','$name','$message' , 'Process' ,'$cid')");
                                
                                $t_sql = "UPDATE contacts SET contact_date=CURRENT_TIMESTAMP WHERE userid = '$cid'";
                                $t_result = mysqli_query($mysqil,$t_sql); 
                                                        
                                echo '      <script>
       setTimeout(function() {
        swal({
            title: "เสร็จสิ้น",
            text: "ระบบได้รับปัญหาของคุณแล้ว",
            type: "success"
        }, function() {
            window.location = ""; //หน้าที่ต้องการให้กระโดดไป
        });
    }, 1000);
</script>';
		}

				?>
                        
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Kasetsart University.</h3>
                                <p>Sriracha Campus</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+01 23 456 7890</h3>
                                <p>ติดต่อสอบถาม 24 ชั่วโมง</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>support@babystore.com</h3>
                                <p>ติดต่อพวกเราผ่านทางอีเมลล์!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->
   <?php
        include("FooferBarMenu_1.php");
        ?>
    
    <script>
    (function($) {
showSwal = function(type) {
'use strict';
if (type === 'success-message') {
swal({
title: 'Congratulations!',
text: 'You entered the correct answer',
type: 'success',
button: {
text: "Continue",
value: true,
visible: true,
className: "btn btn-primary"
}
})

}else{
swal("Error occured !");
}
}

})(jQuery);
    
    </script>
        
    </body>
    
    </html>