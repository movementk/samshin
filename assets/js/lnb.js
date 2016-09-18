(function($) {
    $(document).on('click', '#lnb .dropdown-menu > li > a', function(e) {
        if ($(this).siblings('ul').length > 0) {
            if ($(this).parent().hasClass('active')) {
                $(this).parent().removeClass('active');
            } else {
                $(this).parent().siblings('.active').removeClass('active');
                $(this).parent().addClass('active');
            }
            e.preventDefault();
        }
    });
})(jQuery);
