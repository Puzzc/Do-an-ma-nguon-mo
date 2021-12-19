 <?php
if(!isset($_SESSION)){
    session_start();
}
?>       
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="index.php" class="nav-item nav-link">Home</a>
                            <a href="product-list.php" class="nav-item nav-link">Products</a>
                            <a href="product-detail.php" class="nav-item nav-link">Product Detail</a>
                            <a href="cart.php" class="nav-item nav-link">Cart</a>
                            <a href="checkout.php" class="nav-item nav-link">Checkout</a>
                            <a href="my-account.php" class="nav-item nav-link">My Account</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">More Pages</a>
                                <div class="dropdown-menu">
                                    <a href="wishlist.php" class="dropdown-item">Wishlist</a>
                                    <a href="login.php" class="dropdown-item">Login</a>
                                    <a href="register.php" class="dropdown-item">Register</a>
                                    <a href="contact.php" class="dropdown-item">Contact Us</a>
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Blog</a>
                                <div class="dropdown-menu">
                                    <a href="blogs.php" class="dropdown-item">Blogs grid</a>
                                    <a href="blogs.php" class="dropdown-item">New brand</a>
                                    <a href="single.php" class="dropdown-item">Blogs detail</a>
                                </div>
                            </div>
                        </div>
                        
                <?php
                if(!isset($_SESSION["email"])){
                    echo '<a href="login.php" class="nav-item nav-link">Login</a>';
                }else{
                    echo '<div class="nav-item dropdown">';
                    echo '<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Wellcome'.$_SESSION["email"].'</a>';
                    echo '<div class="dropdown-menu">';
                    echo '<a href="logout.php" class="dropdown-item">Logout</a>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
                        </div>
                    </div>
                </nav>
            </div>
        </div>