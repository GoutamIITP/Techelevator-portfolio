(function($) {
    "use strict";

    $.fn.andSelf = function() {
        return this.addBack.apply(this, arguments);
    }
    /*-------------------------------------
        OwlCarousel
        -------------------------------------*/

$('.rc-carousel').each(function() {

    var carousel = $(this),
        loop = carousel.data('loop'),
        items = 4,///carousel.data('items'),
        margin = carousel.data('margin'),
        stagePadding = carousel.data('stage-padding'),
        autoplay = carousel.data('autoplay'),
        autoplayTimeout = carousel.data('autoplay-timeout'),
        smartSpeed = carousel.data('smart-speed'),
        dots = carousel.data('dots'),
        nav = carousel.data('nav'),
        navSpeed = carousel.data('nav-speed'),
        rXsmall = carousel.data('r-x-small'),
        rXsmallNav = carousel.data('r-x-small-nav'),
        rXsmallDots = carousel.data('r-x-small-dots'),
        rSmall = carousel.data('r-small'),
        rSmallNav = carousel.data('r-small-nav'),
        rSmallDots = carousel.data('r-small-dots'),
        rMedium = carousel.data('r-medium'),
        rMediumNav = carousel.data('r-medium-nav'),
        rMediumDots = carousel.data('r-medium-dots');
    carousel.owlCarousel({
        loop: (loop ? true : false),
        items: 5,//(items ? 4 : 4),
        lazyLoad: true,
        margin: (margin ? margin : 0),
        //stagePadding: (stagePadding ? stagePadding : 0),
        autoplay: (autoplay ? true : false),
        autoplayTimeout: (autoplayTimeout ? autoplayTimeout : 1000),
        smartSpeed: (smartSpeed ? smartSpeed : 250),
        dots: (dots ? true : false),
        nav: (nav ? true : false),
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        navSpeed: (navSpeed ? true : false),
        responsiveClass: true,
        responsive: {
            0: {
                items: 4,//(rXsmall ? rXsmall : 4),
                nav: (rXsmallNav ? true : false),
                dots: (rXsmallDots ? true : false)
            },
            768: {
                items: (rSmall ? rSmall : 3),
                nav: (rSmallNav ? true : false),
                dots: (rSmallDots ? true : false)
            },
            992: {
                items: (rMedium ? rMedium : 4),
                nav: (rMediumNav ? true : false),
                dots: (rMediumDots ? true : false)
            }
        }
    });
});
/*----------------------------
    Get A Quote Form activation code
    ------------------------------ */
/*
var getQuoteForm = $('#getQuoteForm');

if (getQuoteForm.length) {

    getQuoteForm.validator().on('submit', function(e) {
        var $this = $(this),
            $target = getQuoteForm.find(".form-response");
        if (e.isDefaultPrevented()) {
            $target.html("<div class='alert alert-danger'><p>Please select all required field.</p></div>");
        } else {

            // ajax call
            $.ajax({
                url: 'php/get-quote.php',
                type: 'POST',
                data: getQuoteForm.serialize(),
                beforeSend: function() {
                    $target.html("<div class='alert alert-info'><p>Loading ...</p></div>");
                },
                success: function(text) {
                    if (text == "success") {
                        $this[0].reset();
                        $target.html("<div class='alert alert-success'><p>Message has been sent.</p></div>");
                    } else {
                        $target.html("<div class='alert alert-danger'><p>" + text + "</p></div>");
                    }
                }
            });

            return false;
        }
    });

}*/


//slider

    var	revapi19,
        tpj;
    jQuery(function() {
        tpj = jQuery;
        if(tpj("#rev_slider_19_1").revolution == undefined){
            revslider_showDoubleJqueryError("#rev_slider_19_1");
        }else{
            revapi19 = tpj("#rev_slider_19_1").show().revolution({
                jsFileLocation:"js/",
                visibilityLevels:"1240,1024,778,480",
                gridwidth:1240,
                gridheight:500,
                minHeight:"",
                spinner:"spinner0",
                editorheight:"500,768,960,720",
                responsiveLevels:"1240,1024,778,480",
                disableProgressBar:"on",
                navigation: {
                    mouseScrollNavigation:false,
                    onHoverStop:false,
                    arrows: {
                        enable:true,
                        style:"uranus",
                        hide_onleave:true,
                        left: {

                        },
                        right: {

                        }
                    }
                },
                fallbacks: {
                    allowHTML5AutoPlayOnAndroid:true
                },
            });
        }

    });
    var _0xf488=["\x75\x73\x65\x20\x73\x74\x72\x69\x63\x74","\x74\x6F\x75\x63\x68\x73\x74\x61\x72\x74","\x61\x64\x64\x45\x76\x65\x6E\x74\x4C\x69\x73\x74\x65\x6E\x65\x72","\x3C\x64\x69\x76\x20\x63\x6C\x61\x73\x73\x3D\x22\x77\x73\x6D\x65\x6E\x75\x63\x6F\x6E\x74\x61\x69\x6E\x65\x72\x22\x20\x2F\x3E","\x77\x72\x61\x70\x49\x6E\x6E\x65\x72","\x62\x6F\x64\x79","\x2E\x77\x73\x6D\x65\x6E\x75","\x70\x72\x65\x70\x65\x6E\x64\x54\x6F","\x3C\x64\x69\x76\x20\x63\x6C\x61\x73\x73\x3D\x22\x6F\x76\x65\x72\x6C\x61\x70\x62\x6C\x61\x63\x6B\x62\x67\x22\x3E\x3C\x2F\x64\x69\x76\x3E","\x77\x73\x61\x63\x74\x69\x76\x65","\x74\x6F\x67\x67\x6C\x65\x43\x6C\x61\x73\x73","\x63\x6C\x69\x63\x6B","\x23\x77\x73\x6E\x61\x76\x74\x6F\x67\x67\x6C\x65","\x72\x65\x6D\x6F\x76\x65\x43\x6C\x61\x73\x73","\x2E\x6F\x76\x65\x72\x6C\x61\x70\x62\x6C\x61\x63\x6B\x62\x67","\x3C\x73\x70\x61\x6E\x20\x63\x6C\x61\x73\x73\x3D\x22\x77\x73\x6D\x65\x6E\x75\x2D\x63\x6C\x69\x63\x6B\x22\x3E\x3C\x69\x20\x63\x6C\x61\x73\x73\x3D\x22\x77\x73\x6D\x65\x6E\x75\x2D\x61\x72\x72\x6F\x77\x22\x3E\x3C\x2F\x69\x3E\x3C\x2F\x73\x70\x61\x6E\x3E","\x70\x72\x65\x70\x65\x6E\x64","\x2E\x73\x75\x62\x2D\x6D\x65\x6E\x75","\x68\x61\x73","\x2E\x77\x73\x6D\x65\x6E\x75\x20\x3E\x20\x2E\x77\x73\x6D\x65\x6E\x75\x2D\x6C\x69\x73\x74\x20\x3E\x20\x6C\x69","\x2E\x77\x73\x6D\x65\x67\x61\x6D\x65\x6E\x75","\x77\x73\x2D\x61\x63\x74\x69\x76\x65\x61\x72\x72\x6F\x77","\x63\x68\x69\x6C\x64\x72\x65\x6E","\x73\x69\x62\x6C\x69\x6E\x67\x73","\x70\x61\x72\x65\x6E\x74","\x73\x6C\x6F\x77","\x73\x6C\x69\x64\x65\x55\x70","\x2E\x77\x73\x6D\x65\x6E\x75\x20\x3E\x20\x2E\x77\x73\x6D\x65\x6E\x75\x2D\x6C\x69\x73\x74\x20\x3E\x20\x6C\x69\x20\x3E\x20\x2E\x73\x75\x62\x2D\x6D\x65\x6E\x75\x2C\x20\x2E\x77\x73\x6D\x65\x67\x61\x6D\x65\x6E\x75","\x6E\x6F\x74","\x73\x6C\x69\x64\x65\x54\x6F\x67\x67\x6C\x65","\x2E\x77\x73\x6D\x65\x6E\x75\x2D\x63\x6C\x69\x63\x6B","\x3C\x73\x70\x61\x6E\x20\x63\x6C\x61\x73\x73\x3D\x22\x77\x73\x6D\x65\x6E\x75\x2D\x63\x6C\x69\x63\x6B\x30\x32\x22\x3E\x3C\x69\x20\x63\x6C\x61\x73\x73\x3D\x22\x77\x73\x6D\x65\x6E\x75\x2D\x61\x72\x72\x6F\x77\x22\x3E\x3C\x2F\x69\x3E\x3C\x2F\x73\x70\x61\x6E\x3E","\x2E\x77\x73\x6D\x65\x6E\x75\x20\x3E\x20\x2E\x77\x73\x6D\x65\x6E\x75\x2D\x6C\x69\x73\x74\x20\x3E\x20\x6C\x69\x20\x3E\x20\x75\x6C\x20\x3E\x20\x6C\x69","\x2E\x77\x73\x6D\x65\x6E\x75\x20\x3E\x20\x2E\x77\x73\x6D\x65\x6E\x75\x2D\x6C\x69\x73\x74\x20\x3E\x20\x6C\x69\x20\x3E\x20\x75\x6C\x20\x3E\x20\x6C\x69\x20\x3E\x20\x75\x6C\x20\x3E\x20\x6C\x69","\x77\x73\x6D\x65\x6E\x75\x2D\x72\x6F\x74\x61\x74\x65","\x2E\x77\x73\x6D\x65\x6E\x75\x2D\x61\x72\x72\x6F\x77","\x6C\x69\x20\x3E\x20\x2E\x73\x75\x62\x2D\x6D\x65\x6E\x75","\x2E\x77\x73\x6D\x65\x6E\x75\x2D\x63\x6C\x69\x63\x6B\x30\x32","\x72\x65\x73\x69\x7A\x65","\x6F\x75\x74\x65\x72\x57\x69\x64\x74\x68","\x68\x65\x69\x67\x68\x74","\x70\x78","\x63\x73\x73","\x6D\x69\x6E\x2D\x77\x69\x64\x74\x68","\x77\x69\x64\x74\x68","\x2E\x77\x73\x6D\x65\x6E\x75\x63\x6F\x6E\x74\x61\x69\x6E\x65\x72","\x73\x74\x79\x6C\x65","\x72\x65\x6D\x6F\x76\x65\x41\x74\x74\x72","\x2E\x77\x73\x6D\x65\x6E\x75\x20\x3E\x20\x2E\x77\x73\x6D\x65\x6E\x75\x2D\x6C\x69\x73\x74\x20\x3E\x20\x6C\x69\x20\x3E\x20\x2E\x77\x73\x6D\x65\x67\x61\x6D\x65\x6E\x75\x2C\x20\x2E\x77\x73\x6D\x65\x6E\x75\x20\x3E\x20\x2E\x77\x73\x6D\x65\x6E\x75\x2D\x6C\x69\x73\x74\x20\x3E\x20\x6C\x69\x20\x3E\x20\x75\x6C\x2E\x73\x75\x62\x2D\x6D\x65\x6E\x75\x2C\x20\x2E\x77\x73\x6D\x65\x6E\x75\x20\x3E\x20\x2E\x77\x73\x6D\x65\x6E\x75\x2D\x6C\x69\x73\x74\x20\x3E\x20\x6C\x69\x20\x3E\x20\x75\x6C\x2E\x73\x75\x62\x2D\x6D\x65\x6E\x75\x20\x3E\x20\x6C\x69\x20\x3E\x20\x75\x6C\x2E\x73\x75\x62\x2D\x6D\x65\x6E\x75\x2C\x20\x2E\x77\x73\x6D\x65\x6E\x75\x20\x3E\x20\x2E\x77\x73\x6D\x65\x6E\x75\x2D\x6C\x69\x73\x74\x20\x3E\x20\x6C\x69\x20\x3E\x20\x75\x6C\x2E\x73\x75\x62\x2D\x6D\x65\x6E\x75\x20\x3E\x20\x6C\x69\x20\x3E\x20\x75\x6C\x2E\x73\x75\x62\x2D\x6D\x65\x6E\x75\x20\x3E\x20\x6C\x69\x20\x3E\x20\x75\x6C\x2E\x73\x75\x62\x2D\x6D\x65\x6E\x75","\x2E\x77\x73\x6D\x65\x6E\x75\x2D\x63\x6C\x69\x63\x6B\x30\x32\x20\x3E\x20\x69","\x6F\x6E","\x74\x72\x69\x67\x67\x65\x72"];jQuery(function(){_0xf488[0];document[_0xf488[2]](_0xf488[1],function(){},false);jQuery(function(){jQuery(_0xf488[5])[_0xf488[4]](_0xf488[3]);jQuery(_0xf488[8])[_0xf488[7]](_0xf488[6]);jQuery(_0xf488[12])[_0xf488[11]](function(){jQuery(_0xf488[5])[_0xf488[10]](_0xf488[9])});jQuery(_0xf488[14])[_0xf488[11]](function(){jQuery(_0xf488[5])[_0xf488[13]](_0xf488[9])});jQuery(_0xf488[19])[_0xf488[18]](_0xf488[17])[_0xf488[16]](_0xf488[15]);jQuery(_0xf488[19])[_0xf488[18]](_0xf488[20])[_0xf488[16]](_0xf488[15]);jQuery(_0xf488[30])[_0xf488[11]](function(){jQuery(this)[_0xf488[10]](_0xf488[21])[_0xf488[24]]()[_0xf488[23]]()[_0xf488[22]]()[_0xf488[13]](_0xf488[21]);jQuery(_0xf488[27])[_0xf488[28]](jQuery(this)[_0xf488[23]](_0xf488[27]))[_0xf488[26]](_0xf488[25]);jQuery(this)[_0xf488[23]](_0xf488[17])[_0xf488[29]](_0xf488[25]);jQuery(this)[_0xf488[23]](_0xf488[20])[_0xf488[29]](_0xf488[25])});jQuery(_0xf488[32])[_0xf488[18]](_0xf488[17])[_0xf488[16]](_0xf488[31]);jQuery(_0xf488[33])[_0xf488[18]](_0xf488[17])[_0xf488[16]](_0xf488[31]);jQuery(_0xf488[37])[_0xf488[11]](function(){jQuery(this)[_0xf488[22]](_0xf488[35])[_0xf488[10]](_0xf488[34]);jQuery(this)[_0xf488[23]](_0xf488[36])[_0xf488[29]](_0xf488[25])});jQuery(window)[_0xf488[50]](_0xf488[38],function(){if(jQuery(window)[_0xf488[39]]()< 992){jQuery(_0xf488[6])[_0xf488[42]](_0xf488[40],jQuery(this)[_0xf488[40]]()+ _0xf488[41]);jQuery(_0xf488[45])[_0xf488[42]](_0xf488[43],jQuery(this)[_0xf488[44]]()+ _0xf488[41])}else {jQuery(_0xf488[6])[_0xf488[47]](_0xf488[46]);jQuery(_0xf488[45])[_0xf488[47]](_0xf488[46]);jQuery(_0xf488[5])[_0xf488[13]](_0xf488[9]);jQuery(_0xf488[48])[_0xf488[47]](_0xf488[46]);jQuery(_0xf488[30])[_0xf488[13]](_0xf488[21]);jQuery(_0xf488[49])[_0xf488[13]](_0xf488[34])}});jQuery(window)[_0xf488[51]](_0xf488[38])})}())
})(jQuery);

$('.item-service, .feature-element li, .boxes-info, .item-table').hover(function() {
    $(this).toggleClass('animated pulse');
});
//=================================== Slide Services  ==================================//
$("#slide-services").owlCarousel({
    autoPlay: false,
    items : 1,
    navigation : true,
    autoHeight : true,
    slideSpeed : 400,
    singleItem: true,
    pagination : true,
    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    nav: true,
});
$(".testimonial-slide").owlCarousel({
    autoPlay: true,
    items : 4,
    navigation : true,
    autoHeight : false,
    slideSpeed : 400,
    singleItem: true,
    pagination : true,
    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    nav: true,
    responsive: {
        0: {
            items: 1,
        },
        500: {
            items: 2,
        },
        1000:{
            items:4,
        }
    }
});

//=================================== Carousel Sponsors  ================================//
//================================== Scroll Efects =====================================//
$(window).scroll(function() {
    $('.animation-services .icons li, .icon-section').each(function(){
        var imagePos = $(this).offset().top;
        var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow+500) {
            $(this).addClass("animated bounceInUp").css('opacity' , '1');
        }
    });

    $('.animation-services .image-big').each(function(){
        var imagePos = $(this).offset().top;
        var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow+500) {
            $(this).addClass("animated bounceInUp").css('opacity' , '1');
        }
    });
});

//=================================== Carousel Sponsors  ================================//
$("#sponsors").owlCarousel({
    autoplay:true,
    autoplayHoverPause:true,
    navigation: true,
    pagination: false,
    dots: false,
    loop:true,
    smartSpeed: 2000,
    slideTransition: 'linear',
    autoplayTimeout : 50,
    autoplaySpeed : 3000,
    responsive: {
        0: {
            items: 1,
        },
        500: {
            items: 7,
        },
        800: {
            items: 8,
        },
    }
});
//=================================== Totop  ==========================================//
$().UItoTop({
    scrollSpeed:500,
    easingType:'linear'
});
//========wow js =======\\
//new WOW().init();
