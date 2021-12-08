console.log('jquery Ajax');

const btn1 = $('#js_ajax_btn_1');

btn1.on('click', function() {
    $.ajax({
        type: "GET",
        url: "inc/ajax1.php",
        data: {},
        beforeSend: function() {
            btn1.fadeOut(100);
        },
        success: function(response) {
            btn1.fadeIn(100);
            console.log(response);
            //$("#js_response_1").html(response);
            if(response.success !== false) {
                $("#js_response_1").html(response.error);
            }
        },
        error: function() {
            console.log('error');
        }
    })
});

// btn_cocktail

const cocktails = $('#js_response_cocktail');

$('#btn_cocktail').on('click', function() {
    $.ajax({
        type: "GET",
        url: "https://www.thecocktaildb.com/api/json/v1/1/search.php?f=b",
        success: function(response) {
            //console.log(response.drinks);

            $.each(response.drinks, function(i, item) {
                console.log(item);

                cocktails.append(`<p>${ item.strDrink }</p>
                                <img width="100px" src="${ item.strDrinkThumb }" alt="${ item.strDrink }">
                                `);
            });
        },
    })
});


const btnNorris = $("#js_norris_btn");
const responseNorris = $("#js_response_norris");
btnNorris.on('click', function() {
    $.ajax({
        type: "GET",
        url: "https://api.chucknorris.io/jokes/random",
        success: function(response) {
            console.log(response);
            console.log(response.icon_url);
            console.log(response.value);
            responseNorris.html('<p>' + response.value + '</p><img src="' + response.icon_url + '">')
        }
    });
})

const form = $('#formulaire');
form.on('submit', function(e) {
    e.preventDefault();
    //let nom = $("#nom").val();
    //console.log(nom);
    $.ajax({
        type: "POST",
        // url: "inc/ajaxform.php",
        // data: {
        //   nom: nom,
        // },
        url: form.attr("action"),
        data: form.serialize(),
        //dataType: "json",
        success: function(response) {
            console.log(response);
            $('#error_nom').html(response.errors.nom);
        }
    });

});







