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

                
        <div class="content-body">

            <div class="container-fluid mt-3">
                

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="active-member">
                                    <div class="table-responsive">
                                         <?php
        $mysqli = new mysqli("localhost", "root", "", "storebaby_db");

        $sql = "SELECT * FROM useracc";
        //. "ORDER BY tbitem.id DESC"
//. "ORDER BY tbitem.id DESC";
        
        $result = $mysqli->query($sql);
        echo '<br><br>จำนวนยูสเซอร์ ' . $result->num_rows . ' ยูสเซอร์';
        
        ?>
                                        <table class="table table-xs mb-0">
                                            <thead>
                                                <tr>
                                                    <th>ชื่อ-นามสกุล</th>
                                                    <th>ไอดี</th>
                                                    <th>อีเมลล์</th>
                                                    <th>ที่อยู่</th>
                                                    <th>สถานะ</th>
                                        
                                                    <th>ล็อคอินล่าสุด</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                           <?php
                                    while ($data = $result->fetch_object()) {
                                        $image = $data->user_profile;
                                        $id = $data->userid;
                                        $email = $data->email;
                                        $address = $data->address;
                                        $role = $data->role;
                                        $fname = $data->firstname;
                                        $lname = $data->lastname;
                                        $time = $data->date;
                                        echo '<tr>
                                                    <td><img src="/NewProject_3/profile/' . $image . '" class=" rounded-circle mr-3" alt="">'.$fname.' '.$lname.'</td>
                                                    <td>'.$id.'</td>
                                                    <td>
                                                        <span>'.$email.'</span>
                                                    </td>
                                                    <td>
                                                        <span>'.$address.'</span>
                                                    </td>';
                                                   
                                               if($role =="admin"){
                                                     echo '  
                                                        <td><i class="fa fa-circle-o text-warning  mr-2"></i>'.$role.' </td> ';
                                                    }else        
                                                         echo '  
                                                        <td><i class="fa fa-circle-o text-success  mr-2"></i>'.$role.' </td> '; 
                                                    
           
                                                    echo '<td>
                                                        <span>เข้าสู่ระบบ</span>
                                                        <span class="m-0 pl-3">'.$time.'</span>
                                                    </td>
                                                </tr>';
                                                
                                   
                                        
                                    }
                                    ?>          
                                                
                                                
            
                                                
                                                
                                                
                                                
                                                
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>


            </div>
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