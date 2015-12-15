//jQuery to collapse the navbar on scroll
/*$(window).scroll(function () {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
    var scrolltop = $(window).scrollTop();

    var portfolio = $('#history');
    var port_offset = portfolio.offset();

    var service = $('#achivements');
    var ser_offset = service.offset();

    console.log("scroll-top: " + scrolltop);
    //console.log("about-top" + about_offset.top);

    var about = $('#uniform');
    var about_offset = about.offset();

    var contact = $('#location');
    var contact_offset = contact.offset();


    if (scrolltop >= (port_offset.top - 200)) {
        $('.tltp').css({
            "color": "white",
            "text-shadow": "2px 2px 4px black, 2px 2px 4px red, 2px 3px 4px green"
        });
        $(function () {
            $('.tltp').textillate({ in : {
                    delay: 40,
                    delayScale: 1
                }
            });
        });

    }
    if (scrolltop >= (ser_offset.top - 200)) {
        $('.tlts').css({
            "color": "white",
            "text-shadow": "2px 2px 4px black, 2px 2px 4px red, 2px 3px 4px green"
        });
        $(function () {
            $('.tlts').textillate();
        });
    }
    if (scrolltop >= (about_offset.top - 200)) {
        $('.tlta').css({
            "color": "white",
            "text-shadow": "2px 2px 4px black, 2px 2px 4px red, 2px 3px 4px green"
        });
        $(function () {
            $('.tlta').textillate();
        });
    }
    if (scrolltop >= (contact_offset.top - 200)) {
        $('.tltc').css({
            "color": "white",
            "text-shadow": "2px 2px 4px black, 2px 2px 4px red, 2px 3px 4px green"
        });
        $(function () {
            $('.tltc').textillate();
        });
    }


});*/

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function () {
    $('a.page-scroll').bind('click', function (event) {
        var $anchor = $(this);
        $('html, body').animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
