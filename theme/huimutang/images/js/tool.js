(function(){
    if(document.documentElement.clientWidth <= 420){
        document.documentElement.style.fontSize = document.documentElement.clientWidth / 7.5 + 'px';
    }else if(document.documentElement.clientWidth > 420 && document.documentElement.clientWidth<= 767){
        document.documentElement.style.fontSize = 420 / 7.5 + 'px';
    }else{
        document.documentElement.style.fontSize = 50 + 'px';
    }
    $(window).resize(function(){
        if(document.documentElement.clientWidth <= 420){
            document.documentElement.style.fontSize = document.documentElement.clientWidth / 7.5 + 'px';
        }else if(document.documentElement.clientWidth > 420 && document.documentElement.clientWidth<= 767){
            document.documentElement.style.fontSize = 420 / 7.5 + 'px';
        }else{
            document.documentElement.style.fontSize = 50 + 'px';
        }
    })
})();
//
var titlebanner=new Swiper('#consult_sp1', {
    initialSlide :0,
    speed:1000,
    // autoplay: {
    //     delay: 5000,
    //     stopOnLastSlide: false,
    //     disableOnInteraction: true,
    // },
    pagination: {
        el: '.swiper-pagination',
    },
    navigation: {
        nextEl: '.home-bg-00 .swiper-button-next',
        prevEl: '.home-bg-00 .swiper-button-prev',
    },
    on: {
        slideChangeTransitionEnd: function(){

            }
        },
});



$('#alert-cls').on('click', function (e) {
    e.preventDefault();
    alertshow();
});

function  alertshow() {
    var body = $('body');
    if (body.hasClass('open-search')) {
        body.removeClass('open-search');
        $(this).siblings().removeClass('active');
    }

    if (body.hasClass('open')) {
        body.removeClass('open');
        $(body).css({"overflow":"auto"})
    } else {
        body.addClass('open');
    }
}


$('#alert-cls2').on('click', function (e) {
    e.preventDefault();
    $('#J_MobileNavBar').toggle();
});