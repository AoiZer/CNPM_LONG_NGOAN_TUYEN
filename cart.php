
<?php 
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | Poor</title>
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


    <section id="cart_items">
        <div class="container">

            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu">
                            <td class="image">S???n ph???m</td>
                            <td class="description"></td>
                            <td class="price">Gi??</td>
                            <td class="quantity">S??? l?????ng</td>
                            <td class="total">T???ng ti???n</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>

                        
                            <?php 
                            if (empty($users)) {
                             $a=0;    
                            } else {

                            $sell = $db->select("SELECT * FROM tbl_sell WHERE user_id = $users_id ORDER BY sell_id DESC ");
                            /*$product = $db->select("SELECT * FROM tbl_prodcut WHERE product_id")*/
                            $count = 0;
                            $total = 0;
                            foreach ($sell as $dt) {
                                $product_id = $dt['product_id'];
                                $product_num = $dt['product_num'];
                             $count++;                
                             $product = $db->select("SELECT * FROM tbl_product WHERE product_id = $product_id");
                            
                             foreach ($product as $dt2){
                            $total = $total + ( $product_num * $dt2['product_price'] );
                            ?>
                            <tr>

                            <td class="cart_product">
                                <a href=""><img src="./uploads/<?php echo $dt2['product_img']; ?>" style="height: 200px;" alt=""></a>
                            </td>
                            <td class="cart_description">
                                <h4><a href="" style="text-align: center;"><?php echo $dt2['product_name'] ?></a></h4>                              
                            </td>
                            <td class="cart_price">
                                <p><?php echo number_format($dt2['product_price'],"0",",",".") ?></p>
                            </td>
                            <td class="cart_num">
                                <div class="cart_quantity_button">
                                    <p><?php echo $product_num ?></p>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price"><?php echo number_format($product_num * $dt2['product_price'],"0",",",".") ?></p> 
                            </tr>

                            <?php  
                                                       
                            }}}
                            ?>




                       
                       
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!--/#cart_items-->

    <section id="do_action">
        <div class="container">

            <div class="row">
                <div class="col-sm-4">
                    <div class="total_area pull-right">
                        <ul>
                            <?php if (isset($count)) {
                                
                            
                             ?>
                            <li>Ch???n s???n ph???m: <span>  <?php echo $count
                             ?> </span></li>
                             <?php 
                                }
                              ?>
                        </ul>

                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="total_area pull-right">
                        <ul>
                            <?php  if (isset($total)) {  
                             ?>
                            <li>T???ng thanh to??n: <span> <?php echo number_format($total,"0",",",".")
                             ?></span></li>
                             <?php 
                            }
                              ?>
                        </ul>

                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="total_area pull-right">
                        <a class="btn btn-default check_out" href=""> Mua h??ng </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#do_action-->

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
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>

</html>