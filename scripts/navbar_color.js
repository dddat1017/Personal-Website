// Script to add background color to the nav bar when scrolling down.
// Used in all pages.
$(window).on('scroll', function() {
    if($(window).scrollTop()){
        $('nav').addClass('black');
    }
    else
    {
        $('nav').removeClass('black');
    }
});
