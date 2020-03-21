window.mouseOnRight = false;
$(window).ready(function ($) {
    $('.styled').uniform();
    $('a.img-preview').fancybox({padding: 3});
    $('input[name=phone]').mask("+7(999)999-99-99");

    mainHeight();
    $(window).resize(function() {
        mainHeight();
    });

    new PerfectScrollbar('#right-side');
    const rightSide = document.querySelector('#right-side');
    $('#right-side').mouseover(function () {
        window.mouseOnRight = true;
    }).mouseleave(function () {
        window.mouseOnRight = false;
    });

    $(document).mousewheel(function (e) {
        if (!window.mouseOnRight) rightSide.scrollTop -= e.deltaY * 30;
    });
    
    // Reload page
    // setTimeout(function () {
    //     location.reload(true);
    // }, 900000);
});

function mainHeight() {
    var videoContainer = $('video');
        // rightSide = $('#right-side'),
        // rightSideContainer = $('#right-side > div');

    if ($(window).width() >= 1200) {
        if ($(window).width() < $(window).height()) {
            videoContainer.css({
                'width':$(window).width(),
                'height':'auto'
            });
        } else {
            videoContainer.css({
                'width':'auto',
                'height':$(window).height()
            });
        }
    }

    $('#right-side').css('height',$(window).height());
    // if (rightSide.height() > rightSideContainer.height()) {
    //     rightSideContainer.css({
    //         'top':'50%',
    //         'transform':'translateY(-50%)'
    //     });
    // } else {
    //     rightSideContainer.css({
    //         'top':0,
    //         'transform':'none'
    //     });
    // }
}