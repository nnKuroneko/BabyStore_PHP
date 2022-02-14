<!doctype html>
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
                                    <h3 class="text-uppercase"><strong>สมัครสมาชิก</strong></h3>
                                </div>






                                <form action="function/customer_signup.php" method="post">
                                    <div class="form-row">
                                        
                                        
                                        <div class="col mb-2">
                                            <label for="username">Username</label>
                                            <input type="text" name="username" class="form-control" placeholder="Username....." required maxlength="30">
                                        </div>
                                        <div class="col mb-2">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" class="form-control" placeholder="Password . . . . ." required maxlength="30">
                                        </div>
                                    </div>
                                     
                                     
                                   <div class="form-row">
                                        <div class="col">
                                            <label for="firstname">Firstname</label>
                                            <input type="text" name="firstname" class="form-control" placeholder="First Name....." id="firstname" required maxlength="100">
                                        </div>
                                        <div class="col">
                                            <label for="lastname">Lastname</label>
                                            <input type="text" name="lastname" class="form-control" placeholder="Last Name. . . . ." id="lastname" required maxlength="100">
                                        </div>
                                    </div>
                                     
                                    
                                     <div class="form-group last mb-3">

                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Email...." id="email" required maxlength="100">
                                    </div>
                                   
                                     <div class="form-group last mb-3">

                                        <label for="telephone">Telephone</label>
                                        <input type="text" name="telephone" class="form-control" placeholder="Telephone...." id="telephone" required maxlength="10">
                                    </div>
                                     
                                     <div class="form-group last mb-3">

                                        <label for="address">Address</label>
                                        <input type="text" name="address" class="form-control" placeholder="Address...." required id="address">
                                    </div>


                                    <div class="d-sm-flex mb-5 align-items-center">
                                       <!-- <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption">ยืนยันการสมัคร</span>
                                            <input type="checkbox" checked="checked"/>                                            
                                            <div class="control__indicator"></div>
                                        </label> -->
                                        <span class="ml-auto"><a href="login.php" class="forgot-pass">เข้าสู่ระบบ</a></span> 
                                        
                                    </div>


                                     <input type="submit" name="signup" value="Sign in" class="btn btn-block py-2 btn-primary">

                                    


                                    
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