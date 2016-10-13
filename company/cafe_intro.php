<?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/dochead_sub.php'); ?>
<link href="/assets/css/company.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/header.php'); ?>
    <div class="path-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
                <li><a href="#">회사소개</a></li>
                <li class="active">카페 다이아만티노</li>
            </ol>
        </div>
    </div>
    <main id="content" tabindex="-1" class="company cafe intro">
        <div class="container">
            <div class="page-header">
                <h2 class="page-title">
                    <small>SAMSHIN</small><br>
                    CAFÉ DIAMANTINO
                </h2>
            </div>
        </div>
        <div class="container">
            <ul class="page-tabs row" role="tablist">
                <li role="presentation" class="col-xs-6 col-sm-4 col-md-2 col-md-offset-1">
                    <span class="btn">카페 다이아만티노 소개</span>
                </li>
                <li role="presentation" class="col-xs-6 col-sm-4 col-md-2">
                    <a class="btn" href="./cafe_menu.php">메뉴 안내</a>
                </li>
                <li role="presentation" class="col-xs-6 col-sm-4 col-md-2">
                    <a class="btn" href="./cafe_room.php">미팅룸&amp;프로포즈룸 대여</a>
                </li>
                <li role="presentation" class="col-xs-6 col-sm-4 col-md-2">
                    <a class="btn" href="./cafe_water.php">다이아몬드 미네랄 워터</a>
                </li>
                <li role="presentation" class="col-xs-6 col-sm-4 col-md-2">
                    <a class="btn" href="./cafe_location.php">위치 안내</a>
                </li>
            </ul>
        </div>
        <div class="container">
            <div class="section-head">
                <h3 class="section-title">카페 다이아만티노 소개</h3>
                <hr>
                <p>
                    카페 다이아만티노는 ㈜삼신다이아몬드가 운영하는 CAFÉ &amp; BISTRO <i class="icon-diamond"></i> LUXURY LOUNGE 입니다.<br>
                    Health Life 를 컨샙으로 다양한 건강 음료와 국내산 식자재만을 사용! 소중한 사람과 기억에 남을 시간을 만들어 드립니다.<br>
                    1층은 편안한 분위기에서 브런치와 음료를 즐기실 수 있으며 B1층의 다이아몬드 갤러리는 소규모 모임 또는 행사등의 장소로 이용하실 수 있습니다.
                </p>
            </div>
            <div class="section-body">
                <ul id="cafe-gallery">
                    <li><img class="img-responsive" src="/assets/images/company/img_cafe_figure_1.jpg" alt=""></li>
                    <li><img class="img-responsive" src="/assets/images/company/img_cafe_figure_2.jpg" alt=""></li>
                    <li><img class="img-responsive" src="/assets/images/company/img_cafe_figure_3.jpg" alt=""></li>
                    <li><img class="img-responsive" src="/assets/images/company/img_cafe_figure_4.jpg" alt=""></li>
                    <li><img class="img-responsive" src="/assets/images/company/img_cafe_figure_5.jpg" alt=""></li>
                    <li><img class="img-responsive" src="/assets/images/company/img_cafe_figure_6.jpg" alt=""></li>
                    <li><img class="img-responsive" src="/assets/images/company/img_cafe_figure_7.jpg" alt=""></li>
                    <li><img class="img-responsive" src="/assets/images/company/img_cafe_figure_8.jpg" alt=""></li>
                </ul>
                <div id="cafe-gallery-pager">
                    <a data-slide-index="0" href="#"><img class="img-responsive" src="/assets/images/company/img_cafe_thumb_1.jpg"><span class="active"></span></a>
                    <a data-slide-index="1" href="#"><img class="img-responsive" src="/assets/images/company/img_cafe_thumb_2.jpg"><span></span></a>
                    <a data-slide-index="2" href="#"><img class="img-responsive" src="/assets/images/company/img_cafe_thumb_3.jpg"><span></span></a>
                    <a data-slide-index="3" href="#"><img class="img-responsive" src="/assets/images/company/img_cafe_thumb_4.jpg"><span></span></a>
                    <a data-slide-index="4" href="#"><img class="img-responsive" src="/assets/images/company/img_cafe_thumb_5.jpg"><span></span></a>
                    <a data-slide-index="5" href="#"><img class="img-responsive" src="/assets/images/company/img_cafe_thumb_6.jpg"><span></span></a>
                    <a data-slide-index="6" href="#"><img class="img-responsive" src="/assets/images/company/img_cafe_thumb_7.jpg"><span></span></a>
                    <a data-slide-index="7" href="#"><img class="img-responsive" src="/assets/images/company/img_cafe_thumb_8.jpg"><span></span></a>
                </div>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/footer.php'); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/docfoot.php'); ?>
    <script src="/assets/js/jquery.bxslider.min.js"></script>
    <script>
        (function($) {

            $('#cafe-gallery').bxSlider({
                mode: 'fade',
                controls: false,
                pagerCustom: '#cafe-gallery-pager',
                onSliderLoad: function () {
                    $('#cafe-gallery').parents('.bx-wrapper').eq(0).attr('id', 'cafe-gallery-wrap');
                }
            });

            $(document).on('click', '#cafe-gallery-pager > a', function() {
                $(this).siblings('a').find('span').removeClass('active');
                $(this).find('span').addClass('active');
            });

            var pagerOptions = {
                pager: false,
                nextText: '<img src="/assets/images/company/ico_angle_right.png" alt="다음">',
                prevText: '<img src="/assets/images/company/ico_angle_left.png" alt="이전">',
                onSliderLoad: function() {
                    $('#cafe-gallery-pager').parents('.bx-wrapper').eq(0).attr('id', 'cafe-gallery-pager-wrap');
                }
            };

            var pagerSlider = $('#cafe-gallery-pager').bxSlider(pagerOptions);

            // 브라우저 리사이징 시
            $(window).on('load resize', function() {

                pagerSlider.reloadSlider($.extend({
                    maxSlides: 8,
                    minSlides: 8,
                    moveSlides: 8,
                    slideWidth: 102,
                    slideMargin: 30,
                }, pagerOptions));

                if ( $(this).width() < 1230 ) {
                    pagerSlider.reloadSlider($.extend({
                        minSlides: 6,
                        maxSlides: 6,
                        moveSlides: 6,
                        slideWidth: 102,
                        slideMargin: 30,
                    }, pagerOptions));
                }

                if ( $(this).width() < 992 ) {
                    pagerSlider.reloadSlider($.extend({
                        minSlides: 4,
                        maxSlides: 4,
                        moveSlides: 4,
                        slideWidth: 102,
                        slideMargin: 30,
                    }, pagerOptions));
                }

                if ( $(this).width() < 768 ) {
                    pagerSlider.reloadSlider($.extend({
                        minSlides: 3,
                        maxSlides: 3,
                        moveSlides: 3,
                        slideWidth: 62,
                        slideMargin: 10,
                    }, pagerOptions));
                }

            });
        })(jQuery);
    </script>
</body>
</html>
