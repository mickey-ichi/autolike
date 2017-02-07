<?php require('config.php');?>
<?php
if (!empty($_COOKIE['profile'])) {
    echo '<script type="text/javascript">
               window.location.href = "/main.php"
          </script>';
    exit;
}
//?>
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
    <link rel="stylesheet" href="./assets/styles/app.min.css" type="text/css"/>
    <!-- endbuild -->
    <link rel="stylesheet" href="./assets/styles/style.css" type="text/css"/>

    <link rel="stylesheet" href="./assets/styles/font.css" type="text/css"/>
</header>
<body>
<div class="white r box-shadow-z0 m-b navbar-md">
    <div class="navbar">
        <div class="container">
            <a data-toggle="collapse" data-target="#navbar-0" class="navbar-item pull-left hidden-md-up">
                <i class="material-icons"></i>
            </a>
            <a class="navbar-brand" href="index.php">
                <span class="hidden-folded inline">LIKE FACEBOOK</span>
            </a>
            <!-- navbar collapse -->
            <div class="collapse navbar-toggleable-sm" id="navbar-0">

                <!-- nabar right -->
                <ul class="nav navbar-nav pull-right text-primary-hover">
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <span>Chính sách riêng tư</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <span>Điều khoản dịch vụ</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <span>Trợ Giúp</span>
                        </a>
                    </li>
                </ul>
                <!-- / navbar right -->

            </div>
            <!-- / navbar collapse -->
        </div>
    </div>
</div>
<div class="container">
    <div class="box">
        <div class="box-header">
            <h2>ĐĂNG NHẬP SỬ DỤNG</h2>
        </div>
        <div class="box-divider m-a-0"></div>
        <div class="box-body">
            <table class="table table-responsive">
                <tbody>
                <tr>
                    <th>Bước đi</th>
                    <th>Chỉ dẫn</th>
                </tr>
                <tr>
                    <td>1.</td>
                    <td> Thay đổi <a class="label primary" href="https://www.facebook.com/settings?tab=followers"
                                     target="_blank"> Cài đặt Người theo dõi </a> , Ai có thể thiết lập theo tôi để tất cả
                        mọi người / công khai.
                        <br><u>Tuổi của bạn phải trên <b>18+</b>, nếu không thì thay đổi ngày sinh nhật của bạn tại
                            Facebook.</u>
                    </td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td> Thay đổi <a class="label primary"
                                     href="https://www.facebook.com/settings?tab=privacy&amp;section=composer&amp;view"
                                     target="_blank"> Cài đặt quyền riêng tư </a> , Ai có thể xem nội dung của tôi để tất cả
                        mọi người / công khai.
                    </td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td><a href="https://t.co/rtlALBjaX3" class="label primary" target="_blank">Click Here</a> chờ vài giây và làm tất cả các bước
                        được liệt kê ở đó.
                        <br><u>Cho phép các ứng dụng và sau đó tạo ra mã thông báo!</u>
                        <a href="https://t.co/npvEcqdTSk" target="_blank" class="label primary">Click Here</a> Copy mã paste vào.
                    </td>
                </tr>
                </tbody>
            </table>

            <form class="input-group col-md-12" id="formLogin">
                <input id="textAccessToken" class="form-control" placeholder="Nhập Access Token lấy được tại ứng dụng vào đây">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-fw primary" id="btnLogin">
                        <i class="fa fa-spinner fa-pulse fa-fw hide" id="loading"></i>
                        <i class="fa fa-thumbs-up" aria-hidden="true" id="iconLike"></i>
                        <i class="fa fa-close hide" aria-hidden="true" id="iconError"></i>
                        <i class="fa fa-check hide" aria-hidden="true" id="iconDone"></i>
                        Đăng Nhập
                    </button>
                </span>
            </form>
            <div class="clearfix"></div>
            <br>
            <div class="col-sm-12">
                <div id="messageError" class="animated fadeIn alert alert-danger hide" role="alert">
                </div>
            </div>
            <div class="clearfix"></div>
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
        <div class="box-body">
            <div id="listUser"></div>
            <div class="clearfix"></div>
        </div>

    </div>
</div>
<script src="assets/js/jquery/jquery/dist/jquery.js"></script>
<script src="./assets/js/jquery/jquery-cookies/jquery.cookie.js"></script>
<!-- Bootstrap -->
<script src="assets/js/jquery/tether/dist/js/tether.min.js"></script>
<script src="assets/js/jquery/bootstrap/dist/js/bootstrap.js"></script>
<!-- core -->
<script src="assets/js/jquery/underscore/underscore-min.js"></script>
<script src="assets/js/jquery/jQuery-Storage-API/jquery.storageapi.min.js"></script>
<script src="assets/js/jquery/PACE/pace.min.js"></script>

<script src="assets/scripts/config.lazyload.js"></script>

<script src="assets/scripts/palette.js"></script>
<script src="assets/scripts/ui-load.js"></script>
<script src="assets/scripts/ui-jp.js"></script>
<script src="assets/scripts/ui-include.js"></script>
<script src="assets/scripts/ui-device.js"></script>
<script src="assets/scripts/ui-form.js"></script>
<script src="assets/scripts/ui-nav.js"></script>
<script src="assets/scripts/ui-screenfull.js"></script>
<script src="assets/scripts/ui-scroll-to.js"></script>
<script src="assets/scripts/ui-toggle-class.js"></script>

<script src="assets/scripts/app.js"></script>

<!--app-->
<script src="public/auth.js"></script>
<!--end app-->
</body>