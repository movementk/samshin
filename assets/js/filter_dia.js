(function($) {

    // 모양 선택
    $(document).on('click', '.filter .shape-list > ul > li > .btn', function(e) {
        if( $(e.target).is("label") ) {
            $(this).toggleClass('active');
        }
    });

    // 팬시컬러 선택
    $(document).on('click', '.filter .fancy-color-list > ul > li > .btn', function(e) {
        if( $(e.target).is("label") ) {
            $(this).toggleClass('active');
        }
    });

    // 아티스트 선택
    $(document).on('click', '.filter .artist-list > ul > li > .btn', function(e) {
        //console.log( $(e.target) );
        if( $(e.target).is("span") ) {
            $(this).toggleClass('active');
        }
    });

    // 함량 선택
    $(document).on('click', '.filter .metal-list > ul > li > .btn', function(e) {
        if( $(e.target).is("label") ) {
            $(this).toggleClass('active');
        }
    });

    // 필터 체크박스 클릭
    $(document).on('click', '.filter .check-list .check', function(e) {
        if( $(e.target).is("label") ) {
            $(this).toggleClass('active');
        }
    });

    // 가격 슬라이더 초기화
    $('.filter .price .slider > div:eq(0)').slider({
        range: true,
        min: 0,
        max: 500,
        values: [ 0, 500 ],
        slide: function( event, ui ) {
            $(event.target).parent().find('+ .values .minium').val("₩"+ui.values[0]);
            $(event.target).parent().find('+ .values .maxium').val("₩"+ui.values[1]);
        }
    });

    // 중량 슬라이더 초기화
    $('.filter .carat .slider > div:eq(0)').slider({
        range: true,
        min: 0.1,
        max: 99,
        step: 0.01,
        values: [ 0.1, 99 ],
        slide: function( event, ui ) {
            $(event.target).parent().find('+ .values .minium').val(ui.values[0]);
            $(event.target).parent().find('+ .values .maxium').val(ui.values[1]);
        }
    });

    // 필터 상세 버튼
    $(document).on('click', '.filter .btn-area .btn', function(e) {
        //$('.filter').toggleClass('open');
        if ($('.filter').hasClass('open')) {
            $('.filter').removeClass('open');
            $(this).find('.glyphicon')
                .removeClass('glyphicon-menu-up')
                .addClass('glyphicon-menu-down');

        } else {
            $('.filter').addClass('open');
            $(this).find('.glyphicon')
                .removeClass('glyphicon-menu-down')
                .addClass('glyphicon-menu-up');
        }
    });

})(jQuery);
