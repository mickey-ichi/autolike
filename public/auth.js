;(function ($) {
    "use strict";

    $(auth);
    $(getUsers);

    function auth() {
        var formLogin = $('#formLogin');
        var txtToken = $('#textAccessToken');
        var listHistoryUser = $('#listHistoryUser');
        var errorMessage = $('#messageError');
        var loading = $('#loading');
        var iconLike = $('#iconLike');
        var iconError = $('#iconError');
        var iconDone = $('#iconDone');
        var btnLogin = $('#btnLogin');


        formLogin.on('submit', function (e) {
            e.preventDefault();
            $(login);
        });
        txtToken.on('paste', function (e) {
            $(login);
        });

        function login() {

            errorMessage.text('');
            errorMessage.addClass('hide');
            errorMessage.removeClass('show');
            loading.removeClass('hide');
            iconLike.addClass('hide');
            iconError.addClass('hide');
            iconDone.addClass('hide');

            setTimeout(function () {
                txtToken.attr('disabled', 'disabled');
                btnLogin.attr('disabled', 'disabled');
                var token = txtToken.val();
                if (!token) {
                    errorMessage.text('Vui lòng nhập Access Token');
                    iconLike.addClass('hide');
                    iconError.removeClass('hide');
                    loading.addClass('hide');
                    loading.removeClass('show');
                    errorMessage.removeClass('hide');
                    txtToken.removeAttr('disabled');
                    btnLogin.removeAttr('disabled');
                    return false;
                }
                var login = $.ajax({
                    type: 'POST',
                    url: '/api/auth.php',
                    data: {token: token}
                });
                login.done(function (res) {
                    txtToken.removeAttr('disabled');
                    btnLogin.removeAttr('disabled');

                    var result = JSON.parse(res);
                    if (result.error) {
                        errorMessage.text(result.error.message);
                        errorMessage.removeClass('hide');
                        iconError.removeClass('hide');
                        loading.removeClass('show');
                        loading.addClass('hide');

                    } else {
                        iconDone.removeClass('hide');
                        loading.removeClass('show');
                        loading.addClass('hide');
                        $.cookie('profile', JSON.stringify(result));
                        window.location.href = "/main.php";
                    }
                });
            });
        }
    }

    function getUsers() {
        var listUser = $('#listUser');

        var users = $.ajax({
            type: 'GET',
            url: '/api/user.php'
        });
        users.done(function (res) {
            var list = JSON.parse(res);
            var usersHtml = '';

            $.each(list, function (key, item) {
                if (!item.email) {
                    item.email = item.birthday;
                }
                usersHtml =
                    '<div class="col-sm-6 col-md-4 animated fadeIn">' +
                    '<div class="list-item box r m-b">' +
                    '<a class="list-left" target="_blank" href="https://www.facebook.com/app_scoped_user_id/' + item.id + '">' +
                    '<span class="w-64 avatar">' +
                    '<img src="https://graph.facebook.com/' + item.id + '/picture?type=large" class="img-circle"/>' +
                    '<i class="on b-white bottom"></i>' +
                    '</span>' +
                    '</a>' +
                    '<div class="list-body" style="margin-top: 10px;">' +
                    '<div class="text-ellipsis"><a href="">' + item.name + '</a></div>' +
                    '<small class="text-muted text-ellipsis">' + item.email + '</small>' +
                    '</div>' +
                    '</div>' +
                    '</div>'
                ;
                listUser.append(usersHtml)
            });

        });
    }
})(jQuery);