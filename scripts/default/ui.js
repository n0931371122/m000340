'use strict';
$(function (){

    var windowW,mobileMode;
    $(".jqimgFill").imgLiquid();
    imgFill();
    /* ==========================================================================
		[layout]
 	==========================================================================*/
    $("header").each(function () {
        $(".menu-toggle").click(function () {
            $("html").toggleClass("menuOpen");
        });
        $("header .mask").click(function () {
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
            effect:'fade',
            fadeEffect: {
                crossFade: true
            },
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
    $("#about").each(function(){
        var url = location.href;
        if (url.indexOf('?') != -1) {
            var nav = url.split('?')[1].split('=')[1];
            if(nav==2){
                $(window).scrollTop($(".about-section-2").offset().top);
            }
            else if(nav==3){
                $(window).scrollTop($(".about-section-3").offset().top);
            }
        } 
    });
    $("#news").each(function(){
        new Swiper ('.swiper-container',{
            loop: true, 
            slidesPerView: 1,
            centeredSlides:true,
            centeredSlidesBounds:true,
            speed:1000,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
            breakpoints: {
                768: {
                    slidesPerView:1.3,
                },
                1200: {
                    slidesPerView: 2.16,
                },
            }
        }) 
    });
    $("#methods").each(function(){
        $(".links .toggle").click(function(){
            $(this).toggleClass("show").next().stop().slideToggle();
        });
    });
    $("#projects").each(function(){
        if(windowW<=1199){
            $(".item").removeAttr("data-aos-delay");
        }
    });
    $("#project").each(function(){
        new Swiper ('.swiper-container',{
            loop: true, 
            slidesPerView: 1,
            centeredSlides:true,
            centeredSlidesBounds:true,
            speed:500,
            spaceBetween:24,
            autoHeight:true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
            breakpoints: {
                768: {
                    spaceBetween:24,
                    slidesPerView: 1.4,
                    height:140,
                },
                992: {
                    spaceBetween:16,
                    slidesPerView: 3
                },
            }
        }) 
        Fancybox.bind('[data-fancybox="gallery"]', {
            closeButton: "top",
            changeSpeed:2000,
            Thumbs: false,
            Image: {
                click: "close",
                wheel: "slide",
                zoom: false,
            },
            Carousel:{
                friction: 0,
            },
            on: {
                initCarousel:(fancybox)=>{
                    console.log(fancybox.$closeButton);
                    $(fancybox.$carousel).find(".is-prev").html("<i class='icon-prev text-hover-green0BBD6E font-40'></i>");
                    $(fancybox.$carousel).find(".is-next").html("<i class='icon-next text-hover-green0BBD6E font-40'></i>");
                    $(fancybox.$closeButton).html("<i class='icon-close text-hover-green0BBD6E font-24'></i>");
                },

            },

        });
    });
    $("#contact").each(function(){
        $('main .selectpicker').on('changed.bs.select', function (e, clickedIndex, isSelected, previousValue) {
            $("main .bootstrap-select").addClass("changed");
        });

    });
    aosInit();
    /* ==========================================================================
		[resize]
     ==========================================================================*/

    function resize(){
        windowW=$(window).innerWidth();
        windowW<992?mobileMode=true:mobileMode=false;
        if(mobileMode){
             $("footer .info").append($("footer .logo-wrapper .max415 .author").detach());
        }
        else{
            $("footer .logo-wrapper .max415").append($("footer .info .author").detach());
        }
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

