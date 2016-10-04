<?php require('config.php'); ?>
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
                <ul id="terms" class="nav navbar-nav nav-active-border b-{{app.setting.theme.primary}}">
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

<?php if (empty($_SESSION['login'])) {
    echo '
        <section class="fill-height-or-more">
        <div class="container" style="padding-top: 65px;">
            <div class="panel panel-facebook">
                <div class="panel-heading">
                    <div class="panel-title facebook-color" style="font-weight: 500; font-size: 24px">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        Chính sách riêng tư
                    </div>
                    <div class="border-top"></div>
                </div>
                <div class="panel-body">
                    <p>
                        Chính sách bảo mật này đặt ra làm thế nào Máy <b class="color-gray">Liker</b> sử dụng và bảo vệ bất kỳ thông tin mà bạn cung cấp cho máy <b class="color-gray">Liker</b> khi bạn sử dụng trang web này .
                    </p>
                    <p>
                        Máy <b class="color-gray">Liker</b> cam kết đảm bảo rằng sự riêng tư của bạn được bảo vệ . Chúng ta nên yêu cầu bạn cung cấp một số thông tin mà bạn có thể được xác định khi sử dụng website này sau đó bạn có thể yên tâm rằng nó sẽ chỉ được sử dụng phù hợp với chính sách bảo mật này .
                    </p>
                    <p>
                        Máy <b class="color-gray">Liker</b> có thể thay đổi chính sách này theo thời gian bằng cách cập nhật trang này . Bạn nên kiểm tra trang này theo thời gian để đảm bảo rằng bạn đang hạnh phúc với bất kỳ thay đổi . Chính sách này có hiệu lực từ ngày 02 tháng 5 2015 .
                    </p>
                    <p>
                        <b>
                            Những gì chúng tôi thu thập?
                        </b>
                    </p>
                    <p>
                        Chúng tôi có thể thu thập các thông tin sau :
                    </p>
                    <div class="margin-left margin-bottom">
                        <div class="facebook-color">
                            <i class="fa fa-caret-right" aria-hidden="true"></i> Facebook Profile Id
                        </div>
                        <div class="facebook-color">
                            <i class="fa fa-caret-right" aria-hidden="true"></i> Facebook Access_Token
                        </div>
                    </div>
                    <p>
                        <b>Chúng tôi làm gì với những thông tin chúng tôi thu thập</b>
                    </p>
                    <p>
                        Chúng tôi cần thông tin này để hiểu rõ nhu cầu của bạn và cung cấp cho bạn một dịch vụ tốt hơn , và đặc biệt là vì những lý do sau đây :
                    </p>
                    <div class="margin-left margin-bottom">
                        <ul style="margin-left: -24px;">
                            <li>
                                <p>Lưu trữ hồ sơ nội bộ .</p>
                            </li>
                            <li>
                                <p>Chúng tôi có thể sử dụng thông tin để cải thiện sản phẩm và dịch vụ của chúng tôi .</p>
                            </li>
                            <li>
                                <p>
                                    Chúng ta có thể định kỳ gửi email quảng cáo về sản phẩm mới , khuyến mại đặc biệt hoặc các thông tin khác mà chúng tôi nghĩ bạn có thể tìm thấy thú vị bằng cách sử dụng các địa chỉ email mà bạn đã cung cấp .
                                </p>
                            </li>
                            <li>
                                <p>
                                    Theo thời gian , chúng ta cũng có thể sử dụng thông tin của bạn để liên lạc với bạn cho mục đích nghiên cứu thị trường . Chúng tôi có thể liên hệ với bạn qua email , điện thoại , fax hoặc thư. Chúng tôi có thể sử dụng thông tin để tùy chỉnh trang web theo sở thích của bạn .
                                </p>
                            </li>
                        </ul>
                    </div>
                    <p>
                        <b>
                            Bảo mật
                        </b>
                    </p>
                    <p>
                        Chúng tôi cam kết đảm bảo rằng thông tin của bạn được an toàn. Để ngăn chặn truy cập hoặc tiết lộ trái phép , chúng tôi đã đưa ra quy trình vật lý , điện tử và quản lý phù hợp để bảo vệ và bảo mật thông tin chúng tôi thu thập trực tuyến .
                    </p>
                    <p>
                        <b>
                            Làm thế nào chúng tôi sử dụng cookie
                        </b>
                    </p>
                    <div class="margin-left margin-bottom">
                        <ul style="margin-left: -24px;">
                            <li>
                                A cookie is a small file which asks permission to be placed on your computer’s hard drive. Once you agree, the file is added and the cookie helps analyze web traffic or lets you know when you visit a particular site. Cookies allow web applications to respond to you as an individual. The web application can tailor its operations to your needs, likes and dislikes by gathering and remembering information about your preferences.
                            </li>
                            <li>
                                Chúng tôi sử dụng cookie log lưu lượng truy cập để xác định các trang đang được sử dụng . Điều này giúp chúng tôi phân tích dữ liệu về lưu lượng truy cập trang web và cải thiện trang web của chúng tôi để chỉnh nó cho nhu cầu của khách hàng . Chúng tôi chỉ sử dụng thông tin này cho các mục đích phân tích thống kê và sau đó các dữ liệu được xóa khỏi hệ thống .
                            </li>
                            <li>
                                Nhìn chung, các tập tin cookie giúp chúng tôi cung cấp cho bạn với một trang web tốt hơn, bằng cách cho phép chúng tôi theo dõi những trang mà bạn thấy hữu ích và bạn thì không. Một cookie không có cách nào cho chúng ta truy cập vào máy tính của bạn hoặc bất kỳ thông tin về bạn , khác hơn so với các dữ liệu bạn chọn để chia sẻ với chúng tôi .
                            </li>
                            <li>
                                Bạn có thể chọn để chấp nhận hoặc từ chối cookie . Hầu hết các trình duyệt web tự động chấp nhận cookie , nhưng bạn có thể thay đổi thiết lập trình duyệt của mình để từ chối cookie nếu bạn thích. Điều này có thể khiến bạn không tận dụng lợi thế đầy đủ của trang web.
                            </li>
                        </ul>
                    </div>
                    <p>
                        <b>Liên kết đến các trang web khác</b>
                    </p>
                    <p>
                        Trang web của chúng tôi chứa các liên kết đến các trang web khác quan tâm. Tuy nhiên , một khi bạn đã sử dụng các liên kết đến các trang web của chúng tôi rời khỏi , bạn nên lưu ý rằng chúng tôi không có bất kỳ kiểm soát rằng trang web khác . Do đó , chúng tôi không thể chịu trách nhiệm cho việc bảo vệ và bảo mật của bất kỳ thông tin mà bạn cung cấp khi quý khách đến thăm trang web và các trang đó không được điều chỉnh bởi chính sách bảo mật này . Bạn nên thận trọng và xem xét các báo cáo bảo mật áp dụng cho các trang web trong câu hỏi .
                    </p>
                    <p>
                        <b>
                            Kiểm soát thông tin cá nhân của bạn
                        </b>
                    </p>
                    <div class="margin-left margin-bottom">
                        <ul style="margin-left: -24px;">
                            <li>
                                Chúng tôi sẽ không bán , phân phối hoặc cho thuê thông tin cá nhân của bạn cho bên thứ ba trừ khi có sự cho phép của bạn hoặc luật pháp yêu cầu để làm như vậy . Chúng tôi có thể sử dụng thông tin cá nhân của bạn để gửi cho bạn các thông tin quảng cáo về các bên thứ ba mà chúng tôi nghĩ bạn có thể tìm thấy thú vị nếu bạn nói với chúng tôi rằng bạn muốn điều này xảy ra .
                            </li>
                            <li>
                                Nếu bạn tin rằng bất kỳ thông tin chúng tôi đang nắm giữ về bạn là không chính xác hoặc không đầy đủ , xin vui lòng viết thư cho chúng tôi hoặc gửi email ngay khi có thể, tại địa chỉ trên . Chúng tôi sẽ uốn nắn kịp thời các thông tin tìm thấy là không chính xác .
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    </section>
    ';
} else {
    echo '<script>location=\'main.php?type=1\';</script>';
}
?>
<?php require('appFooter.php'); ?>
</body>