<!doctype html>
<?php
include("db/connect.php");
?>
<html class="no-js" lang="zxx">
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

        <header>
            <!-- Header Start -->
            <div class="header-area">
                <div class="main-header ">
                    <div class="header-top top-bg d-none d-lg-block">
                        <div class="container-fluid">
                            <div class="col-xl-12">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="header-info-left d-flex">       
                                    </div>
                                    <div class="header-info-right">
                                        <ul>                                          
                                            <!--   <li><a href="login.html">ข้อมูลส่วนตัว</a></li>
                                             <li><a href="product_list.html">Wish List  </a></li> 
                                              <li><a href="cart.html">Shopping</a></li>
                                               <li><a href="cart.html">Cart</a></li>
                                               <li><a href="checkout.html">ล็อคเอ้า</a></li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-bottom  header-sticky">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <!-- Logo โลโก้-->
                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-3">

                                    <div class="logo">
                                        <a href="index.php"><img src="assets/img/logo/logobaby.png" alt="" width="100" height="50" ></a>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-8 col-md-7 col-sm-5">
                                    <!-- Main-menu -->
                                    <div class="main-menu f-right d-none d-lg-block">
                                        <nav>                                                
                                            <ul id="navigation">                                                                                                                                     
                                                <li><a href="index.php">หน้าหลัก</a></li>
                                                <li><a href="category_index.php">รายการสินค้า</a></li>
                                           <!--     <li class="hot"><a href="#">ล่าสุด</a>
                                                    <ul class="submenu">
                                                        <li><a href="category001.php"> รายการสินค้า</a></li>
                                                        <li><a href="category001.php"> รายละเอียดสินค้า</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="blog.html">พูดคุย</a>
                                                    <ul class="submenu">
                                                        <li><a href="blog.html">Blog</a></li>
                                                        <li><a href="single-blog.html">Blog Details</a></li>
                                                    </ul>
                                                </li>
                                                <!-- <li><a href="#">Pages</a>
                                                     <ul class="submenu">
                                                         <li><a href="login.html">Login</a></li>
                                                         <li><a href="cart.html">Card</a></li>
                                                         <li><a href="elements.html">Element</a></li>
                                                         <li><a href="about.html">About</a></li>
                                                         <li><a href="confirmation.html">Confirmation</a></li>
                                                         <li><a href="cart.html">Shopping Cart</a></li>
                                                         <li><a href="checkout.html">Product Checkout</a></li>
                                                     </ul>
                                                 </li> -->
                                                <li><a href="support.php">ช่วยเหลือ</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div> 

                                <div class="col-xl-5 col-lg-3 col-md-3 col-sm-3 fix-card">
                                    <ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">
                                        <li class="d-none d-xl-block">
                                            <!-- <div class="form-box f-right ">
                                                 <input type="text" name="Search" placeholder="ค้นหาสินค้า">
                                                 <div class="search-icon">
                                                     <i class="fas fa-search special-tag"></i>
                                                 </div>
                                             </div> -->
                                        </li>
                                        <li class=" d-none d-xl-block">
                                           <!-- <div class="favorit-items"> <i class="far fa-heart"></i> -->
                                                <?php
                                                $role = "";
                                                if (isset($_SESSION['name'])) {
                                                    $login = $_SESSION['name'];
                                                    $role = $_SESSION['role'];
                                                    echo $login . ' ตำแหน่ง ' . $role . '';
                                                } else {
                                                    echo '';
                                                }
                                                ?>

                                          <!--  </div>-->
                                        </li>
                                     <!--   <li>
                                            <div class="shopping-card">
                                                <?php
                                                if ($role == "guest") {
                                                    echo "<a href='cart.html'><i class='fas fa-shopping-cart'></i></a>";
                                                    //<a href="cart.html"><i class="fas fa-shopping-cart"></i></a>
                                                }else{
                                                    
                                                   echo '';
                                                }
                                                ?>

                                            </div>
                                        </li>  -->                                     
                                        <li class="d-none d-lg-block"> <a href="login.php" class="btn header-btn">เข้าสู่ระบบ</a></li>
                                        <li class="d-none d-lg-block"> <a href="register.php" class="btn header-btn">สมัครสมาชิก</a></li>
                                    </ul>
                                    
                                    
                                    
                                    
                                    
                                </div>
                                  
                     
                                
                                
                                
                                
                                

                                <!-- Mobile Menu -->
                                <div class="col-12">
                                    <div class="mobile_menu d-block d-lg-none"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header End -->
        </header>
        
        
        
            </body>
</html>