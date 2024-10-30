$(document).ready(function(){
    /* Popup */
    var popup = $('.page-popup');
    $('a[href="#privacy-policy"]').bind('click', function(e) {
        e.preventDefault();
        popup.fadeIn();
    });
    $('.page-popup .close').bind('click', function(e) {
        e.preventDefault();
        popup.fadeOut();
    });
    $(document).keyup(function(e) {
        if(e.keyCode === 27) {
            popup.fadeOut();
        }
    });
});