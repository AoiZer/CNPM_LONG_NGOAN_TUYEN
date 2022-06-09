
<?php 
include "database.php";
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
$bat = $_GET["bat_ID"];
/*echo $price;*/
if ($bat == 1) {
    $temp=" 3000";
    $temp1=" 0 ";}
    elseif ($bat == 2) {
        $temp=" 4000";
        $temp1=" 3000 ";}
        elseif ($bat == 3) {
            $temp=" 5000";
            $temp1=" 4000  ";}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home |Shop </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

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

    <section id="slider">
        <!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">                                
                                <div class="col-sm-6">
                                <?php 
                                $tbl = "tbl_adv";
                                $data = $db->select("SELECT * FROM tbl_adv ORDER BY advert_id LIMIT 0,1");
                                 ?> 
                                 <?php 
                                 foreach($data as $dt){

                                  ?>
                                    <h2><?php echo $dt['advert_content1'] ;?></h2>
                                    <p><?php echo $dt['advert_content2'] ;?></p>      
                                <?php 
                                }
                                 ?>                              
                                </div> 
                                <div class="col-sm-6">  
                                <?php 
                                $tbl = "tbl_adv";
                                $data = $db->select("SELECT * FROM tbl_adv ORDER BY advert_id LIMIT 0,1");
                                 ?> 
                                 <?php 
                                 foreach($data as $dt){

                                  ?>                                  
                                    <img src="./uploads/<?php echo $dt['advert_img']; ?> " style=" height: 270px; " />
                                <?php 
                                }
                                 ?>  
                                </div> 
                                
                            </div>
                        
                            <div class="item">
                                <div class="col-sm-6">
                                <?php 
                                $tbl = "tbl_adv";
                                $data = $db->select("SELECT * FROM tbl_adv ORDER BY advert_id LIMIT 1,1");
                                 ?> 
                                 <?php 
                                 foreach($data as $dt){

                                  ?>
                                    <h2><?php echo $dt['advert_content1'] ;?></h2>
                                    <p><?php echo $dt['advert_content2'] ;?></p>      
                                <?php 
                                }
                                 ?>                              
                                </div> 
                                <div class="col-sm-6">  
                                <?php 
                                $tbl = "tbl_adv";
                                $data = $db->select("SELECT * FROM tbl_adv ORDER BY advert_id LIMIT 1,1");
                                 ?> 
                                 <?php 
                                 foreach($data as $dt){

                                  ?>                                  
                                    <img src="./uploads/<?php echo $dt['advert_img']; ?> " style=" height: 270px; " />
                                <?php 
                                }
                                 ?>  
                                </div> 
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                <?php 
                                $tbl = "tbl_adv";
                                $data = $db->select("SELECT * FROM tbl_adv ORDER BY advert_id LIMIT 2,1");
                                 ?> 
                                 <?php 
                                 foreach($data as $dt){

                                  ?>
                                    <h2><?php echo $dt['advert_content1'] ;?></h2>
                                    <p><?php echo $dt['advert_content2'] ;?></p>      
                                <?php 
                                }
                                 ?>                              
                                </div> 
                                <div class="col-sm-6">  
                                <?php 
                                $tbl = "tbl_adv";
                                $data = $db->select("SELECT * FROM tbl_adv ORDER BY advert_id LIMIT 2,1");
                                 ?> 
                                 <?php 
                                 foreach($data as $dt){

                                  ?>                                  
                                    <img src="./uploads/<?php echo $dt['advert_img']; ?> " style=" height: 270px; " />
                                <?php 
                                }
                                 ?>  
                                </div> 
                            </div>

                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--/slider-->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <div class="brands_products">
                            <!--brands_products-->           
                            <h2>Hãng sản xuất</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                <?php 
                                $tbl = "tbl_cartegory";
                                $data = $db->select("SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC");
                                 ?> 
                                 <?php 
                                foreach($data as $dt){
                                ?>   
                                    <li>
                                         <?php 
                                        $id = $dt['cartegory_id'];
                                        $link = "index-sort.php?cartegory_ID=$id";
                                          ?>
                                        <a href="<?php echo $link ?>"><?php echo $dt['cartegory_name'] ;?></a>
                                    </li>
                                <?php 
                                }
                                ?>
                                </ul>
                            </div>
                        </div>
                        <!--/category-products-->

                        <div class="brands_products">
                            <!--brands_products-->
                            <h2>Mức giá</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">                                                  
                                    <li>
                                        <a href="index.php">Tất cả</a>
                                    </li>
                                    <li>
                                        <?php 
                                        $link = "index-price.php?price_ID=1";
                                         ?>
                                        <a href="<?php echo $link ?>">Dưới 2 triệu</a>
                                    </li>
                                    <li>
                                        <?php 
                                        $link = "index-price.php?price_ID=2";
                                         ?>
                                        <a href="<?php echo $link ?>">Từ 2-4 triệu</a>
                                    </li>
                                    <li>
                                        <?php 
                                        $link = "index-price.php?price_ID=3";
                                         ?>
                                        <a href="<?php echo $link ?>">Từ 4-7 triệu</a>
                                    </li>
                                    <li>
                                        <?php 
                                        $link = "index-price.php?price_ID=4";
                                         ?>
                                        <a href="<?php echo $link ?>">Từ 7-13 triệu</a>
                                    </li>
                                    <li>
                                        <?php 
                                        $link = "index-price.php?price_ID=5";
                                         ?>
                                        <a href="<?php echo $link ?>">Từ 13-20 triệu</a>
                                    </li>
                                    <li>
                                        <?php 
                                        $link = "index-price.php?price_ID=6";
                                         ?>
                                        <a href="<?php echo $link ?>">Trên 20 triệu</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <!--/brands_products-->

                        <div class="level-pin">
                            <!--level-pin-->
                            <h2>Dung lượng pin</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                     <li>
                                        <a href="index.php">Tất cả</a>
                                    </li>
                                    <li>
                                     <?php 
                                        $link = "index-bat.php?bat_ID=1";
                                         ?>
                                        <a href="<?php echo $link ?>">Dưới 3000 mah</a>
                                    </li>
                                    <li>
                                     <?php 
                                        $link = "index-bat.php?bat_ID=2";
                                         ?>
                                        <a href="<?php echo $link ?>">Từ 3000-4000 mah</a>
                                    </li>
                                    <li>
                                     <?php 
                                        $link = "index-bat.php?bat_ID=3";
                                         ?>
                                        <a href="<?php echo $link ?>">Trên 4000mah</a>
                                    </li>




                                </ul>
                            </div>
                        </div>
                        <!--/level-pin-->



                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="features_items">
                        <!--features_items-->
                        <h2 class="title text-center">Dòng sản phẩm</h2>
                        <?php 
/*                        echo "SELECT * FROM tbl_product WHERE cartegory_id BETWEEN $temp1 AND $temp ORDER BY product_id DESC ";
*/                      $tbl = "tbl_product";
                        $data = $db->select("SELECT * FROM tbl_product WHERE product_bat BETWEEN $temp1 AND $temp ORDER BY product_id DESC");
                        ?> 
                        <!-- <?php 
                        echo gettype($data);
                        echo $price;
                        echo $temp;
                        echo $temp1;
                         ?> -->
                        <?php  
                            foreach($data as $dt){                          

                        ?>                        
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products" style="height: 366px; border: gray;">
                                    <div class="productinfo text-center">
                                        <?php 
                                        $id = $dt['product_id'];
                                        $link = "product-details.php?ID_product=$id";
                                         ?>
                                        <a href= "<?php echo $link ?>" ><img src="./uploads/<?php echo $dt['product_img']; ?>" style="height: 250px ;" alt="" /></a>
                                        <h2><?php echo $dt['product_name'] ?></h2>
                                        <h4><?php echo number_format($dt['product_price'],"0",".",",")?> VNĐ</h4>
                                       
                                    </div>

                                </div>

                            </div>
                        </div>
                        <?php 
                        }
                        ?>
                    </div>
                    <!--features_items-->

                    <div class="category-tab">
                        <!--category-tab-->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#highsale" data-toggle="tab">Bán chạy nhất</a></li>
                                <li><a href="#lowprice" data-toggle="tab">Giá thấp</a></li>
                                <li><a href="#highprice" data-toggle="tab">Giá cao</a></li>

                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="highsale">
                                <?php 
                                $tbl = "tbl_product";
                                $data = $db->select("SELECT * FROM tbl_product ORDER BY product_sale DESC LIMIT 4");
                                 ?> 
                                <?php  
                                    foreach($data as $dt){
                                ?>                        
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                 <?php 
                                                $id = $dt['product_id'];
                                                $link = "product-details.php?ID_product=$id";
                                                 ?>
                                                <a href="<?php echo $link ?>"><img src="./uploads/<?php echo $dt['product_img']; ?>" alt="" /></a>
                                                <h2><?php echo $dt['product_name'] ?></h2>
                                               <p><?php echo number_format($dt['product_price'],"0",".",",")?> VNĐ</p>                                             
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <?php 
                                }
                                ?>
                            </div> 

                            <div class="tab-pane fade" id="lowprice">
                                <?php 
                                $tbl = "tbl_product";
                                $data = $db->select("SELECT * FROM tbl_product ORDER BY product_price ASC LIMIT 4");
                                 ?> 
                                <?php  
                                    foreach($data as $dt){
                                ?>                        
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                               <?php 
                                                $id = $dt['product_id'];
                                                $link = "product-details.php?product_id=$id";
                                                 ?>
                                                <a href="<?php echo $link ?>"><img src="./uploads/<?php echo $dt['product_img']; ?>" alt="" /></a>
                                                <h2><?php echo $dt['product_name'] ?></h2>
                                               <p><?php echo number_format($dt['product_price'],"0",".",",")?> VNĐ</p>
                                               
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <?php 
                                }
                                ?>
                            </div>   
                            <div class="tab-pane fade" id="highprice">
                                <?php 
                                $tbl = "tbl_product";
                                $data = $db->select("SELECT * FROM tbl_product ORDER BY product_price DESC LIMIT 4");
                                 ?> 
                                <?php  
                                    foreach($data as $dt){
                                ?>                        
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                               <?php 
                                                $id = $dt['product_id'];
                                                $link = "product-details.php?product_id=$id";
                                                 ?>
                                                <a href="<?php echo $link ?>"><img src="./uploads/<?php echo $dt['product_img']; ?>" alt="" /></a>
                                                <h2><?php echo $dt['product_name'] ?></h2>
                                                <p><?php echo number_format($dt['product_price'],"0",".",",")?> VNĐ</p>
                                               
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <?php 
                                }
                                ?>
                            </div>                                       
                        </div>
                    </div>
                    <!--/category-tab-->

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
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>


</body>

</html>