;(function ($) {
    "use strict";

    $(auth);

    function auth() {
        var btnLogout = $('#btnLogout');

        btnLogout.on('click', function() {
            $.removeCookie('profile', { path: '/' });
            window.location.href = "/";
        });
    }

})(jQuery);