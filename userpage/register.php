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
                    <li class="breadcrumb-item active">Register</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Register Start -->
        <form action="RegisterController.php" method="POST">
        <div class="login">
            <div class="container-fluid">
                <div class="row">
                    
                        <div class="register-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Name</label>
                                    <div class="input-group">
                                        <input type="text" name="txt_name" class="form-control" placeholder="Name" required="required" />
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="far fa-user"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Gender</label>
                                    <div class="input-group" required="required">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="html" style="color:Blue">Nam </label><br>
                                        <input class="lbsRadio" type="radio" name="rad_gender" id="rad_nam" checked value="male" >
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="html" style="color:Blue">Nữ </label><br>
                                        <input class="lbsRadio" type="radio" name="rad_gender"  value="female">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Password</label>
                                    <div class="input-group">
                                        <input type="password" name="txt_password" class="form-control" placeholder="Password"required="required" />
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fa fa-mobile-alt"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>E-mail</label>
                                    <div class="control-group">
                                    <div class="input-group">
                                        <input type="email" name="txt_email" class="form-control" placeholder="Email"  required="required"/>
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="far fa-envelope"></i></div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Re-Password</label>
                                    <div class="input-group">
                                        <input type="password" name="txt_repassword" class="form-control" placeholder="Re-password"  required="required"/>
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fa fa-mobile-alt"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Country</label>
                                    <div class="input-group">

                                        <select class="form-control" name="del_city" required="required">

                                            <option value="0" disabled selected hidden>Province/City</option>
                                            <?php
                                            $arrTP = array("1" => "Hồ Chí Minh", "2" => "Cà Mau", "3" => "Bến Tre", "4" => "Đồng Tháp","5" => "Tiền Giang");
                                            foreach ($arrTP as $key => $value) {
                                                echo'<option value="' . $key . '">' . $value . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>                                
                                <div class="input-group">                                      
                                        <input class="lbsCheck" value="1"   type="checkbox" name="chk_dieuKhoan" id="chk_dieuKhoan" required="required">                                       
                                        <label for="html" style="color:blue">I agree to the terms </label>
                                    </div>
                                <div class="col-md-6">
                                    <button class="btn custom-btn" name="bnt_XuLy" value="login" type="submit">Sign Up</button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn custom-btn" name="bnt_XuLy" value="register" type="submit">Register</button>                                   
                                </div>
                    </div>                                                                                                                                                    
                </div>
            </div>
        </div>
       </form>
        <!-- Register End -->
        
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
