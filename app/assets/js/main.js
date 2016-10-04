jQuery(document).ready(function ($) {
    $.get("users.php", {all: ''})
        .done(function (listUser) {
            var users = JSON.parse(listUser);
            var usersHtml = '';

            $.each(users, function (key, val) {
                if (!val.about) {
                    val.about = '';
                }
                usersHtml = '<li class="list-group-item"><div class="profile-avatar tiny pull-left" style="background-image: url(' + 'https://graph.facebook.com/' + val.id + '/picture?type=large' + ')"></div>' +
                    '<div class="pull-right"></div>' +
                    '<h5 class="list-group-item-heading" style="margin-top: 8px;"><a target="_blank" style="margin-top: 5px;" class="facebook-color" href="https://www.facebook.com/app_scoped_user_id/' + val.id + '">' + val.name + ' </a> </h5>';
                $('#listSub').append(usersHtml).fadeIn(500);
            });

        })
        .fail(function () {
            console.log("error");
        });

    $('#selectAll').click(function(e) {
        $(this).find('.check-square').toggleClass('fa-square-o fa-check-square-o');
        $('#form_input').attr('data-type', 'sub');
        $.get("users.php", {id: window.token})
            .done(function (user) {
                var acc = JSON.parse(user)[0];
                $('#form_input').val(acc.id);
            });
        e.preventDefault();
    });

    $('#listShare').html('');
    $.getJSON('https://graph.fb.me/me/feed', {
        limit: 15,
        fields: 'story,object_id,privacy,message,likes.summary(true).limit(1){id},full_picture',
        access_token: window.token
    }).done(function (data) {
        $.each(data['data'], function (k, item) {
            if (item['privacy']['value'] == 'EVERYONE') {
                m = (item['message'] && item['message'] != '') ? item['message'] : 'Không có nội dung';
                m = m.length > 64 ? m.substring(0, 64) + "...." : m;
                item['full_picture'] && (m = '', (item['message'] && item['message'] != '') && (m += item['message'] + '<br>'), m += 'Nhấp vào <a href="' + item['full_picture'] + '" target="_blank" >URL</a> để xem ảnh');
                uid = item['object_id'] ? item['object_id'] : item['id'];
                total_likes = item['likes'] ? item['likes']['summary']['total_count'] : 0;
                html = ('<li data-hung-id="hung.systems[{id-list}]"  class="list-group-item"><div class="profile-avatar tiny pull-left" style="background-image: url($1)"></div>' +
                '<div class="pull-right" ><button class="btn btn-xs btn-info" data-hung="clicking" data-hung-status-id="{baiviet-id}" data-type="share"><i class="fa fa-share" aria-label="false"></i> Share</button></div>' +
                '<h5 class="list-group-item-heading"><a href="$2" target="_blank">$3</a></h5>' +
                '<p class="message-content"><hung>$4</hung>$5 </p></li>')
                    .replace('$1', 'https://graph.facebook.com/[UID]/picture'.replace('[UID]', me['id'])).replace('{baiviet-id}', uid).replace('$2', 'https://facebook.com/profile.php?id=[UID]'.replace('[UID]', me['id'])).replace('$3', me['name']).replace('$4', '<i class="fa fa-thumbs-up" ></i> ' + total_likes).replace('$5', m).replace('{id-list}', Math.random().toString(16).substr(3));
                $('#listShare').append($(html).fadeIn(500));
            }
        });
        $('[data-hung="clicking"]').click(function (e) {
            $('#form_input').val($(this).data('hung-status-id'));
            $('#form_input').attr('data-type', 'share');
            e.preventDefault();
        });
    });
    $('.count-user').text(me['count']);
    $("#avtProfile").attr("src",'https://graph.facebook.com/' + me['id']+ '/picture');
    $("#profileName").text(me['name']);
    $("#profileEmail").text(me['email']);
    $('#profileId').text(me['id']);
    $('#avtName').text(me['name']);
    $('#navAvartar').attr("src",'https://graph.facebook.com/' + me['id']+ '/picture');


    $("#getid").click(function (event) {
        var link = $("#link").val();
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
        ;
        if (comment) {
            id += '_' + comment[2]
        }
        ;

        var result = '';
        if(id != null) {
            result = '<div class="col-md-4 col-md-offset-4">'+
            '<div class="box-color primary pos-rlt">'+
            '<span class="arrow top b-primary"></span>'+
            '<div class="box-body">' + id + '</div></div></div>';
        }else {
            result = '<div class="col-md-6 col-md-offset-3">'+
                '<div class="box-color danger pos-rlt">'+
                '<span class="arrow top b-danger"></span>'+
                '<div class="box-body">Url sai vui lòng xem lại. </div></div></div>';
        }
        $("#result").html(result);
    });
});

var animateReactionsOn;
var animateReactionsOut;

$(function () {
    $(".options").mouseenter(function () {
        var parent = $(this)

        animateReactionsOn = setTimeout(function () {
            parent.find(".reaction").each(function (index) {
                var element = $(this)
                setTimeout(function () {
                    element.addClass("is-visible");
                }, index * 60);
            });
        }, 500);

        clearTimeout(animateReactionsOut);
    });

    $(".options").mouseleave(function () {
        var parent = $(this)

        animateReactionsOut = setTimeout(function () {
            parent.removeClass("active");
            parent.find(".reaction").removeClass("is-visible");
        }, 500);

        clearTimeout(animateReactionsOn);
    });

    var dataPopupOld = null;
    var dataPopupNew = null;


    $(".options .button").click(function () {
        var children = $(this)
        var parent = $(this).parent()

        if ($(this).parent().is(".Like, .Love, .Thankful, .Haha, .Wow, .Sad, .Angry")) {
            parent.removeClass("Like Love Thankful Haha Wow Sad Angry");
            parent.addClass("default");
            parent.find(".button").text("Like");
        } else {
            parent.addClass("Like");
        }

        if ($(this).parent().hasClass("default")) {
            $(this).addClass("Like");
        }
    });


    $(".reaction").click(function () {
        dataPopupNew = $(this).attr("data-popup");

        $(".options").removeClass("default");

        $(".options .button").text(dataPopupNew);

        $('.options:contains(Like)').css('color', 'rgb(88, 144, 255)');
        $('.options:contains(Love)').css('color', 'rgb(242, 82, 104)');
        $('.options:contains(Thankful)').css('color', 'rgb(157, 135, 210)');
        $('.options:contains(Haha), .options:contains(Wow), .options:contains(Sad)').css('color', 'rgb(240, 186, 21)');
        $('.options:contains(Angry)').css('color', 'rgb(247, 113, 75)');

        $(".options").removeClass(dataPopupOld);
        $(".options").addClass(dataPopupNew);

        dataPopupOld = dataPopupNew
    });
});