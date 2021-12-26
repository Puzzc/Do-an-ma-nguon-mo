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
                    <li class="breadcrumb-item"><a href="#">Blogs grid</a></li>
                    <li class="breadcrumb-item"><a href="#">New brand</a></li>
                    <li class="breadcrumb-item active"><a href="single.php">Blogs detail</a></li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
<!-- Blog Start -->
    <div class="blog">
        <div class="container">
            <div class="section-header text-center">
                <p> Blog</p>
                <h2>Latest From Blog</h2>
                <br/>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-1.jpg" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <h2 class="blog-title">Học 13 cách diện áo khoác dài của sao Âu Mỹ cho sành điệu khác kiểu mọi năm</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-user"></i> Juvia</p>
                                <p><i class="far fa-list-alt"></i> Fashion</p>
                                <p><i class="far fa-calendar-alt"></i> 01-November-2021</p>
                                <p><i class="far fa-comments"></i> 150</p>
                            </div>
                            <div class="blog-text">
                                <p>
                                    13 cách diện áo khoác dài của sao Âu Mỹ sẽ giúp style của chị em thêm sành điệu, phong cách.
                                </p>
                                <a class="btn custom-btn" href="single.php">Read More</a>
                                <br/>
                                <br/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-2.jpg" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <h2 class="blog-title">4 món đồ hack tuổi quá đà khiến nàng 30+ trông lạc quẻ, tốt nhất đừng mua!</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-user"></i> Phạm Thúy</p>
                                <p><i class="far fa-list-alt"></i> Fashion</p>
                                <p><i class="far fa-calendar-alt"></i> 10-october-2021</p>
                                <p><i class="far fa-comments"></i> 10</p>
                            </div>
                            <div class="blog-text">
                                <p>
                                    4 món thời trang không hợp tuổi 30+ này sẽ khiến phong cách của chị em mất điểm.
                                </p>
                                <a class="btn custom-btn" href="single.php">Read More</a>
                                <br/>
                                <br/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-3.jpg" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <h2 class="blog-title">Mix đồ với váy yếm mùa đông vừa ấm vừa xịn sò như gái Hàn</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-user"></i> Yuzu</p>
                                <p><i class="far fa-list-alt"></i> Fashion</p>
                                <p><i class="far fa-calendar-alt"></i> 30-june-2021</p>
                                <p><i class="far fa-comments"></i> 223</p>
                            </div>
                            <div class="blog-text">
                                <p>
                                    Đừng bỏ qua những công thức kết hợp váy yếm mang đến cho chị em diện mạo xinh tươi.
                                </p>
                                <a class="btn custom-btn" href="single.php">Read More</a>
                                <br/>
                                <br/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-4.jpg" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <h2 class="blog-title">4 lỗi diện đồ mùa đông khiến chị em đi đâu cũng bị chê 'kém sang'</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-user"></i>Trang Thu</p>
                                <p><i class="far fa-list-alt"></i> Fashion</p>
                                <p><i class="far fa-calendar-alt"></i>01-Jan-2021</p>
                                <p><i class="far fa-comments"></i>10</p>
                            </div>
                            <div class="blog-text">
                                <p>
                                    4 lỗi diện đồ mùa đông này là những điều chị em phải tránh tiệt, nếu không muốn phong cách bị đánh giá thấp.
                                </p>
                                <a class="btn custom-btn" href="single.php">Read More</a>
                                <br/>
                                <br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
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
