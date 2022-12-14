//--------------------------------------------------------------------------------------------------------------------------
//スムーススクロール
$(function() {
    $('a[href^=#]').click(function() {
        var speed = 500;
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $("html, body").animate({
            scrollTop: position
        }, speed, "swing");
        return false;
    });
});


//--------------------------------------------------------------------------------------------------------------------------
//マウスホバーアニメーション（不透明度）
$(function() {
    $("img.hover,a.hover").hover(function() {
        $(this).fadeTo("fast", 0.7); // マウスオーバーで透明度を60%にする
    }, function() {
        $(this).fadeTo("fast", 1.0); // マウスアウトで透明度を100%に戻す
    });
});

//--------------------------------------------------------------------------------------------------------------------------
// setViewport
$(function() {
    tbView = 'width=1200px,maximum-scale=2.0,user-scalable=1';
    spView = 'width=device-width,initial-scale=1.0"';
    if (navigator.userAgent.indexOf('iPad') > 0 || (navigator.userAgent.indexOf('Android') > 0 && navigator.userAgent.indexOf('Mobile') == -1) || navigator.userAgent.indexOf('A1_07') > 0 || navigator.userAgent.indexOf('SC-01C') > 0) {
        $('head').prepend('<meta name="viewport" content="' + tbView + '" id="viewport">');
    } else if (navigator.userAgent.indexOf('iPhone') > 0 || navigator.userAgent.indexOf('iPod') > 0 || (navigator.userAgent.indexOf('Android') > 0 && navigator.userAgent.indexOf('Mobile') > 0)) {
        $('head').prepend('<meta name="viewport" content="' + spView + '" id="viewport">');
    }
});

//--------------------------------------------------------------------------------------------------------------------------
//スライドオープン
$(function() {
    $('.more_open').click(function() {
        $('.more_obj').toggle('slow');
    });
    $('.more_close').click(function() {
        $('.more_obj').toggle('slow');
    });
});

//----------------------------------------------------------------------------------------------------------------------------
//スライドオープン
$(function() {
    $('.open').on('click', function() {
        $(this).next('.open-body').slideToggle();
    });
});
//ボタンクリックでクラス切り替え
$(function() {
    $('.open').click(function() {
        $(this).toggleClass('active');
    });
});

//--------------------------------------------------------------------------------------------------------------------------
//スマホメニュー用プルダウン
$(function() {
    $("#hmenu-open").click(function() {
        $('.hmenu-warp').toggle("slow");
    })
    $("#hmenu-close a").click(function() {
        $('.hmenu-warp').hide("slow");
    });
});
//ボタンクリックでクラス切り替え
$(function() {
    $('#hmenu-open').click(function() {
        $(this).toggleClass('close');
    });
});

//--------------------------------------------------------------------------------------------------------------------------
//スマホ電話番号
$(function() {
    var ua = navigator.userAgent;
    if (ua.indexOf('iPhone') > 0 || ua.indexOf('Android') > 0) {
        $('.tel-link').each(function() {
            var str = $(this).text();
            $(this).html($('<a>').attr('href', 'tel:' + str.replace(/-/g, '')).append(str + '</a>'));
        });
    }
});

//----------------------------------------------------------------------------------------------------------------------------
//メニュー追随
//windowfixed-pc
if ($('#header').length) {
    jQuery(function($) {
        var fix = $('#header'),
            offset = fix.offset();
        $(window).scroll(function() {
            if ($(window).scrollTop() > offset.top) {
                fix.addClass('fixed'),
                    $('#alpha-content').css('margin-top', fix.height());
            } else {
                fix.removeClass('fixed'),
                    $('#alpha-content').css('margin-top', 0);
            }
        });
    });
}

//----------------------------------------------------------------------------------------------------------------------------
// PC、SP画像切り替え
$(function() {
    var wid = $(window).width();
    if (wid < 480) {
        $('.imgChange').each(function() {
            $(this).attr("src", $(this).attr("src").replace('-pc', '-sp'));
        });
        $('.imgChange2').each(function() {
            $(this).attr("src", $(this).data("img").replace('-pc', '-sp'));
        });
    } else {
        $('.imgChange2').each(function() {
            $(this).attr("src", $(this).data("img"));
        });
    }
});

//タブオープン
$(function pic() {
    $("#sel a").click(function pic() {
        $($("#sel a.sel").attr("href")).hide();
        $("#sel a.sel").removeClass("sel");
        $(this).addClass("sel");
        $($(this).attr("href")).fadeIn("fast");
        return false;
    });
});