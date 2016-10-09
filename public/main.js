;(function ($) {
    "use strict";

    $(auth);
    $(main);
    function auth() {
        var btnLogout = $('#btnLogout');

        btnLogout.on('click', function() {
            $.removeCookie('profile', { path: '/' });
            window.location.href = "/";
        });
    }

    function main() {
        var profile = JSON.parse($.cookie('profile'));
        var coverPhoto = $('#coverPhoto');
        var userAvatar = $('#userAvatar');
        var navAvatar = $('#navAvatar');
        var urlLinkFacebook = $('#urlLinkFacebook');
        var username = $('#username');
        var navUsername = $('#navUsername');
        var birthday = $('#birthday');
        var emailProfile = $('#emailProfile');

        var getCoverPhoto = $.ajax({
            type: 'GET',
            url: 'https://graph.facebook.com/'+ profile.id +'?fields=cover&access_token=' + profile.token
        });

        userAvatar.attr('src', 'https://graph.facebook.com/'+ profile.id + '/picture?type=large');
        navAvatar.attr('src', 'https://graph.facebook.com/'+ profile.id + '/picture?type=large');
        urlLinkFacebook.attr('href', 'https://www.facebook.com/app_scoped_user_id/' + profile.id);

        username.attr('href', 'https://www.facebook.com/app_scoped_user_id/' + profile.id);

        username.text(profile.name);
        navUsername.text(profile.name);
        birthday.text(profile.birthday);
        emailProfile.text(profile.email);

        getCoverPhoto.done(function(res){
            if(res.error) {
                $.removeCookie('profile', { path: '/' });
                window.location.href = "/";
                return;
            }
            var cover  = '../assets/images/c9.jpg';
            if(res.cover) {
                cover = res.cover.source;
            }
            coverPhoto.css('background-image', 'url(' +cover+ ')');
        });
    }

})(jQuery);