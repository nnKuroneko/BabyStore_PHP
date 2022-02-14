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
        ?>      <!--**********************************
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
                    <!-- row -->

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <center>
                                            <h4 class="card-title">แสดงรายการสต็อกสินค้าทั้งหมด</h4>
                                        </center>
                                        <div class="table-responsive">

                                            <div class="container">
                                                <center>
                                                    <h1 class="mt-5">ลดสต็อกสินค้า</h1>
                                                </center>
                                                <br><br>
                                                
                                                <?php
                                                $mysqli = new mysqli("localhost", "root", "", "storebaby_db");
                                                $id = $_GET['id'];
                                                ?>
                                                <form method="post" action="admin_code/DelStockItem.php" entype="multipart/form-data">
                                                    <!--    <div class="mb-3">
                                                            <label for="text">เลขไอดีสินค้า</label>
                                                            <input type="text" class="form-control" name="product_id" aria-describedby="เลขไอดีสินค้า">
                                    
                                                        </div>-->             

                                                    <div class="mb-3">
                                                        <label for="text">ลดจำนวนส็ตอกสินค้า</label>
                                                        <input type="hidden" name="product_id" autocomplete="off" class="input-large number" id="text" value="<?php echo $id; ?>" required/>
                                                        <input type="number" class="form-control" name="new_stck" aria-describedby="ลดจำนวนสินค้า">

                                                    </div>


                                                    <br>
                                                    <br><br><br><button type="submit" class="btn btn-primary" >บันทึก</button><br><br><br><br> <!-- required value="#" -->
                                                </form>
                                            </div> 

                                            <div >



















































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

                </body>

                </html>