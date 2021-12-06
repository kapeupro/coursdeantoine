const boxbtn = $('#btn');
const pour = $('#pour');
const contre = $('#contre');
const success = $('#success');

pour.on('click', function() {
    boxbtn.fadeOut(1000, function() {
        success.fadeIn(1000);
    });
});

contre.on('mouseenter', function() {
    let pourcentage1 = Math.floor(Math.random() * 100);
    let pourcentage2 = Math.floor(Math.random() * 100);
    $(this).animate({
        top: pourcentage1 + '%',
        left: pourcentage2 + '%',
    }, 2 );
});