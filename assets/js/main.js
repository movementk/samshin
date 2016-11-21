(function($) {

    // 원데이 딜리버리
    var top10DefaultOptions = {
        pager: false,
        prevText: '<img src="/assets/images/main/btn_1day_prev.png" alt="이전">',
        nextText: '<img src="/assets/images/main/btn_1day_next.png" alt="다음">'
    };

    //var top10Slider = $('#top10-ring .top10-list > ul').bxSlider(top10DefaultOptions);

    // 원데이 딜리버리
    var onedayDefaultOptions = {
        pager: false,
        prevText: '<img src="/assets/images/main/btn_1day_prev.png" alt="이전">',
        nextText: '<img src="/assets/images/main/btn_1day_next.png" alt="다음">'
    };

    var onedaySlider = $('#day-delivery .delivery-list > ul').bxSlider(onedayDefaultOptions);

    // 이벤트 배너
    var eventsSlider = $('#events ul').bxSlider({
        controls: false
    });
    
    // 비주얼 배너
    $('#visual ul').bxSlider({
        controls: false,
        pager: false,
        auto: true
    });

    // 브라우저 리사이징 시
    $(window).on('load resize', function() {
        //top10Slider.reloadSlider(top10DefaultOptions);
        onedaySlider.reloadSlider(onedayDefaultOptions);
        if ( $(this).width() >= 768 ) {
//            top10Slider.reloadSlider($.extend({
//                minSlides: 2,
//                maxSlides: 2,
//                moveSlides: 1,
//                slideWidth: 290},
//            top10DefaultOptions));
            onedaySlider.reloadSlider($.extend({
                minSlides: 2,
                maxSlides: 2,
                moveSlides: 2,
                slideWidth: 290},
            onedayDefaultOptions));
        }
        if ( $(this).width() >= 992 ) {
//            top10Slider.reloadSlider($.extend({
//                minSlides: 2,
//                maxSlides: 2,
//                moveSlides: 1,
//                slideWidth: 400},
//            top10DefaultOptions));
            onedaySlider.reloadSlider($.extend({
                minSlides: 2,
                maxSlides: 2,
                moveSlides: 1,
                slideWidth: 400},
            onedayDefaultOptions));
        }
        if ( $(this).width() >= 1230 ) {
//            top10Slider.reloadSlider($.extend({
//                minSlides: 5,
//                maxSlides: 5,
//                moveSlides: 1,
//                slideWidth: 170,
//                slideMargin: 30},
//            top10DefaultOptions));
            onedaySlider.reloadSlider($.extend({
                minSlides: 4,
                maxSlides: 4,
                moveSlides: 4,
                slideWidth: 270},
            onedayDefaultOptions));
        }
    });
})(jQuery);
