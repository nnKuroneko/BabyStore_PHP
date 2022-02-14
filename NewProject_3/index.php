<?php
session_start();

include("db/connect.php");
include("HeadBarMenu.php");
?>
<!doctype html>


        <main>
            
            
            <?php
       if(ISSET($_SESSION['id']))
           {
                                        //echo 'ไม่มีสิทธ์มาหน้านี้<br>';
                                        echo "<script>window.location = 'home.php';</script>";
       }else{
           
       }
				
    ?>
            <!-- slider Area Start -->
            <div class="slider-area ">
                <!-- Mobile Menu -->
                <div class="slider-active">
                    <div class="single-slider slider-height" data-background="assets/img/hero/Wallpaper-baby01.jpg">
                        <div class="container">
                            <div class="row d-flex align-items-center justify-content-between">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-none d-md-block">
                                    <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                                        <img src="assets/img/hero/baby01.png" alt="">
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-8">
                                    <div class="hero__caption">
                                        <span data-animation="fadeInRight" data-delay=".4s">99% ลดสูงสุด</span>
                                        <h1 data-animation="fadeInRight" data-delay=".6s">Winter <br> Collection</h1>
                                        <p data-animation="fadeInRight" data-delay=".8s">สุดยอดคอลเลคชั่นของปี 2021!</p>
                                        <!-- Hero-btn -->
                                       <!-- <div class="hero__btn" data-animation="fadeInRight" data-delay="1s">
                                            <a href="industries.html" class="btn hero-btn">ซื้อเลย</a>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider slider-height" data-background="assets/img/hero/Wallpaper-baby02.jpg">
                        <div class="container">
                            <div class="row d-flex align-items-center justify-content-between">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-none d-md-block">
                                    <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                                        <img src="assets/img/hero/baby02.png" alt="">
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-8">
                                    <div class="hero__caption">
                                        <span data-animation="fadeInRight" data-delay=".4s">99% ลดสูงสุด</span>
                                        <h1 data-animation="fadeInRight" data-delay=".6s">Summer <br> Collection</h1>
                                        <p data-animation="fadeInRight" data-delay=".8s">สุดยอดคอลเลคชั่นของปี 2021!</p>
                                        <!-- Hero-btn -->
                                       <!-- <div class="hero__btn" data-animation="fadeInRight" data-delay="1s">
                                            <a href="industries.html" class="btn hero-btn">ซื้อเลย</a> 
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- slider Area End-->
            <!-- Category Area Start-->
            <section class="category-area section-padding30">
                <div class="container-fluid">
                    <!-- Section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle text-center mb-85">
                                <h2>Best Seller</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-6">
                            <div class="single-category mb-30">
                                <div class="category-img">
                                    <img src="assets/img/categori/category04.jpg" alt="">
                                    <div class="category-caption">
                                        <!-- <h2>Owmen`s</h2>
                                        <span class="best"><a href="#">Best New Deals</a></span>
                                        <span class="collection">New Collection</span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="single-category mb-30">
                                <div class="category-img text-center">
                                    <img src="assets/img/categori/category02.jpg" alt="">
                                    <div class="category-caption">
                                       <!-- <span class="collection">Discount!</span>
                                        <h2>Winter Cloth</h2>
                                       <p>New Collection</p>  -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="single-category mb-30">
                                <div class="category-img">
                                    <img src="assets/img/categori/category03.jpg" alt="">
                                    <div class="category-caption">
                                        <!--    <h2>Man`s Cloth</h2>
                                           <span class="best"><a href="#">Best New Deals</a></span>
                                           <span class="collection">New Collection</span>  -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Category Area End-->
            <!-- Latest Products Start -->
            <section class="latest-product-area padding-bottom">
                <div class="container">
                    <div class="row product-btn d-flex justify-content-end align-items-end">
                        <!-- Section Tittle -->
                        <div class="col-xl-4 col-lg-5 col-md-5">
                            <div class="section-tittle mb-30">
                                <h2>สินค้ายอดนิยม</h2>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 col-md-7">
                            <div class="properties__button f-right">
                                <!--Nav Button 
                                <nav>                                                                                                
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All</a>
                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">New</a>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Featured</a>
                                        <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Offer</a>
                                    </div>
                                </nav>
                                End Nav Button  -->
                            </div>
                        </div>
                    </div>



                    <!-- Nav Card -->
                    <div class="tab-content" id="nav-tabContent">

                        <!-- card one -->
                         <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab"> 
                        <div class="row">
                             
                                 
                                    <?php
                                     $query = mysqli_query($mysqil, "SELECT *FROM product WHERE category='Bookmark' ORDER BY product_id DESC") or die(mysqli_error());

                                    while ($fetch = mysqli_fetch_array($query)) {

                                        $pid = $fetch['product_id'];

                                        $query1 = mysqli_query($mysqil, "SELECT * FROM stock WHERE product_id = '$pid'") or die(mysqli_error());
                                        $rows = mysqli_fetch_array($query1);

                                        $qty = $rows['qty'];
                                        if ($qty <= 5) {
                                            
                                        } else {
                                            //echo "<div class='col-xl-4 col-lg-4 col-md-6'>";
                                            //echo "<div class='single-product mb-60'>";
                                            echo '
                <!-- Nav Card -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="product-img">
                                         <style>
                                           [flower]     
                                           {border: 1px solid gray; } 
                                           </style>
                                        <img src="photo/' . $fetch['product_image'] . '"  height = "300px" width = "300px" flower width="10" height="40" alt=""></a>
                                        
                                        <div class="new-product">
                                            <span>New</span>
                                        </div>
                                    </div>
                                    
                                        <h4>' . $fetch['product_name'] . '</a></h4>
                                            <div class="product-caption">
                                        <div class="product-ratting">
                            
                                        </div>
                                        <div class="price">
                                            <ul>
                                               
                                                <div class="text-center"><a class="genric-btn info circle" href="login.php">เข้าสู่ระบบ</a></div>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                </div>   
                           ';
                                        }
                                    }
                                    ?>
       
                                </div>
                            </div>
                        </div>



                        </section> 

      
            
            
            
                        </main>






                <?php
        include("FooferBarMenu.php");
        ?>

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