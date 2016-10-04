<?php require('config.php'); ?>
<?php
$main = true;
//if (empty($_SESSION['login'])) {
//    echo '<script type="text/javascript">
//               window.location = "index.php"
//          </script>';
//    exit;
//} ?>
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
    <link rel="stylesheet" href="assets/css/app.css">
    <!-- endbuild -->
    <link rel="stylesheet" href="./assets/styles/font.css" type="text/css"/>
</header>
<body>
<div class="white r box-shadow-z0 m-b navbar-md">
    <div class="navbar">
        <div class="container">
            <a class="navbar-brand">
                <span class="hidden-folded inline">LIKEMAX</span>
            </a>
            <!-- / brand -->
            <ul class="nav navbar-nav pull-right m-l">
                <li class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle clear" data-toggle="dropdown" aria-expanded="false">
              <span class="avatar w-32">
                <img id="navAvartar">
                <i class="on b-white bottom"></i>
              </span>
                        <span class="hidden-sm-down _500" id="avtName"></span>
                    </a>
                    <div class="dropdown-menu pull-right dropdown-menu-scale">
                        <a class="dropdown-item" onclick="logout()" ui-sref="access.signin">Đăng xuất</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="container" style="background-color: #e9ebee">
    <div class="col-sm-4">
        <div class="box">
            <div class="item">
                <div class="item-bg">
                    <img src="../assets/images/a3.jpg" class="blur">
                </div>
                <div class="p-a-lg pos-rlt text-center">
                    <img id="avtProfile" class="img-circle w-56" style="margin-bottom: -7rem">
                </div>
            </div>
            <div class="p-a text-center">
                <a id="profileName" href="" class="text-md m-t block"></a>
                <p>
                    <small id="profileEmail">Designer, Blogger</small>
                </p>
                <div class="text-xs text-primary">
                    <em id="profileId"></em>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="box">
            <div class="box-header">
                <h3>THÔNG TIN</h3>
            </div>
            <div class="box-body">
                <div class="input-group">
                    <span class="input-group-addon"><span class="fa fa-qrcode"></span></span>
                    <input type="password" onmousemove="this.type='text'" onmouseout="this.type='password'"
                           id="code" class="form-control" placeholder="Secret Code"
                           value="<?= @$_SESSION['login'] ?>">
                </div>
                <a class="list-group-item" id="AutoLike">
                    <span class="fa fa-globe gray-color icon-right"></span> Tổng số người dùng
                    <span class="label rounded primary pull-right count-user"></span>
                </a>
                <a class="list-group-item" id="AutoSUB" data-toggle="modal" data-target="#m-a-f">
                    <span class="fa fa-user gray-color icon-right"></span> Lấy ID Status, Ảnh, Video
                            <span class="pull-right">
                                <i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i>
                            </span>
                </a>
                <a class="list-group-item" id="AutoCMT">
                    <span class="fa fa-comment gray-color icon-right"></span> Auto Comment
                            <span class="pull-right">
                                <i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i>
                            </span>
                </a>
            </div>
        </div>
    </div>
    <!-- .modal -->
    <div id="m-a-f" class="modal fade" data-backdrop="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <i class="fa fa-close pull-right" style="cursor: pointer;" aria-hidden="true" data-dismiss="modal"></i>
                    <h5 class="modal-title">Lấy ID Status, Ảnh, Video</h5>
                </div>
                <div class="modal-body p-lg">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-link" aria-hidden="true"></i>
                            </div>
                            <input id="link" class="form-control" type="email" placeholder="Nhập Link Status/Ảnh/Video cần lấy ID">
                            <div id="getid" class="input-group-addon primary" style="cursor: pointer;">
                                <span>Get</span>
                            </div>
                        </div>
                    </div>
                    <div id="result"></div>
                    <div class="clearfix"></div>
                </div>
            </div><!-- /.modal-content -->
        </div>
    </div>
    <!-- / .modal -->

    <div class="clearfix"></div>
    <div class="col-md-12">
        <div class="box">
            <div class="box-body">
                <div id="content">
                    <div class="input-group">
                        <input id="form_input" type="text" class="form-control" placeholder="ID Status hoặc Comment"
                               autofocus="">
                    <span class="input-group-btn">
                        <div class="options">
                            <span class="reactions" id="groupBtnFace">
                            <div class="icon-container" id="btnLike">
                                <span data-popup="Like" class="like reaction"></span>
                            </div>
                            <div class="icon-container" id="btnLove">
                                <span data-popup="Love" class="love reaction"></span>
                            </div>
                            <div class="icon-container" id="btnThankful">
                                <span data-popup="Thankful" class="thankful reaction"></span>
                            </div>
                            <div class="icon-container" id="btnHaha">
                                <span data-popup="Haha" class="haha reaction"></span>
                            </div>
                            <div class="icon-container">
                                <span data-popup="Wow" id="btnWow" class="wow reaction"></span>
                            </div>
                            <div class="icon-container">
                                <span data-popup="Sad" id="btnSad" class="sad reaction"></span>
                            </div>
                            <div class="icon-container">
                                <span data-popup="Angry" id="btnAngry" class="angry reaction"></span>
                            </div>
                            </span>
                            <span class="button">
                            Like
                            </span>
                        </div>
<!--                        <button type="button" id="BUTTON" class="btn btn-primary" style="background-color: #4267B2">-->
<!--                            <span id="btn-click">-->
<!--                                <span class="fa fa-exchange"></span> Gửi yêu cầu-->
<!--                            </span>-->
<!--                            <span id="btn-load" style="display:none;">-->
<!--                                <span class="fa fa-refresh fa-spin"></span> Đang xử lí ...-->
<!--                            </span>-->
<!--                        </button>-->
                    </span>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                Trạng thái: <b id="processing" class="text-primary">sẵn sàng</b>.
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-md-12">
        <div style="padding-bottom: 15px; padding-top: 10px; color: #333438">
            <h4>Danh sách mới đăng trạng thái gần đây</h4>
        </div>
    </div>
    <div class="col-md-12">
        <div class=" white">
            <div class="col-sm-12">
                <div class="tab-content">
                    <div class="tab-pane p-v-sm active" id="tab_1" aria-expanded="true">

                        <div style=" padding-top: 10px" class="post-list m-b-md text-primary-hover" id="listFeed">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="tab-pane p-v-sm" id="tab_2" aria-expanded="false">
                        <ul class="list-group" id="listSub">
                            <li class="list-group-item text-right">
                                <div completed="0" id="selectAll" class="" style="display: inline; cursor: pointer">
                                    <i style="font-size: 16px;" class="check-square fa fa-square-o" aria-hidden="true"></i>
                                    <label>Chọn Tất cả</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane p-v-sm" id="tab_3" aria-expanded="false">
                        <ul class="list-group" id="listShare">
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<?php require('appFooter.php'); ?>
