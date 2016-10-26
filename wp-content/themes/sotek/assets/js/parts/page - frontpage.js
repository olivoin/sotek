jQuery(document).ready(function($) {
    
    $('#frontpage').fullpage({
        navigation: true,
        navigationPosition: 'right',

        //events
        onLeave: function(index, nextIndex, direction){},
        afterLoad: function(anchorLink, index){
            var slideTotal = $('#frontpage .section').size();
            $('.section-counter-total').html(slideTotal);
        },
        afterRender: function(){},
        afterResize: function(){},
        afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){
            
            var loadedSlide = $(this)
            var slideCurrent = $('#frontpage .section.active').eq($('#frontpage .section.active'));
            
            
            loadedSlide.find('.section-counter-current').html(slideCurrent);
            
            
        },
        onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex){}
    });
    
    $('.section-hello a').click(function(){
      $.fn.fullpage.moveSectionDown();
    });
    
});