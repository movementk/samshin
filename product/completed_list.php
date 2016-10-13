<?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/dochead_sub.php'); ?>
<link href="/assets/css/product.css" rel="stylesheet">
<link href="/assets/css/jquery-ui.min.css" rel="stylesheet">
<link href="/assets/css/jquery-ui.structure.min.css" rel="stylesheet">
<link href="/assets/css/jquery-ui.theme.min.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/header.php'); ?>
    <main id="content" tabindex="-1">
        <div class="container">

            <!-- 페이지 네비게이션 -->
            <div class="path-nav">
                <ol class="breadcrumb">
                    <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
                    <li><a href="#">다이아몬드 검색</a></li>
                    <li class="active">다이아몬드</li>
                </ol>
            </div>

            <!-- 검색 영역 -->
            <div class="completed filter">
                <form class="row" action="#">
                    <fieldset class="price col-xs-12">
                        <legend>PRICE <i>가격</i></legend>
                        <div class="slider"><div></div></div>
                        <div class="values row">
                            <div class="col-xs-6"><input class="form-control minium" type="text" placeholder="₩0" readonly></div>
                            <div class="col-xs-6"><input class="form-control maxium" type="text" placeholder="₩500" readonly></div>
                        </div>
                    </fieldset>
                    <fieldset class="item col-xs-12 col-lg-6">
                        <legend>ITEM <i>아이템</i></legend>
                        <ul class="btn-list" data-toggle="buttons">
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> 반지
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> 목걸이
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> 귀걸이
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> 팔찌
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> 커플링
                            </label></li>
                        </ul>
                    </fieldset>
                    <fieldset class="stone col-xs-12 col-lg-6">
                        <legend>STONE <i>스톤</i></legend>
                        <ul class="btn-list" data-toggle="buttons">
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> 다이아몬드
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> 진주
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> 유색석
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> 스톤없음
                            </label></li>
                        </ul>
                    </fieldset>
                    <fieldset class="artist col-xs-12 col-lg-12">
                        <legend>ARTIST <i>아티스트</i></legend>
                        <ul class="btn-list" data-toggle="buttons">
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> 마시모주끼
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> 마이클본단자
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> 호세스
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> 추원교
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> 서도식
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> 변건호
                            </label></li>
                        </ul>
                    </fieldset>
                    <fieldset class="delivery col-xs-12 col-lg-12">
                        <legend>DELIVERY <i>배송일정</i></legend>
                        <ul class="btn-list" data-toggle="buttons">
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> 빠른 배송 (3일)
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> 일반 배송 (7~10일)
                            </label></li>
                        </ul>
                    </fieldset>
                </form>
                <div class="btn-area">
                    <button class="btn" type="button">상세검색 <span class="glyphicon glyphicon-menu-down"></span></button>
                </div>
                <div class="notify">
                    <p>완제품/당일 발송 카테고리 제품은 <i>다이아몬드가 포함된 제품</i>입니다.</p>
                </div>
            </div>

            <!-- 결과 목록 -->
            <section class="result jewelry">
                <header class="row">
                    <div class="col-xs-7 col-md-10"><h5><b>100개</b>의 다이아몬드가 검색되었습니다.</h5></div>
                    <div class="col-xs-5 col-md-2">
                        <select class="form-control">
                            <option value="">가격높은 순</option>
                            <option value="">가격낮은 순</option>
                        </select>
                    </div>
                </header>
                <div class="jewelry-list">
                    <ul class="row">
                        <li class="col-xs-6 col-sm-4 col-md-3">
                            <a href="#">
                                <figure>
                                    <img class="img-responsive" src="/assets/images/product/img_jewelry_dummy.jpg">
                                    <figcaption>
                                        <h5>이데알레 1부 다이아몬드 반지</h5>
                                        <p class="lap">현대, GIK 다이아 감정서</p>
                                        <p class="price"><s>1,190,000원</s></p>
                                        <p class="price">999,000원</p>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <li class="col-xs-6 col-sm-4 col-md-3">
                            <a href="#">
                                <figure>
                                    <img class="img-responsive" src="/assets/images/product/img_jewelry_dummy.jpg">
                                    <figcaption>
                                        <h5>이데알레 1부 다이아몬드 반지</h5>
                                        <p class="lap">현대, GIK 다이아 감정서</p>
                                        <p class="price">999,000원</p>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <li class="col-xs-6 col-sm-4 col-md-3">
                            <a href="#">
                                <figure>
                                    <img class="img-responsive" src="/assets/images/product/img_jewelry_dummy.jpg">
                                    <figcaption>
                                        <h5>이데알레 1부 다이아몬드 반지</h5>
                                        <p class="lap">현대, GIK 다이아 감정서</p>
                                        <p class="price"><s>1,190,000원</s></p>
                                        <p class="price">999,000원</p>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <li class="col-xs-6 col-sm-4 col-md-3">
                            <a href="#">
                                <figure>
                                    <img class="img-responsive" src="/assets/images/product/img_jewelry_dummy.jpg">
                                    <figcaption>
                                        <h5>이데알레 1부 다이아몬드 반지</h5>
                                        <p class="lap">현대, GIK 다이아 감정서</p>
                                        <p class="price"><s>1,190,000원</s></p>
                                        <p class="price">999,000원</p>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <li class="col-xs-6 col-sm-4 col-md-3">
                            <a href="#">
                                <figure>
                                    <img class="img-responsive" src="/assets/images/product/img_jewelry_dummy.jpg">
                                    <figcaption>
                                        <h5>이데알레 1부 다이아몬드 반지</h5>
                                        <p class="lap">현대, GIK 다이아 감정서</p>
                                        <p class="price"><s>1,190,000원</s></p>
                                        <p class="price">999,000원</p>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <li class="col-xs-6 col-sm-4 col-md-3">
                            <a href="#">
                                <figure>
                                    <img class="img-responsive" src="/assets/images/product/img_jewelry_dummy.jpg">
                                    <figcaption>
                                        <h5>이데알레 1부 다이아몬드 반지</h5>
                                        <p class="lap">현대, GIK 다이아 감정서</p>
                                        <p class="price">999,000원</p>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <li class="col-xs-6 col-sm-4 col-md-3">
                            <a href="#">
                                <figure>
                                    <img class="img-responsive" src="/assets/images/product/img_jewelry_dummy.jpg">
                                    <figcaption>
                                        <h5>이데알레 1부 다이아몬드 반지</h5>
                                        <p class="lap">현대, GIK 다이아 감정서</p>
                                        <p class="price"><s>1,190,000원</s></p>
                                        <p class="price">999,000원</p>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <li class="col-xs-6 col-sm-4 col-md-3">
                            <a href="#">
                                <figure>
                                    <img class="img-responsive" src="/assets/images/product/img_jewelry_dummy.jpg">
                                    <figcaption>
                                        <h5>이데알레 1부 다이아몬드 반지</h5>
                                        <p class="lap">현대, GIK 다이아 감정서</p>
                                        <p class="price"><s>1,190,000원</s></p>
                                        <p class="price">999,000원</p>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>

        </div>
    </main>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/footer.php'); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/docfoot.php'); ?>
    <script src="/assets/js/jquery-ui.min.js"></script>
    <script src="/assets/js/filter_dia.js"></script>
</body>
</html>
