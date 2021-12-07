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

    flexArticleStart();
    // add article
    $('#voirplus').on('click', function(e) {
        e.preventDefault();

        let html = '<div class="article">\n' +
            '                <div class="article_text">\n' +
            '                    <h2>titre article 1</h2>\n' +
            '                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam autem, dignissimos dolorum et eum facilis hic id, iusto laboriosam nemo non placeat quas tempore vitae voluptas! Alias dignissimos doloremque, ex nam necessitatibus nesciunt officia quaerat, quasi, quibusdam quis quos temporibus!</p>\n' +
            '                </div>\n' +
            '                <div class="article_diapo">\n' +
            '                    <div class="flexslider flexArticle">\n' +
            '                        <ul class="slides">\n' +
            '                            <li><img src="https://picsum.photos/id/122/300/200" /></li>\n' +
            '                            <li><img src="https://picsum.photos/id/123/300/200" /></li>\n' +
            '                        </ul>\n' +
            '                    </div>\n' +
            '                </div>\n' +
            '            </div>\n' +
            '\n' +
            '            <div class="article">\n' +
            '                <div class="article_text">\n' +
            '                    <h2>titre article 1</h2>\n' +
            '                    <p>Lorem ipsum dolor sit amet, consej kj hdfk gkdfjghkjdf hgkjdfh gkj dfshkj ctetur adipisicing elit. Aperiam autem, dignissimos dolorum et eum facilis hic id, iusto laboriosam nemo non placeat quas tempore vitae voluptas! Alias dignissimos doloremque, ex nam necessitatibus nesciunt officia quaerat, quasi, quibusdam quis quos temporibus!</p>\n' +
            '                </div>\n' +
            '                <div class="article_diapo">\n' +
            '                    <div class="flexslider flexArticle">\n' +
            '                        <ul class="slides">\n' +
            '                            <li><img src="https://picsum.photos/id/124/300/200" /></li>\n' +
            '                            <li><img src="https://picsum.photos/id/125/300/200" /></li>\n' +
            '                        </ul>\n' +
            '                    </div>\n' +
            '                </div>\n' +
            '            </div>';
        // enlever le btn
        $(this).fadeOut(500);
        // ajouter à la fin de #articles => append
        $('#articles').append(html);
        flexArticleStart();
    });
});

function flexArticleStart()
{
    $('.flexArticle').flexslider({
        controlNav: false,
    });
}