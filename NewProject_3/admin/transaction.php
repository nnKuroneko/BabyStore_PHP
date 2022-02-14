
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
                        <h4 class="card-title">แสดงรายการออเดอร์ทั้งหมด</h4>
                        </center>
                        
                   <label  class="input-group-prepend" style="padding:5px; float:right;"><span class="input-group-text">ค้นหา</span><input type="text" name="filter" placeholder="ค้นหาสินค้า....." id="filter"></label>
             
                        
                        <div class="table-responsive">
                            
                         
        

        <?php
        $mysqli = new mysqli("localhost", "root", "", "storebaby_db");

        
        ?>
                            <table class="table table-striped table-bordered zero-configuration">
                                
                                
                                <thead>
                                    <tr>
                                        <th scope="col">ไอดีคำสั่งซื้อ</th>                                  
                                        <th scope="col">ไอดีลูกค้า</th>
                                   
                                        <th scope="col">จำนวนเงินที่ต้องชำระ</th>
                                        <th scope="col">สถานะออเดอร์</th>
                                        <th scope="col">เวลาที่สั่ง</th>
                                        <th scope="col">ชื่อ - นามสกุล</th>
                                        <th scope="col">ใบเสร็จ</th>
                                        <th scope="col">การจัดการออเดอร์</th>
                              
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php
					
					$query = mysqli_query($mysqli, "SELECT * FROM transaction LEFT JOIN useracc ON useracc.userid = transaction.customerid") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query))
						{
						$id = $fetch['transaction_id'];
                                                $cusid = $fetch['customerid']; 
						$amnt = $fetch['amount'];
						$o_stat = $fetch['order_stat'];
						$o_date = $fetch['order_date'];
                                                $tran_image = $fetch['tran_image'];
						
						$name = $fetch['firstname'].' '.$fetch['lastname'];
				?>
				<tr>
					<td><?php echo $id; ?></td>
                                        <td><?php echo $cusid; ?></td>
                                        <td><?php echo $amnt; ?></td>
                                        <td><?php echo $o_stat; ?></td>
					<td><?php echo $o_date; ?></td>
                                        <td><?php echo $name; ?></td>
                                       
                                        <td><img class="img-polaroid" src = "../tranimage/<?php echo $tran_image ?>" height = "70px" width = "80px">
                                            <a href=""></a>
                                        </td>
					
					
					
                                        <td><a href="admin_code/receipt.php?tid=<?php echo $id; ?>">View</a>
					<?php 
					if($o_stat == 'Confirmed'){
					echo '';
					}elseif($o_stat == 'Route'){
                                        echo '| <a class="btn btn-mini btn-success" href="admin_code/confirm.php?id='.$id.'">คอนเฟิร์ม</a> ';   
					echo '| <a class="btn btn-mini btn-danger" href="admin_code/cancel.php?id='.$id.'">ยกเลิก</a> ';
					}elseif($o_stat == 'Shipped'){
                                        echo '| <a class="btn btn-mini btn-info" href="edittran.php?id='.$id.'">ดำเนินการ</a> ';
					echo '| <a class="btn btn-mini btn-danger" href="admin_code/cancel.php?id='.$id.'">ยกเลิก</a> ';
					}elseif($o_stat == 'Process'){
                                        echo '| <a class="btn btn-mini btn-info" href="edittran.php?id='.$id.'">ดำเนินการ</a> ';
                                        echo '| <a class="btn btn-mini btn-primary" href="/NewProject_3/summary.php?tid='.$id.'">รายละเอียด</a> ';
					echo '| <a class="btn btn-mini btn-danger" href="admin_code/cancel.php?id='.$id.'">ยกเลิก</a> ';
					}elseif($o_stat == 'ON HOLD'){
					echo '| <a class="btn btn-mini btn-danger" href="admin_code/cancel.php?id='.$id.'">ยกเลิก</a> ';
					}elseif($o_stat == 'Cancelled'){
					echo '| <a class="btn btn-mini btn-danger" href="admin_code/cancel.php?id='.$id.'">ยกเลิก</a> ';
					}
                                        else{
					//echo '| <a class="btn btn-mini btn-info" href="admin_code/confirm.php?id='.$id.'">Confirmed</a> ';
					echo '| <a class="btn btn-mini btn-danger" href="admin_code/cancel.php?id='.$id.'">ยกเลิก</a></td>';
					}					
					?>
				</tr>		
				<?php
					}
				?>          
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th scope="col">ไอดีคำสั่งซื้อ</th>                                  
                                        <th scope="col">ไอดีลูกค้า</th>
                                
                                        <th scope="col">จำนวนเงินที่ต้องชำระ</th>
                                        <th scope="col">สถานะออเดอร์</th>
                                        <th scope="col">เวลาที่สั่ง</th>
                                        <th scope="col">ชื่อ - นามสกุล</th>
                                        <th scope="col">ใบเสร็จ</th>
                                        <th scope="col">การจัดการออเดอร์</th>
                                    </tr>
                                </tfoot>
                            </table>
                            
                            
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