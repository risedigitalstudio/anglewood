$ = jQuery;

$( document ).ready(function() {
    
    AOS.init(
        {
            startEvent: 'DOMContentLoaded',
            disable: 'mobile'
        }
    );
    

    $('#hamburgerMenu').on('click', function () {
        $('#headerDrawer').css({'display':'block'});
    })   

    $('#drawerClose').on('click', function () {
        $('#headerDrawer').css({'display':'none'});
    })
    
    $('.main-carousel').flickity({
        // options
        cellAlign: 'left',
        contain: true,
        wrapAround: true,
        imagesLoaded: true
    });
    
    $('.scroll').click(function(e){
        e.preventDefault();
        var elementClicked= $(this).attr("href");
        var destination = $(elementClicked).offset().top - 50;
        $("html:not(:animated), body:not(:animated)").animate({
            "scrollTop" : destination
        }, 600);
    });
    
    
//      $('.recent-projects-slider').slick({
//          slidesToShow: 3,
//          slidesToScroll: 3,    
//          autoplay: false,
//          infinite: true,
//          autoplaySpeed: 10000,
//          arrows: true,
//          prevArrow: $('.prev'),
//          nextArrow: $('.next') 
//      });
    
    $(".set > a").on("click", function(e) {
          e.preventDefault();
        if ($(this).hasClass("active")) {
          $(this).removeClass("active");
          $(this)
            .siblings(".content")
            .slideUp(150);
          $(".set > a i.minus").hide();
          $(".set > a i.plus").show();
        } else {
          $(".set > a i.minus").hide();
          $(".set > a i.plus").show();
          $(this)
            .find("i.plus").hide();
        $(this)
            .find("i.minus").show();
          $(".set > a").removeClass("active");
          $(this).addClass("active");
          $(".content").slideUp(150);
          $(this)
            .siblings(".content")
            .slideDown(150);
        }
      });
    
    
    
    
    
    
    
    
    
    $(window).scroll(function() {
        var distance_from_top = $(window).scrollTop();
    //        console.log(distance_from_top);

        if (distance_from_top >= 448) {
    //            console.log('down');
            $('.sub-nav-tables').addClass('subNavSticky');
        } else {
            $('.sub-nav-tables').removeClass('subNavSticky');
        }

    }); 
        
    $screenHeight = $( window ).height();
//    $homeHeight = $('#home').height();
//    
//    $homeDivStart = 1;
//    $homeDivEnd = $homeHeight = $('#home').height()  - 96;

    $forSaleStart = $('#for-sale').offset().top -131;
    $forSaleEnd = $forSaleStart + $('#for-sale').height() -131 + 448;

    $portfolioStart = $('#portfolio').offset().top -131;
    $portfolioEnd = $portfolioStart + $('#portfolio').height() -131 + 448;
    
    $faqStart = $('#faq').offset().top -131;
    $faqEnd = $faqStart + $('#faq').height() -131 + 448;
    
    $orderingProcessStart = $('#ordering-process').offset().top -131;
    $orderingProcessEnd = $orderingProcessStart + $('#ordering-process').height() -131 + 448;
    
    $maintenanceStart = $('#maintenance').offset().top -131;
    $maintenanceEnd = $maintenanceStart + $('#maintenance').height() -131 + 448;
    
    
    $(window).scroll(function() {
//        console.log($(this).scrollTop());
//        console.log('start' + $forSaleStart);
//        console.log('end' + $forSaleEnd);
        if ($(this).scrollTop() > $forSaleStart && $(this).scrollTop() < $forSaleEnd) {
            $('.forSaleLink').addClass('activeNav'); $('.forSaleLink').siblings().removeClass('activeNav');
        }else if ( $(this).scrollTop() > $portfolioStart && $(this).scrollTop() < $portfolioEnd ){
            $('.portfolioLink').addClass('activeNav'); $('.portfolioLink').siblings().removeClass('activeNav');
        } else if ($(this).scrollTop() > $faqStart && $(this).scrollTop() < $faqEnd) {
            $('.faqLink').addClass('activeNav');
            $('.faqLink').siblings().removeClass('activeNav');
        } else if ($(this).scrollTop() > $orderingProcessStart && $(this).scrollTop() < $orderingProcessEnd) {
            $('.orderingProcessLink').addClass('activeNav'); $('.orderingProcessLink').siblings().removeClass('activeNav');
        } else if ($(this).scrollTop() > $maintenanceStart && $(this).scrollTop() < $maintenanceEnd) {
            $('.maintenanceLink').addClass('activeNav'); $('.maintenanceLink').siblings().removeClass('activeNav');
        }
        
    });
    
});


