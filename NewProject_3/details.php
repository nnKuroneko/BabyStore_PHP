<?php
include("function/session.php");
include("db/connect.php");
include("function/cash.php");
include("function/paypal.php");
?>

<?php
include("function/alert.php");
?>
<!DOCTYPE html>
<!--
โค็ตส่งรีวิว


-->
<html>


    <head>
        <meta charset="utf-8">
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

    <?php
    $id = (int) $_SESSION['id'];

    $query = mysqli_query($mysqil, "SELECT * FROM useracc WHERE userid = '$id' ") or die(mysqli_error($mysqil));
    $fetch = mysqli_fetch_array($query);
    ?>
    <body>


        <?php
        include("HeadBarMenu_1.php");
        ?>

        <main>

            <div class="container py-4 my-4 mx-auto d-flex flex-column">
            
                
                <?php
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $query = mysqli_query($mysqil, "SELECT * FROM product WHERE product_id = '$id' ");
                    $row = mysqli_fetch_array($query);
                    $price = $row['product_price'];
                    ?>
                    <div class="header">
                        <div class="row r1">

                            <div class="col-md-9 abc">

                                <h1><?php echo $row['product_name'] ?></h1>
                            </div>
                            <div class="col-md-3 text-right pqr">
                                
                             
                               <?php
          	
					
                                    $query11 = mysqli_query($mysqil, "SELECT * FROM productreviews WHERE product_id= '$id' ") or die(mysqli_error());
                                    
                                    $total = 0;
					while($fetch11 = mysqli_fetch_array($query11))
						{
						 $subtotal = $fetch11['value'];                                                //$subtotal = $total + $srow['product_price'];
                                                 $total = $total += $subtotal;
				}
               //echo "".$total."  บาท";
                echo "<i class='fa fa-star'></i> ความพึงพอใจ <b>".number_format($total)."</b>  คะแนน";
                // echo "<h3>&#8377; ".number_format_short($total, 2)."</h3>";
     
              ?>
                                
                                
                            </div>
                            <p class="text-right para">
                            
                            <?php
  

        $sql = "SELECT * FROM productreviews WHERE product_id= '$id' ";
        //. "ORDER BY tbitem.id DESC"
//. "ORDER BY tbitem.id DESC";
        
        $result = $mysqil->query($sql);
        echo 'รีวิวทั้งหมด ' . $result->num_rows . ' ความคิดเห็น';
        
        ?>
                            
                            
                            
                            </p> 
                        </div>
                    </div>

                    <div class="container dark-grey-text mt-5">

                        <!--Grid row-->
                        <div class="row wow fadeIn">

                            <!--Grid column-->
                            <div class="col-md-6 mb-4">
                                <style>
                                    [flower]     
                                    {border: 1px solid gray; } 
                                </style>
                                <img src="photo/<?php echo $row['product_image']; ?>" width = "400px" height = "300px" flower width='10' height='40' class="img-fluid" alt="">

                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6 mb-4">

                                <!--Content-->
                                <div class="p-4">

                                    <div class="mb-3">
                                        <a href="">
                                            <span class="genric-btn warning small"><?php echo $row['product_type'] ?></span>
                                        </a>
                                        <a href="">
                                            <span class="genric-btn info small">สินค้าใหม่</span>
                                        </a>
                                        <a href="">
                                            <span class="genric-btn danger small">ขายดี</span>
                                        </a>
                                    </div>

                                    <p class="lead">
                                        
                                        <span>ราคา <?php echo number_format($price) ?> บาท</span>
                                    </p>

                                    <p class="lead font-weight-bold">รายละเอียดสินค้า</p>

                                    <p><?php echo $row['product_details'] ?>.</p>

                                    <p class="lead font-weight-bold">แบรนด์</p>
                                    <p><?php echo $row['brand'] ?>.</p>



                                    <?php
                                    echo "<a href='cart.php?id=" . $id . "&action=add'>"
                                    . "<input type='submit' class='btn btn-primary btn-md my-0 p' name='add' value='ใส่ตะกร้า'>"
                                    . "</a>  "
                                    ?>


                                </div>
                                <!--Content-->

                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->



                        <!--Grid row
                        <div class="row d-flex justify-content-center wow fadeIn">
                  
                         
                          <div class="col-md-6 text-center">
                  
                            <h4 class="my-4 h4">ข้อมูลเพิ่มเติม</h4>
                  
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus suscipit modi sapiente illo soluta odit
                              voluptates,
                              quibusdam officia. Neque quibusdam quas a quis porro? Molestias illo neque eum in laborum.</p>
                  
                          </div>
                         
                  
                        </div>
                      
                  
                        
                        <div class="row wow fadeIn">
                            
                        
                          <div class="col-lg-4 col-md-12 mb-4">
                  
                            <img src="photo/<?php echo $row['product_image']; ?>" width = "500px" height = "150px" flower width='10' height='40' class="img-fluid" alt="">
                  
                          </div>
                         
                          <div class="col-lg-4 col-md-6 mb-4">
                  
                             <img src="photo/<?php echo $row['product_image']; ?>" width = "500px" height = "150px" class="img-fluid" alt="">
                  
                          </div>
                        
                          <div class="col-lg-4 col-md-6 mb-4">
                  
                             <img src="photo/<?php echo $row['product_image']; ?>" width = "500px" height = "150px" class="img-fluid" alt="">
                  
                          </div>
                       
                  
                        </div>
                       
                  
                      </div>
                            
                                  
                                  
                                  
                      <div class="footer d-flex flex-column mt-5">
                          <div class="row r4">
                              
                              <div class="col-md-2 myt "><a href="#des" id="des" >Description</a></div>
                              <div class="col-md-2 myt "><a href="#re" id="re" >Review</a></div>
                              
                             
                          </div>
                      </div>  --> 

                        
                        
                        
                        <div class="properties__button">
                            <!--Nav Button  -->
                            <nav>                                                                                                
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">

                                    <a class="nav-item nav-link active" id="des-tab" data-toggle="tab" href="#des" role="tab" aria-controls="des" aria-selected="true"><b>รีวิวสินค้าจากลูกค้า</b></a>
                                    <a class="nav-item nav-link" id="re-tab" data-toggle="tab" href="#re" role="tab" aria-controls="re" aria-selected="false"><b>ให้ความคิดเห็น</b></a>

                                </div>
                            </nav>
                            <!--End Nav Button  -->
                        </div>

                        
                        
                        
                        <div class="tab-content" id="nav-tabContent">
                            <!-- card one -->
                            <div class="tab-pane fade show active" id="des" role="tabpanel" aria-labelledby="des-tab">
                                <br><br>
                                 <center> <h2 class="title">Customer Reviews</h2> </center>
                                    
                                    <div class="container d-flex justify-content-center mt-100 mb-100">
                                        
        <div class="col-md-12">
            <div class="card">
    
             <div class="card-body">
                    <h4 class="card-title">คอมเม้นรีวิวสินค้า</h4>
                    <h6 class="card-subtitle">ขอขอบคุณทุกคอมเม้น คำรีวิว / ติชม มีปัญหาติดต่อ  <a href="contact_1.php"><b>แจ้งปัญหา</b></a></h6>
                </div>
                
                            <?php
                                        $qry = mysqli_query($mysqil, "select * from productreviews where product_id='$id'");
                                        while ($rvw = mysqli_fetch_array($qry)) {
                                            $date = $rvw['review_date'];
                                             
                            ?>
                
                <div class="comment-widgets m-b-20">
          
                    <div class="d-flex flex-row comment-row ">
                        <div class="p-2"><span class="round"><img src="/NewProject_3/profile/<?php echo $fetch['user_profile']?>" alt="user" width="50"></span></div>
                        <div class="comment-text active w-100">
                            <h5><?php echo $fetch['username'] ?> <span class="label label-success">Guest</span> <span class="action-icons active"></span></h5>
                            <div class="comment-footer"> <span class="date">
                                    <?php echo 'คุณภาพ '.htmlentities($rvw['qty']).' คะแนน'; ?> | <?php echo 'ราคา '.htmlentities($rvw['price']).' คะแนน'; ?> | <?php echo 'ความพอใจ '.htmlentities($rvw['value']).' คะแนน'; ?></span>  </div>                           
                            <br>
                            <p class="m-b-5 m-t-10"><?php echo htmlentities($rvw['review']); ?></p>                         
                            <p class="m-b-5 m-t-10"><?php echo $date = date("d M y"); ?></p>
                          
                        </div>
                    </div>
                             
                </div>
                
                <?php } ?> 
                
            </div>
        </div>
    
</div>
 
                            </div>


                            
                            <!-- หน้ากรอกรีวิว-->

                            
                            <div class="tab-pane fade" id="re" role="tabpanel" aria-labelledby="re-tab">

                                    <form role="form" class="cnt-form" name="review" method="post">
                                        <div class="product-add-review">
                                            <br>
                                            <h4 class="title"><center>Review & Comment Product</center></h4>
                                            <div class="review-table">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">	
                                                        <thead>
                                                            <tr>
                                                                <th class="cell-label">&nbsp;</th>
                                                                <th>1 คะแนน</th>
                                                                <th>2 คะแนน</th>
                                                                <th>3 คะแนน</th>
                                                                <th>4 คะแนน</th>
                                                                <th>5 คะแนน</th>
                                                            </tr>
                                                        </thead>	
                                                        <tbody>
                                                            <tr>
                                                                <td class="cell-label">คุณภาพ</td>
                                                                <td><input type="radio" name="qty" class="radio" value="1"></td>
                                                                <td><input type="radio" name="qty" class="radio" value="2"></td>
                                                                <td><input type="radio" name="qty" class="radio" value="3"></td>
                                                                <td><input type="radio" name="qty" class="radio" value="4"></td>
                                                                <td><input type="radio" name="qty" class="radio" value="5"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="cell-label">ราคา</td>
                                                                <td><input type="radio" name="price" class="radio" value="1"></td>
                                                                <td><input type="radio" name="price" class="radio" value="2"></td>
                                                                <td><input type="radio" name="price" class="radio" value="3"></td>
                                                                <td><input type="radio" name="price" class="radio" value="4"></td>
                                                                <td><input type="radio" name="price" class="radio" value="5"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="cell-label">ความพอใจ</td>
                                                                <td><input type="radio" name="value" class="radio" value="1"></td>
                                                                <td><input type="radio" name="value" class="radio" value="2"></td>
                                                                <td><input type="radio" name="value" class="radio" value="3"></td>
                                                                <td><input type="radio" name="value" class="radio" value="4"></td>
                                                                <td><input type="radio" name="value" class="radio" value="5"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table><!-- /.table .table-bordered -->
                                                </div><!-- /.table-responsive -->
                                            </div><!-- /.review-table -->

                                            <div class="review-form">
                                                <div class="form-container">


                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputName">ชื่อของคุณ <span class="astk">*</span></label>
                                                                <input type="text" class="form-control txt" id="exampleInputName" placeholder="" name="name" required="required">
                                                            </div><!-- /.form-group -->
                                                            <div class="form-group">
                                                                <label for="exampleInputSummary">คำติชม <span class="astk">*</span></label>
                                                                <input type="text" class="form-control txt" id="exampleInputSummary" placeholder="" name="summary" required="required">
                                                            </div><!-- /.form-group -->
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputReview">รีวิวและความคิดเห็น <span class="astk">*</span></label>

                                                                <textarea class="form-control txt txt-review" id="exampleInputReview" rows="4" placeholder="" name="review" required="required"></textarea>
                                                            </div><!-- /.form-group -->
                                                        </div>
                                                    </div><!-- /.row -->

                                                    <div class="action text-right">
                                                        <button name="submit" class="btn btn-primary btn-upper">ยืนยัน</button>
                                                    </div><!-- /.action -->

                                                    </form><!-- /.cnt-form -->
                                                     <?php                   
                          
if(isset($_POST['submit']))
{
	$qty=$_POST['qty'];
	$price=$_POST['price'];
	$value=$_POST['value'];
	$name=$_POST['name'];
	$summary=$_POST['summary'];
	$review=$_POST['review'];
	mysqli_query($mysqil,"insert into productreviews(product_id,qty,price,value,name,summary,review) values('$id','$qty','$price','$value','$name','$summary','$review')");
        
        
         echo '      <script>
       setTimeout(function() {
        swal({
            title: "เสร็จสิ้น",
            text: "แสดงความคิดเห็นเรียบร้อย",
            type: "success"
        }, function() {
            window.location = ""; //หน้าที่ต้องการให้กระโดดไป
        });
    }, 1000);
</script>';
}

?> 
                                                </div><!-- /.form-container -->
                                            </div><!-- /.review-form -->

                                        </div><!-- /.product-add-review -->	
                                 
                      
                            </div>
                            

                        </div>


                    </div>


            </main>

            <?php
            include("FooferBarMenu_1.php");
            ?>

            <style type="text/css">


                .abc {
                    padding-left: 40px
                }

                .pqr {
                    padding-right: 70px;
                    padding-top: 14px
                }

                .para {
                    float: right;
                    margin-right: 0;
                    padding-left: 80%;
                    top: 0
                }

                .fa-star {
                    color: yellow
                }

                li {
                    list-style: none;

                    color: #000
                }

                .col-md-2 {
                    padding-bottom: 20px;
                    font-weight: bold
                }

                .col-md-2 a {
                    text-decoration: none;
                    color: #000
                }

                .col-md-2.mio {
                    font-size: 12px;
                    padding-top: 7px
                }


                .r4 {
                    padding-left: 25px
                }



                @media screen and (max-width: 620px) {
                    .container {
                        width: 98%;
                        display: flex;
                        flex-flow: column;
                        text-align: center
                    }

                    .des::after {
                        content: '.';
                        font-size: 0;
                        display: block;
                        border-radius: 20px;
                        height: 6px;
                        width: 35%;
                        background: yellow;
                        margin: 10px auto
                    }

                    .pqr {
                        text-align: center;
                        margin: 0 30px
                    }

                    .para {
                        text-align: center;
                        padding-left: 90px;
                        padding-top: 10px
                    }

                    .klo {
                        display: flex;
                        text-align: center;
                        margin: 0 auto;
                        margin-right: 40px
                    }
                }
                
               

body {
    background-color: white;
    font-family: 'Calibri', sans-serif !important
}

.card-no-border .card {
    border: 0px;
    border-radius: 4px;
    -webkit-box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.05);
    box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.05)
}

.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem
}

.comment-widgets .comment-row:hover {
    background: rgba(0, 0, 0, 0.02);
    cursor: pointer
}

.comment-widgets .comment-row {
    border-bottom: 1px solid rgba(120, 130, 140, 0.13);
    padding: 15px
}

.comment-text:hover {
    visibility: hidden
}

.comment-text:hover {
    visibility: visible
}

.label {
    padding: 3px 10px;
    line-height: 13px;
    color: #ffffff;
    font-weight: 400;
    border-radius: 4px;
    font-size: 75%
}

.round img {
    border-radius: 100%
}

.label-info {
    background-color: #1976d2
}

.label-success {
    background-color: green
}

.label-danger {
    background-color: #ef5350
}

.action-icons a {
    padding-left: 7px;
    vertical-align: middle;
    color: #99abb4
}

.action-icons a:hover {
    color: #1976d2
}

.mt-100 {
    margin-top: 100px
}

.mb-100 {
    margin-bottom: 100px
}
                
            </style>
            <script type="text/javascript">

            </script>


        </body>

    </html>









    <?php
}
?>