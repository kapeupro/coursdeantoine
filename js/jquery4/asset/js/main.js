const input = $('#input');
const liste = $('#liste');

$("#submitted").on('click', function(e) {
    e.preventDefault();
    // recupere la value dans input
    let data = input.val().trim();
    if(data !== '') {
        liste.prepend('<li>' + data + ' <input type="checkbox"></li>');
        input.val('');
    } else {
        console.log('input vide');
    }
})