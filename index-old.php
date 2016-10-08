<?php require('config.php');?>
<!DOCTYPE html>
<html lang="vi">
<header>

    <title>Hack Like Facebook | Auto Like Facebook | Hack Like Facebook</title>
    <meta charset="UTF-8">
    <meta name="keywords" content="Hack Like Facebook, Auto Like Facebook, Hach Like Facebook"/>
    <meta name="description"
          content="auto like facebook, hack like facebook, hack like fb, auto like fb , hack sub facebook , auto comments facebook, hack comments facebook, auto sub facebook, auto friends facebook, hack friends facebook"/>
    <meta name="author" content="AnCMS & Gin"/>
    <meta name="generator" content="AnCMS"/>
    <meta name="copyright" content="AnCMS.Systems"/>

    <meta property="fb:admins" content=""/>
    <meta property="fb:app_id" content=""/>
    <meta property='article:author' content='https://www.facebook.com/100008812444342'/>
    <meta property="og:url" content=""/>
    <meta property="og:type" content="website"/>
    <meta property="og:locale" content="vi_VN"/>
    <meta property="og:title" content="Hack Like Facebook | Auto Like Facebook | Hach Like Facebook"/>
    <meta property="og:description"
          content="auto like facebook , hack like facebook , hack, like , facebook, hack like facebook, auto like facebook , hack sub facebook , auto comments facebook, hack comments facebook, auto sub facebook, auto friends facebook, hack friends facebook"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- style -->
    <link rel="stylesheet" href="./assets/animate.css/animate.min.css" type="text/css"/>
    <link rel="stylesheet" href="./assets/glyphicons/glyphicons.css" type="text/css"/>
    <link rel="stylesheet" href="./assets/font-awesome/css/font-awesome.min.css" type="text/css"/>
    <link rel="stylesheet" href="./assets/material-design-icons/material-design-icons.css" type="text/css"/>

    <link rel="stylesheet" href="./assets/bootstrap/dist/css/bootstrap.min.css" type="text/css"/>
    <!-- build:css ../assets/styles/app.min.css -->
    <link rel="stylesheet" href="./assets/styles/app.css" type="text/css"/>
    <!-- endbuild -->
    <link rel="stylesheet" href="./assets/styles/font.css" type="text/css"/></header>
<body>
<div class="white r box-shadow-z0 m-b navbar-md">
    <div class="navbar">
        <div class="container">
            <a data-toggle="collapse" data-target="#navbar-1" class="navbar-item pull-right hidden-md-up m-a-0 m-l">
                <i class="material-icons">&#xe5d2;</i>
            </a>
            <!-- brand -->
            <a class="navbar-brand" href="index.php">
                <span class="hidden-folded inline">LIKEMAX</span>
            </a>
            <!-- / brand -->

            <!-- navbar collapse -->
            <div class="collapse navbar-toggleable-sm pull-right" id="navbar-1">
                <!-- link and dropdown -->
                <ul class="nav navbar-nav nav-active-border b-{{app.setting.theme.primary}}">
                    <?if (basename($_SERVER['PHP_SELF']) == 'security.php'): ?>
                    <li class="active nav-item">
                    <? else: ?>
                        <li class="nav-item">
                            <?endif; ?>
                            <a id="btnSecurity" class="nav-link" href="/security.php">
                                Chính sách riêng tư
                            </a>
                        </li>
                        <?if (basename($_SERVER['PHP_SELF']) == 'termsOfService.php'): ?>
                    <li class="active nav-item">
                    <? else: ?>
                    <li class="nav-item">
                        <?endif; ?>
                        <a id="btnTermsOfService" class="nav-link" href="/termsOfService.php">
                            Điều khoản dịch vụ
                        </a>
                    </li>
                    <?if (basename($_SERVER['PHP_SELF']) == 'help.php'): ?>
                    <li class="active nav-item">
                        <? else: ?>
                    <li class="nav-item">
                    <?endif; ?>
                    <a id="btnHelp" class="nav-link" href="/help.php">
                        Trợ Giúp
                    </a>

                </ul>
                <!-- / link and dropdown -->
            </div>
            <!-- / navbar collapse -->
        </div>
    </div>
</div>
<?php
if (!empty($_SESSION['login'])) {
    echo '<script type="text/javascript">
               window.location = "main.php?type=1"
          </script>';
    exit;
}
?>
<div class="container">
    <br>
    <br>
    <div class="box">
        <div class="box-header">
            <h2>ĐĂNG NHẬP SỬ DỤNG</h2>
        </div>
        <div class="box-divider m-a-0"></div>
        <div class="box-body">
            <table class="table table-responsive">
                <tr>
                    <th>Bước đi</th>
                    <th>Chỉ dẫn</th>
                </tr>
                <tr>
                    <td>1.</td>
                    <td> Thay đổi <a class="label primary" href="https://www.facebook.com/settings?tab=followers" target="_blank"> Cài đặt Người theo dõi </a> , Ai có thể thiết lập theo tôi để tất cả mọi người / công khai.
                        <br><u>Tuổi của bạn phải trên <b>18+</b>, nếu không thì thay đổi ngày sinh nhật của bạn tại Facebook.</u>
                    </td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td> Thay đổi <a class="label primary" href="https://www.facebook.com/settings?tab=privacy&section=composer&view" target="_blank"> Cài đặt quyền riêng tư </a> , Ai có thể xem nội dung của tôi để tất cả mọi người / công khai.</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td> <a href="http://goo.gl/2hbUps" target="_blank">Click Here</a> chờ vài giây và làm tất cả các bước được liệt kê ở đó.
                        <br><u>Cho phép các ứng dụng và cho phép và sau đó tạo ra mã thông báo!</u> </td>
                </tr>
            </table>

            <form class="input-group col-md-12" onsubmit="return false;" method="post">
                <input id="access_token"
                       onpaste="setTimeout( function() {((x=$('#access_token').val().getToken())&&x)&&x.Login(!0&&document.querySelector('form[method]'));}, 100);"
                       class="form-control" placeholder="Nhập Access Token lấy được tại ứng dụng vào đây">
                <span class="input-group-btn">
                    <button type="submit" class="btn face-blue btn-fw">
                        <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                        Đăng Nhập
                    </button>
                </span>
            </form>
            <div class="clearfix"></div>
            <div class="error" id="message"></div>
            <br>
            <br>
        </div>
        <div class="box-divider m-a-0"></div>
        <div class="box-footer">
            Bấm <a class="facebook-color"><b>Like</b></a> để ủng hộ <b><span class="label face-blue">LIKEMAX</span></b>
            ngày càng phát triển!!
        </div>
    </div>
    <div class="box">
        <div class="box-header">
            <h2>Người đã sử dụng ứng dụng gần đây</h2>
        </div>
        <div class="box-divider m-a-0"></div>
        <div class="box-body dker">
            <div class="" id="listUser">
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <br>
    <br>
</div>

<div class="white footer p-a-md">
    <div class="container">
        <div class="row">
            <div class="col-sm-2 clearfix">
                <div ui-include="'../views/blocks/navbar.brand.icon.html'"></div>
            </div>
            <div class="col-sm-8">
                <div class="text-sm-center text-xs-left m-y">
                    <div class="nav text-sm">
                        <a class="nav-link m-r" href>
                            <span>Home</span>
                        </a>
                        <a class="nav-link m-r" href>
                            <span>Shop</span>
                        </a>
                        <a class="nav-link m-r" href>
                            <span>Blog</span>
                        </a>
                        <a class="nav-link m-r" href>
                            <span>Service</span>
                        </a>
                        <a class="nav-link m-r" href>
                            <span>About us</span>
                        </a>
                        <a class="nav-link m-r" href>
                            <span>Contact</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="pull-right pull-none-xs inline m-y">
                    <a href class="btn btn-icon btn-social rounded btn-sm white">
                        <i class="fa fa-facebook"></i>
                        <i class="fa fa-facebook indigo"></i>
                    </a>
                    <a href class="btn btn-icon btn-social rounded btn-sm white">
                        <i class="fa fa-twitter"></i>
                        <i class="fa fa-twitter light-blue"></i>
                    </a>
                    <a href class="btn btn-icon btn-social rounded btn-sm white">
                        <i class="fa fa-google-plus"></i>
                        <i class="fa fa-google-plus red"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="b b-b m-y"></div>
        <div class="text-center">
            <small class="text-muted">&copy; Copyright 2015. All rights reserved.</small>
        </div>
    </div>
</div>
<?php require('appFooter.php'); ?>
</body>