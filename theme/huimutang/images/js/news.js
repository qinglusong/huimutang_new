
// // swiper

var content=new Swiper('.news-container', {



});



$('.tool-item a.top').click(function (e) {
    e.preventDefault();
    $('html, body').animate({scrollTop: '0px'}, 800);
});
$('.tool-item a.back').click(function (e) {
    e.preventDefault();
    content.slideTo(0, 1000, false);//切换到第一个slide，速度为1秒
});
$('.tool-item a.right').click(function (e) {
    e.preventDefault();
    content.slideNext();
});
$('.tool-item a.left').click(function (e) {
    e.preventDefault();
    content.slidePrev();
});




