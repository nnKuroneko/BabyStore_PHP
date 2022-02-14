<!DOCTYPE html>
<?php
include("admin_code/session_admin.php");
$mysqli = new mysqli("localhost", "root", "", "storebaby_db");
?>
 
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Baby Store - Admin</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="./plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

<?php
include ("FooterAdmin.php");
?>

    
      <?php
        $id = (int) $_SESSION['id'];

        $query = mysqli_query($mysqli, "SELECT * FROM admin WHERE adminid = '$id' ") or die(mysqli_error());
        $fetch = mysqli_fetch_array($query);
        ?>
    
        <main class="flex-shrink-0">
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
                        <h4 class="card-title">เพิ่มหมวดหมู่สินค้า</h4>
                        </center>
                        <div class="table-responsive">
                            
                         <div class="container">
                <center>
                <h1 class="mt-5">เพิ่มหมวดหมู่สินค้า</h1>
                </center>
                <br><br>
                
                <form method="post" action="admin_code/insertTypeItem.php" entype="multipart/form-data">
                <!--    <div class="mb-3">
                        <label for="text">เลขไอดีสินค้า</label>
                        <input type="text" class="form-control" name="product_id" aria-describedby="เลขไอดีสินค้า">

                    </div>-->
            
                     
                    <div class="mb-3">
                        <label for="text">Category เช่น Bookmark , CATEID...</label>
                        <input type="text" class="form-control" name="category" aria-describedby="Category">
                    </div> 
           
                    <div class="mb-3">
                        <label for="text">ชนิดของสินค้า</label>
                        <input type="text" class="form-control" name="product_type" aria-describedby="หมวดหมู่ของสินค้า">
                    </div>
                
                    <div class="mb-3">
                        <label for="text">ไอดีชนิดของสินค้า</label>
                        <input type="text" class="form-control" name="product_type_id" aria-describedby="ไอดีหมวดหมู่ของสินค้า">
                    </div>
             
             
                  
                    <br>
                    <br><br><br><button type="submit" class="btn btn-primary" >บันทึก</button><br><br><br><br> <!-- required value="#" -->
                </form>
            </div> 
        

       
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            
    <table class="table table-striped table-bordered zero-configuration">
                                
      <?php
        $mysqli = new mysqli("localhost", "root", "", "storebaby_db");

        $sql = "SELECT * FROM category";
        //$sql = "SELECT category.category_id,category.category,category.product_type,category.product_type_id"
        //        . ",product.product_type_id "
        //        . "FROM `product` INNER JOIN category on category.product_type_id = product.product_type_id ";


        
        $result = $mysqli->query($sql);
        echo '<br><br>ข้อมูล Category จำนวน' . $result->num_rows . ' ข้อมูล';
        ?>                           
                                <thead>
                                    <tr>
                                        <th scope="col">ไอดี</th>
                                        <th scope="col">ชื่อ</th>
                                       
                                        <th scope="col">ชนิด</th>
                                        <th scope="col">เลขไอดี</th>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                               <?php
while ($data = $result->fetch_object()) {
    $idcard = $data->category_id;
    $name = $data->category;
    $vac_name01 = $data->product_type;
    $date = $data->product_type_id;
    echo '<tr>';
    echo '<td>' . $idcard . '</td>';
    echo '<td>' . $name . '</td>';
    echo '<td>' . $vac_name01 . '</td>';
    echo '<td>' . $date . '</td>';
    echo '<td>';
    
}
?>
				</tbody>
			</table>
<?php
mysqli_close($mysqli); #ปิดฐานข้อมูล
?>       
    
    
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

</body>

</html>