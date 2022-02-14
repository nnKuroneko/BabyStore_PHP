<!doctype html>
<?php
include('db/connect.php');
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.min_1.css" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min_1.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style_1.css">

    <title>Baby Store - ลืมรหัสผ่าน</title>
  </head>
  <body>
  

  <div class="d-md-flex half">
    <div class="bg" style="background-image: url(images/bg_3.jfif);"></div>
    <div class="contents">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="form-block mx-auto">
              <div class="text-center mb-5">
                <h3 class="text-uppercase"><strong>ลืมรหัสผ่าน</strong></h3>
              </div>

                
                <form id="reset" action="function/password_forget.php" method="post">
                <div class="form-group first">
                    
                  <label for="email">อีเมลล์ของคุณ</label>
                  <input type="text" name="email" class="form-control" placeholder="Email...." required id="email">
                  
                </div>
                <div class="form-group last mb-3">
                    
                  <label for="password">รหัสผ่าน</label>
                  <input type="password" name="resetpassword" class="form-control" placeholder="Password...." required maxlength="30" id="password">
                  
                </div>
                
                <div class="form-group last mb-3">
                    
                  <label for="password">ยืนยันรหัสผ่าน</label>
                  <input type="password" name="cresetpassword" class="form-control" placeholder="Password...." required maxlength="30" id="password">
                  
                </div>
                
                   <div class="d-sm-flex mb-5 align-items-center">
                  <label><span class="caption"><a href="register.php" class="forgot-pass">สมัครสมาชิก</a></span>
                  </label>
                  <span class="ml-auto"><a href="login.php" class="forgot-pass">ล็อคอิน</a></span> 
                  
                </div> 

                <input type="submit" value="ยืนยัน" class="btn btn-block py-2 btn-primary">

              </form>
                
              
            
                
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min_1.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>