<!DOCTYPE html>

<?php
include("admin_code/session_admin.php");
$mysqli = new mysqli("localhost", "root", "", "storebaby_db");
?>
        <!--**********************************
            Sidebar end
        ***********************************-->
        <body>
 <?php
include ("FooterAdmin.php");
?>
            
     <?php
        $id = (int) $_SESSION['id'];

        $query = mysqli_query($mysqli, "SELECT * FROM admin WHERE adminid = '$id' ") or die(mysqli_error());
        $fetch = mysqli_fetch_array($query);
        ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->

<!-- Begin page content -->
<main>
     <div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
            </ol>
        </div>
    </div>
         
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <center>
                        <h4 class="card-title">แสดงรายการสินค้าทั้งหมด</h4>
                        </center>
                        <label  class="input-group-prepend" style="padding:5px; float:right;"><span class="input-group-text">ค้นหา</span><input type="text" name="filter" placeholder="ค้นหาสินค้า....." id="filter"></label>
              
                        <a href="#add" role="button" class="btn btn-info" data-toggle="modal"><i class="icon-plus-sign icon-white"></i>Add Product</a>
		
                             
                                  <!--  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">เพิ่มสินค้าเข้าสู่ระบบ</button> -->
                                 
                                    <div id="add" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <center>
                                                    <h5 class="modal-title" id="add">เพิ่มสินค้าเข้าระบบ</h5>
                                                    </center>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                
                                                <div class="modal-body">
					<form method="post" enctype="multipart/form-data">
					<center>
						<table>
							<tr>
                                                            <td><label  class="col-form-label">ใส่รูปภาพสินค้า:</label><br>
                                                                    <input type="file" name="product_image" required></td>
							</tr>
							<?php include("admin_code/random_id.php"); 
							echo '<tr>
								<td><input type="hidden" name="product_code" value="'.$code.'" required></td>
							<tr/>';
							?>
							<tr>
								<td><label  class="col-form-label">ชื่อสินค้า:</label>
                                                                    <input  class="form-control" type="text" name="product_name" placeholder="ใส่ชื่อสินค้า" style="width:250px;" required></td>
							<tr/>
							<tr>
								<td><label  class="col-form-label">ราคาสินค้า:</label>
                                                                    <input class="form-control" type="text" name="product_price" placeholder="ใส่ราคา" style="width:250px;" required></td>
							</tr>
							<tr>
							
								<td><input type="hidden" name="product_type" value="โปรโมชั่น"></td>
							
							</tr>
							<tr>
								<td><label  class="col-form-label">แบรนด์:</label>
                                                                    <input class="form-control" type="text" name="brand" placeholder="ใส่แบรนด์หรือยี่ห้อ	" style="width:250px;" required></td>
							</tr>
							<tr>
								<td><label  class="col-form-label">สต็อกสินค้า:</label>
                                                                    <input class="form-control" type="number" name="qty" placeholder="ใส่จำนวนสินค้าลงใส่สต็อคสินค้า" style="width:250px;" required></td>
							</tr>
							<tr>
								<td><input type="hidden" name="category" value="Promotion"></td>
							</tr>
                                                        <tr>
								<td><input type="hidden" name="product_type_id" value="8"></td>
							</tr>
						</table>
					</center>
				</div>
                                                
                                                
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                                                    <input class="btn btn-primary" type="submit" name="add" value="เพิ่มสินค้า" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        
                         
                        <?php
			if (isset($_POST['add']))
				{
                            $mysqli = new mysqli("localhost", "root", "", "storebaby_db");
					$product_code = $_POST['product_code'];
					$product_name = $_POST['product_name'];
					$product_price = $_POST['product_price'];
					$product_type = $_POST['product_type'];
					$brand = $_POST['brand'];
					$category = $_POST['category'];
                                        $product_type_id = $_POST['product_type_id'];
					$qty = $_POST['qty'];
					$code = rand(0,98987787866533499);
						
								$name = $code.$_FILES["product_image"] ["name"];
								$type = $_FILES["product_image"] ["type"];
								$size = $_FILES["product_image"] ["size"];
								$temp = $_FILES["product_image"] ["tmp_name"];
								$error = $_FILES["product_image"] ["error"];
										
								if ($error > 0){
									die("Error uploading file! Code $error.");}
								else
								{
									if($size > 30000000000) //conditions for the file
									{
										die("Format is not allowed or file size is too big!");
									}
									else
									{
										move_uploaded_file($temp,"../photo/".$name);
			

				$q1 = mysqli_query($mysqli, "INSERT INTO product ( product_id,product_name, product_price, product_type, product_image, brand, category ,product_type_id )
				VALUES ('$product_code','$product_name','$product_price','$product_type','$name', '$brand', '$category','$product_type_id' )");
				
				$q2 = mysqli_query($mysqli, "INSERT INTO stock ( product_id, qty) VALUES ('$product_code','$qty')");
				
				//exit(header( "refresh: 1; url=/NewProject_3/admin/listitem.php" ));
				
                                
			}}
                        
		}

				?>
                        
                        
                        <div class="table-responsive">
<!--
      <?php
        $mysqli = new mysqli("localhost", "root", "", "storebaby_db");

        $sql = "SELECT product.product_id,product.product_name,product.product_price,product.product_type,product.product_image,category.category "
                . "FROM `product` INNER JOIN category on product.product_type_id = category.category_id ";
        //. "ORDER BY tbitem.id DESC"
//. "ORDER BY tbitem.id DESC";
        
        $result = $mysqli->query($sql);
        echo '<br><br>จำนวนรายการหนังสือ ' . $result->num_rows . ' รายการ';
        
        ?>
-->
                            <table class="table table-striped table-bordered zero-configuration">
                                
                                
                                <thead>
                                    <tr>
                                        <th scope="col">รูปภาพ</th>
                                        <th scope="col">ลำดับ</th>
                                        <th scope="col">ชื่อหนังสือ</th>
                                        <th scope="col">ราคา</th>
                                        <th scope="col">หมวดหมู่</th>
                                        <th scope="col">สต็อกสินค้า</th>
                                        <th scope="col">จัดการสินค้า</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
					
					$query = mysqli_query($mysqli, "SELECT * FROM `product` WHERE category='Promotion' ORDER BY product_id DESC") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query))
						{
						$id = $fetch['product_id'];
				?>
				<tr class="del<?php echo $id?>">
                                    
					<td><img class="img-polaroid" src = "../photo/<?php echo $fetch['product_image']?>" height = "70px" width = "80px"></td>
                                        <td><?php echo $fetch['product_id']?></td>
					<td><?php echo $fetch['product_name']?></td>
					<td><?php echo $fetch['product_price']?></td>
					<td><?php echo $fetch['product_type']?></td>
					
					<?php
					$query1 = mysqli_query($mysqli, "SELECT * FROM `stock` WHERE product_id='$id'") or die(mysqli_error());
					$fetch1 = mysqli_fetch_array($query1);
					
						$qty = $fetch1['qty'];
					?>
					
					<td><?php echo $fetch1['qty']?></td>
					<td>
					<?php
                                        echo "<a href='edititem.php?id=".$id."' class='btn btn-success' rel='facebox'><i class='icon-plus-sign icon-white'></i>แก้ไขข้อมูล</a> ";
					echo "<a href='admin_code/delitem.php?id=".$id."' class='btn btn-danger' rel='facebox'><i class='icon-minus-sign icon-white'></i>ลบสินค้า</a>";
					echo "<a href='stockin.php?id=".$id."' class='btn btn-success' rel='facebox'><i class='icon-plus-sign icon-white'></i>เพิ่มสต็อก</a> ";
					echo "<a href='stockout.php?id=".$id."' class='btn btn-danger' rel='facebox'><i class='icon-minus-sign icon-white'></i>ลดสต็อก</a>";
					?>
					</td>
				</tr>		
				<?php
					}
				?>
				</tbody>
			</table>
    <?php

 
  /* stock out */
 if(isset($_POST['stockout'])){
  
  $pid = $_POST['pid'];
  
 $result = mysqli_query($conn, "SELECT * FROM `stock` WHERE product_id='$pid'") or die(mysqli_error());
 $row = mysqli_fetch_array($result);
 
  $old_stck = $row['qty'];
  $new_stck = $_POST['new_stck'];
  $total = $old_stck - $new_stck;
 
  $que = mysqli_query($conn, "UPDATE `stock` SET `qty` = '$total' WHERE `product_id`='$pid'") or die(mysqli_error());
  
  header("Location:admin_feature.php");

 }
  ?>	
                        </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
    </div>
    
</main>

  <!-- #/ container -->
</div>
                
     
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

    <!-- Chartjs -->
    <script src="./plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="./plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="./plugins/d3v3/index.js"></script>
    <script src="./plugins/topojson/topojson.min.js"></script>
    <script src="./plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="./plugins/raphael/raphael.min.js"></script>
    <script src="./plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="./plugins/moment/moment.min.js"></script>
    <script src="./plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="./plugins/chartist/js/chartist.min.js"></script>
    <script src="./plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



    <script src="./js/dashboard/dashboard-1.js"></script>
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