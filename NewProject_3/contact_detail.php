 <?php
session_start();
include('db/connect.php');
$oid=intval($_GET['id']);
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
$ret = mysqli_query($mysqil,"SELECT * FROM contacts WHERE contact_id='$oid'");
$num=mysqli_num_rows($ret);

if($num>0)
{
while($row=mysqli_fetch_array($ret))
      {
    $o_stat = $row['contact_stat'];
     ?>
        
        <div class="row d-flex justify-content-between px-3 top">
            <div class="d-flex">
                <h5>Contact <span class="text-primary font-weight-bold"># <?php echo $oid;?></span></h5>
            </div>
            <div class="d-flex flex-column text-sm-right">
                <p class="mb-0">วัน/เดือน/ปี <span><?php echo $row['contact_date'];?></span></p>
                <p>หัวข้อ <span class="font-weight-bold"><?php echo $row['subject'];?></span></p>

                
            </div>
        </div> <!-- Add class 'active' to progress -->       
        <div class="row d-flex justify-content-center">
            <div class="col-12">
                รายละเอียด <br>
                ข้อความ : <?php echo $row['message'];?>
                <br>
                <br>
   
      <?php 
        if($o_stat == 'Process'){
            echo '<br>
                สถานะ : กำลังดำเนินการ 
        ';
        }
        
        ?>
                                 

        <?php 
        if($o_stat == 'Cancelled'){
            echo '<center>การแจ้งปัญหาถูกยกเลิกนอกจากได้รับข้อมูลที่ไม่เพียงพอ'
            . 'โปรดติดต่อเราโดยการเลือกที่ <a href="contact_1.php"><b>แจ้งปัญหา</b></a></center>';

        }
        
        ?>  
          
            </div>
        </div>
        
       
        
       <?php } }
       else{
   ?>
   ไม่พบข้อมูล
    <?php  }
$st='Receive';
   $rt = mysqli_query($mysqil,"SELECT * FROM contacts WHERE contact_id='$oid'");
     while($num=mysqli_fetch_array($rt))
     {
     $currrentSt=$num['contact_stat'];
   }
     if($st==$currrentSt)
     { ?>
   <center>
       สถานะ : ได้รับแจ้งปัญหาของคุณเรียบร้อยแล้ว เราจะดำเนินการให้เร็วที่สุด
       
   </center>
   
   <?php } 
 
  ?>
      
  
        
        
        
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