<?php
	include("function/session.php");
	include("db/connect.php");
?>
<!DOCTYPE html>
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
    
     
    <body>
        <?php
				$id = (int) $_SESSION['id'];
			
					$query = mysqli_query ($mysqil, "SELECT * FROM useracc WHERE userid = '$id' ") or die (mysqli_error($mysqil));
					$fetch = mysqli_fetch_array ($query);
    ?>
	
	 <?php
include("HeadBarMenu_1.php");
?>

	
	<div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/cart7.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2><font color="white">รายการโปรดของคุณ</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
	
	
    <main>
	<?php 
			if(isset($_GET['id'])){
			$id = $_GET['id'];
			$query = mysqli_query($mysqil, "SELECT * FROM product WHERE product_id = '$id' ");
			$row = mysqli_fetch_array($query);
         ?>
        
<div id="container">
    <div class="cart_inner">
 <div class="row">
            <div class="col-md-12">
                <div class="panel panel-info panel-shadow">
                    <div class="panel-heading">
                        <h3>
                            <img class="img-circle img-thumbnail" src="/NewProject_3/profile/<?php echo $fetch['user_profile'] ?>" height = "80px" width = "80px">
                            
                           <?php echo $fetch['username']; ?>
                        </h3>
                    </div>
                    <div class="panel-body"> 
                        
    
	<form method="post" class="well" style="background-color:#fff;">
         <div class="table-responsive">   
	<table class="table">
            <center>
	<label style="font-size:25px;">รายการโปรดของฉัน</label>
            </center>
		<thead>
                            <tr>
                                <th>สินค้า</th>
                                <th>ชื่อสินค้า</th>
                                <th>หมวดหมู่</th>
                                <th>รายละเอียดสินค้า</th>
                                <th>ลบรายการสินค้า</th>
                         
                            </tr>
                            </thead>
                        
<?php


	if (isset($_GET['id']))
	$id=$_GET['id'];
	else
	$id=1;
	if (isset($_GET['action']))
	$action=$_GET['action'];
	else
	$action="empty";

	switch($action)
	{
		
		case "view":
			if (isset($_SESSION['favorite'][$id]))
			$_SESSION['favorite'][$id];
		break;
		case "add":
			if (isset($_SESSION['favorite'][$id]))
			$_SESSION['favorite'][$id]++;
			else
			$_SESSION['favorite'][$id]=1;
		break;
		case "remove":
			if (isset($_SESSION['favorite'][$id]))
			{
				//$_SESSION['favorite'][$id]==0;
				//if ($_SESSION['favorite'][$id]==0)
				unset($_SESSION['favorite'][$id]);
			}
		break; 
		case "empty":
			unset($_SESSION['favorite']);
		break;
	}
if (isset($_SESSION['favorite']))
	{	
	
	foreach($_SESSION['favorite'] as $id => $x)
	{
    
	$result=mysqli_query($mysqil, "Select * from product where product_id=$id");
	$myrow=mysqli_fetch_array($result);
	$name=$myrow['product_name'];
	$name=substr($name,0,40);
        $pid=$myrow['product_id'];
	$price=$myrow['product_price'];
	$image=$myrow['product_image'];
	$product_type=$myrow['product_type'];
	
	
		echo "<tr class='table'>";
		echo "<td><h4><img height='70px' width='70px' src='photo/".$image."'></h4></td>";
		echo "<td><h4><input type='hidden' required value='".$id."' name='pid[]'> ".$name."</h4></td>";
		echo "<td><h4>".$product_type."</h4></td>";
                echo "<td><h4><a class='genric-btn info circle' href='details.php?id=".$id."'>รายละเอียด</a></h4></td>";
                echo "<td><h4><a href='favorite_1.php?id=".$id."&action=remove'><i class='icon-minus-sign'></i></a></td>";
		echo "</tr>";
		}
		
		//echo"<tr>";
		//echo "<td></td>";
		//echo "<td></td>";
              // echo "<td></td>";
               
		//echo "<td></td>";
		//echo "<td><h2>ยอด :</h2></td>";
		//echo "<td><strong><input type='hidden' value='".$total."' required name='total'><h2 class='text-danger'>".$total." บาท</h2></strong></td>";
		//echo "<td></td>";
	 	
		//echo "</tr>";
	}
 	else
		echo "<font color='#111' class='alert alert-error' style='float:right'>ไม่มีสินค้ารายการโปรด</font>";

?>
	</table>
	
			
	<div class='pull-right'>
        <a class='btn btn-danger btn-sm pull-right' style='float:right' href='favorite_1.php?id=".$id."&action=empty'><i class='fa fa-trash-o'></i>เคลียร์รายการทั้งหมด</a>
	<a href='home.php' class='btn btn-inverse btn-lg'>เลือกซื้อสินค้าต่อ</a>
        
	
	</form>
	</div>


		<div id="purchase" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:400px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				<h3 id="myModalLabel">Mode Of Payment</h3>
			</div>
				<div class="modal-body">
					<form method="post">
					<center>
						<input type="image" src="images/button.jpg" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!"  />
						<br/>
						<br/>
						<button class="btn btn-lg" >Cash</button>
					</center>
				</div>
			<div class="modal-footer">
				<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
					</form>
			</div>
		</div>
			
			
		<br />		
		<br />	
</div>
                        </div>
                    
                    
                    
                    
                    </div>
                </div>
     </div>
    </div>
     </div>     
        
        
        
<br />
	
</main>





 <?php
        include("FooferBarMenu_1.php");
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

                        <link rel = "stylesheet" type = "text/css" href="css/style.css" media="all">
                        <link rel="stylesheet" type="text/css" href="css/bootstrap_1.css">
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
<?php 
                        }
                        ?>