(function($) {
    // 모바일, 태블릿 GNB 관련
    $(document).on('click', '#header .btn-menu', function() {
        $('body').addClass('gnb-open');
        $('#gnb-all .full:eq(0)').focus();
    });
    $(document).on('click', '#gnb-all .back', function() {
        $('body').removeClass('gnb-open');
        $('#header .btn-menu').focus();
    });
    $(document).on('click', '#gnb-all .menu > ul > li > a', function(e) {
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

    // 데스크탑 GNB 관련
    $(document).on('mouseenter focusin', '#gnb > .container > ul > li > a', function(e) {
        $('#gnb').addClass('open');
    });
    $(document).on('mouseleave', '#gnb > .container', function(e) {
        $('#gnb').removeClass('open');
    });
})(jQuery);
