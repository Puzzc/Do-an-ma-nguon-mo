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
                    <li class="breadcrumb-item active">Cart</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Cart Start -->
        <div class="cart-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cart-page-inner">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody class="align-middle">
                                        <tr>
                                            <td>
                                                <div class="img">
                                                    <a href="#"><img src="img/product-1.jpg" alt="Image"></a>
                                                    <p>BLACK TIGHT DRESS</p>
                                                </div>
                                            </td>
                                            <td>1$99</td>
                                            <td>
                                                <div class="qty">
                                                    <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                    <input type="text" value="1">
                                                    <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </td>
                                            <td>$199</td>
                                            <td><button onclick="if (!confirm('Are you sure you want to drop the item?')) { return false }"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="img">
                                                    <a href="#"><img src="img/product-2.jpg" alt="Image"></a>
                                                    <p>BLUE SKY BUTTON DRESS</p>
                                                </div>
                                            </td>
                                            <td>$249</td>
                                            <td>
                                                <div class="qty">
                                                    <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                    <input type="text" value="1">
                                                    <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </td>
                                            <td>$249</td>
                                            <td><button onclick="if (!confirm('Are you sure you want to drop the item?')) { return false }"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="img">
                                                    <a href="#"><img src="img/product-3.jpg" alt="Image"></a>
                                                    <p>SKY BLUE BRIDESMAID DRESSES</p>
                                                </div>
                                            </td>
                                            <td>$254</td>
                                            <td>
                                                <div class="qty">
                                                    <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                    <input type="text" value="1">
                                                    <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </td>
                                            <td>$254</td>
                                            <td><button onclick="if (!confirm('Are you sure you want to drop the item?')) { return false }"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="img">
                                                    <a href="#"><img src="img/product-4.jpg" alt="Image"></a>
                                                    <p>V-NECK SHIRT</p>
                                                </div>
                                            </td>
                                            <td>$499</td>
                                            <td>
                                                <div class="qty">
                                                    <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                    <input type="text" value="1">
                                                    <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </td>
                                            <td>$499</td>
                                            <td><button onclick="if (!confirm('Are you sure you want to drop the item?')) { return false }"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="img">
                                                    <a href="#"><img src="img/product-5.jpg" alt="Image"></a>
                                                    <p>BLUE SHIRT</p>
                                                </div>
                                            </td>
                                            <td>$99</td>
                                            <td>
                                                <div class="qty">
                                                    <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                    <input type="text" value="1">
                                                    <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </td>
                                            <td>$99</td>
                                            <td><button onclick="if (!confirm('Are you sure you want to drop the item?')) { return false }"><i class="fa fa-trash"></i></button></td>
                                        </tr>
                                         <?php
                                        if(isset($_SESSION["sp1"])){  
                                        echo'<tr>';
                                        echo '<td>';
                                                echo'<div class="img">';
                                                    echo'<a href="#"><img src="img/product-1.jpg" alt="Image"></a>';
                                                    echo'<p>Product Name</p>';
                                                    echo '</div>';
                                                    echo '</td>';
                                                    echo '<td>$99</td>';
                                                    echo '<td>';
                                                echo'<div class="qty">';
                                                    echo'<button class="btn-minus"><i class="fa fa-minus"></i></button>';
                                                    echo '<input type="text" value="1">';
                                                    echo '<button class="btn-plus"><i class="fa fa-plus"></i></button>';
                                                    echo '</div>';
                                            echo'</td>';
                                            echo '<td>$99</td>';
                                            echo '<td><a href="deletecard.php"><button><i class="fa fa-trash"></i></button><a></td>';
                                            echo '</tr>';
                                        }
                                            ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cart-page-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="coupon">
                                        <input type="text" placeholder="Coupon Code">
                                        <button>Apply Code</button>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="cart-summary">
                                        <div class="cart-content">
                                            <h1>Cart Summary</h1>
                                            <p>Sub Total<span>$99</span></p>
                                            <p>Shipping Cost<span>$1</span></p>
                                            <h2>Grand Total<span>$100</span></h2>
                                        </div>
                                        <div class="cart-btn">
                                            <button onclick="alert('<?php echo 'Update successful' ?>')">Update Cart</button>
                                            <button onclick="window.location.href='http://localhost/userpasge/checkout.php'">Checkout</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart End -->
        
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
