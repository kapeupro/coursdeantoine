console.log('plug jquery')

$(window).on('load',function() {
    $('#flexslider1').flexslider({
        directionNav: false,
    });

    $('#flexslider2').flexslider({
        animation: "slide",
        animationLoop: false,
        itemWidth: 210,
        itemMargin: 15,
        controlNav: false,

    });


    const burger = $('#burger');
    const nav = $('#navigation');
    burger.on('click', function() {
        if(burger.hasClass('open')) {
            burger.removeClass('open');
            nav.fadeOut(500);
            burger.children('i').removeClass('fa-times')
        } else {
            burger.addClass('open');
            nav.fadeIn(500);
            burger.children('i').addClass('fa-times')
        }
    });


    $('.flexArticle').flexslider({
        controlNav: false,
    });


});