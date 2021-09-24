$('.menu__shop').slick({
    dots: false,
    infinite: true,
    speed: 400,
    arrows: false,
    slidesToScroll: 3,
    slidesToShow: 7,
    variableWidth: true,
    responsive: [{
            breakpoint: 1200,
            settings: {
                variableWidth: true,
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                centerMode: true,
            }
        },
        {
            breakpoint: 600,
            settings: {
                variableWidth: true,
                infinite: true,
                slidesToShow: 2,
                slidesToScroll: 2,
                centerMode: true,
            }
        },
        {
            breakpoint: 480,
            settings: {
                variableWidth: true,
                infinite: true,
                slidesToShow: 2,
                slidesToScroll: 2,
                centerMode: true,
            }
        }
    ]
});








