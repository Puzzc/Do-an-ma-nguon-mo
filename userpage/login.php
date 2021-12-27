<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "layouts/header_user.php" ?>
    </head>

    <body>
        <!-- Top bar Start -->
        <?php include 'layouts/top_bar_user.php'; ?>
        <!-- Top bar End -->
        
        <!-- Nav Bar Start -->
        <?php  include "layouts/menu_user.php" ?> 
        <!-- Nav Bar End -->      
        
        <!-- Bottom Bar Start -->
        <?php include 'layouts/bottom_bar_user.php'; ?>
        <!-- Bottom Bar End --> 
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item active">Login & Register</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Login Start -->
        <form action="LoginController.php" method="GET">
        <div class="login">
            <div class="container-fluid">
                <div class="row">
                    
                        <div class="login-form">
                            <div class="row">                               
                                <div class="col-md-12">
                                    <label>E-mail</label>
                                    <div class="control-group">
                                    <div class="input-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required="required"  />
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="far fa-envelope"></i></div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-12">
                                    <label>Password</label>
                                    <div class="input-group">
                                        <input type="password" name="passwd" class="form-control" placeholder="Password" required="required" />
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fa fa-mobile-alt"></i></div>
                                        </div>
                                    </div>
                                </div>

                                          
                                <br/><br/>
                                <div class="col-md-6">
                                    <br/>
                                    <button class="btn custom-btn" type="submit">Sign Up</button>
                                </div>
                    </div>                                                                                                                                                    
                </div>
            </div>
        </div>
                               
        </form>
        <!-- Footer Start -->
        <?php include 'layouts/footer_user.php'; ?> 
        <!-- Footer End -->
        
        <!-- Footer Bottom Start -->
        <?php include 'layouts/footer_bottom_user.php' ; ?>
        <!-- Footer Bottom End -->       
        
        <!-- Back to Top -->
        <?php include 'layouts/back_to_top_user.php'; ?>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
