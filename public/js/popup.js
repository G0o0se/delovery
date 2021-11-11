$('.close-popup').on('click', function() {
    $(this).closest('.popup').hide();
});

$('.btn-add').on('click', function() {
    $('.popup').show();
});


$(document).ready(function() {
    const str = window.location.pathname;
    document.getElementById("name").innerHTML = str.substr(6);
    window.scrollTo({
        top: window.innerHeight-300,
        behavior: "smooth"
    });
});