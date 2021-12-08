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


