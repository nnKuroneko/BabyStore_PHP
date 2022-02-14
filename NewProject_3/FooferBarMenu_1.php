  
<?php
include("db/connect.php");
?>
<html class="no-js" lang="zxx">
     <?php
				$id = (int) $_SESSION['id'];
			
					$query = mysqli_query ($mysqil, "SELECT * FROM useracc WHERE userid = '$id' ") or die (mysqli_error($mysqil));
					$fetch = mysqli_fetch_array ($query);
    ?>
<body>
   
       
        <div class="latest-wrapper lf-padding">
            <div class="latest-area latest-height d-flex align-items-center" data-background="assets/img/collection/bn5.png">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-5 col-lg-5 col-md-6 offset-xl-1 offset-lg-1">
                            <div class="latest-caption">
                                <h2>ติดตามพวกเรา<br>เพื่อลูกน้อยของคุณ</h2>
                                <p>เพื่อรับข่าวสารใหม่ และ คูปองส่วนลด</p>
                            </div>
                        </div>
                            <div class="col-xl-5 col-lg-5 col-md-6 ">
                            <div class="latest-subscribe">
                                <form action="" method="post">
                                    <input type="email" name="email" placeholder="Your email here">
                                    <button name="success">Shop Now</button>
                                </form>
                                <?php

if (isset($_POST['success'])) {
    $mysqli = new mysqli("localhost", "root", "", "storebaby_db");

    $email = $_POST['email'];


						
	
			$result=mysqli_query($mysqil, "SELECT * FROM useracc WHERE email='$email' ")
				or die ('cannot' . mysql_error());
			$row=mysqli_fetch_array  ($result);
			$run_num_rows = mysqli_num_rows($result);
                        
                       // $update=" UPDATE useracc SET user_last_login="'date("m.d.y")'"
                       
							
						if ($run_num_rows > 0 )
						{
                                                        echo "<script>alert('ฟังก์ชั่นนี้ยังไม่มีการเปิดใช้งาน')</script>";	
							//header( "refresh: 2; url=/NewProject_3/home.php" );
                                                       
						}
						
						else
						{
							echo "<script>alert('อีเมลล์ของคุณไม่ถูกต้องโปรดลองใหม่')</script>";	 
                                                         
						}
	
                                
    
}
?>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- man Shape -->
                <div class="man-shape">
                    <img src="assets/img/collection/C1.png" alt="" width="500" height="450">
                </div>
            </div>
        </div>
    
    
    
    
    <div class="shop-method-area section-padding30">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-method mb-40">
                            <i class="ti-package"></i>
                            <h6>การจัดส่งสินค้าฟรี</h6>
                            <p>การอำนวยความสะดวกทางด้านการจัดส่งสินค้าของลูกค้า.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-method mb-40">
                            <i class="ti-unlock"></i>
                            <h6>ระบบรักษาความปลอดภัยและการเงิน</h6>
                            <p>เราใส่ใจทุกระบบเพื่อความปลอดภัยและสะดวกกับลูกค้า.</p>
                        </div>
                    </div> 
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-method mb-40">
                            <i class="ti-reload"></i>
                            <h6>ใช้งานง่ายไม่ยุ่งยาก</h6>
                            <p>การใช้งานที่เรียบง่าย และ สะดวกสบาย.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
     <div class="gallery-wrapper lf-padding">
            <div class="gallery-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="gallery-items">
                            <img src="assets/img/gallery/1k.jpg" alt="" width="300" height="300">
                        </div> 
                        <div class="gallery-items">
                            <img src="assets/img/gallery/3k.jpg" alt="" width="300" height="300">
                        </div>
                        <div class="gallery-items">
                            <img src="assets/img/gallery/4k.jpg" alt="" width="300" height="300">
                        </div>
                        <div class="gallery-items">
                            <img src="assets/img/gallery/5k.jpeg" alt="" width="300" height="300">
                        </div>
                        <div class="gallery-items">
                            <img src="assets/img/gallery/6k.jpg" alt="" width="300" height="300">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
                <footer>
            <!-- Footer Start-->
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo">
                                        <a href="index.php"><img src="assets/img/logo/logobaby.png" alt="" width="100" height="50"></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p>ขอขอบคุณคุณลูกค้าทุกท่านที่ใช้บริการ และ ไว้วางใจเราและคุณภาพสินค้ารวมถึงการบริการ.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>สอบถามปัญหา</h4>
                                    <ul>
                                        <li><a href="#">เกี่ยวกับเรา</a></li>
                                        <li><a href="#">สินค้าลดราคา & ส่วนลด</a></li>
                                        <li><a href="#">รับคูปองสินค้า</a></li>
                                        <!--<li><a href="#"></a></li>-->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>รายการสินค้า</h4>
                                    <ul>
                                        <li><a href="category_home.php">รายการสินค้าทั่วไป</a></li>
                                        <li><a href="Bookmark_1.php">ยอดนิยม</a></li>
                                        <li><a href="Bookmark_1.php">โปรโมชั่น</a></li>
                                        <li><a href="Bookmark_1.php">คอลเลคชั่น</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>ซัพพอร์ต</h4>
                                    <ul>
                                        <li><a href="contact_1.php">แจ้งปัญหา</a></li>
                                     <!--   <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Report a Payment Issue</a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Footer bottom -->
                    <div class="row">
                        <div class="col-xl-7 col-lg-7 col-md-7">
                             <!-- <div class="footer-copy-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. 
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. </p>                 </div> 
                        -->
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-5">
                            <div class="footer-copy-right f-right">
                                <!-- social -->
                                <div class="footer-social">
                                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                <!--    <a href="www.youtube.com"><i class="fas fa-youtube"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            
            <!-- Footer End-->
        </footer>


        <!-- JS here -->

        <!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>

        <!-- Jquery, Popper, Bootstrap -->
        <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
        <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>

        <!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
        <script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

        <!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
        <script src="./assets/js/jquery.sticky.js"></script>

        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

        <!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>

      <!--  <link rel = "stylesheet" type = "text/css" href="css/style.css" media="all"> -->
        <script src="js/bootstrap.js"></script>
        <script src="js/jquery-1.7.2.min.js"></script>
        <script src="js/carousel.js"></script>
        <script src="js/button.js"></script>
        <script src="js/dropdown.js"></script>
        <script src="js/tab.js"></script>
        <script src="js/tooltip.js"></script>
        <script src="js/popover.js"></script>
        <script src="js/collapse.js"></script>
        <script src="js/modal.js"></script>
        <script src="js/scrollspy.js"></script>
        <script src="js/alert.js"></script>
        <script src="js/transition.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
      </body>
</html>