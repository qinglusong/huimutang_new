/**
 * Created by PH on 2018/9/18.
 */
var topnum;
$(function () {
    topnum=300*wow.zoom;
    $(".right-tool").css("top", topnum+"px");
})

$(window).scroll(function () {

    if($(window).scrollTop() >$(".container.zoom-div").height()-$(window).height()-150*wow.zoom){

        $(".right-tool").css("top", "200px");
    }else{
        $(".right-tool").css("top", topnum+"px");
    }
});