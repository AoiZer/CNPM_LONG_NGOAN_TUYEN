
<?php 
include "class/user_class.php";
$db = new database;
$db ->connectDB();
 ?>
 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | E-Shopper</title>
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

                    <div class="welcom col-sm-10">
                        <ul class="nav navbar-nav pull-right">
                            <li>
                                <h1>CHÀO MỪNG BẠN ĐẾN VỚI LNT SHOP</h1>
                            </li>
                            <li><a href="#"><i class="help "></i> Trợ giúp?</a></li>
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

            <div class="col-sm-3 col-sm-offset-4">
                <div class="login-form">
                    <!--login form-->
                    <h2>Đăng nhập</h2>                                     

                    <form action="" method="POST">
                        <input required name="user_name" type="text" placeholder="Tên đăng nhập" />
                        <input required name="user_pass" type="password" placeholder="Mật khẩu" />
                        <span>
								<input type="checkbox" class="checkbox"> 
								Ghi nhớ đăng nhập
						</span>
                        
                        <button type="submit" class="btn btn-default" >ĐĂNG NHẬP</button>                    
                    </form>
                                   
                    <a href="register.php">
                        <h5>Đăng ký tài khoản</h5><br><br>
                    </a> 
                    <?php 
                        
                    $user = new user;
                    
                    if($_SERVER['REQUEST_METHOD']=== 'POST'){
                    $name_request = 0;
                    $pass_request = 0;
                    $checkpoint1  = 0;
                    $checkpoint2  = 0;
                    $name_request = $_POST['user_name'];                        
                    $pass_request = $_POST['user_pass'];
                    unset($_POST);

                    /*echo $name_request;
                    echo $pass_request;  */                      
                    $tbl = "tbl_user";                    
                    $checkname = $db->select("SELECT 1 FROM tbl_user WHERE user_name = '$name_request'");
                    $checkpass = $db->select("SELECT 1 FROM tbl_user WHERE user_pass = '$pass_request'");
                    if (gettype($checkname)=='boolean') {
                    echo "VUI LÒNG NHẬP LẠI TÊN TÀI KHOẢN !";                        
                    } else $checkpoint1 = 1;
                    if (gettype($checkpass)=='boolean') {
                    echo "VUI LÒNG NHẬP LẠI MẬT KHẨU !";                        
                    } else $checkpoint2 = 1;
                    if ($checkpoint1 == 1 && $checkpoint2 == 1) {                        
                        $status = "active";
                        $insert_status = $user ->update_status($name_request);
                        echo '<meta http-equiv="refresh" content="1; URL=index.php" />';    
                      
                    }
                    }
                    ?> 
                                    
                </div>

                <!--/login form-->
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