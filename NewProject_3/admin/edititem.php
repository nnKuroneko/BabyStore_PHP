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
             ***********************************-->

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

                    <main class="container">

                        <div class="starter-template">
                            <center>
                                <h1>แก้ไขข้อมูลสินค้า</h1>
                            </center>
                            <br><br>
                            <?php
                            $mysqli = new mysqli("localhost", "root", "", "storebaby_db");
                            if (isset($_GET['id'])) {
                                $sql = "Select * from product where product_id=" . $_GET['id'];
                                $result = $mysqli->query($sql);
                                while ($data = $result->fetch_object()) {
                                    $itemname = $data->product_name;
                                    $price = $data->product_price;
                                    $type_id = $data->product_type;
                                    $details = $data->product_details;
                                    $brand = $data->brand;
                                    $cat_id = $data->category;
                                    $id = $data->product_id;
                                    ?>
                                    <form method="post" action="admin_code/EditDataItem.php">
                                        <input type="hidden" id="id" name="product_id" value=<?php echo $id; ?>>
                                        <div class="form-group">
                                            <label for="text">ชื่อหนังสือ</label>
                                            <input type="text" class="form-control" name="product_name"  value=<?php echo $itemname; ?>>
                                        </div>
                                        <div class="form-group">
                                            <label for="text">ราคา</label>
                                            <input type="text" class="form-control" name="product_price" value=<?php echo $price; ?> >    
                                        </div>
                                        <div class="form-group">
                                            <label for="text">แบรนด์</label>
                                            <input type="text" class="form-control" name="brand" value=<?php echo $brand; ?> >    
                                        </div>

        <?php
        $mysqli = new mysqli("localhost", "root", "", "storebaby_db");
        $sql = "Select * from category ";

        $result = $mysqli->query($sql);
        echo "<label for='text'>หมวดหมู่</label>";

        echo '<select product_name="product_type" product_id="product_type" name="product_type" class="custom-select">';
        while ($data = $result->fetch_object()) {
            $id = $data->product_id;
            $catname = $data->product_type;
            $str_select = '';
            if ($Type_id == $id) {
                $str_select = $catname;
            }
            echo ' <option value=' . $id . ' ' . $str_select . '>' . $catname . '</option>';
        }
        echo ' </select>';

        mysqli_close($mysqli);
        ?>    

                                        <?php
                                        $mysqli = new mysqli("localhost", "root", "", "storebaby_db");                                        
                                        $sql = "Select * from category ";
                                        
                                        $result = $mysqli->query($sql);
                                        echo "<label for='text'>Category</label>";
                                        
                                        echo '<select product_name="category" product_id="category" name="category" class="custom-select">';

                                        while ($data = $result->fetch_object()) {
                                            $id = $data->product_id;
                                            $cat = $data->category;
                                            $str_select = '';
                                            if ($Cat_id == $id) {
                                             $str_select = $cat;
                                            }
                                            echo ' <option value=' . $id . ' ' . $str_select . '>' . $cat . '</option>';
                                        }
                                        echo '</select>';

                                        mysqli_close($mysqli); #ปิดฐานข้อมูล
                                        ?>  
                                        
                                        <div class="form-group">
                                            <label for="text">ใส่รายละเอียด</label>
                                            <input type="text" class="form-control" name="product_details" value=<?php echo $details; ?> >    
                                        </div>
                                        <br><br>
                                        <button type="submit" class="btn btn-primary">บันทึกรายการ</button>

                                        
                                        
                                    </form>
        <?php
    } // while 
} //if
?>    
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

    </body>

</html>