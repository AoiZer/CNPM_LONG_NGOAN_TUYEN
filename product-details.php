
<?php 
/*include "database.php";*/
include "class/sell_class.php";
/*include "product_class.php"*/
$db = new database;
$db ->connectDB();
$users = $db->select("SELECT * FROM tbl_user WHERE user_status = 1");
if (empty($users)) {
 $a=0;    
} else {
foreach ($users as $dt) {
    $users_id = $dt['user_id'];
 /*   echo $user_id;*/
    
}}

 ?>

 <?PHP
$id = $_GET["ID_product"];
$product = $db->select("SELECT * FROM tbl_product WHERE product_id = $id");
foreach ($product as $dt) {
    $product_name = $dt['product_name'];
    
}
?>

<?php 
$sell = new sell;
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $user_id = $users_id;
    $product_id = $id;
    $product_name = $product_name;
    $product_num = $_POST['num'];
    $insert_sell = $sell ->insert_sell($user_id,$product_id,$product_name,$product_num);}
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Product Details | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body>
    <header id="header">
        <!--header-->
        <div class="header_top">
            <!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="">Mua sắm thả ga</a></li>
                                <li><a href="">không lo về giá</a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!--/header_top-->

        <div class="header-middle">
            <!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="logo pull-left">
                            <a href="index.php"><img src="uploads/logo.png" alt="" />
                            </a>
                        </div>
                    </div>

                    <?php 
                    if (empty($users)) {
                     ?>
                    <div class="col-sm-10">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li class="search_box">
                                    <input type="text" placeholder="Search" />
                                </li>
                                <li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Giỏ hàng </a></li>
                                <li><a href="login.php"><i class="fa fa-lock"></i> Đăng nhập</a></li>
                            </ul>
                        </div>
                    </div>
                    <?php 
                    }
                    else {
                     ?>                    
                     <div class="col-sm-10">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li class="search_box">
                                    <input type="text" placeholder="Search" />
                                </li>
                                <li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Giỏ hàng </a></li>
                                <?php 
                                foreach ($users as $dt) {
                                    $link = "logout.php?users_id=$users_id";
                                 ?>
                                <li><a href=""><i class="user-circle-o"></i> <?php echo $dt['user_info'] ?> </a></li>                                
                                <a href="<?php echo $link ?>">
                                <button type="submit" class="btn btn-default" style="height: 20px ; width: 60px; padding-right: 75px; text-align: center; padding-bottom: 20px;" >Đăng xuất</button>
                                </a>
                                <?php 
                                }
                                 ?>

                            </ul>
                        </div>
                    </div>
                    <?php 
                    }
                     ?>

                </div>
            </div>
        </div>
        <!--/header-middle-->

        <div class="header-bottom">
            <!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="index.php">Trang chủ</a></li>
                                <li class="dropdown"><a href="index.php">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                       <li><a href="shop.php?id=0">Sản phẩm</a></li>
                                        <li><a href="top-sale.php?id=0" class="active">Sản phẩm bán chạy</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact-us.html">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-bottom-->
    </header>
    <!--/header-->

    <section>
        <div class="container">
            <div class="row">


                <div class="col-sm-12 left-sidebar">
                    <div class="product-details">
                        <!--product-details-->
                        <?php 
                        $tbl = "tbl_product";
                        $tbl2 = "tbl_product_img_more";
                        $data = $db->select("SELECT * FROM tbl_product WHERE product_id = $id");
                        $data2 = $db->select("SELECT * FROM tbl_product_img_more WHERE product_id = $id");
                         ?> 
                        <?php  
                            foreach($data as $dt){
                                
                        ?>
                        <div class="col-sm-4">
                            <div class="view-product">
                                <img src="./uploads/<?php echo $dt['product_img']; ?>" alt="" />
                                <h3>ZOOM</h3>
                            </div>
                            <div id="similar-product" class="carousel slide" data-ride="carousel">

                                <!-- Wrapper for slides -->
                               
                                <div class="carousel-inner">                                
                                    <div class="item active">
                                        <?php  
                                        foreach($data2 as $dt2){
                                        ?>
                                        <img src="./uploads/<?php echo $dt2['product_img_more']; ?>" style="width: 120px; height: 120px;" alt=""/>
                                         <?php 
                                        }
                                         ?> 
                                    </div>  

                                </div>
                                
                                <!-- Controls -->
                                <a class="left item-control" href="#similar-product" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="right item-control" href="#similar-product" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>

                        </div>
                        <div class="col-sm-8">
                            <div class="product-information">
                                <!--/product-information-->
                                <!-- <img src="images/product-details/new.jpg" class="newarrival" alt="" /> -->
                                <h2><?php echo $dt['product_name'] ?></h2>                                
                                <p>Giá: <?php echo number_format($dt['product_price'],0,'.',',')?> VNĐ</p>

                                <span>
                                <span> <img src="images/product-details/rating.png" alt="" /></span>
                                <span>| 1k Đánh giá</span>
                                <span>| <?php echo $dt['product_sale'] ?> ĐÃ BÁN!</span>

                                </span>

                                <p><b>Tình trang:</b> Mới</p>
                                <form action="" method="POST">
                                <label>Số lượng:</label>
                                <input required name="num" type="number"/>                           
                                <button type="submit" class="btn btn-fefault cart">Thêm vào giỏ hàng
								</button>
                                <!-- <button type="button" class="btn btn-fefault cart">
                                    Mua ngay
                                </button> -->
                                </form>
<!--                                 <a href=""><img src="images/product-details/share.png" class="share img-responsive" alt="" /></a>
 -->                            </div>
                            <!--/product-information-->
                        </div>
                        <?php 
                        }
                         ?>
                    </div>
                    <!--/product-details-->
<style>input[type='number']{
    width: 80px;
} 
    
</style>
                    <div class="category-tab shop-details-tab">
                        <!--category-tab-->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li><a href="#details" data-toggle="tab">Chi tiết sản phẩm</a></li>
                                <li class="active"><a href="#reviews" data-toggle="tab">Đánh giá (5)</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <table class="tab-pane fade" id="details">
                                <tbody>
                                    <tr>
                                        <td>Màn hình</td>
                                        <td><span>6.7", Super Retina XDR, OLED, 2778 x 1284 Pixel</span></td>
                                    </tr>
                                    <tr>
                                        <td>Camera sau</td>
                                        <td><span>12.0 MP + 12.0 MP + 12.0 MP</span></td>
                                    </tr>
                                    <tr>
                                        <td>Camera Selfie</td>
                                        <td><span>12.0 MP</span></td>
                                    </tr>
                                    <tr>
                                        <td>RAM</td>
                                        <td><span>6 GB</span></td>
                                    </tr>
                                    <tr>
                                        <td>Bộ nhớ trong</td>
                                        <td><span>128 GB</span></td>
                                    </tr>
                                </tbody>
                            </table>



                            

                            <div class="tab-pane fade active in" id="reviews">
                                <div class="col-sm-12">
                                    <ul>
                                        <li><a href=""><i class="fa fa-user"></i>Tinhle</a></li>
                                        <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                                        <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
                                    </ul>
                                    <p>Sản phẩm tốt</b>
                                    </p>

                                    <form action="#">

                                        <textarea name=""></textarea>
                                        <b>Rating: </b>

                                        <img src="images/product-details/rating.png" alt="" />
                                        <button type="button" class="btn btn-fefault pull-right">
											Submit
										</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--/category-tab-->

                    <div class="recommended_items">
                        <!--recommended_items-->
                        <h2 class="title text-center">Sản phẩm tương tự</h2>

                        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                <?php 
                                $tbl = "tbl_product";
                                $data = $db->select("SELECT tbl_product.*, tbl_cartegory.cartegory_name FROM tbl_product INNER JOIN tbl_cartegory ON tbl_product.cartegory_id = tbl_cartegory.cartegory_id ORDER BY tbl_product.product_id DESC LIMIT 0,3");
                                 ?> 
                                <?php  
                                    foreach($data as $dt){
                                ?>     
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                <?php 
                                                $id = $dt['product_id'];
                                                $link = "product-details.php?ID_product=$id";
                                                 ?>
                                                <a href="<?php echo $link ?>"><img src="./uploads/<?php echo $dt['product_img']; ?>" style="width: 150px; height: 150px;" alt="" /></a>
                                                <h2><?php echo $dt['product_name'] ?></h2>
                                                <p><?php echo $dt['product_price'] ?></p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php 
                                }
                                ?>
                                </div>
                                <div class="item">
                                <?php 
                                $tbl = "tbl_product";
                                $data = $db->select("SELECT tbl_product.*, tbl_cartegory.cartegory_name FROM tbl_product INNER JOIN tbl_cartegory ON tbl_product.cartegory_id = tbl_cartegory.cartegory_id ORDER BY tbl_product.product_id DESC LIMIT 2,3");
                                 ?> 
                                <?php  
                                    foreach($data as $dt){
                                ?>     
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                <?php 
                                                $id = $dt['product_id'];
                                                $link = "product-details.php?ID_product=$id";
                                                 ?>
                                                <a href="<?php echo $link ?>"><img src="./uploads/<?php echo $dt['product_img']; ?>" style="width: 150px; height: 150px;" alt="" /></a>
                                                <h2><?php echo $dt['product_name'] ?></h2>
                                                <p><?php echo $dt['product_price'] ?></p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php 
                                }
                                ?>
                                </div>
                            </div>
                            <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                    <!--/recommended_items-->

                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <!--Footer-->
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="single-widget">
                            <h2>Hỗ trợ khách hàng</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Hotline: 1900-6035</a></li>
                                <li><a href="">Gửi yêu cầu liên hệ</a></li>
                                <li><a href="">Tình trạng đặt hàng</a></li>
                                <li><a href="">Hướng dẫn đặt hàng</a></li>
                                <li><a href="">Câu hỏi thường gặp</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="single-widget">
                            <h2>Chính sách</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Tuyển dụng</a></li>
                                <li><a href="">Điều khoản sử dụng</a></li>
                                <li><a href="">Chính sách bảo mật</a></li>
                                <li><a href="">Chính sách hoàn lại tiền</a></li>
                                <li><a href="">Hệ thống thanh toán</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-widget">
                            <h2>Giới thiệu</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Thông tin công ty</a></li>
                                <li><a href="">Nghề nghiệp</a></li>
                                <li><a href="">Vị trí cửa hàng</a></li>
                                <li><a href="">Chương trình liên kết</a></li>
                                <li><a href="">Bản quyền</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-widget">
                        <h2>Góp ý cho trang web</h2>
                        <form action="#" class="searchform">
                            <input type="text" placeholder="Mail" />
                            <input type="text" placeholder="Nội dung" />
                            <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                            <p>Chân thành cảm ơn bạn đã đống góp ý kiến</p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Địa chỉ: 183 Nguyễn lương bằng, Liên Chiểu Đà Nẵng</p>

                </div>
            </div>
        </div>

    </footer>
    <!--/Footer-->





    <script src="js/jquery.js"></script>
    <script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>

</body>

</html>