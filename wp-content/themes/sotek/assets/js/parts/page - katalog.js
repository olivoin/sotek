jQuery(document).ready(function($) {
    
    var figure = $(".katalog-item").hover( hoverVideo, hideVideo );

    function hoverVideo(e) {  
        $('#katalog-video', this).get(0).play(); 
    }

    function hideVideo(e) {
        $('#katalog-video', this).get(0).pause(); 
    }
})