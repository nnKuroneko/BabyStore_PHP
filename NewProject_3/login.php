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

    <title>Baby Store - เข้าสู่ระบบ</title>
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
                <h3 class="text-uppercase"><strong>เข้าสู่ระบบ</strong></h3>
              </div>
                
                
                
                
                
                
             <form id="login" action="function/login.php" method="post">
                <div class="form-group first">
                    
                  <label for="username">Username</label>
                  <input type="text" name="username" class="form-control" placeholder="Username...." required id="username">
                  
                </div>
                <div class="form-group last mb-3">
                    
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" placeholder="Password...." required id="password">
                  
                </div>
                
                  
                  
                <div class="d-sm-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption">
                          <a href="register.php" class="forgot-pass">สมัครสมาชิก</a>
                      </span>
               
                  </label>
                  <span class="ml-auto"><a href="password_forget.php" class="forgot-pass">ลืมรหัสผ่าน</a></span> 
                  
                </div>


                <input type="submit" value="ล็อคอิน" class="btn btn-block py-2 btn-primary">
<!-- 
                <span class="text-center my-3 d-block">or</span>
                
              
                <div class="">
                <a href="#" class="btn btn-block py-2 btn-facebook">
                  <span class="icon-facebook mr-3"></span> Login with facebook
                </a>
                <a href="#" class="btn btn-block py-2 btn-google">
                    <span class="icon-google mr-3"></span> Login with Google
                </a>
                </div> -->
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