$(window).scroll(function () {

    show_r();
});

function show_r() {
    var hh = $(".bg-col-00").offset().top*wow.zoom*0.5;
    if($(window).width()>750){
        // console.log($(window).scrollTop())

        if( $(window).scrollTop()<hh || $(window).scrollTop() >1220*wow.zoom){
            $(".fixed").hide();
        }else{
            $(".fixed").show();
        }

    }
}
show_r();
// case
var caseGallery = new Swiper('.case-gallery .swiper-container', {
//
//     autoplay: false,
//     speed: 1000,
//     autoplayDisableOnInteraction: false,
    loop: true,
    centeredSlides: true,
    slidesPerView: 2,
//     pagination: '.swiper-pagination',
//     paginationClickable: true,
//     prevButton: '.case-gallery .swiper-button-prev',
//     nextButton: '.case-gallery .swiper-button-next',
    onInit: function(swiper) {
        swiper.slides[2].className = "swiper-slide swiper-slide-active";
    },
    // breakpoints: {
    //     668: {
    //         slidesPerView: 1,
    //     }
    // }

});

var caseList = new Swiper('.case-list .swiper-container', {
    loop: true
});



$('.case-gallery .swiper-button-next').on('click', function (e) {
    e.preventDefault();
    caseGallery.slideNext();
});

$(' .case-gallery .swiper-button-prev').on('click', function (e) {
    e.preventDefault();
    caseGallery.slidePrev();
});
$('.tool-item a.top').click(function (e) {
    e.preventDefault();
    $('html, body').animate({scrollTop: '0px'}, 800);
});

