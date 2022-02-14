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
                Header end ti-comment-alt
            ***********************************-->

            <!--**********************************
                Sidebar start
            ***********************************-->
            <div class="nk-sidebar">           
                <div class="nk-nav-scroll">
                    <ul class="metismenu" id="menu">
                        <li class="nav-label">เมนูการจัดการ</li>
                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="icon-speedometer menu-icon"></i><span class="nav-text">หน้าแรก</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="./index.php">หน้าแอดมิน</a></li>
                                <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                            </ul>
                        </li>
                        <li class="mega-menu mega-menu-sm">
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="icon-globe-alt menu-icon"></i><span class="nav-text">สำหรับสินค้า</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="./listitem.php">สินค้าทั้งหมด</a></li>
                                <li><a href="./addtype.php">เพิ่มหมวดหมู่สินค้า</a></li>
                                <li><a href="./stock.php">เพิ่มสต็อคสินค้า</a></li>
                                <li><a href="./additem.php">เพิ่มสินค้า</a></li>
                                <!--   <li><a href="./layout-compact-nav.html">55555</a></li>
                                   <li><a href="./layout-vertical.html">Vertical</a></li>
                                   <li><a href="./layout-horizontal.html">Horizontal</a></li>
                                   <li><a href="./layout-boxed.html">Boxed</a></li>
                                   <li><a href="./layout-wide.html">Wide</a></li>
                                   
                                   
                                   <li><a href="./layout-fixed-header.html">Fixed Header</a></li>
                                   <li><a href="layout-fixed-sidebar.html">Fixed Sidebar</a></li> -->
                            </ul>
                        </li>
                        <li class="mega-menu mega-menu-sm">
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="icon-graph menu-icon"></i><span class="nav-text">เช็คออเดอร์ลูกค้า</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="./tranlist.php">เช็คออเดอร์ลูกค้า</a></li>
                                <li><a href="./settingtran.php">จัดการ</a></li>

                                <!--   <li><a href="./layout-compact-nav.html">55555</a></li>
                                   <li><a href="./layout-vertical.html">Vertical</a></li>
                                   <li><a href="./layout-horizontal.html">Horizontal</a></li>
                                   <li><a href="./layout-boxed.html">Boxed</a></li>
                                   <li><a href="./layout-wide.html">Wide</a></li>
                                   
                                   
                                   <li><a href="./layout-fixed-header.html">Fixed Header</a></li>
                                   <li><a href="layout-fixed-sidebar.html">Fixed Sidebar</a></li> -->
                            </ul>
                        </li>
                        <li class="nav-label">Apps</li>
                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="icon-envelope menu-icon"></i> <span class="nav-text">Email</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="./email-inbox.html">Inbox</a></li>
                                <li><a href="./email-read.html">Read</a></li>
                                <li><a href="./email-compose.html">Compose</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Apps</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="./app-profile.html">Profile</a></li>
                                <li><a href="./app-calender.html">Calender</a></li>
                            </ul>
                        </li>


                        <li class="nav-label">Pages</li>
                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="icon-notebook menu-icon"></i><span class="nav-text">Pages</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="./page-login.html">Login</a></li>
                                <li><a href="./page-register.html">Register</a></li>
                                <li><a href="./page-lock.html">Lock Screen</a></li>
                                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                    <ul aria-expanded="false">
                                        <li><a href="./page-error-404.html">Error 404</a></li>
                                        <li><a href="./page-error-403.html">Error 403</a></li>
                                        <li><a href="./page-error-400.html">Error 400</a></li>
                                        <li><a href="./page-error-500.html">Error 500</a></li>
                                        <li><a href="./page-error-503.html">Error 503</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
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
                                                    <h1 class="mt-5">เพิ่มสต็อกสินค้า</h1>
                                                </center>
                                                <br><br>
                                                
                                                <?php
                                                $mysqli = new mysqli("localhost", "root", "", "storebaby_db");
                                                $id = $_GET['id'];
                                                ?>
                                                <form method="post" action="admin_code/insertStockItem.php" entype="multipart/form-data">
                                                    <!--    <div class="mb-3">
                                                            <label for="text">เลขไอดีสินค้า</label>
                                                            <input type="text" class="form-control" name="product_id" aria-describedby="เลขไอดีสินค้า">
                                    
                                                        </div>-->             

                                                    <div class="mb-3">
                                                        <label for="text">เพิ่มจำนวนสินค้า</label>
                                                        <input type="hidden" name="product_id" autocomplete="off" class="input-large number" id="text" value="<?php echo $id; ?>" required/>
                                                        <input type="number" class="form-control" name="new_stck" aria-describedby="เพิ่มจำนวนสินค้า">

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