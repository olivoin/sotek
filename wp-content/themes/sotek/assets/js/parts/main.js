jQuery(document).ready(function($) {
    new WOW().init();
    $('.mobile-burger').click(function() {
        $('#nav_menu-2').slideToggle();
    });
});