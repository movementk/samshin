(function($) {
    // make-yours 영역
    $(document).on('click', '#make-yours .btn-combine', function(e) {
        var $makeYours = $('#make-yours');
        var $btnCombineCaret = $makeYours.find('.btn-combine .glyphicon');
        if ($makeYours.hasClass('opened')) {
            $makeYours.removeClass('opened');
            $btnCombineCaret.removeClass('glyphicon-menu-up');
            $btnCombineCaret.addClass('glyphicon-menu-down');
        } else {
            $makeYours.addClass('opened');
            $btnCombineCaret.removeClass('glyphicon-menu-down');
            $btnCombineCaret.addClass('glyphicon-menu-up');
        }
    });

    // 팬시 다이아
    $(document).on('mouseover focus', '#fancy-dia .dia-list > li > a', function(e) {
        if ( ! $(this).parent().hasClass('active')) {
            $(this).parent().siblings('.active').removeClass('active');
            $(this).parent().addClass('active');
            $('#fancy-dia .preview .ring img').attr('src', $(this).attr('data-image'));
        }
        e.preventDefault();
    });

    // 원데이 딜리버리
    var onedayDefaultOptions = {
        pager: false,
        prevText: '<img src="/assets/images/main/btn_1day_prev.png" alt="이전">',
        nextText: '<img src="/assets/images/main/btn_1day_next.png" alt="다음">'
    };
    var onedaySlider = $('#day-delivery .delivery-list > ul').bxSlider(onedayDefaultOptions);

    // 이벤트 배너
    var eventsSlider = $('#events ul').bxSlider({
        controls: false,
        auto: true
    });

    // 브라우저 리사이징 시
    $(window).on('load resize', function() {
        onedaySlider.reloadSlider(onedayDefaultOptions);
        if ( $(this).width() >= 768 ) {
            onedaySlider.reloadSlider($.extend({
                minSlides: 2,
                maxSlides: 2,
                moveSlides: 2,
                slideWidth: 290},
            onedayDefaultOptions));
        }
        if ( $(this).width() >= 992 ) {
            onedaySlider.reloadSlider($.extend({
                minSlides: 2,
                maxSlides: 2,
                moveSlides: 2,
                slideWidth: 400},
            onedayDefaultOptions));
        }
        if ( $(this).width() >= 1230 ) {
            onedaySlider.reloadSlider($.extend({
                minSlides: 4,
                maxSlides: 4,
                moveSlides: 4,
                slideWidth: 270},
            onedayDefaultOptions));
        }
    });
})(jQuery);
