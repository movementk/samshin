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
                            <li class="dia active">
                                <span>01</span>
                                <p>다이아몬드<br class="visible-xs"> 선택하기</p>
                                <a href="#">다이아몬드 선택 바로가기</a>
                            </li>
                            <li class="arrow" role="presentation"></li>
                            <li class="jewelry">
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

        <!-- 페이지 네비게이션 -->
        <div class="container">
            <div class="path-nav">
                <ol class="breadcrumb">
                    <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
                    <li><a href="#">다이아몬드 검색</a></li>
                    <li class="active">다이아몬드</li>
                </ol>
            </div>
        </div>

        <div class="details dia">
            <div class="summary">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-lg-6">
                            <div class="preview">
                                <ul class="figure">
                                    <li><img src="/assets/images/product/img_slide_dummy.jpg" alt=""></li>
                                    <li><img src="/assets/images/product/img_slide_dummy.jpg" alt=""></li>
                                </ul>
                                <div class="pager">
                                    <a data-slide-index="0" href="#"><img src="/assets/images/product/img_slide_thumb.jpg"></a>
                                    <a data-slide-index="1" href="#"><img src="/assets/images/product/img_slide_thumb.jpg"></a>
                                </div>
                                <div class="notify">
                                    <p>
                                        다이아아울렛 주문 상품은 주문 후 제작 상품들로 7일~10일 소요됩니다.<br>
                                        <i>"급" 주문은 전화 문의 주시기 바랍니다.</i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-lg-6">
                            <section class="diainfo">
                                <header>
                                    <small>GIA 17312569</small>
                                    <h3>GIA 다이아몬드 0.5CT D / SI2 / VG</h3>
                                </header>
                                <div class="option">
                                    <div class="option-head">
                                        <h4>다이아몬드 상세정보</h4>
                                        <ul class="sns">
                                            <li><a href="#"><img src="/assets/images/sub/ico_facebook.png" alt="페이스북"></a></li>
                                            <li><a href="#"><img src="/assets/images/sub/ico_twitter.png" alt="트위터"></a></li>
                                            <li><a href="#"><img src="/assets/images/sub/ico_gplus.png" alt="구글플러스"></a></li>
                                        </ul>
                                    </div>
                                    <div class="option-body">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th>REPORT <i>감정서</i>
                                                        <a class="help-link" href="./modal/report.php" data-toggle="modal" data-target="#help-modal"></a>
                                                    </th>
                                                    <td>GIA</td>
                                                </tr>
                                                <tr>
                                                    <th>SHAPE <i>형태</i>
                                                        <a class="help-link" href="./modal/shape.php" data-toggle="modal" data-target="#help-modal"></a>
                                                    </th>
                                                    <td>ROUND</td>
                                                </tr>
                                                <tr>
                                                    <th>CARAT <i>중량</i>
                                                        <a class="help-link" href="./modal/carat.php" data-toggle="modal" data-target="#help-modal"></a>
                                                    </th>
                                                    <td>0.31</td>
                                                </tr>
                                                <tr>
                                                    <th>COLOR <i>색상</i>
                                                        <a class="help-link" href="./modal/color.php" data-toggle="modal" data-target="#help-modal"></a>
                                                    </th>
                                                    <td>G</td>
                                                </tr>
                                                <tr>
                                                    <th>CLARITY <i>선명도</i>
                                                        <a class="help-link" href="./modal/clarity.php" data-toggle="modal" data-target="#help-modal"></a>
                                                    </th>
                                                    <td>SI1</td>
                                                </tr>
                                                <tr>
                                                    <th>CUT <i>컷팅</i>
                                                        <a class="help-link" href="./modal/cut.php" data-toggle="modal" data-target="#help-modal"></a>
                                                    </th>
                                                    <td>Very Good</td>
                                                </tr>
                                                <tr>
                                                    <th>POLISH <i>연마</i>
                                                        <a class="help-link" href="./modal/polish.php" data-toggle="modal" data-target="#help-modal"></a>
                                                    </th>
                                                    <td>Exellent</td>
                                                </tr>
                                                <tr>
                                                    <th>SYMMETRY <i>대칭</i>
                                                        <a class="help-link" href="./modal/symmetry.php" data-toggle="modal" data-target="#help-modal"></a>
                                                    </th>
                                                    <td>Exellent</td>
                                                </tr>
                                                <tr>
                                                    <th>FLUORESCENCE <i>형광성</i>
                                                        <a class="help-link" href="./modal/fluorescence.php" data-toggle="modal" data-target="#help-modal"></a>
                                                    </th>
                                                    <td>Faint</td>
                                                </tr>
                                                <tr>
                                                    <th>RATIO <i>중량 비율</i>
                                                        <a class="help-link" href="./modal/ratio.php" data-toggle="modal" data-target="#help-modal"></a>
                                                    </th>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <th>MEASUREMENTS <i>치수</i>
                                                        <a class="help-link" href="./modal/measurements.php" data-toggle="modal" data-target="#help-modal"></a>
                                                    </th>
                                                    <td>14.07 x 14.14 x 8.35 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>CULET <i>큐렛</i>
                                                        <a class="help-link" href="./modal/culet.php" data-toggle="modal" data-target="#help-modal"></a>
                                                    </th>
                                                    <td>None</td>
                                                </tr>
                                                <tr>
                                                    <th>GIRDLE <i>거들</i>
                                                        <a class="help-link" href="./modal/girdle.php" data-toggle="modal" data-target="#help-modal"></a>
                                                    </th>
                                                    <td>Thin</td>
                                                </tr>
                                                <tr>
                                                    <th>TABLE <i>테이블</i></th>
                                                    <td>56.0%</td>
                                                </tr>
                                                <tr>
                                                    <th>GRADE <i>팬시 다이아몬드 등급</i>
                                                        <a class="help-link" href="./modal/grade.php" data-toggle="modal" data-target="#help-modal"></a>
                                                    </th>
                                                    <td>56.0%</td>
                                                </tr>
                                                <tr>
                                                    <th>FANCY <i>팬시 컬러 다이아몬드</i>
                                                        <a class="help-link" href="./modal/fancy.php" data-toggle="modal" data-target="#help-modal"></a>
                                                    </th>
                                                    <td>56.0%</td>
                                                </tr>
                                                <tr>
                                                    <th>METAL <i>함량</i>
                                                        <a class="help-link" href="./modal/metal.php" data-toggle="modal" data-target="#help-modal"></a>
                                                    </th>
                                                    <td>56.0%</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="btn-area row">
                                        <div class="col-xs-8"><button class="btn btn-block btn-select" type="submit">다이아몬드 선택</button></div>
                                        <div class="col-xs-4"><a class="btn btn-block btn-favor" href="#"><span class="hidden-xs">WISH LIST</span></a></div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <section class="product-info">
                <header>
                    <div class="container">
                        <h4>PRODUCT INFO <small>제품 정보</small></h4>
                    </div>
                </header>
                <div class="feature">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-lg-5">
                                <section class="overview">
                                    <div>
                                        <h4>상세정보</h4>
                                        <dl>
                                            <dt>감정서</dt>
                                            <dd>GIA</dd>
                                            <dt>중량</dt>
                                            <dd>1.02ct</dd>
                                            <dt>컬러</dt>
                                            <dd>E</dd>
                                            <dt>선명도</dt>
                                            <dd>VS2</dd>
                                            <dt>컷팅</dt>
                                            <dd>T.EX</dd>
                                        </dl>
                                    </div>
                                </section>
                            </div>
                            <div class="col-xs-12 col-lg-7">
                                <section class="lap">
                                    <div>
                                        <div class="text-area">
                                            <h4><img src="/assets/images/product/h_gia.png" alt="GIA"></h4>
                                            <p class="explain">
                                                GIA 다이아몬드 등급 감정서와<br>
                                                GIA 다이아몬드 도씨에는 세계 최고의<br>
                                                보석학 증명서로 인정 받고 있습니다.
                                            </p>
                                            <a class="btn btn-view" href="#">감정서 보기</a>
                                        </div>
                                        <div class="thumb-area">
                                            <p class="thumb"><img class="img-responsive" src="/assets/images/product/img_lap.jpg" alt="인증서"></p>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="size-info">
                    <div class="container">
                        <h5>다이아몬드 사이즈 : 0.30ct</h5>
                        <p class="explain">캐럿(CARAT)은 다이아몬드의 중량을 말하며 다이아몬드를 비롯한 보석들의 무게를 잴때 사용합니다.</p>
                        <p class="figure visible-xs">
                            <img class="img-responsive" src="/assets/images/product/fig_dia_size_1_xs.gif" alt="">
                        </p>
                        <p class="figure visible-sm">
                            <img class="img-responsive" src="/assets/images/product/fig_dia_size_1_sm.gif" alt="">
                        </p>
                        <p class="figure visible-md visible-lg">
                            <img class="img-responsive" src="/assets/images/product/fig_dia_size_1_lg.gif" alt="">
                        </p>
                    </div>
                </section>
                <section class="color-info">
                    <div class="container">
                        <h5>색상 : F</h5>
                        <p class="explain">컬러는 보석이 얼마나 무색에 가까운지 평가하는 부분이며 다이아몬드의 마스터 스톤과 비교, 명도와 채도를 통해 D~Z 등급까지 24개 등급으로 나뉘어 집니다.</p>
                        <p class="figure visible-xs">
                            <img class="img-responsive" src="/assets/images/product/fig_dia_color_1_xs.gif" alt="">
                        </p>
                        <p class="figure visible-sm">
                            <img class="img-responsive" src="/assets/images/product/fig_dia_color_1_sm.gif" alt="">
                        </p>
                        <p class="figure visible-md visible-lg">
                            <img class="img-responsive" src="/assets/images/product/fig_dia_color_1_lg.gif" alt="">
                        </p>
                    </div>
                </section>
                <section class="clarity-info">
                    <div class="container">
                        <h5>선명도 정보 : SI2</h5>
                        <p class="explain">10배 확대하여 발견이 쉬운 내포물이나 육안으로 판별되는 것과 판별 되지 않는 결점으로 거의 보이지 않으며 합리적인 가격으로 인기 등급</p>
                        <p class="figure visible-xs">
                            <img class="img-responsive" src="/assets/images/product/fig_dia_clarity_1_xs.gif" alt="">
                        </p>
                        <p class="figure visible-sm">
                            <img class="img-responsive" src="/assets/images/product/fig_dia_clarity_1_sm.gif" alt="">
                        </p>
                        <p class="figure visible-md visible-lg">
                            <img class="img-responsive" src="/assets/images/product/fig_dia_clarity_1_lg.gif" alt="">
                        </p>
                    </div>
                </section>
                <section class="cutting-info">
                    <div class="container">
                        <h5>컷팅 정보 : Very Good</h5>
                        <p class="explain">10배 확대하여 발견이 쉬운 내포물이나 육안으로 판별되는 것과 판별 되지 않는 결점으로 거의 보이지 않으며 합리적인 가격으로 인기 등급</p>
                        <p class="figure visible-xs">
                            <img class="img-responsive" src="/assets/images/product/fig_dia_cutting_1_xs.gif" alt="">
                        </p>
                        <p class="figure visible-sm">
                            <img class="img-responsive" src="/assets/images/product/fig_dia_cutting_1_sm.gif" alt="">
                        </p>
                        <p class="figure visible-md visible-lg">
                            <img class="img-responsive" src="/assets/images/product/fig_dia_cutting_1_lg.gif" alt="">
                        </p>
                    </div>
                </section>
            </section>
            <div class="container">
                <section class="packing">
                    <header>
                        <h4>PACKING <small>제품 포장 안내</small></h4>
                    </header>
                    <p class="figure"><img class="img-responsive" src="/assets/images/product/img_packing_dummy.jpg" alt=""></p>
                </section>
                <section class="shopping-info">
                    <header>
                        <h4>SHOPPING <br class="visible-xs">INFORMATION <small>주문 시 유의사항</small></h4>
                    </header>
                    <div class="delivery row">
                        <div class="col-xs-12 col-lg-2"><h5>배송 안내</h5></div>
                        <div class="col-xs-12 col-lg-10">
                            <dl>
                                <dt>배송업체</dt>
                                <dd>CJ대한통운</dd>
                                <dt>제작 및 배송기간</dt>
                                <dd>
                                    <p>- 주문 확인 후 7~10일 소요 (제작일 5~7일 / 주말,공휴일 제외)</p>
                                    <p>- 주문 폭주 및 제작이 지연될 시 고객님께 연락을 드립니다.</p>
                                    <p>- 배송이 급하거나 필요한 날짜에 맞춰 배송을 원하실 경우 전화 상담 후 배송 일정을 꼭 확인 받으시기 바랍니다.</p>
                                </dd>
                                <dt>배송비용</dt>
                                <dd>무료</dd>
                                <dt>배송지역</dt>
                                <dd>전국</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="exchange row">
                        <div class="col-xs-12 col-lg-2"><h5>교환 안내</h5></div>
                        <div class="col-xs-12 col-lg-10">
                            <p>
                                다이아아울렛 상품은 주문 제작 상품으로 반품은 불가능하며, 불량으로 확인 시 동일 제품에 한해 교환은 가능합니다.<br>
                                7일 이내 전화 또는 게시판으로 접수해주세요. 다른 제품으로 교환은 불가능 합니다.
                            </p>
                        </div>
                    </div>
                    <div class="returns row">
                        <div class="col-xs-12 col-lg-2"><h5>반품 및 환불 안내</h5></div>
                        <div class="col-xs-12 col-lg-10">
                            <p>
                                다이아아울렛 제품은 입금 확인 후 제작하는 제품들로 다이몬드와 금 제품의 특성상 높은 공임 및 제작 비용이 발생함으로 반품 및 환불이 불가능합니다.<br>
                                신중한 선택 부탁드립니다.
                            </p>
                        </div>
                    </div>
                    <div class="as row">
                        <div class="col-xs-12 col-lg-2"><h5>AS 안내</h5></div>
                        <div class="col-xs-12 col-lg-10">
                            <p>
                                다이아아울렛 전 제품은 AS가 가능합니다.<br>
                                단, 제품에 따라 비용이 발생할 수 있으니 미리 상담 부탁드립니다.<br>
                                다이아아울렛 제품은 고객님 한분, 한분을 위해 제작됨으로 신중한 선택 부탁드립니다.<br>
                                이외 제품 교환/배송/환불에 관한 문의는 전화나 게시판을 이용해 주시기 바랍니다.
                            </p>
                            <p>
                                <a class="as-num" href="tel:025128484">전화문의: 02-512-8484</a>
                            </p>
                        </div>
                    </div>
                </section>
                <section class="qna">
                    <header>
                        <h4>Q&amp;A <small>문의하기</small></h4>
                    </header>
                    <div class="qna-list board-list">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>번호</th>
                                    <th>제목</th>
                                    <th>아이디</th>
                                    <th>작성일</th>
                                    <th>조회수</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>100</td>
                                    <td class="title"><a href="#">사이즈 문의 드립니다.</a> <span>(0)</span> <i class="icon-lock"></i></td>
                                    <td>아이디</td>
                                    <td>2016-07-31</td>
                                    <td>103</td>
                                </tr>
                                <tr class="reply">
                                    <td>100</td>
                                    <td class="title"><a href="#">사이즈 문의 드립니다.</a> <span>(0)</span> <i class="icon-lock"></i></td>
                                    <td>아이디</td>
                                    <td>2016-07-31</td>
                                    <td>103</td>
                                </tr>
                                <tr>
                                    <td>100</td>
                                    <td class="title"><a href="#">사이즈 문의 드립니다.</a> <span>(0)</span> <i class="icon-lock"></i></td>
                                    <td>아이디</td>
                                    <td>2016-07-31</td>
                                    <td>103</td>
                                </tr>
                                <tr>
                                    <td>100</td>
                                    <td class="title"><a href="#">사이즈 문의 드립니다.</a> <span>(0)</span> <i class="icon-lock"></i></td>
                                    <td>아이디</td>
                                    <td>2016-07-31</td>
                                    <td>103</td>
                                </tr>
                                <tr>
                                    <td>100</td>
                                    <td class="title"><a href="#">사이즈 문의 드립니다.</a> <span>(0)</span> <i class="icon-lock"></i></td>
                                    <td>아이디</td>
                                    <td>2016-07-31</td>
                                    <td>103</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="btn-area row">
                            <div class="col-xs-6 col-sm-2 col-sm-offset-8"><a href="#" class="btn btn-block btn-list">목록보기</a></div>
                            <div class="col-xs-6 col-sm-2"><a href="#" class="btn btn-block btn-write">글쓰기</a></div>
                        </div>
                        <?php require($_SERVER["DOCUMENT_ROOT"].'/inc/paging.php'); ?>
                    </div>
                </section>
                <section class="review">
                    <header>
                        <h4>REVIEW <small>상품후기</small></h4>
                    </header>
                    <div class="review-list board-list">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>번호</th>
                                    <th>제목</th>
                                    <th>아이디</th>
                                    <th>작성일</th>
                                    <th>조회수</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>100</td>
                                    <td class="title"><a href="#">사이즈 문의 드립니다.</a></td>
                                    <td>아이디</td>
                                    <td>2016-07-31</td>
                                    <td>103</td>
                                </tr>
                                <tr class="comment">
                                    <td colspan="5">1사이즈 문의 드립니다. 사이즈 문의 드립니다. 사이즈 문의 드립니다. 사이즈 문의 드립니다. 사이즈 문의 드립니다.</td>
                                </tr>
                                <tr>
                                    <td>100</td>
                                    <td class="title"><i class="icon-file-image"></i> <a href="#">1사이즈 문의 드립니다. 사이즈 문의 드립니다. 사이즈 문의 드립니다. 사이즈 문의 드립니다. 사이즈 문의 드립니다.</a> </td>
                                    <td>아이디</td>
                                    <td>2016-07-31</td>
                                    <td>103</td>
                                </tr>
                                <tr class="comment">
                                    <td colspan="5">1사이즈 문의 드립니다. 사이즈 문의 드립니다. 사이즈 문의 드립니다. 사이즈 문의 드립니다. 사이즈 문의 드립니다.</td>
                                </tr>
                                <tr>
                                    <td>100</td>
                                    <td class="title"><a href="#">2사이즈 문의 드립니다.</a></td>
                                    <td>아이디</td>
                                    <td>2016-07-31</td>
                                    <td>103</td>
                                </tr>
                                <tr class="comment">
                                    <td colspan="5">1사이즈 문의 드립니다. 사이즈 문의 드립니다. 사이즈 문의 드립니다. 사이즈 문의 드립니다. 사이즈 문의 드립니다.</td>
                                </tr>
                                <tr>
                                    <td>100</td>
                                    <td class="title"><a href="#">3사이즈 문의 드립니다.</a></td>
                                    <td>아이디</td>
                                    <td>2016-07-31</td>
                                    <td>103</td>
                                </tr>
                                <tr class="comment">
                                    <td colspan="5">1사이즈 문의 드립니다. 사이즈 문의 드립니다. 사이즈 문의 드립니다. 사이즈 문의 드립니다. 사이즈 문의 드립니다.</td>
                                </tr>
                                <tr>
                                    <td>100</td>
                                    <td class="title"><a href="#">4사이즈 문의 드립니다.</a></td>
                                    <td>아이디</td>
                                    <td>2016-07-31</td>
                                    <td>103</td>
                                </tr>
                                <tr class="comment">
                                    <td colspan="5">1사이즈 문의 드립니다. 사이즈 문의 드립니다. 사이즈 문의 드립니다. 사이즈 문의 드립니다. 사이즈 문의 드립니다.</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="btn-area row">
                            <div class="col-xs-6 col-sm-2 col-sm-offset-8"><a href="#" class="btn btn-block btn-list">목록보기</a></div>
                            <div class="col-xs-6 col-sm-2"><a href="#" class="btn btn-block btn-write">글쓰기</a></div>
                        </div>
                        <?php require($_SERVER["DOCUMENT_ROOT"].'/inc/paging.php'); ?>
                    </div>
                </section>
            </div>
        </div>

    </main>

    <div id="help-modal" class="modal fade" tabindex="-1" role="dialog">
    </div>

    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/footer.php'); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/docfoot.php'); ?>
    <script src="/assets/js/jquery-ui.min.js"></script>
    <script src="/assets/js/jquery.ui.touch-punch.min.js"></script>
    <script src="/assets/js/jquery.bxslider.min.js"></script>
    <script>
        (function($) {

            // 상품이미지 슬라이더
            $('.summary .preview .figure').bxSlider({
                mode: 'fade',
                pagerCustom: '.summary .preview .pager',
                controls: false
            });

            // 리뷰 클릭
            $(document).on('click', '.review-list .title a', function(e) {
                var $commentRow = $(this).parents('tr').eq(0).find('+ .comment');
                if ($commentRow.hasClass('open')) {
                    $commentRow.removeClass('open');
                } else {
                    $commentRow.addClass('open');
                }
                e.preventDefault();
            });

        })(jQuery);
    </script>
    <script>
        (function($) {
            $('#help-modal').on('show.bs.modal', function (e) {
                $(this).load($(e.relatedTarget).attr('href'));
            });
        })(jQuery);
    </script>
</body>
</html>
