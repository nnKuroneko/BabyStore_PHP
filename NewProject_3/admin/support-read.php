
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
                                        <th scope="col">ไอดีปัญหา</th>                                  
                                        <th scope="col">ไอดีลูกค้า</th>
                                   
                                        <th scope="col">หัวข้อ</th>
                                        <th scope="col">รายละเอียด</th>
                                        <th scope="col">ชื่อผู้ส่ง</th>
                                        <th scope="col">สถานะคำร้อง</th>
                                        <th scope="col">เวลาที่ส่ง</th>
                                        <th scope="col">การจัดการคำร้อง</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php
					
					$query = mysqli_query($mysqli, "SELECT * FROM contacts LEFT JOIN useracc ON useracc.userid = contacts.userid") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query))
						{
						$id = $fetch['contact_id'];
                                                $userid = $fetch['userid'];
                                                $subject = $fetch['subject']; 
						$msg = $fetch['message'];
						$c_stat = $fetch['contact_stat'];
						$c_date = $fetch['contact_date'];
						
						$name = $fetch['name'];
				?>
				<tr>
					<td><?php echo $id; ?></td>
                                        <td><?php echo $userid; ?></td>
                                        <td><?php echo $subject; ?></td>
                                        <td><?php echo $msg; ?></td>
                                        <td><?php echo $name; ?></td>
					<td><?php echo $c_stat; ?></td>
                                        <td><?php echo $c_date; ?></td>
					
					
					
                                        <!--<td><a href="admin_code/receipt.php?tid=<?php echo $id; ?>">View</a>-->
                                        
					<?php 
					if($c_stat == 'Receive'){
					echo '<td> <a class="btn btn-mini btn-danger" href="admin_code/delcontact.php?id='.$id.'">ลบรายการ</a> ';
					}elseif($c_stat == 'Cancelled'){
					echo '<td> <a class="btn btn-mini btn-danger" href="admin_code/delcontact.php?id='.$id.'">ลบรายการ</a> ';
					}elseif($c_stat == 'Process'){
					echo '<td> <a class="btn btn-mini btn-info" href="admin_code/contact_Re.php?id='.$id.'">รับเรื่อง</a> ';
                                        echo '| <a class="btn btn-mini btn-info" href="admin_code/delcontact.php?id='.$id.'">ลบรายการ</a> ';
					}
                                        else{
					echo '<td> <a class="btn btn-mini btn-info" href="admin_code/confirm.php?id='.$id.'">Confirm</a> ';
					echo '<td> <a class="btn btn-mini btn-danger" href="admin_code/cancel.php?id='.$id.'">Cancel</a></td>';
					}					
					?>
				</tr>		
				<?php
					}
				?>          
                                </tbody>
                                <tfoot>
                                    <tr>
                                         <th scope="col">ไอดีปัญหา</th>                                  
                                        <th scope="col">ไอดีลูกค้า</th>
                                   
                                        <th scope="col">หัวข้อ</th>
                                        <th scope="col">รายละเอียด</th>
                                        <th scope="col">ชื่อผู้ส่ง</th>
                                        <th scope="col">สถานะคำร้อง</th>
                                        <th scope="col">เวลาที่ส่ง</th>
                                        <th scope="col">การจัดการคำร้อง</th>
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