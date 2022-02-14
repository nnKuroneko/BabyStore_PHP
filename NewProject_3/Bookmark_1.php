<!doctype html>

<?php
include("function/session.php");
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



        
<?php

include("HeadBarMenu_1.php");
?>
         <main>  
            <!-- slider Area Start-->
            <div class="slider-area ">
                <!-- Mobile Menu -->
                <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/banner2.jfif">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="hero-cap text-center">
                                    <h2>สินค้ายอดนิยม</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider Area End-->

            <!-- Latest Products Start -->
    
           
                    <!-- Nav Card -->
   <section class="latest-product-area latest-padding">
            <div class="container">
                <div class="row product-btn d-flex justify-content-between">
                        <div class="properties__button">
                            <!--Nav Button  -->
                            <nav>                                                                                                
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                  
                                    <a class="nav-item nav-link active" id="cid001-tab" data-toggle="tab" href="#cid001" role="tab" aria-controls="cid001" aria-selected="true">ยอดนิยม</a>
                                    <a class="nav-item nav-link" id="cid002-tab" data-toggle="tab" href="#cid002" role="tab" aria-controls="cid002" aria-selected="false">โปรโมชั่น</a>
                                    <a class="nav-item nav-link" id="cid003-tab" data-toggle="tab" href="#cid003" role="tab" aria-controls="cid003" aria-selected="false">คอลเลคชั่น</a>
                               
                                   
                                </div>
                            </nav>
                            <!--End Nav Button  -->
                        </div>
                      <!--  <div class="select-this d-flex">
                            <div class="featured">
                                <span>Short by: </span>
                            </div>
                            <form action="#">
                                <div class="select-itms">
                                    <select name="select" id="select1">
                                        <option value="">Featured</option>
                                        <option value="">Featured A</option>
                                        <option value="">Featured B</option>
                                        <option value="">Featured C</option>
                                    </select>
                                </div>
                            </form>
                        </div>  -->
                </div>  
                
                <div class="tab-content" id="nav-tabContent">
                    <!-- card one -->
                    
                      
                    
                    <div class="tab-pane fade show active" id="cid001" role="tabpanel" aria-labelledby="cid001-tab">    
                  <!--  <div class="tab-pane fade show active" id="cid001" role="tabpanel" aria-labelledby="cid001-tab"> -->
                        <div class="row">
                             
                                 
                                    <?php
                                    $query = mysqli_query($mysqil, "SELECT *FROM product WHERE category='Bookmark' ORDER BY product_id DESC") or die(mysqli_error());

                                    while ($fetch = mysqli_fetch_array($query)) {

                                        $pid = $fetch['product_id'];
                                        $id = $fetch['product_id'];
                                         $price = $fetch['product_price'];
                                        
                                        $query1 = mysqli_query($mysqil, "SELECT * FROM stock WHERE product_id = '$pid'") or die(mysqli_error());
                                        $rows = mysqli_fetch_array($query1);

                                        $qty = $rows['qty'];
                                        if ($qty <= 5) {
                                            
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
                                    
                                        <h4><a href="details.php?id='.$fetch['product_id'].'"> ' . $fetch['product_name'] . '</a></h4>
                                            <div class="product-caption">
                                        <div class="product-ratting">
                                            ราคา : ' .number_format($price).' บาท
                                        </div>
                                        <div class="price">
                                            <ul>
                                               
                                                <div class="text-center"><a class="genric-btn danger circle">สินค้าหมด</a> 
                                                
                                               
										
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                </div>   
                           ';
                                            
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
                                    
                                        <h4><a href="details.php?id='.$fetch['product_id'].'"> ' . $fetch['product_name'] . '</a></h4>
                                            <div class="product-caption">
                                        <div class="product-ratting">
                                           ราคา : ' .number_format($price).' บาท
                                        </div>
                                        <div class="price">
                                            <ul>
                                               
                                                <div class="text-center"><a class="genric-btn info circle" href="details.php?id='.$fetch['product_id'].'">รายละเอียด</a> 
                                                      <a href="favorite_1.php?id='.$id.'&action=add">
                                                  
                                                 <i class="genric-btn info circle" data-toggle="tooltip" data-placement="right" title="Favorite"> <i class="text-danger"><i class="fa fa-heart"></i></i> </i> 
											</a></div>
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
                    
         <div class="tab-pane fade" id="cid002" role="tabpanel" aria-labelledby="cid002-tab">         
                 
                        <div class="row">
                             
                                 
                                    <?php
                                    $query = mysqli_query($mysqil, "SELECT *FROM product WHERE category='Promotion' ORDER BY product_id DESC") or die(mysqli_error());

                                    while ($fetch = mysqli_fetch_array($query)) {

                                        $pid = $fetch['product_id'];
                                        $id = $fetch['product_id'];
                                        $price = $fetch['product_price'];
                                        
                                        $query1 = mysqli_query($mysqil, "SELECT * FROM stock WHERE product_id = '$pid'") or die(mysqli_error());
                                        $rows = mysqli_fetch_array($query1);

                                        $qty = $rows['qty'];
                                        if ($qty <= 5) {
                                            
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
                                    
                                        <h4><a href="details.php?id='.$fetch['product_id'].'"> ' . $fetch['product_name'] . '</a></h4>
                                            <div class="product-caption">
                                        <div class="product-ratting">
                                            ราคา : ' .number_format($price).' บาท
                                        </div>
                                        <div class="price">
                                            <ul>
                                               
                                                <div class="text-center"><a class="genric-btn danger circle">สินค้าหมด</a> 
                                                
                                               
										
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                </div>   
                           ';
                                            
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
                                    
                                        <h4><a href="details.php?id='.$fetch['product_id'].'"> ' . $fetch['product_name'] . '</a></h4>
                                            <div class="product-caption">
                                        <div class="product-ratting">
                                           ราคา : ' .number_format($price).' บาท
                                        </div>
                                        <div class="price">
                                            <ul>
                                               
                                               <div class="text-center"><a class="genric-btn info circle" href="details.php?id='.$fetch['product_id'].'">รายละเอียด</a> 
                                                      <a href="favorite_1.php?id='.$id.'&action=add">
                                                  
                                                 <i class="genric-btn info circle" data-toggle="tooltip" data-placement="right" title="Favorite"> <i class="text-danger"><i class="fa fa-heart"></i></i> </i> 
											</a></div>
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
                    <!-- รายการสินค้า -->
                    <div class="tab-pane fade" id="cid003" role="tabpanel" aria-labelledby="cid003-tab">         
                 
                        <div class="row">
                             
                                 
                                    <?php
                                    $query = mysqli_query($mysqil, "SELECT *FROM product WHERE category='Collection' ORDER BY product_id DESC") or die(mysqli_error());

                                    while ($fetch = mysqli_fetch_array($query)) {

                                        $pid = $fetch['product_id'];
                                        $id = $fetch['product_id'];
                                        $price = $fetch['product_price'];
                                        
                                        $query1 = mysqli_query($mysqil, "SELECT * FROM stock WHERE product_id = '$pid'") or die(mysqli_error());
                                        $rows = mysqli_fetch_array($query1);

                                        $qty = $rows['qty'];
                                        if ($qty <= 5) {
                                            
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
                                    
                                        <h4><a href="details.php?id='.$fetch['product_id'].'"> ' . $fetch['product_name'] . '</a></h4>
                                            <div class="product-caption">
                                        <div class="product-ratting">
                                            ราคา : ' .number_format($price).' บาท
                                        </div>
                                        <div class="price">
                                            <ul>
                                               
                                                <div class="text-center"><a class="genric-btn danger circle">สินค้าหมด</a> 
                                                
                                               
										
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                </div>   
                           ';
                                            
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
                                    
                                        <h4><a href="details.php?id='.$fetch['product_id'].'"> ' . $fetch['product_name'] . '</a></h4>
                                            <div class="product-caption">
                                        <div class="product-ratting">
                                            ราคา : ' .number_format($price).' บาท
                                        </div>
                                        <div class="price">
                                            <ul>
                                               
                                                <div class="text-center"><a class="genric-btn info circle" href="details.php?id='.$fetch['product_id'].'">รายละเอียด</a> 
                                                      <a href="favorite_1.php?id='.$id.'&action=add">
                                                  
                                                 <i class="genric-btn info circle" data-toggle="tooltip" data-placement="right" title="Favorite"> <i class="text-danger"><i class="fa fa-heart"></i></i> </i> 
											</a></div>
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
                    <!-- สิ้นสุดรายการสินค้า -->
                    
                
                    
                        </div> 
                    </div>
            </section>
        </main>


        <?php
        include("FooferBarMenu_1.php");
        ?>
    </body>
</html>