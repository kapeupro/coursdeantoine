$(document).ready(function() {
    console.log('jquery 1');
    // DOM => SELECTION
    //$('div');
    //$('.titre');
    //$('nav ul li a');
    //$('.titre')[0];
    //$('.titre:first');
    // $('#titreCV').css('background-color', 'green');
    // $('#titreCV').css('color', 'white');
    $('#titreCV').css({
        'background-color': 'green',
        'color': 'white'
    });

    // selection des descendants directs, enfants
    // $('#monul').children().css('background-color', 'red');
    // $('#monul').children('.item3').css('background-color', 'red');
    // $('#monul').children().eq(1).css('background-color', 'red');

    //  find() => tous les descendant
    $('#monul').find('.item3').css('background-color', 'red');
    // $('.wrap').find('h2.titleSection').css({
    //     'background-color': 'purple',
    //     'color': 'orange'
    // })

    // next(), prev()
    $('.head').next().css('background-color', 'grey');
    $('.head').prev().css('opacity', '.4');

    // parent()
    $('#age').parent().css('font-weight', '700'); // .head
    $('#age').parent().parent().css('background-color', 'grey'); // .wrap

    // TEXTE

    const title = $('#titreCV');
    title.html('FullStack');
    title.after('<p>Après le titre</p>');
    title.before('<p>Avant le titre</p>');
    title.append('Super');
    title.prepend('Génial');
    $('#monul').append('<li>ITEM 4 ajouter aprés</li>');
    $('#monul').prepend('<li>ITEM 5 ajouter au debut de la liste</li>');

    // Entourer l'éléments sélectionné
    title.wrap('<section id="newsection"></section>')
    // Entourer les éléments de l'éléments sélectionné
    $('.head').wrapInner('<section id="innersection"></section>');


    // GESTION DES CLASS
    const el = $('h2.titleSection');
    console.log(el);
    //el.addClass('maclass');
    //el.removeClass('maclass');
    //el.toggleClass('maclass');
    //el.toggleClass('maclass');
    if(el.hasClass('maclass')) {
        el.removeClass('maclass');
        console.log('ici action sur autre chose')
    } else {
        el.addClass('maclass');
    }
    $('#divers').css('font-size', '4rem');
    $('#divers').css({
        'border': '1px solid red',
        'color': 'lime',
        'background-color': 'grey'
    });



    const boite = $('#boite');
    // Hauteur sans padding et sans border
    console.log('Height: ' + boite.height()); // 240
    // Hauteur sans border
    console.log('innerHeight: ' + boite.innerHeight()); // 280
    // Hauteur avec padding & border
    console.log('outerHeight: ' + boite.outerHeight()); // 300
    // + margin
    console.log('outerHeight(true): ' + boite.outerHeight(true)); // 360

    console.log('Width: ' + boite.width());
    console.log('innerWidth: ' + boite.innerWidth());
    console.log('outerWidth: ' + boite.outerWidth());
    console.log('outerWidth(true): ' + boite.outerWidth(true));


    // position par rapport à l'élément parent (le premier parent porteur de la position relative) si aucun c'est le body
    let positionBoite = boite.position();
    console.log(positionBoite);
    console.log('Position Top: ' + positionBoite.top);
    console.log('Position Left: ' + positionBoite.left);

    // position par rapport à l'élément générale
    let offsetBoite = boite.offset();
    console.log(offsetBoite);
    console.log('offsetTop: ' + offsetBoite.top);
    console.log('offsetLeft: ' + offsetBoite.left);


    // Event
    boite.on('click mouseenter', function() {
        console.log('click sur la boite');
        boite.css('background-color','green')
    });

    $(document).on('mousemove', function(e) {
        // console.log(e.pageX);
        // console.log(e.pageY);
        const log = $('#log');
        log.html('<p>X: '+e.pageX+' / Y: ' + e.pageY + '</p>');
    });

    $('.class1.class2')
    $('ul.dede li')
    $('.class1 .class2')
    $('nav#menu.dada')
    $('*');

    // selection  jquery ++
    // les elements vide
    $('.para:empty').css({
        height: '50px',
        //backgroundColor: 'lime',
        'background-color': 'lime'
    })

    $('.para:parent').css({
        height: '20px',
        //backgroundColor: 'lime',
        'background-color': 'red'
    })

    $(':header').css('font-size', '3rem');



    const link = $('#js_btn');
    const boxText = $('#boiteText');
    link.on('click', function(event) {
        event.preventDefault();
        if(boxText.hasClass('noactif')) {
            boxText.removeClass('noactif');
            boxText.html('Apparition');
        } else {
            boxText.addClass('noactif');
            boxText.html('disparition');
        }

        // apparition disparition
        //link.css('display', 'none');
        //link.css('visibility', 'hidden');
        // link.fadeOut(10, function() {
        //     link.fadeIn(1000);
        // });

        link.toggle(1000, function() {
            link.toggle(1000)
        })
    });

    // ANIMATION
    const photo = $('.photo');
    photo.on('click', function(e) {
        $(this).animate({
            top: '+=100px',
            right: '+=200px'
        }, 1000,"easeInOutBounce", function() {

            $(this).animate({
                top: '-=100px',
                right: '-=200px'
            }, 2000,"easeOutElastic", function() {
                $('.head').css('background-color', 'blue');
            });
        });
    });
});




