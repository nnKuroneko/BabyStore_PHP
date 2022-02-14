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
                                <h1>แก้ไขข้อมูลออเดอร์</h1>
                            </center>
                            <br><br>
                            <?php
                            $mysqli = new mysqli("localhost", "root", "", "storebaby_db");
                            if (isset($_GET['id'])) {
                                $sql = "Select * from transaction where transaction_id=" . $_GET['id'];
                                $result = $mysqli->query($sql);
                                while ($data = $result->fetch_object()) {
                                    $conid = $data->transaction_id;
                                   // $subj = $data->subject;
                                   // $name = $data->name;
                                   // $msg = $data->message;
                                   // $email = $data->email;
                                   // $uid = $data->userid;
                                   // $cstat = $data->contact_stat;
                                   // $cdate = $data->contact_date;
                                    ?>
                            
                                    <form method="post" action="">
                                        <input type="hidden" id="id" name="transaction_id" value=<?php echo $conid; ?>>
                                        <div class="form-group">
                                        <!--<input type="radio" name="contact_stat" class="radio" value="Confirmed">
                                        <label for="f-option3">Confirmed : ลูกค้าได้รับสินค้าเรียบร้อย </label>-->
                                         <br>
                                        <input type="radio" name="order_stat" class="radio" value="Route">
                                        <label for="f-option3">Route : สินค้าอยู่ในระหว่างขนส่ง </label>
                                         <br>
                                        <input type="radio" name="order_stat" class="radio" value="Shipped">
                                        <label for="f-option3">Shipped : จัดส่งสินค้าเรียบร้อยแล้ว </label>  
                                         <br>
                                        <input type="radio" name="order_stat" class="radio" value="Process">
                                        <label for="f-option3">Process : กำลังดำเนินการ </label>   
                                        
                                        </div>
                                        <br><br>
                                        <button type="submit" name="success" class="btn btn-primary">บันทึกรายการ</button>

                                        
                                        
                                    </form>
        <?php
    } // while 
} //if
?>    
                            <?php

if (isset($_POST['success'])) {
    $mysqli = new mysqli("localhost", "root", "", "storebaby_db");

    $conid = $_POST['transaction_id'];
    $cstat = $_POST['order_stat'];

                if($cstat == 'Process')				
                {
                $t_sql = "UPDATE transaction SET order_stat='Process'  WHERE transaction_id = '$conid'";
                }
                elseif($cstat == 'Shipped')				
                {
                $t_sql = "UPDATE transaction SET order_stat='Shipped'  WHERE transaction_id = '$conid'";
                }
                elseif($cstat == 'Route')				
                {
                $t_sql = "UPDATE transaction SET order_stat='Route'  WHERE transaction_id = '$conid'";
                }
                //elseif($cstat == 'Confirmed')				
                //{
                //$t_sql = "UPDATE transaction SET contact_stat='Confirmed'  WHERE transaction_id = '$conid'";
                //}
                else				
                {
                }
                
          
           $t_result = mysqli_query($mysqli,$t_sql); 
           
           $result = $mysqli->query($t_sql);

        if (!$result) {

            echo "<script>alert('บันทึกรายการผิดพลาด')</script>";
            echo "<script>window.location = 'transaction.php'</script>";
        } else {

            echo "<script>alert('บันทึกรายการเรียบร้อย')</script>";
            echo "<script>window.location = 'transaction.php'</script>";
            // header( "refresh: 1; url=/NewProject_3/admin/listitem.php" );
            //exit(0);
        }
                                
    
}
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