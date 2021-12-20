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
                    <li class="breadcrumb-item active">Checkout</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Checkout Start -->
        <form action="checkoutController.php" method="POST">
        <div class="checkout">
            <div class="container-fluid"> 
                <div class="row">
                    <div class="col-lg-8">
                        <div class="checkout-inner">
                            <div class="billing-address">
                                <h2>Billing Address</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>First Name</label>
                                        <input class="form-control" type="text" name="checkout_f_name" placeholder="First Name" required="required">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Last Name</label>
                                        <input class="form-control" type="text" name="checkout_l_name" placeholder="Last Name" required="required">
                                    </div>
                                    <div class="col-md-6">
                                        <label>E-mail</label>
                                        <input class="form-control" type="text" name="checkout_email" placeholder="E-mail" required="required">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Mobile No</label>
                                        <input class="form-control" id="checkout_mobile" type="text" name="checkout_mobile" placeholder="Mobile No" required="required">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Address</label>
                                        <input class="form-control" type="text" name="checkout_address" placeholder="Address" required="required">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Province/City</label>
                                        <select class="custom-select" name="checkout_city">
                                            <option selected >Hồ Chí Minh</option>
                                            <option >Cà Mau</option>
                                            <option>Bến Tre</option>
                                            <option>Đồng Tháp</option>
                                            <option>Tiền Giang</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label>City</label>
                                        <input class="form-control" type="text" name="checkout_province" placeholder="province" required="required">
                                    </div>
                                    <div class="col-md-6">
                                        <label>State</label>
                                        <input class="form-control" type="text" name="checkout_state" placeholder="State" required="required">
                                    </div>
                                    <div class="col-md-6">
                                        <label>ZIP Code</label>
                                        <input class="form-control" type="text" name="checkout_code" placeholder="ZIP Code" required="required">
                                    </div>
                                    <div class="col-md-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="newaccount">
                                            <label class="custom-control-label" for="newaccount">Create an account</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="shipto">
                                            <label class="custom-control-label" for="shipto">Ship to different address</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="shipping-address">
                                <h2>Shipping Address</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>First Name</label>
                                        <input class="form-control" type="text" placeholder="First Name">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Last Name"</label>
                                        <input class="form-control" type="text" placeholder="Last Name">
                                    </div>
                                    <div class="col-md-6">
                                        <label>E-mail</label>
                                        <input class="form-control" type="text" placeholder="E-mail" >
                                    </div>
                                    <div class="col-md-6">
                                        <label>Mobile No</label>
                                        <input class="form-control" type="text" placeholder="Mobile No" >
                                    </div>
                                    <div class="col-md-12">
                                        <label>Address</label>
                                        <input class="form-control" type="text" placeholder="Address">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Province/City</label>
                                        <select class="custom-select">
                                            <option selected>Hồ Chí Minh</option>
                                            <option>Cà Mau</option>
                                            <option>Bến Tre</option>
                                            <option>Đồng Tháp</option>
                                            <option>Tiền Giang</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Province</label>
                                        <input class="form-control" type="text" placeholder="address">
                                    </div>
                                    <div class="col-md-6">
                                        <label>State</label>
                                        <input class="form-control" type="text" placeholder="State">
                                    </div>
                                    <div class="col-md-6">
                                        <label>ZIP Code</label>
                                        <input class="form-control" type="text" placeholder="ZIP Code">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="checkout-inner">
                            <div class="checkout-summary">
                                <h1>Cart Total</h1>
                                <p>Product Name<span>$99</span></p>
                                <p class="sub-total">Sub Total<span>$99</span></p>
                                <p class="ship-cost">Shipping Cost<span>$1</span></p>
                                <h2>Grand Total<span>$100</span></h2>
                            </div>

                            <div class="checkout-payment">
                                <div class="payment-methods">
                                    <h1>Payment Methods</h1>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-1" name="payment">
                                            <label class="custom-control-label" for="payment-1">Paypal</label>
                                        </div>
                                        <div class="payment-content" id="payment-1-show">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-2" name="payment">
                                            <label class="custom-control-label" for="payment-2">Payoneer</label>
                                        </div>
                                        <div class="payment-content" id="payment-2-show">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-3" name="payment">
                                            <label class="custom-control-label" for="payment-3">Check Payment</label>
                                        </div>
                                        <div class="payment-content" id="payment-3-show">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-4" name="payment">
                                            <label class="custom-control-label" for="payment-4">Direct Bank Transfer</label>
                                        </div>
                                        <div class="payment-content" id="payment-4-show">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-5" name="payment">
                                            <label class="custom-control-label" for="payment-5">Cash on Delivery</label>
                                        </div>
                                        <div class="payment-content" id="payment-5-show">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout-btn">
                                    <button  type="submit" name="btn_checkout">Place Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
        <!-- Checkout End -->
        
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
        
        <script>
            $(document).ready(function(){
                $("#checkout_mobile").click(function(){
                //$('form').on('click','.checkout-btn',function(){
                var number=$('#checkout_mobile').val();
                var filter=/((09|03|07|08|05)+([0-9]{8})\b)/g;
                if(filter.test(number)==false){
                    
                    alert("invalid phone number!!!!");
                }
                else{
                    alert("valid phone number");
                }
            });
        });
        
        </script>
    </body>
</html>
