'use strict';
$(function (){

    var windowW=$(window).innerWidth(),
        mobileMode,
        headerH=$("header").height();
    $(".jqimgFill").imgLiquid();
    imgFill();
    /* ==========================================================================
		[layout]
 	==========================================================================*/
    $("header").each(function () {
        $(".menu-toggle").click(function () {
            $("html").toggleClass("menuOpen");
        });
        $("header .bg").click(function () {
            $("html").removeClass("menuOpen");
        });
    });
    $(".goTop").on("click", function () {
        $("html, body").animate({ scrollTop: 0 }, 800);
    });
    $(window).scroll(function () {  
        $(window).scrollTop()>0? $("header").addClass("scroll"):$("header").removeClass("scroll");
        $(window).scrollTop() > 100?$(".goTop").addClass("show"): $(".goTop").removeClass("show");
    });

    /* ==========================================================================
		[page]
     ==========================================================================*/

     $("#index").each(function(){
        new Swiper ('.index-banner .swiper-container',{
            loop: true, 
            speed:1200,
            autoplay:{delay:5000},
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
            effect:'fade',
            fadeEffect: {
                crossFade: true
            },
        }) 
        new Swiper ('.index-section-1 .swiper-container',{
            loop: true, 
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        }) 
        new Swiper ('.index-section-3 .swiper-container',{
            loop: true, 
            slidesPerView: 1,
            spaceBetween:20,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                768: {
                slidesPerView: 2
                },
            }
        }) 
    });


    /* ==========================================================================
		[共用]
     ==========================================================================*/
    if($(".links").length>0){
        $(".links ul li").eq($(".wp").data("target")).find("a").addClass("active");
    }
    $(".banner-text-hide").each(function(){
        $(window).scroll(function(){
            if($(window).scrollTop()>20){
                $(".banner .font-165").addClass("hide");
            }
        });
    });
    $("header .menu a").hover(function(){
        $("header").addClass("menuHoverMode");
    },function(){
        $("header").removeClass("menuHoverMode");
    });

    aosInit();
    /* ==========================================================================
		[resize]
     ==========================================================================*/

    function resize(){
        windowW=$(window).innerWidth();
        windowW<992?mobileMode=true:mobileMode=false;
        if(mobileMode){
             $("footer .info").append($("footer .author").detach());
        }
        else{
            $("footer .logo-section .max415").append($("footer .author").detach());
        }
        $("#product").each(function(){
            if(mobileMode){
               
                $(".product").prepend($(".title").detach());
            }
            else{
                $(".title-next-dot").before($(".title").detach())
            }
        });

        var trigger_size = [576];
        trigger_size.forEach(function (ele) {
            if (windowW > ele) {
                $(window).width() <= ele ? location.reload() : "";
            } else {
                $(window).width() > ele ? location.reload() : "";
            }
        });
    }
    $(window).resize(function(){
        resize();
    }).trigger('resize');


})
function aosInit(){
    AOS.init({
        duration: 500,
        offset: 10,
        mirror: true,
    });
}

