
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
$price = $_GET["price_ID"];
/*echo $price;*/
if ($price == 1) {
    $temp=" 2000000";
    $temp1=" 0 ";}
    elseif ($price == 2) {
        $temp=" 4000000";
        $temp1=" 2000000 ";}
        elseif ($price == 3) {
            $temp=" 7000000";
            $temp1=" 4000000  ";}
            elseif ($price == 4) {
                $temp=" 13000000";
                $temp1=" 7000000  ";}
                elseif ($price == 5) {
                    $temp=" 20000000";
                    $temp1=" 13000000  ";}
                    elseif ($price == 6) {
                        $temp=" 50000000";
                        $temp1=" 20000000 ";}
        
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
                                <li><a href="">Mua s???m th??? ga</a></li>
                                <li><a href="">kh??ng lo v??? gi??</a></li>
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
                                <li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Gi??? h??ng </a></li>
                                <li><a href="login.php"><i class="fa fa-lock"></i> ????ng nh???p</a></li>
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
                                <li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Gi??? h??ng </a></li>
                                <?php 
                                foreach ($users as $dt) {
                                    $link = "logout.php?users_id=$users_id";
                                 ?>
                                <li><a href=""><i class="user-circle-o"></i> <?php echo $dt['user_info'] ?> </a></li>                                
                                <a href="<?php echo $link ?>">
                                <button type="submit" class="btn btn-default" style="height: 20px ; width: 60px; padding-right: 75px; text-align: center; padding-bottom: 20px;" >????ng xu???t</button>
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
                                <li><a href="index.php">Trang ch???</a></li>
                                <li class="dropdown"><a href="index.php">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                       <li><a href="shop.php?id=0">S???n ph???m</a></li>
                                        <li><a href="top-sale.php?id=0" class="active">S???n ph???m b??n ch???y</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact-us.html">Li??n h???</a></li>
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
                            <h2>H??ng s???n xu???t</h2>
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
                            <h2>M???c gi??</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">                                                  
                                    <li>
                                        <a href="index.php">T???t c???</a>
                                    </li>
                                    <li>
                                        <?php 
                                        $link = "index-price.php?price_ID=1";
                                         ?>
                                        <a href="<?php echo $link ?>">D?????i 2 tri???u</a>
                                    </li>
                                    <li>
                                        <?php 
                                        $link = "index-price.php?price_ID=2";
                                         ?>
                                        <a href="<?php echo $link ?>">T??? 2-4 tri???u</a>
                                    </li>
                                    <li>
                                        <?php 
                                        $link = "index-price.php?price_ID=3";
                                         ?>
                                        <a href="<?php echo $link ?>">T??? 4-7 tri???u</a>
                                    </li>
                                    <li>
                                        <?php 
                                        $link = "index-price.php?price_ID=4";
                                         ?>
                                        <a href="<?php echo $link ?>">T??? 7-13 tri???u</a>
                                    </li>
                                    <li>
                                        <?php 
                                        $link = "index-price.php?price_ID=5";
                                         ?>
                                        <a href="<?php echo $link ?>">T??? 13-20 tri???u</a>
                                    </li>
                                    <li>
                                        <?php 
                                        $link = "index-price.php?price_ID=6";
                                         ?>
                                        <a href="<?php echo $link ?>">Tr??n 20 tri???u</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <!--/brands_products-->

                        <div class="level-pin">
                            <!--level-pin-->
                            <h2>Dung l?????ng pin</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    <li>
                                        <a href="index.php">T???t c???</a>
                                    </li>
                                    <li>
                                     <?php 
                                        $link = "index-bat.php?bat_ID=1";
                                         ?>
                                        <a href="<?php echo $link ?>">D?????i 3000 mah</a>
                                    </li>
                                    <li>
                                     <?php 
                                        $link = "index-bat.php?bat_ID=2";
                                         ?>
                                        <a href="<?php echo $link ?>">T??? 3000-4000 mah</a>
                                    </li>
                                    <li>
                                     <?php 
                                        $link = "index-bat.php?bat_ID=3";
                                         ?>
                                        <a href="<?php echo $link ?>">Tr??n 4000mah</a>
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
                        <h2 class="title text-center">D??ng s???n ph???m</h2>
                        <?php 
/*                        echo "SELECT * FROM tbl_product WHERE cartegory_id BETWEEN $temp1 AND $temp ORDER BY product_id DESC ";
*/                        $tbl = "tbl_product";
                        $data = $db->select("SELECT * FROM tbl_product WHERE product_price BETWEEN $temp1 AND $temp ORDER BY product_id DESC");
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
                                <div class="single-products"style="height: 366px; border: gray;">
                                    <div class="productinfo text-center">
                                        <?php 
                                        $id = $dt['product_id'];
                                        $link = "product-details.php?ID_product=$id";
                                         ?>
                                        <a href= "<?php echo $link ?>" ><img src="./uploads/<?php echo $dt['product_img']; ?>" style="height: 250px ;" alt="" /></a>
                                        <h2><?php echo $dt['product_name'] ?></h2>
                                        <h4><?php echo number_format($dt['product_price'],"0",".",",")?> VN??</h4>
                                       
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
                                <li class="active"><a href="#highsale" data-toggle="tab">B??n ch???y nh???t</a></li>
                                <li><a href="#lowprice" data-toggle="tab">Gi?? th???p</a></li>
                                <li><a href="#highprice" data-toggle="tab">Gi?? cao</a></li>

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
                                                <p><?php echo number_format($dt['product_price'],"0",".",",")?> VN??</p>                                                
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
                                                <p><?php echo number_format($dt['product_price'],"0",".",",")?> VN??</p>  
                                               
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
                                                <p><?php echo number_format($dt['product_price'],"0",".",",")?> VN??</p>  
                                               
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
                            <h2>H??? tr??? kh??ch h??ng</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Hotline: 1900-6035</a></li>
                                <li><a href="">G???i y??u c???u li??n h???</a></li>
                                <li><a href="">T??nh tr???ng ?????t h??ng</a></li>
                                <li><a href="">H?????ng d???n ?????t h??ng</a></li>
                                <li><a href="">C??u h???i th?????ng g???p</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="single-widget">
                            <h2>Ch??nh s??ch</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Tuy???n d???ng</a></li>
                                <li><a href="">??i???u kho???n s??? d???ng</a></li>
                                <li><a href="">Ch??nh s??ch b???o m???t</a></li>
                                <li><a href="">Ch??nh s??ch ho??n l???i ti???n</a></li>
                                <li><a href="">H??? th???ng thanh to??n</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-widget">
                            <h2>Gi???i thi???u</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Th??ng tin c??ng ty</a></li>
                                <li><a href="">Ngh??? nghi???p</a></li>
                                <li><a href="">V??? tr?? c???a h??ng</a></li>
                                <li><a href="">Ch????ng tr??nh li??n k???t</a></li>
                                <li><a href="">B???n quy???n</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-widget">
                        <h2>G??p ?? cho trang web</h2>
                        <form action="#" class="searchform">
                            <input type="text" placeholder="Mail" />
                            <input type="text" placeholder="N???i dung" />
                            <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                            <p>Ch??n th??nh c???m ??n b???n ???? ?????ng g??p ?? ki???n</p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">?????a ch???: 183 Nguy???n l????ng b???ng, Li??n Chi???u ???? N???ng</p>

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