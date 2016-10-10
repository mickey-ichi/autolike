;(function ($) {
    "use strict";

    $(auth);
    $(main);
    $(autoLike);

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

    function autoLike() {

        var btnAutoLike = $('#btnAutoLike');
        var txtPost = $('#txtPost');
        var formAutoLike = $('#formAutoLike');
        var errorMessage = $('#messageError');
        var loading = $('#loading');
        var iconLike = $('#iconLike');
        var iconError = $('#iconError');
        var iconDone = $('#iconDone');

        formAutoLike.on('submit', function(e) {
            e.preventDefault();
            $(botLike);
        });
        txtPost.on('paste', function (e) {
            setTimeout(function () {
                $(botLike);
            });
        });

        function botLike() {

            errorMessage.text('');
            errorMessage.addClass('hide');
            errorMessage.removeClass('show');
            loading.removeClass('hide');
            iconLike.addClass('hide');
            iconError.addClass('hide');
            iconDone.addClass('hide');

            txtPost.attr('disabled', 'disabled');
            btnAutoLike.attr('disabled', 'disabled');

            var link = txtPost.val();
            if(!link) {
                return;
            }
            var id = null;
            var post = link.match(/(.*)\/posts\/([0-9]{8,})/);
            var photo = link.match(/(.*)\/photo.php\?fbid=([0-9]{8,})/);
            var video = link.match(/(.*)\/video.php\?v=([0-9]{8,})/);
            var story = link.match(/(.*)\/story.php\?story_fbid=([0-9]{8,})/);
            var permalink = link.match(/(.*)\/permalink.php\?story_fbid=([0-9]{8,})/);
            var number = link.match(/(.*)\/([0-9]{8,})/);
            var comment = link.match(/(.*)comment_id=([0-9]{8,})/);
            var media = link.match(/(.*)media\/set\/\?set=a\.([0-9]{8,})/);
            if (post) {
                id = post[2]
            } else {
                if (photo) {
                    id = photo[2]
                } else {
                    if (video) {
                        id = video[2]
                    } else {
                        if (story) {
                            id = story[2]
                        } else {
                            if (permalink) {
                                id = permalink[2]
                            } else {
                                if (number) {
                                    id = number[2]
                                } else {
                                    if (media) {
                                        id = media[2]
                                    }
                                    ;
                                }
                            }
                        }
                    }
                }
            }
            if (comment) {
                id += '_' + comment[2]
            }
            if(!id) {
                if(Number.isInteger(parseInt(link))) {
                    id = link;
                }
            }

            if(!id) {
                errorMessage.text('Link Url sai vui lòng xem lại.');
                iconLike.addClass('hide');
                iconError.removeClass('hide');
                loading.addClass('hide');
                loading.removeClass('show');
                errorMessage.removeClass('hide');
                txtPost.removeAttr('disabled');
                btnAutoLike.removeAttr('disabled');
                return;
            }
            console.log(id);
        }
    }

})(jQuery);