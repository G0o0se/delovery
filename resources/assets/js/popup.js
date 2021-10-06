$('.close-popup').on('click', function() {
    $(this).closest('.popup').hide();
});

$('.btn-add').on('click', function() {
    $('.popup').show();
});