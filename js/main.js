(function() {
    "use strict";

    if(Modernizr.touch ) {
        $("#container").removeClass("intro-effect-sidefixed");
        $("#container").addClass("mobile-layout");
    }

    if ($('.inline-popups').length > 0){
        $('.inline-popups').magnificPopup({
            delegate: 'a',
            removalDelay: 500,
            callbacks: {
                beforeOpen: function() {
                   this.st.mainClass = this.st.el.attr('data-effect');
                }
            },
            midClick: true
        });
    }

    $(".btn-popups").click(function(){
        var type = $(this).attr("data-type");
        $("#type").attr("value",type);
        $(".type-cara").html(type);
    });

    $('.back-to-top').click(function(){
        $('html,body').animate({
            scrollTop: 0
        }, 1500);

        $('.btn-to-top').removeClass('show');
    });

    $('.show-btn-2').click(function(){
        $('.hide_content_2').slideToggle();
    });

    $('.show-btn').click(function(){
        $('.hide_content').slideToggle();
    });

    $('#menu li a.parent').click(function() {
        var $this = $(this);
        var li = $("#menu li");
        var parentli = $this.parent("li");
        var isShow = false;
        if(parentli.hasClass("show-parent")){ isShow = true; }

        li.removeClass("show-parent");
        if(!isShow){
            parentli.addClass("show-parent");
        }
    });

    //image slider 
    $('.fadein img:gt(0)').hide();
    setInterval(function() {
            $('.fadein :first-child').fadeOut(2000)
                .next('img').fadeIn()
                .end().appendTo('.fadein');
        },
        6000);
    //lightbox
    $('.lightbox').lightGallery();
    //justify gallery
    $('#mygallery').justifiedGallery({
        rowHeight: 130,
        lastRow: 'justify',
        margins: 10
    });

  
    //responsive menu
    $('#menu').slicknav();

    //create the slider
    // $('.slicknav_nav a').click(function() {
    //     if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
    //         var target = $(this.hash);
    //         target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    //         if (target.length) {
    //             $('html,body').animate({
    //                 scrollTop: target.offset().top
    //             }, 1500);
    //             return false;
    //         }
    //     }
    // });

    $('.slicknav_nav li a.parent').click(function() {
        var $this = $(this);
        var li = $(".slicknav_nav li");
        var parentli = $this.parent("li");
        var isShow = false;
        if(parentli.hasClass("show-parent")){ isShow = true; }

        li.removeClass("show-parent");
        if(!isShow){
            parentli.addClass("show-parent");
        }
    });
  
    //create the slider
    $('.cd-testimonials-wrapper').flexslider({
        selector: ".cd-testimonials > li",
        animation: "slide",
        controlNav: false,
        slideshow: false,
        smoothHeight: true,
        start: function() {
            $('.cd-testimonials').children('li').css({
                'opacity': 1,
                'position': 'relative'
            });
        }
    });

    if($('#container').hasClass('modify')){
        $('.sub-nav').addClass('move');
        $('.btn-to-top').addClass('show');
    }

})();
