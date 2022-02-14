<!doctype html>

<?php
session_start();
include("db/connect.php");
include("HeadBarMenu.php");
?>
<html class="no-js" lang="zxx">



    <body>

        <!-- Preloader Start 
        <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="preloader-circle"></div>
                    <div class="preloader-img pere-text">
                        <img src="assets/img/logo/logo.png" alt="">
                    </div>
                </div>
            </div>
        </div>
         Preloader Start -->

 <?php
       if(ISSET($_SESSION['id']))
           {
                                        //echo 'ไม่มีสิทธ์มาหน้านี้<br>';
                                        echo "<script>window.location = 'contact_1.php';</script>";
       }else{
           
       }
				
    ?>

        <main>

            <!-- slider Area Start-->
            <div class="slider-area ">
                <!-- Mobile Menu -->
                <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/Bannerkid01.jpg" width="10" height="10">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="hero-cap text-center">
                                    <h2>FAQs</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider Area End-->

            <!-- Latest Products Start -->
     
            <section class="sample-text-area">
        <div class="container box_1170">
            <h3 class="text-heading">ประวัติความเป็นมาของเบบี้สโตว์</h3>
            <p class="sample-text">
                • โปรเจ็คส่งงานอาจารย์

            </p>
        </div>
    </section>
            
            <div class="whole-wrap">
		<div class="container box_1170">
			<div class="section-top-border">
				<h3 class="mb-30">ลูกค้าจะสามารถใช้งานเว็ปไซต์ได้อย่างไร ?</h3>
				<div class="row">
					<div class="col-md-3">
						<img src="assets/img/elements/R.png" alt="" class="img-fluid">
					</div>
					<div class="col-md-9 mt-sm-20">
                                            <p>คุณต้อง <b>สมัครสมาชิก</b> เพื่อใช้สำหรับ <b>เข้าสู่ระบบ</b> เว็ปไซต์.</p>
					</div>
				</div>
			</div>
			<div class="section-top-border text-right">
				<h3 class="mb-30">เบบี้ซ็อปขายอะไรสำหรับลูกน้อยของลูกค้าบ้าง ??</h3>
				<div class="row">
					<div class="col-md-9">
                                            <p class="text-right">
                                                ลูกค้าสามารถตรวจสอบ <b>รายการสินค้า</b> ด้านบนแถบเมนูของเว็ปไซต์เพื่อเลือกดูสินค้าจากทางเว็ปไซต์ได้
                                            </p>
						<p class="text-right">คุณต้อง <b>สมัครสมาชิก</b> เพื่อใช้สำหรับ <b>เข้าสู่ระบบ</b> เว็ปไซต์.</p>
					</div>
					<div class="col-md-3">
						<img src="assets/img/elements/shopicon.png" alt="" class="img-fluid">
					</div>
				</div>
			</div>
			<div class="section-top-border">
				<h3 class="mb-30">คำถามที่พบบ่อย</h3>
				<div class="row">
					<div class="col-md-4">
						<div class="single-defination">
							<h4 class="mb-20">ชำระเงินทางด้านใด ?</h4>
							<p> Prompay</p>
                                                        <p> SCB BANKING</p>
                                                        <p> TRUE WALLET</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-defination">
							<h4 class="mb-20">ขายอะไร ?</h4>
							<p>รวบรวมของใช้สำหรับเด็ก</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-defination">
							<h4 class="mb-20">ติดต่อยังไง ?</h4>
							<p>สมัครสมาชิกเพื่อติดต่อทีมงาน</p>
						</div>
					</div>
				</div>
			</div>
            
            
            
            
            
            
            <!-- Latest Products End -->

            <!-- Shop Method Start-->
     
            <!-- Shop Method End-->
            <!-- Gallery Start-->
       <!--     <div class="gallery-wrapper lf-padding">
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
            </div> -->
            <!-- Gallery End-->

        </main>


        <?php
        include("FooferBarMenu.php");
        ?>
    </body>
</html>