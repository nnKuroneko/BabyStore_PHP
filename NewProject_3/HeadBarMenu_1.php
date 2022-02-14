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
        <!--<link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/logobaby.png"> -->
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

       
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

    </head>
  <?php
				$id = (int) $_SESSION['id'];
			
					$query = mysqli_query ($mysqil, "SELECT * FROM useracc WHERE userid = '$id' ") or die (mysqli_error($mysqil));
					$fetch = mysqli_fetch_array ($query);
    ?>
    <body>

        
      <header>
            <!-- <div id="header" style="background-color:#ff6991;">
            <img src="img/logo.png" width="50" height="50" >
		<label><div style="color: white;"> -->
            
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
                                             <li><a href="myaccount.php">ข้อมูลส่วนตัว</a></li>
                                       <!--   <li><a href="product_list.html">Wish List  </a></li> -->
                                              <li><a href="cart.php">ตะกร้า</a></li>
                                             <!-- <li><a href="cart.html">Cart</a></li> -->
                                               <li><a href="function/logout.php">ออกจากระบบ</a></li> 
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
                                        <a href="home.php"><img src="assets/img/logo/logobaby.png" alt="" width="100" height="50"></a>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-8 col-md-7 col-sm-5">
                                    <!-- Main-menu -->
                                    <div class="main-menu f-right d-none d-lg-block">
                                        <nav>                                                
                                            <ul id="navigation">                                                                                                                                     
                                                <li><a href="home.php">หน้าหลัก</a></li>
                                                <li><a href="category_home.php">รายการสินค้า</a></li>
                                                <li class="hot"><a href="#">ยอดนิยม</a>
                                                    <ul class="submenu">
                                                        <li><a href="Bookmark_1.php">ยอดนิยม</a></li>
                                                        <li><a href="Bookmark_1.php">โปรโมชั่น</a></li>
                                                        <li><a href="Bookmark_1.php">Winter Collection</a></li>
                                                         <li><a href="Bookmark_1.php">Summer Collection</a></li>
                                                    </ul>
                                                </li>
                                                <!--  <li><a href="#">ข่าวสาร</a>
                                                    <ul class="submenu">
                                                        <li><a href="announcement_1.php">ประกาศ</a></li>
                                                        <li><a href="blog.php">พูดคุย</a></li>
                                                    </ul>
                                                </li>
                                               <li><a href="#">Pages</a>
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
                                                <li><a href="contact_1.php">แจ้งปัญหา</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div> 

                                <div class="col-xl-5 col-lg-3 col-md-3 col-sm-3 fix-card">
                                    <ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">
                                        <li class="d-none d-xl-block">
                                          <!--  <div class="form-box f-right ">
                                                 <input type="text" name="filter" placeholder="ค้นหาสินค้า.." id="filter">
                                                 
                                                <div class="search-icon">
                                                    <i class="fas fa-search special-tag"></i>
                                                </div>
                                            </div> -->
                                        </li>
                                        <li class=" d-none d-xl-block">
                                            
                                            <div class="favorit-items">
                                                <?php echo "<a href='favorite_1.php?id=".$id."&action=view'><i class='far fa-heart'></i></a>" ?>
                                            </div>
                                            
                                        </li>
                                        <li>
                                            <div class="shopping-card">                                                
                                               <?php echo "<a href='cart.php?id=".$id."&action=view'><i class='fas fa-shopping-cart'></i></a>" ?>
                                                   
                                            </div>
                                        </li>                                      


                                        <?php
                                        $role = "";
                                        if (isset($_SESSION['id'])) {
                                            $login = $_SESSION['id'];
                                            $role = $_SESSION['role'];
                                            echo " <li class='d-none d-lg-block'> <a href='myaccount.php' class='btn header-btn'>ข้อมูลส่วนตัว</a></li>";
                                        }
                                        ?>
                                        <?php
                                        if ($role == "admin") {
                                            echo " <li class='d-none d-lg-block'> <a href='admin/admin_login.php' class='btn header-btn'>การจัดการ</a></li>";
                                        }
                                        ?>




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
        
          <script src="/NewProject_3/javascripts/filter.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
	$(document).ready( function() {
		
		$('.remove').click( function() {
		
		var id = $(this).attr("id");

		
		if(confirm("Are you sure you want to delete this product?")){
			
		
			$.ajax({
			type: "POST",
			url: "NewProject_3/admin/admin_code/remove.php",
			data: ({id: id}),
			cache: false,
			success: function(html){
			$(".del"+id).fadeOut(2000, function(){ $(this).remove();}); 
			}
			}); 
			}else{
			return false;}
		});				
	});

</script>
        
            </body>
</html>