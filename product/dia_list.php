<?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/dochead_product.php'); ?>
</head>
<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/header.php'); ?>
    <main id="content" tabindex="-1">
        <section class="make-steps">
            <div class="container">
                <div class="row">
                    <header class="col-xs-12 col-lg-4">
                        <h2>당신의 반지를 <br class="visible-lg">만들어 보세요</h2>
                        <p>
                            다이아몬드와 디자인을 선택하시면<br>
                            나만의 다이아몬드 제품을 만들 수 있습니다.
                        </p>
                    </header>
                    <div class="steps col-xs-12 col-lg-8">
                        <ol>
                            <li class="dia active">
                                <span>01</span>
                                <p>다이아몬드<br class="visible-xs"> 선택하기</p>
                                <a href="#">다이아몬드 선택 바로가기</a>
                            </li>
                            <li class="arrow" role="presentation"></li>
                            <li class="design">
                                <span>02</span>
                                <p>디자인<br class="visible-xs"> 선택하기</p>
                                <a href="#">디자인 선택 바로가기</a>
                            </li>
                            <li class="arrow" role="presentation"></li>
                            <li class="ring">
                                <span>03</span>
                                <p>나만의 반지<br class="visible-xs"> 완성</p>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">

            <!-- 페이지 네비게이션 -->
            <div class="path-nav">
                <ol class="breadcrumb">
                    <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
                    <li><a href="#">다이아몬드 검색</a></li>
                    <li class="active">다이아몬드</li>
                </ol>
            </div>

            <!-- 다이아몬드 검색 타입 -->
            <div class="dia-type">
                <ul class="row">
                    <li class="col-xs-6 col-sm-3 col-sm-offset-3"><a class="btn btn-block" href="#">다이아몬드</a></li>
                    <li class="col-xs-6 col-sm-3"><a class="btn btn-block" href="#">팬시컬러 다이아몬드</a></li>
                </ul>
            </div>

            <!-- 검색 영역 -->
            <div class="filter">
                <form class="row" action="#">
                    <fieldset class="col-xs-12">
                        <legend>SHAPE <i>형태</i> <button class="btn-link" type="button" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><span class="glyphicon glyphicon-question-sign"></span></button></legend>
                        <div class="shape-list">
                            <ul>
                                <li><label class="btn btn-block active">
                                    <input type="checkbox" autocomplete="off">
                                    <span class="en">ROUND</span>
                                    <span class="ko">라운드</span>
                                </label></li>
                                <li><label class="btn btn-block">
                                    <input type="checkbox" autocomplete="off">
                                    <span class="en">PRINCESS</span>
                                    <span class="ko">프린세스</span>
                                </label></li>
                                <li><label class="btn btn-block">
                                    <input type="checkbox" autocomplete="off">
                                    <span class="en">CUSHION</span>
                                    <span class="ko">쿠션</span>
                                </label></li>
                                <li><label class="btn btn-block">
                                    <input type="checkbox" autocomplete="off">
                                    <span class="en">RADIENT</span>
                                    <span class="ko">라디언트</span>
                                </label></li>
                                <li><label class="btn btn-block">
                                    <input type="checkbox" autocomplete="off">
                                    <span class="en">EMERALD</span>
                                    <span class="ko">에메랄드</span>
                                </label></li>
                                <li><label class="btn btn-block">
                                    <input type="checkbox" autocomplete="off">
                                    <span class="en">ASSCHER</span>
                                    <span class="ko">어셔</span>
                                </label></li>
                                <li><label class="btn btn-block">
                                    <input type="checkbox" autocomplete="off">
                                    <span class="en">OVAL</span>
                                    <span class="ko">오발</span>
                                </label></li>
                                <li><label class="btn btn-block">
                                    <input type="checkbox" autocomplete="off">
                                    <span class="en">MARQUISE</span>
                                    <span class="ko">마퀴즈</span>
                                </label></li>
                                <li><label class="btn btn-block">
                                    <input type="checkbox" autocomplete="off">
                                    <span class="en">PEAR</span>
                                    <span class="ko">피어</span>
                                </label></li>
                                <li><label class="btn btn-block">
                                    <input type="checkbox" autocomplete="off">
                                    <span class="en">HEART</span>
                                    <span class="ko">하트</span>
                                </label></li>
                                <li><a class="btn" href="#">OTHER <br class="visible-xs">SHAPE</a></li>
                            </ul>
                        </div>
                    </fieldset>
                    <fieldset class="price col-xs-12 col-lg-6">
                        <legend>PRICE <i>가격</i></legend>
                        <div class="slider"><div></div></div>
                        <div class="values row">
                            <div class="col-xs-6"><input class="form-control minium" type="text" placeholder="₩0" readonly></div>
                            <div class="col-xs-6"><input class="form-control maxium" type="text" placeholder="₩500" readonly></div>
                        </div>
                    </fieldset>
                    <fieldset class="carat col-xs-12 col-lg-6">
                        <legend>CARAT <i>중량</i></legend>
                        <div class="slider"><div></div></div>
                        <div class="values row">
                            <div class="col-xs-6"><input class="form-control minium" type="text" placeholder="0.1" readonly></div>
                            <div class="col-xs-6"><input class="form-control maxium" type="text" placeholder="99" readonly></div>
                        </div>
                    </fieldset>
                    <fieldset class="color col-xs-12">
                        <legend>COLOR <i>색상</i></legend>
                        <ul class="btn-list" data-toggle="buttons">
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox" autocomplete="off"> D
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox" autocomplete="off"> E
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox" autocomplete="off"> F
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox" autocomplete="off"> G
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox" autocomplete="off"> H
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox" autocomplete="off"> I
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox" autocomplete="off"> J
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox" autocomplete="off"> K
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox" autocomplete="off"> L
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox" autocomplete="off"> M
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox" autocomplete="off"> N~Z
                            </label></li>
                        </ul>
                    </fieldset>
                    <fieldset class="clarity col-xs-12">
                        <legend>CLARITY <i>선명도</i></legend>
                        <ul class="btn-list" data-toggle="buttons">
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox" autocomplete="off"> IF
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox" autocomplete="off"> VVS1
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox" autocomplete="off"> VVS2
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox" autocomplete="off"> VS1
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox" autocomplete="off"> VS2
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox" autocomplete="off"> SI1
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox" autocomplete="off"> SI2
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox" autocomplete="off"> SI3
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox" autocomplete="off"> I1
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox" autocomplete="off"> I2~I3
                            </label></li>
                        </ul>
                    </fieldset>
                    <fieldset class="cut col-xs-12 col-lg-6">
                        <legend>CUT <i>컷팅</i></legend>
                        <ul class="btn-list" data-toggle="buttons">
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox" autocomplete="off"> Exellent
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox" autocomplete="off"> Very Good
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox" autocomplete="off"> Good
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox" autocomplete="off"> Fair
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox" autocomplete="off"> Pool
                            </label></li>
                        </ul>
                    </fieldset>
                    <fieldset class="lap col-xs-12 col-lg-6">
                        <legend>LAP <i>감정서</i></legend>
                        <ul class="btn-list" data-toggle="buttons">
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox" autocomplete="off"> GIA
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox" autocomplete="off"> HRD
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox" autocomplete="off"> GEL
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox" autocomplete="off"> IGI
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox" autocomplete="off"> AGS
                            </label></li>
                        </ul>
                    </fieldset>
                    <fieldset class="polish col-xs-12 col-lg-6">
                        <legend>POLISH <i>연마</i></legend>
                        <ul class="check-list">
                            <li><label class="check">
                                <input type="checkbox" autocomplete="off"> Exellent
                            </label></li>
                            <li><label class="check">
                                <input type="checkbox" autocomplete="off"> Very Good
                            </label></li>
                            <li><label class="check">
                                <input type="checkbox" autocomplete="off"> Good
                            </label></li>
                            <li><label class="check">
                                <input type="checkbox" autocomplete="off"> Fair
                            </label></li>
                            <li><label class="check">
                                <input type="checkbox" autocomplete="off"> Poor
                            </label></li>
                        </ul>
                    </fieldset>
                    <fieldset class="symmetry col-xs-12 col-lg-6">
                        <legend>SYMMETRY <i>대칭</i></legend>
                        <ul class="check-list">
                            <li><label class="check">
                                <input type="checkbox" autocomplete="off"> Exellent
                            </label></li>
                            <li><label class="check">
                                <input type="checkbox" autocomplete="off"> Very Good
                            </label></li>
                            <li><label class="check">
                                <input type="checkbox" autocomplete="off"> Good
                            </label></li>
                            <li><label class="check">
                                <input type="checkbox" autocomplete="off"> Fair
                            </label></li>
                            <li><label class="check">
                                <input type="checkbox" autocomplete="off"> Poor
                            </label></li>
                        </ul>
                    </fieldset>
                    <fieldset class="fluorescence col-xs-12 col-lg-6">
                        <legend>FLUORESCENCE <i>형광성</i></legend>
                        <ul class="check-list">
                            <li><label class="check">
                                <input type="checkbox" autocomplete="off"> Exellent
                            </label></li>
                            <li><label class="check">
                                <input type="checkbox" autocomplete="off"> Very Good
                            </label></li>
                            <li><label class="check">
                                <input type="checkbox" autocomplete="off"> Good
                            </label></li>
                            <li><label class="check">
                                <input type="checkbox" autocomplete="off"> Fair
                            </label></li>
                            <li><label class="check">
                                <input type="checkbox" autocomplete="off"> Poor
                            </label></li>
                        </ul>
                    </fieldset>
                    <fieldset class="imgdata col-xs-12 col-lg-6">
                        <legend>IMAGE DATA <i>이미지 정보</i></legend>
                        <ul class="check-list">
                            <li><label class="check">
                                <input type="checkbox" autocomplete="off"> 감정서
                            </label></li>
                            <li><label class="check">
                                <input type="checkbox" autocomplete="off"> 360 Video
                            </label></li>
                            <li><label class="check">
                                <input type="checkbox" autocomplete="off"> 다이아몬드 사진
                            </label></li>
                        </ul>
                    </fieldset>
                </form>
                <div class="btn-area">
                    <button class="btn" type="button">상세검색 <span class="glyphicon glyphicon-menu-down"></span></button>
                </div>
            </div>

        </div>
    </main>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/footer.php'); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/docfoot.php'); ?>
    <script src="/assets/js/jquery-ui.min.js"></script>
    <script>
        // filter.js
        (function($) {

            // 모양 선택
            $(document).on('click', '.filter .shape-list > ul > li > .btn', function(e) {
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

        })(jQuery);
    </script>
</body>
</html>
