 <?php
session_start();
include('db/connect.php');
$oid=intval($_GET['tid']);
 ?>
<script language="javascript" type="text/javascript">
function f2()
{
window.close();
}ser
function f3()
{
window.print(); 
}
</script>
<html>
 <head>
    <title>หน้าต่าง - เช็คออเดอร์ของคุณ</title>
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
<div class="container px-1 px-md-4 py-5 mx-auto">
    <div class="card">
        
          <?php 
$ret = mysqli_query($mysqil,"SELECT * FROM transaction WHERE transaction_id='$oid'");
$num=mysqli_num_rows($ret);

if($num>0)
{
while($row=mysqli_fetch_array($ret))
      {
    $o_stat = $row['order_stat'];
     ?>
        
        <div class="row d-flex justify-content-between px-3 top">
            <div class="d-flex">
                <h5>ORDER <span class="text-primary font-weight-bold"># <?php echo $oid;?></span></h5>
            </div>
            <div class="d-flex flex-column text-sm-right">
                <p class="mb-0">วัน/เดือน/ปี <span><?php echo $row['order_date'];?></span></p>
                <p>ที่อยู่ <span class="font-weight-bold"><?php echo $row['address'];?></span></p>
                <!-- <p><span class="font-weight-bold"><?php echo "<a class='genric-btn success' href='receipt.php?tid=$oid'>ใบเสร็จ</a>"; ?></span></p> -->
            </div>
        </div> <!-- Add class 'active' to progress -->       
        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <ul id="progressbar" class="text-center">
                    
      <?php 
        if($o_stat == 'ON HOLD'){
            echo '<li class="step0"></li>
                    <li class="step0"></li>
                    <li class="step0"></li>
                    <li class="step0"></li>
        ';
        }
        
        ?>
                    
      <?php 
        if($o_stat == 'Process'){
            echo '<li class="active step0"></li>
                    <li class="step0"></li>
                    <li class="step0"></li>
                    <li class="step0"></li>
        ';
        }
        
        ?>
                    
       <?php 
        if($o_stat == 'Shipped'){
            echo '<li class="active step0"></li>
                    <li class="active step0"></li>
                    <li class="step0"></li>
                    <li class="step0"></li>
        ';
        }
        
        ?>   
                    
        <?php 
        if($o_stat == 'Route'){
            echo '<li class="active step0"></li>
                    <li class="active step0"></li>
                    <li class="active step0"></li>
                    <li class="step0"></li>
        ';
        }
        
        ?> 
                    
        <?php 
        if($o_stat == 'Confirmed'){
            echo '<li class="active step0"></li>
                    <li class="active step0"></li>
                    <li class="active step0"></li>
                    <li class="active step0"></li>
        ';
        }
        
        ?>               

        <?php 
        if($o_stat == 'Cancelled'){
            echo '<cener>ถูกยกเลิกการจัดส่งเนื่องจากได้ข้อมูล หรือ สลิปการโอนเงิน ที่ไม่เรียบร้อย'
            . 'โปรดติดต่อเราโดยการเลือกที่ <a href="contact_1.php"><b>แจ้งปัญหา</b></a> หรือแก้ไขเพื่อทำเรื่องซื้อสินค้าอีกครั้ง <a href="summary.php?tid='.$oid.'"><b>แก้ไข</b></a></center>';

        }
        
        ?>  
                </ul>
            </div>
        </div>
        
       
        
       <?php } }
       else{
   ?>
   Order Not Process Yet
    <?php  }
$st='Confirmed';
   $rt = mysqli_query($mysqil,"SELECT * FROM transaction WHERE transaction_id='$oid'");
     while($num=mysqli_fetch_array($rt))
     {
     $currrentSt=$num['order_stat'];
   }
     if($st==$currrentSt)
     { ?>
   <center>
       สินค้าได้มีการจัดส่งให้ถึงลูกค้าเรียบร้อยแล้ว ขอบคุณที่ใช้บริการ
       <?php echo "<a href='receipt.php?tid=$oid'><b>ใบเสร็จ</b></a>"; ?>
   </center>
   
   <?php } 
 
  ?>
      
        
        <div class="row justify-content-between top">
            <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/9nnc9Et.png">
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">สินค้า<br>กำลังตรวจสอบ</p>
                </div>
            </div>
            <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/u1AzR7w.png">
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">สินค้า<br>เตรียมจัดส่ง</p>
                </div>
            </div>
            <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/TkPm63y.png">
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">สินค้า<br>จัดส่งเรียบร้อยแล้ว</p>
                </div>
            </div>
            <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/HdsziHP.png">
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">สินค้า<br>ถึงมือลูกค้าแล้ว</p>
                </div>
            </div>
        </div>
        
        
        
        
    </div>
</div>
    
    <style>
        body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-color: #8C9EFF;
    background-repeat: no-repeat
}

.card {
    z-index: 0;
    background-color: #ECEFF1;
    padding-bottom: 20px;
    margin-top: 90px;
    margin-bottom: 90px;
    border-radius: 10px
}

.top {
    padding-top: 40px;
    padding-left: 13% !important;
    padding-right: 13% !important
}

#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: #455A64;
    padding-left: 0px;
    margin-top: 30px
}

#progressbar li {
    list-style-type: none;
    font-size: 13px;
    width: 25%;
    float: left;
    position: relative;
    font-weight: 400
}

#progressbar .step0:before {
    font-family: FontAwesome;
    content: "\f10c";
    color: #fff
}

#progressbar li:before {
    width: 40px;
    height: 40px;
    line-height: 45px;
    display: block;
    font-size: 20px;
    background: #C5CAE9;
    border-radius: 50%;
    margin: auto;
    padding: 0px
}

#progressbar li:after {
    content: '';
    width: 100%;
    height: 12px;
    background: #C5CAE9;
    position: absolute;
    left: 0;
    top: 16px;
    z-index: -1
}

#progressbar li:last-child:after {
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    position: absolute;
    left: -50%
}

#progressbar li:nth-child(2):after,
#progressbar li:nth-child(3):after {
    left: -50%
}

#progressbar li:first-child:after {
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
    position: absolute;
    left: 50%
}

#progressbar li:last-child:after {
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px
}

#progressbar li:first-child:after {
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px
}

#progressbar li.active:before,
#progressbar li.active:after {
    background: #651FFF
}

#progressbar li.active:before {
    font-family: FontAwesome;
    content: "\f00c"
}

.icon {
    width: 60px;
    height: 60px;
    margin-right: 15px
}

.icon-content {
    padding-bottom: 20px
}

@media screen and (max-width: 992px) {
    .icon-content {
        width: 50%
    }
}
    </style>
</body>
</html>