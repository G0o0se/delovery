$('.close__popup').on('click', function() {
    $(this).closest('.popup').hide();
    $('.popup-fade').hide();
});

$('.popup-fade').on('click', function() {
    $('.popup-fade').hide();
    $('.popup').hide();
});


$('.btn_add').on('click', function() {
    $('.popup').show();
});

/*$(".btn_add").click(function(){
   $("body").addClass("modal");
});*/

/*$('.popup-fade').on('click', function() {
    $('.popup-fade').hide();
    $('.attention__ok').hide();
});
$('.btn_order').on('click', function() {
    $('.attention__ok').show();
    $('.popup-fade').show();
});*/

$('.btn_ok').on('click', function() {
    $('.popup-fade').hide();
    $('.attention__ok').hide();
});


$('.popup-fade').on('click', function() {
    $('.popup-fade').hide();
    $('.attention').hide();
});
$('.btn_order').on('click', function() {
   $('.attention__ok').show();
   $('.popup-fade').show();
});



$('#cart').on('click', function() {
    $('.shopcart').show();
});

$('.menu__wrapper').on('click', function() {
    $('.menu__main').show();
});

$('.cross').on('click', function() {
    $('.menu__main').hide();
});

$('.btn_filters').on('click', function() {
    $('.filters').show();
    $('.popup-fade').show();
});

$('.cross__filter').on('click', function() {
    $('.filters').hide();
    $('.popup-fade').hide();

});

$('.btn_time').on('click', function() {
    $('.delivery').show();
    $('.popup-fade').show();

});

$('.cross__delivery').on('click', function() {
    $('.delivery').hide();
    $('.popup-fade').hide();

});


$('.popup-fade').on('click', function() {
    $('.popup-fade').hide();
    $('.delivery').hide();
});


$('.popup-fade').on('click', function() {
    $('.popup-fade').hide();
    $('.filters').hide();
});


$('.btn_accept').on('click', function() {
    $('.popup-fade').hide();
    $('.filters').hide();
});

$('.btn_accept').on('click', function() {
    $('.popup-fade').hide();
    $('.add__cart').hide();
});

$('.btn__cart').on('click', function() {
    $('.add__cart').show();
    $('.popup-fade').show();
});


$('.cross__delivery').on('click', function() {
    $('.add__cart').hide();
    $('.popup-fade').hide();

});



$('.btn_add__address').on('click', function() {
    $('.add__address').show();
    $('.popup-fade').show();
});


$('.cross__delivery').on('click', function() {
    $('.add__address').hide();
    $('.popup-fade').hide();

});

$(document).ready(function()
{
var order = $('.shopc__items').length;
$("baskettot").attr("data-amount-goods", order)


});
























