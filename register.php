
<?php 
include "class/user_class.php";
 ?>

 <?php 
$user = new user;
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    //var_dump($_POST,$_FILES);
    /*echo "<pre>";
    echo print_r($_FILES['product_img_more']);
    echo "</pre>";*/
    $insert_user = $user ->insert_user($_POST);
}
 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>register| E-Shopper</title>
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

                    <div class="welcom col-sm-10">
                        <ul class="nav navbar-nav pull-right">
                            <li>
                                <h1>CH??O M???NG B???N ?????N V???I LNT SHOP</h1>
                            </li>
                            <li><a href="#"><i class="help "></i> Tr??? gi??p?</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        </div>
        <!--/header-middle-->


    </header>
    <!--/header-->

    <section id="form">
        <!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-sm-offset-4">
                    <div class="signup-form">
                        <!--sign up form-->
                        <h2>????ng k??</h2>
                        <form action="" method="POST">
                            <input required name="user_info" type="text" placeholder="H??? t??n c???a b???n" />
                            <input required name="user_name" type="text" placeholder="T??n ????ng nh???p" />
                            <input required name="user_pass" type="password" placeholder="M???t kh???u" />
                            <input required name="user_mail" type="email" placeholder="Mail" />
                            <input required name="user_sdt" type="text" placeholder="S??? ??i???n tho???i" />                            
                            <button type="submit" class="btn btn-default" >????ng k??</button>
                             
                        </form>
                    </div>
                    <!--/sign up form-->
                </div>
            </div>
        </div>
    </section>
    <!--/form-->


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
    <script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>

</body>

</html>