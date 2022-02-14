<?php
$paypal_url='https://www.sandbox.paypal.com/cgi-bin/webscr'; // Test Paypal API URL
$paypal_id='yhannaki@gmail.com'; // Business email ID
?>

<?php
	include("function/session.php");
	include("db/connect.php");
        include("function/alert.php");
?>

<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Baby Store - สำหรับลูกน้อย </title>
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
    
     <?php
				$id = (int) $_SESSION['id'];
			
					$query = mysqli_query ($mysqil, "SELECT * FROM useracc WHERE userid = '$id' ") or die (mysqli_error($mysqil));
					$fetch = mysqli_fetch_array ($query);
    ?>
    <body>
	
	<?php
include("HeadBarMenu_1.php");
?>

            <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/summary.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>ใส่รายละเอียดใบสั่งซื้อ</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
        <main>
   
 <section class="checkout_area section_padding">
    <div class="container">
          
        
      <div class="billing_details">
        <div class="row">
          <div class="col-lg-8">
            <h3>Billing Details</h3>
            <?php
                            $mysqli = new mysqli("localhost", "root", "", "storebaby_db");
                            if (isset($_GET['tid'])) {
                                $sql = "Select * from transaction where transaction_id=" . $_GET['tid'];
                                $result = $mysqli->query($sql);
                                while ($data = $result->fetch_object()) {
                                    $firstname = $data->firstname;
                                    $lastname = $data->lastname;
                                    $telephone = $data->telephone;
                                    $address = $data->address;
                                    $town = $data->town;
                                    $postcode = $data->postcode;
                                    $banking = $data->Banking;
                                    $tran_image = $data->tran_image;
                                    $tid = $data->transaction_id;
                                    
                                    ?>
            <form class="row contact_form" method="post" enctype="multipart/form-data">
         
                 <input type="hidden" id="transaction_id" name="transaction_id" value=<?php echo $tid; ?>>
              <div class="col-md-6 form-group p_star">
                  <p class="help-block">ชื่อ</p>
                <input class="form-control" type="text" name="firstname"  required value="<?php echo $firstname; ?>">
              </div>
              <div class="col-md-6 form-group p_star">
                <p class="help-block">นามสกุล</p>
                <input class="form-control" type="text" name="lastname"  required value="<?php echo $lastname; ?>">
              </div>
    
              <div class="col-md-6 form-group p_star">
                <p class="help-block">เบอร์โทรศัพท์</p>
                <input class="form-control" type="text" name="telephone"  required value="<?php echo $telephone; ?>">
              </div>

              <div class="col-md-12 form-group p_star">
                  <p class="help-block">ที่อยู่</p>
                <input class="form-control" type="text" name="address"  required value="<?php echo $address; ?>" >
             
              </div>
              <div class="col-md-12 form-group p_star">
                  <p class="help-block">อำเภอ / เขต</p>
                <input type="text" class="form-control" id="town" name="town" required value="<?php echo $town; ?>"/>
                
                <span></span>
              </div>
    
              <div class="col-md-12 form-group">
                  <p class="help-block">รหัสไปรษณีย์</p>
                <input type="text" class="form-control" id="postcode" name="postcode" placeholder="Postcode/ZIP" required value="<?php echo $postcode; ?>"/>
              </div>
            
        <!--     <div class="payment_item">
                <div class="radion_btn">
                  <input type="radio" id="f-option5" name="selector" />
                  <label for="f-option5">เก็บเงินปลายทาง</label>
                  <div class="check"></div>
                </div>
                <p>
                  โปรเช็คที่อยู่ / เมือง ให้เรียบร้อยเพื่อป้องกันความผิดพลาด
                </p>
        </div>
        -->
         <?php 
               if($tran_image != null){
                 echo " <input href='#' class='btn_3' type='submit' name='success' value='ยืนยันการสั่งซื้อ'> ";
              
               }
               ?>
            </form>

            
      
          </div>
            
<?php

if (isset($_POST['success'])) {
    $mysqli = new mysqli("localhost", "root", "", "storebaby_db");

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $telephone = $_POST['telephone'];
    $address = $_POST['address'];
    $town = $_POST['town'];
    $postcode = $_POST['postcode'];
//$tran_image = $_POST['tran_image'];
    //$banking = $_POST['banking'];
    $tid = $_POST['transaction_id'];

						
			
				   $t_sql = "UPDATE transaction SET order_stat='Process' ,firstname='$firstname' , lastname='$lastname' ,telephone=$telephone , address='$address' , town='$town' "
                   . ",postcode=$postcode WHERE transaction_id = '$tid'";
           $t_result = mysqli_query($mysqli,$t_sql); 
           
           $result = $mysqli->query($t_sql);

        if (!$result) {

            
             echo '      <script>
       setTimeout(function() {
        swal({
            title: "ผิดพลาด",
            text: "บันทึกรายการผิดพลาด",
            type: "error"
        }, function() {
            window.location = ""; //หน้าที่ต้องการให้กระโดดไป
        });
    }, 1000);
</script>';
            
            
            echo $t_sql;
          
        } else {


             echo '      <script>
       setTimeout(function() {
        swal({
            title: "เสร็จสิ้น",
            text: "บันทึกรายการเรียบร้อย",
            type: "success"
        }, function() {
            window.location = "bills_user.php"; //หน้าที่ต้องการให้กระโดดไป
        });
    }, 1000);
</script>';
        }
                                
    
}
?>
            
         
            
            
           <!---- 
           ส่วนออเดอร์
           --->
          
            
          <div class="col-lg-4">
             
            <div class="order_box">
              <h2>ออเดอร์ของคุณ</h2>
               <form method="post" class="well"   overflow:hidden;">
              <ul class="list">
                <li>
                  <a href="#">สินค้า             
                    <span>ราคา</span>
                  </a>
                </li>
  
                  <?php
		$t_id = $_GET['tid'];
		$query = mysqli_query($mysqil, "SELECT * FROM transaction WHERE transaction_id = '$t_id'") or die (mysqli_error());
		$fetch = mysqli_fetch_array($query);
		
		$amnt = $fetch['amount'];
		$t_id = $fetch['transaction_id'];
		
		$query2 = mysqli_query($mysqil, "SELECT * FROM transaction_detail LEFT JOIN product ON product.product_id = transaction_detail.product_id WHERE transaction_detail.transaction_id = '$t_id'") or die (mysqli_error());
		while($row = mysqli_fetch_array($query2)){
		
		$pname = $row['product_name'];
		$psize = $row['product_type'];
		$pprice = $row['product_price'];
		$oqty = $row['order_qty'];
		
                echo "<li>";
                
                echo "<a href='#'>".substr($pname,0,15)."  &emsp;x $oqty";
                echo "<span class='middle'></span>";
                echo "<span class='last'>".number_format($pprice)."</span>";
                echo "</a>";
                
                echo "<li>";
                
		//echo "<tr>";
		//echo "<td>".$oqty."</td>";
		//echo "<td>".$pname."</td>";
		//echo "<td>".$psize."</td>";
		//echo "<td>".$pprice."</td>";
		//echo "</tr>";
		}
		?>    
       
              </ul>
              
              <ul class="list list_2">
          <!--      <li>
                  <a href="#">Subtotal
                    <span>$2160.00</span>
                  </a>
                </li>
                <li>
                  <a href="#">Shipping
                    <span>Flat rate: $50.00</span>
                  </a>
                </li> -->
                <li>
                  <a href="#">ยอดที่งหมด
                    <span><?php echo number_format($amnt); ?></span>
                  </a>
                </li>
              </ul>
             </form>
              
             
          <form class="form-horizontal" method="POST" action="function/upload_tran.php" enctype="multipart/form-data" > 
              
          
             
             
                 
                       
               <?php 
               if($tran_image == null){
                   echo ' <br>
             <h2>อัปโหลดสลิป / ใบเสร็จ</h2>
            <div class="col-md-12 form-group p_star">
                 <input type="radio" name="banking" class="radio" value="prompay">
                  <label for="f-option3">PROMPAY : 0123456789 </label>
                  <br>
                 <input type="radio" name="banking" class="radio" value="SCB">
                  <label for="f-option3">SCB Banking : 0123456789 </label>
                  <br>
                    <input type="radio" name="banking" class="radio" value="TrueWallet">
                  <label for="f-option3">Truw wallet : 0123456789 </label>         
            </div>
             
             <div class="payment_item active">
                                 <p>
                      
                      โปรดเช็คสลิปการโอนเงิน และ เลือกวิธีการชำระเงินที่ถูกต้อง
                      
                  </p>
              </div>';
                   echo ' <div class="col-md-12 form-group">
                     <input type="hidden" id="transaction_id" name="transaction_id" value='.$tid.'>
                <input type="file" class="form-control" name="tran_image" required />
                <center>
                <br>
                <input href="" type="submit" name="upload_tran"  class="genric-btn primary-border" value="ยืนยัน">
                </center>
                 </div>';
               }else{
                    echo ' <br>
             <h2>อัปโหลดเรียบร้อยแล้ว โปรดใส่ข้อมูลที่อยู่</h2>
             
             <div class="payment_item active">
                                 <p>
                      
                      ขอขอบคุณที่ทำการไว้ใจพวกเรา โปรดกรอกข้อมูล/ที่อยู่ 
                      และ <b>กดยืนยัน</b> คำสั่งซื้อ
                      
                  </p>
              </div>';
               }
               
               ?> 
             </form>
          
                <center>

                    
            <?php
    } // while 
} //if
?>          
             
                    </center>
              </div>     
            </div>
        
          
          <section class="feature_part section_padding">
        <div class="container">
    
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="assets/img/icon/feature_icon_1.svg" alt="#">
                        <h4>Credit Card Support</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="assets/img/icon/feature_icon_2.svg" alt="#">
                        <h4>Online Order</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="assets/img/icon/feature_icon_3.svg" alt="#">
                        <h4>Free Delivery</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="assets/img/icon/feature_icon_4.svg" alt="#">
                        <h4>Product with Gift</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
          
          
          </div>
        </div>
      
      </div>
          
    </div>
       
  </section>
	

        </main>


     

   
    
    
    
     <div class="gallery-wrapper lf-padding">
            <div class="gallery-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="gallery-items">
                            <img src="assets/img/gallery/gallery1.jpg" alt="">
                        </div> 
                        <div class="gallery-items">
                            <img src="assets/img/gallery/gallery2.jpg" alt="">
                        </div>
                        <div class="gallery-items">
                            <img src="assets/img/gallery/gallery3.jpg" alt="">
                        </div>
                        <div class="gallery-items">
                            <img src="assets/img/gallery/gallery4.jpg" alt="">
                        </div>
                        <div class="gallery-items">
                            <img src="assets/img/gallery/gallery5.jpg" alt="">
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
                                    <h4>ติดต่อพวกเรา</h4>
                                    <ul>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#"> Offers & Discounts</a></li>
                                        <li><a href="#"> Get Coupon</a></li>
                                        <li><a href="#">  Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>รายการสินค้า</h4>
                                    <ul>
                                        <li><a href="#">Woman Cloth</a></li>
                                        <li><a href="#">Fashion Accessories</a></li>
                                        <li><a href="#"> Man Accessories</a></li>
                                        <li><a href="#"> Rubber made Toys</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>ซัพพอร์ต</h4>
                                    <ul>
                                        <li><a href="#">Frequently Asked Questions</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Report a Payment Issue</a></li>
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










</body>
</html>