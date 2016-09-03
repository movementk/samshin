<?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/dochead_sub.php'); ?>
<link href="/assets/css/product.css" rel="stylesheet">
<link href="/assets/css/jquery-ui.min.css" rel="stylesheet">
<link href="/assets/css/jquery-ui.structure.min.css" rel="stylesheet">
<link href="/assets/css/jquery-ui.theme.min.css" rel="stylesheet">
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
                            <li class="dia">
                                <span>01</span>
                                <p>다이아몬드<br class="visible-xs"> 선택하기</p>
                                <a href="#">다이아몬드 선택 바로가기</a>
                            </li>
                            <li class="arrow" role="presentation"></li>
                            <li class="jewelry active">
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

            <!-- 검색 영역 -->
            <div class="jewelry filter">
                <form class="row" action="#">
                    <fieldset class="price col-xs-12 col-lg-5">
                        <legend>PRICE <i>가격</i></legend>
                        <div class="slider"><div></div></div>
                        <div class="values row">
                            <div class="col-xs-6"><input class="form-control minium" type="text" placeholder="₩0" readonly></div>
                            <div class="col-xs-6"><input class="form-control maxium" type="text" placeholder="₩500" readonly></div>
                        </div>
                    </fieldset>
                    <fieldset class="design col-xs-12 col-lg-6 col-lg-offset-1">
                        <legend>DESIGN <i>디자인</i></legend>
                        <div class="design-list">
                            <ul>
                                <li><label class="btn btn-block active">
                                    <input type="checkbox">
                                    <span>SOLITAIRE</span>
                                </label></li>
                                <li><label class="btn btn-block">
                                    <input type="checkbox">
                                    <span>SIDE-STONE</span>
                                </label></li>
                                <li><label class="btn btn-block">
                                    <input type="checkbox">
                                    <span>LUXURY</span>
                                </label></li>
                            </ul>
                        </div>
                    </fieldset>
                    <fieldset class="artist col-xs-12">
                        <legend>ARTIST <i>아티스트</i></legend>
                        <div class="artist-list">
                            <ul>
                                <li><label class="btn active">
                                    <input type="checkbox">
                                    <img src="/assets/images/product/img_artist_1.jpg" alt="">
                                    <span>마이클 본단자</span>
                                </label></li>
                                <li><label class="btn">
                                    <input type="checkbox">
                                    <img src="/assets/images/product/img_artist_2.jpg" alt="">
                                    <span>제이슨 본</span>
                                </label></li>
                                <li><label class="btn">
                                    <input type="checkbox">
                                    <img src="/assets/images/product/img_artist_3.jpg" alt="">
                                    <span>왕서방</span>
                                </label></li>
                                <li><label class="btn">
                                    <input type="checkbox">
                                    <img src="/assets/images/product/img_artist_4.jpg" alt="">
                                    <span>하동구</span>
                                </label></li>
                                <li><label class="btn">
                                    <input type="checkbox">
                                    <img src="/assets/images/product/img_artist_5.jpg" alt="">
                                    <span>유키 구라모토</span>
                                </label></li>
                            </ul>
                        </div>
                    </fieldset>
                    <fieldset class="metal col-xs-12">
                        <legend>METAL <i>함량</i></legend>
                        <div class="metal-list">
                            <ul>
                                <li><label class="btn btn-block active">
                                    <input type="checkbox">
                                    <span>플래티늄(PT)</span>
                                </label></li>
                                <li><label class="btn btn-block">
                                    <input type="checkbox">
                                    <span>14K 옐로우 골드</span>
                                </label></li>
                                <li><label class="btn btn-block">
                                    <input type="checkbox">
                                    <span>18K 옐로우 골드</span>
                                </label></li>
                                <li><label class="btn btn-block">
                                    <input type="checkbox">
                                    <span>14K 화이트 골드</span>
                                </label></li>
                                <li><label class="btn btn-block active">
                                    <input type="checkbox">
                                    <span>18K 화이트 골드</span>
                                </label></li>
                                <li><label class="btn btn-block">
                                    <input type="checkbox">
                                    <span>14K 핑크 골드</span>
                                </label></li>
                                <li><label class="btn btn-block">
                                    <input type="checkbox">
                                    <span>18K 핑크 골드</span>
                                </label></li>
                                <li><label class="btn btn-block">
                                    <input type="checkbox">
                                    <span>14K 콤비</span>
                                </label></li>
                                <li><label class="btn btn-block active">
                                    <input type="checkbox">
                                    <span>18K 콤비</span>
                                </label></li>
                            </ul>
                        </div>
                    </fieldset>
                </form>
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
