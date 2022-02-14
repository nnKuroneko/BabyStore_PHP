
<!DOCTYPE html>
<?php
include("function/session.php");
include("db/connect.php");
?>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
        <!--  All snippets are MIT license http://bootdey.com/license -->

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

        <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Baby Store - สำหรับลูกน้อย </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
        
        <!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/slicknav.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>



    <body>


        <?php
        $id = (int) $_SESSION['id'];

        $query = mysqli_query($mysqil, "SELECT * FROM useracc WHERE userid = '$id' ") or die(mysqli_error());
        $fetch = mysqli_fetch_array($query);
        ?>

<?php
include("HeadBarMenu_1.php");
?>
       
 <main>
        <div class="container">
            <div class="main-body">
                <nav aria-label="breadcrumb" class="main-breadcrumb">
                    <ol class="breadcrumb">
                        <!--  <li class="breadcrumb-item"><a href="home.php">หน้าหลัก</a></li>
                          <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li> -->
                        <li class="breadcrumb-item active" aria-current="page">ข้อมูลส่วนตัว</li>
                    </ol>
                </nav>
            </div>
        </div> 

        <div class="container">
            <div class="view-account">
                <section class="module">
                    <div class="module-inner">
                        <div class="side-bar">
                            <div class="user-info">
                                 
                                <img class="img-profile img-circle img-responsive center-block" src="/NewProject_3/profile/<?php echo $fetch['user_profile'] ?>" height = "100px" width = "80px">
                                <ul class="meta list list-unstyled">
                                    <li class="name"><?php echo $fetch['username']; ?><br>
                                        <label class="label label-info">สมาชิก</label>
                                       
                                    </li>
                                   <!-- <li class="email"><a href="#"><?php echo $fetch['email']; ?></a></li>
                                    <li class="activity">Last logged in: Today at 2:18pm</li> -->
                                </ul>
                            </div>




                            <nav class="side-menu">
                                <ul class="nav">
                                    <li><a href="myaccount.php"><span class="fa fa-user"></span> โปรไฟล์</a></li>
                                    <li><a href="#add"><span class="fa fa-cog"></span> ตั้งค่า </a></li>    
                                    <li><a href="bills_user.php"><span class="fa fa-credit-card"></span> บิลใบเสร็จ</a></li>                                   
                                    <li class="active"><a href="cart.php"><span class="fa fa-envelope"></span> ข้อความ </a></li>
                                    <li><?php echo "<a href='cart.php?id=".$id."&action=view'><span class='fas fa-shopping-cart'></span> ตะกร้า</a>" ?></li>
                                    <li><?php echo "<a href='favorite_1.php?id=".$id."&action=view'><span class='far fa-heart'></span> รายการโปรด</a>" ?></li>

<!--	<li><a href="user-drive.html"><span class="fa fa-th"></span> Drive</a></li>
<li><a href="#"><span class="fa fa-clock-o"></span> Reminders</a></li> -->
                                </ul>
                            </nav>




                        </div>
            

                        <div class="content-panel">
                            <h2 class="title">โปรไฟล์<span class="pro-label label label-warning">Guest</span></h2>
                             <h3 class="fieldset-title">ข้อมูลส่วนตัว</h3>
                              
      
                            
                              <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <center>
                        <h4 class="card-title">ประวัติการแจ้งปัญหาของคุณ</h4>
                        </center>
                        
                   <label  class="input-group-prepend" style="padding:5px; float:right;"><span class="input-group-text">ค้นหา</span><input type="text" name="filter" placeholder="ค้นหาคำร้อง....." id="filter"></label>
             
                        
                        <div class="table-responsive">
                            
                         
        

        <?php
        $mysqli = new mysqli("localhost", "root", "", "storebaby_db");

        
        ?>
                            <table class="table table-striped table-bordered zero-configuration">
                                
                                
                                <thead>
                                    <tr>
                                        <th scope="col">ไอดีแจ้งปัญหา</th>                                  
                                      
                                   
                                        <th scope="col">หัวข้อ</th>
                                        <th scope="col">สถานะคำร้อง</th>
                                        <th scope="col">เวลาที่แจ้งปัญหา</th>
                         
                                        <th scope="col">ติดตามคำร้อง</th>
                              
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php
                                   
					
					$query = mysqli_query($mysqli, "SELECT * FROM contacts LEFT JOIN useracc ON useracc.userid = contacts.userid where contacts.userid='".$_SESSION['id']."'") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query))
						{
						$id = $fetch['contact_id']; 												
                                       
						$subject = $fetch['subject'];
						$o_stat = $fetch['contact_stat'];
						$o_date = $fetch['contact_date'];
						
						//$name = $fetch['firstname'].' '.$fetch['lastname'];
				?>
				<tr>
					<td><?php echo $id; ?></td>
                                   
                                        <td><?php echo $subject; ?></td>
                                        <td><?php echo $o_stat; ?></td>
					<td><?php echo $o_date; ?></td>
                                        <!-- <td><a class="genric-btn primary-border" href="receipt.php?tid=<?php echo $id; ?>">ใบเสร็จ</a> -->
                                        
                                        <?php 
					if($o_stat == 'Receive'){
					
                                        ?>
                                        <td><center>
                                        <script type="text/javascript">
// Popup window code
function newPopup(url) {
	popupWindow = window.open(
		url,'popUpWindow','height=300,width=400,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
}
</script>
<p><a class='genric-btn success' href="JavaScript:newPopup('contact_detail.php?id=<?php echo $id ?>');">เรียบร้อย</a></p>
                                        
  </center> 
                                        <?php
                                        }elseif($o_stat == 'Cancelled'){
					echo ' <td><center><a class="genric-btn danger" href="">หมายเหตุ</a></center>';
					}elseif($o_stat == 'Process'){
					//echo "<td><center><a class='genric-btn success' href='contact_detail.php?id=$id'>ดำเนินการ</a></center>";
					
                                        ?>
                                         <td><center>
                                        <script type="text/javascript">
// Popup window code
function newPopup(url) {
	popupWindow = window.open(
		url,'popUpWindow','height=300,width=400,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
}
</script>
<p><a class='genric-btn info' href="JavaScript:newPopup('contact_detail.php?id=<?php echo $id ?>');">ดำเนินการ</a></p>
                        
	
				</tr>		
				<?php
				}	}
				?>          
                                
                                
                                
                                </tbody>
                           <!--     <tfoot>
                                    <tr>
                                        <th scope="col">ไอดีคำสั่งซื้อ</th>                                  
                                        <th scope="col">จำนวนเงินที่ต้องชำระ</th>
                                        <th scope="col">สถานะออเดอร์</th>
                                        <th scope="col">เวลาที่สั่ง</th>
                   
                                        <th scope="col">ติดตามออเดอร์</th>
                                    </tr>
                                </tfoot> -->
                            </table>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                            
                             
                        </div>
                        
                        
                        
                        
                    </div>
                </section>
            </div>
        </div>
</main>
 <?php
        include("FooferBarMenu_1.php");
        ?>







        <style type="text/css">
            body{
                background:#f9f9fb;    
            }
            .view-account{
                background:#FFFFFF; 
                margin-top:20px;
            }
            .view-account .pro-label {
                font-size: 13px;
                padding: 4px 5px;
                position: relative;
                top: -5px;
                margin-left: 10px;
                display: inline-block
            }

            .view-account .side-bar {
                padding-bottom: 30px
            }

            .view-account .side-bar .user-info {
                text-align: center;
                margin-bottom: 15px;
                padding: 30px;
                color: #616670;
                border-bottom: 1px solid #f3f3f3
            }

            .view-account .side-bar .user-info .img-profile {
                width: 120px;
                height: 120px;
                margin-bottom: 15px
            }

            .view-account .side-bar .user-info .meta li {
                margin-bottom: 10px
            }

            .view-account .side-bar .user-info .meta li span {
                display: inline-block;
                width: 100px;
                margin-right: 5px;
                text-align: right
            }

            .view-account .side-bar .user-info .meta li a {
                color: #616670
            }

            .view-account .side-bar .user-info .meta li.activity {
                color: #a2a6af
            }

            .view-account .side-bar .side-menu {
                text-align: center
            }

            .view-account .side-bar .side-menu .nav {
                display: inline-block;
                margin: 0 auto
            }

            .view-account .side-bar .side-menu .nav>li {
                font-size: 14px;
                margin-bottom: 0;
                border-bottom: none;
                display: inline-block;
                float: left;
                margin-right: 15px;
                margin-bottom: 15px
            }

            .view-account .side-bar .side-menu .nav>li:last-child {
                margin-right: 0
            }

            .view-account .side-bar .side-menu .nav>li>a {
                display: inline-block;
                color: #9499a3;
                padding: 5px;
                border-bottom: 2px solid transparent
            }

            .view-account .side-bar .side-menu .nav>li>a:hover {
                color: #616670;
                background: none
            }

            .view-account .side-bar .side-menu .nav>li.active a {
                color: #40babd;
                border-bottom: 2px solid #40babd;
                background: none;
                border-right: none
            }

            .theme-2 .view-account .side-bar .side-menu .nav>li.active a {
                color: #6dbd63;
                border-bottom-color: #6dbd63
            }

            .theme-3 .view-account .side-bar .side-menu .nav>li.active a {
                color: #497cb1;
                border-bottom-color: #497cb1
            }

            .theme-4 .view-account .side-bar .side-menu .nav>li.active a {
                color: #ec6952;
                border-bottom-color: #ec6952
            }

            .view-account .side-bar .side-menu .nav>li .icon {
                display: block;
                font-size: 24px;
                margin-bottom: 5px
            }

            .view-account .content-panel {
                padding: 30px
            }

            .view-account .content-panel .title {
                margin-bottom: 15px;
                margin-top: 0;
                font-size: 18px
            }

            .view-account .content-panel .fieldset-title {
                padding-bottom: 15px;
                border-bottom: 1px solid #eaeaf1;
                margin-bottom: 30px;
                color: #616670;
                font-size: 16px
            }

            .view-account .content-panel .avatar .figure img {
                float: right;
                width: 64px
            }

            .view-account .content-panel .content-header-wrapper {
                position: relative;
                margin-bottom: 30px
            }

            .view-account .content-panel .content-header-wrapper .actions {
                position: absolute;
                right: 0;
                top: 0
            }

            .view-account .content-panel .content-utilities {
                position: relative;
                margin-bottom: 30px
            }

            .view-account .content-panel .content-utilities .btn-group {
                margin-right: 5px;
                margin-bottom: 15px
            }

            .view-account .content-panel .content-utilities .fa {
                font-size: 16px;
                margin-right: 0
            }

            .view-account .content-panel .content-utilities .page-nav {
                position: absolute;
                right: 0;
                top: 0
            }

            .view-account .content-panel .content-utilities .page-nav .btn-group {
                margin-bottom: 0
            }

            .view-account .content-panel .content-utilities .page-nav .indicator {
                color: #a2a6af;
                margin-right: 5px;
                display: inline-block
            }

            .view-account .content-panel .mails-wrapper .mail-item {
                position: relative;
                padding: 10px;
                border-bottom: 1px solid #f3f3f3;
                color: #616670;
                overflow: hidden
            }

            .view-account .content-panel .mails-wrapper .mail-item>div {
                float: left
            }

            .view-account .content-panel .mails-wrapper .mail-item .icheck {
                background-color: #fff
            }

            .view-account .content-panel .mails-wrapper .mail-item:hover {
                background: #f9f9fb
            }

            .view-account .content-panel .mails-wrapper .mail-item:nth-child(even) {
                background: #fcfcfd
            }

            .view-account .content-panel .mails-wrapper .mail-item:nth-child(even):hover {
                background: #f9f9fb
            }

            .view-account .content-panel .mails-wrapper .mail-item a {
                color: #616670
            }

            .view-account .content-panel .mails-wrapper .mail-item a:hover {
                color: #494d55;
                text-decoration: none
            }

            .view-account .content-panel .mails-wrapper .mail-item .checkbox-container,
            .view-account .content-panel .mails-wrapper .mail-item .star-container {
                display: inline-block;
                margin-right: 5px
            }

            .view-account .content-panel .mails-wrapper .mail-item .star-container .fa {
                color: #a2a6af;
                font-size: 16px;
                vertical-align: middle
            }

            .view-account .content-panel .mails-wrapper .mail-item .star-container .fa.fa-star {
                color: #f2b542
            }

            .view-account .content-panel .mails-wrapper .mail-item .star-container .fa:hover {
                color: #868c97
            }

            .view-account .content-panel .mails-wrapper .mail-item .mail-to {
                display: inline-block;
                margin-right: 5px;
                min-width: 120px
            }

            .view-account .content-panel .mails-wrapper .mail-item .mail-subject {
                display: inline-block;
                margin-right: 5px
            }

            .view-account .content-panel .mails-wrapper .mail-item .mail-subject .label {
                margin-right: 5px
            }

            .view-account .content-panel .mails-wrapper .mail-item .mail-subject .label:last-child {
                margin-right: 10px
            }

            .view-account .content-panel .mails-wrapper .mail-item .mail-subject .label a,
            .view-account .content-panel .mails-wrapper .mail-item .mail-subject .label a:hover {
                color: #fff
            }

            .view-account .content-panel .mails-wrapper .mail-item .mail-subject .label-color-1 {
                background: #f77b6b
            }

            .view-account .content-panel .mails-wrapper .mail-item .mail-subject .label-color-2 {
                background: #58bbee
            }

            .view-account .content-panel .mails-wrapper .mail-item .mail-subject .label-color-3 {
                background: #f8a13f
            }

            .view-account .content-panel .mails-wrapper .mail-item .mail-subject .label-color-4 {
                background: #ea5395
            }

            .view-account .content-panel .mails-wrapper .mail-item .mail-subject .label-color-5 {
                background: #8a40a7
            }

            .view-account .content-panel .mails-wrapper .mail-item .time-container {
                display: inline-block;
                position: absolute;
                right: 10px;
                top: 10px;
                color: #a2a6af;
                text-align: left
            }

            .view-account .content-panel .mails-wrapper .mail-item .time-container .attachment-container {
                display: inline-block;
                color: #a2a6af;
                margin-right: 5px
            }

            .view-account .content-panel .mails-wrapper .mail-item .time-container .time {
                display: inline-block;
                text-align: right
            }

            .view-account .content-panel .mails-wrapper .mail-item .time-container .time.today {
                font-weight: 700;
                color: #494d55
            }

            .drive-wrapper {
                padding: 15px;
                background: #f5f5f5;
                overflow: hidden
            }

            .drive-wrapper .drive-item {
                width: 130px;
                margin-right: 15px;
                display: inline-block;
                float: left
            }

            .drive-wrapper .drive-item:hover {
                box-shadow: 0 1px 5px rgba(0, 0, 0, .1);
                z-index: 1
            }

            .drive-wrapper .drive-item-inner {
                padding: 15px
            }

            .drive-wrapper .drive-item-title {
                margin-bottom: 15px;
                max-width: 100px;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis
            }

            .drive-wrapper .drive-item-title a {
                color: #494d55
            }

            .drive-wrapper .drive-item-title a:hover {
                color: #40babd
            }

            .theme-2 .drive-wrapper .drive-item-title a:hover {
                color: #6dbd63
            }

            .theme-3 .drive-wrapper .drive-item-title a:hover {
                color: #497cb1
            }

            .theme-4 .drive-wrapper .drive-item-title a:hover {
                color: #ec6952
            }

            .drive-wrapper .drive-item-thumb {
                width: 100px;
                height: 80px;
                margin: 0 auto;
                color: #616670
            }

            .drive-wrapper .drive-item-thumb a {
                -webkit-opacity: .8;
                -moz-opacity: .8;
                opacity: .8
            }

            .drive-wrapper .drive-item-thumb a:hover {
                -webkit-opacity: 1;
                -moz-opacity: 1;
                opacity: 1
            }

            .drive-wrapper .drive-item-thumb .fa {
                display: inline-block;
                font-size: 36px;
                margin: 0 auto;
                margin-top: 20px
            }

            .drive-wrapper .drive-item-footer .utilities {
                margin-bottom: 0
            }

            .drive-wrapper .drive-item-footer .utilities li:last-child {
                padding-right: 0
            }

            .drive-list-view .name {
                width: 60%
            }

            .drive-list-view .name.truncate {
                max-width: 100px;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis
            }

            .drive-list-view .type {
                width: 15px
            }

            .drive-list-view .date,
            .drive-list-view .size {
                max-width: 60px;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis
            }

            .drive-list-view a {
                color: #494d55
            }

            .drive-list-view a:hover {
                color: #40babd
            }

            .theme-2 .drive-list-view a:hover {
                color: #6dbd63
            }

            .theme-3 .drive-list-view a:hover {
                color: #497cb1
            }

            .theme-4 .drive-list-view a:hover {
                color: #ec6952
            }

            .drive-list-view td.date,
            .drive-list-view td.size {
                color: #a2a6af
            }

            @media (max-width:767px) {
                .view-account .content-panel .title {
                    text-align: center
                }
                .view-account .side-bar .user-info {
                    padding: 0
                }
                .view-account .side-bar .user-info .img-profile {
                    width: 60px;
                    height: 60px
                }
                .view-account .side-bar .user-info .meta li {
                    margin-bottom: 5px
                }
                .view-account .content-panel .content-header-wrapper .actions {
                    position: static;
                    margin-bottom: 30px
                }
                .view-account .content-panel {
                    padding: 0
                }
                .view-account .content-panel .content-utilities .page-nav {
                    position: static;
                    margin-bottom: 15px
                }
                .drive-wrapper .drive-item {
                    width: 100px;
                    margin-right: 5px;
                    float: none
                }
                .drive-wrapper .drive-item-thumb {
                    width: auto;
                    height: 54px
                }
                .drive-wrapper .drive-item-thumb .fa {
                    font-size: 24px;
                    padding-top: 0
                }
                .view-account .content-panel .avatar .figure img {
                    float: none;
                    margin-bottom: 15px
                }
                .view-account .file-uploader {
                    margin-bottom: 15px
                }
                .view-account .mail-subject {
                    max-width: 100px;
                    white-space: nowrap;
                    overflow: hidden;
                    text-overflow: ellipsis
                }
                .view-account .content-panel .mails-wrapper .mail-item .time-container {
                    position: static
                }
                .view-account .content-panel .mails-wrapper .mail-item .time-container .time {
                    width: auto;
                    text-align: left
                }
            }

            @media (min-width:768px) {
                .view-account .side-bar .user-info {
                    padding: 0;
                    padding-bottom: 15px
                }
                .view-account .mail-subject .subject {
                    max-width: 200px;
                    white-space: nowrap;
                    overflow: hidden;
                    text-overflow: ellipsis
                }
            }

            @media (min-width:992px) {
                .view-account .content-panel {
                    min-height: 800px;
                    border-left: 1px solid #f3f3f7;
                    margin-left: 200px
                }
                .view-account .mail-subject .subject {
                    max-width: 280px;
                    white-space: nowrap;
                    overflow: hidden;
                    text-overflow: ellipsis
                }
                .view-account .side-bar {
                    position: absolute;
                    width: 200px;
                    min-height: 600px
                }
                .view-account .side-bar .user-info {
                    margin-bottom: 0;
                    border-bottom: none;
                    padding: 30px
                }
                .view-account .side-bar .user-info .img-profile {
                    width: 120px;
                    height: 120px
                }
                .view-account .side-bar .side-menu {
                    text-align: left
                }
                .view-account .side-bar .side-menu .nav {
                    display: block
                }
                .view-account .side-bar .side-menu .nav>li {
                    display: block;
                    float: none;
                    font-size: 14px;
                    border-bottom: 1px solid #f3f3f7;
                    margin-right: 0;
                    margin-bottom: 0
                }
                .view-account .side-bar .side-menu .nav>li>a {
                    display: block;
                    color: #9499a3;
                    padding: 10px 15px;
                    padding-left: 30px
                }
                .view-account .side-bar .side-menu .nav>li>a:hover {
                    background: #f9f9fb
                }
                .view-account .side-bar .side-menu .nav>li.active a {
                    background: #f9f9fb;
                    border-right: 4px solid #40babd;
                    border-bottom: none
                }
                .theme-2 .view-account .side-bar .side-menu .nav>li.active a {
                    border-right-color: #6dbd63
                }
                .theme-3 .view-account .side-bar .side-menu .nav>li.active a {
                    border-right-color: #497cb1
                }
                .theme-4 .view-account .side-bar .side-menu .nav>li.active a {
                    border-right-color: #ec6952
                }
                .view-account .side-bar .side-menu .nav>li .icon {
                    font-size: 24px;
                    vertical-align: middle;
                    text-align: center;
                    width: 40px;
                    display: inline-block
                }
            }
        </style>

        <script type="text/javascript">

        </script>
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