function showButton() {


    var button = $('.scrolltotop'), //button that scrolls user to top
        view = $(window),
        timeoutKey = -1;

    $(document).on('scroll', function () {
        if (timeoutKey) {
            window.clearTimeout(timeoutKey);
        }
        timeoutKey = window.setTimeout(function () {

            if (view.scrollTop() > 100) {
                button.fadeIn();
            } else {
                button.fadeOut();
            }
        }, 100);
    });
}

$('.scrolltotop').on('click', function () {
    $('html, body').stop().animate({
        scrollTop: 0
    }, 500, 'linear');
    return false;
});

//call function on document ready
$(function () {
    showButton();
});
