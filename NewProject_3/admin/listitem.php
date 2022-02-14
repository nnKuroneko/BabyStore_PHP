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
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <center>
                        <h4 class="card-title">แสดงรายการสินค้าทั้งหมด</h4>
                        </center>
                        <label  class="input-group-prepend" style="padding:5px; float:right;"><span class="input-group-text">ค้นหา</span><input type="text" name="filter" placeholder="ค้นหาสินค้า....." id="filter"></label>
              
                        <div class="table-responsive">
                            
                         
        

        <?php
        $mysqli = new mysqli("localhost", "root", "", "storebaby_db");

        $sql = "SELECT product.product_id,product.product_name,product.product_price,product.product_type,product.product_image,category.category "
                . "FROM `product` INNER JOIN category on product.product_type_id = category.category_id ";
        //. "ORDER BY tbitem.id DESC"
//. "ORDER BY tbitem.id DESC";
        
        $result = $mysqli->query($sql);
        echo '<br><br>จำนวนรายการหนังสือ ' . $result->num_rows . ' รายการ';
        
        ?>
                            <table class="table table-striped table-bordered zero-configuration">
                                
                                
                                <thead>
                                    <tr>
                                        <th scope="col">รูปภาพ</th>
                                        <th scope="col">ลำดับ</th>
                                        <th scope="col">ชื่อหนังสือ</th>
                                        <th scope="col">ราคา</th>
                                        <th scope="col">หมวดหมู่</th>
                                        <th scope="col">ประเภท</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($data = $result->fetch_object()) {
                                        $image = $data->product_image;
                                        $id = $data->product_id;
                                        $name = $data->product_name;
                                        $price = $data->product_price;
                                        $typecategory = $data->product_type;
                                        $type = $data->category;
                                        echo '<tr>';
                                        echo "<td><img class='img-polaroid' src='/NewProject_3/photo/" . $image . "' height = '100px' width = '100px' flower width='10' height='40'></a></td>";
                                       // echo '<td>' . $image . '</td>';
                                      // echo '<td>' . $image . '</td>';
                                        echo '<td>' . $id . '</td>';
                                        echo '<td>' . $name . '</td>';
                                        echo '<td>' . $price . '</td>';
                                        echo '<td>' . $typecategory . '</td>';
                                        echo '<td>' . $type . '</td>';
                                         echo '</tr>';
                                    }
                                    ?>             
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th scope="col">ลำดับ</th>
                                        <th scope="col">ชื่อหนังสือ</th>
                                        <th scope="col">ราคา</th>
                                        <th scope="col">หมวดหมู่</th>
                                        <th scope="col">ประเภท</th>
                                        
                                    </tr>
                                </tfoot>
                            </table>
                            
                            
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