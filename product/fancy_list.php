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
                    <li class="col-xs-6 col-sm-3 col-sm-offset-3 col-lg-2 col-lg-offset-4"><a class="btn btn-block" href="./dia_list.php">다이아몬드</a></li>
                    <li class="col-xs-6 col-sm-3 col-lg-2 active"><a class="btn btn-block" href="./fancy_list.php">팬시컬러 다이아몬드</a></li>
                </ul>
            </div>

            <!-- 검색 영역 -->
            <div class="fancy filter">
                <form class="row" action="#">
                    <fieldset class="fancy-color col-xs-12">
                        <legend>COLOR <i>컬러</i></legend>
                        <div class="fancy-color-list">
                            <ul>
                                <li><label class="btn btn-block">
                                    <input type="checkbox">
                                    <span>YELLOW</span>
                                </label></li>
                                <li><label class="btn btn-block">
                                    <input type="checkbox">
                                    <span>ORANGE</span>
                                </label></li>
                                <li><label class="btn btn-block">
                                    <input type="checkbox">
                                    <span>BROWN</span>
                                </label></li>
                                <li><label class="btn btn-block">
                                    <input type="checkbox">
                                    <span>GREEN</span>
                                </label></li>
                                <li><label class="btn btn-block">
                                    <input type="checkbox">
                                    <span>PINK</span>
                                </label></li>
                                <li><label class="btn btn-block">
                                    <input type="checkbox">
                                    <span>BLUE</span>
                                </label></li>
                                <li><label class="btn btn-block">
                                    <input type="checkbox">
                                    <span>PURPLE</span>
                                </label></li>
                                <li><label class="btn btn-block">
                                    <input type="checkbox">
                                    <span>RED</span>
                                </label></li>
                                <li><label class="btn btn-block">
                                    <input type="checkbox">
                                    <span>GRAY</span>
                                </label></li>
                                <li><label class="btn btn-block">
                                    <input type="checkbox">
                                    <span>BLACK</span>
                                </label></li>
                                <li><label class="btn btn-block">
                                    <input type="checkbox">
                                    <span>VIOLET</span>
                                </label></li>
                            </ul>
                        </div>
                    </fieldset>
                    <fieldset class="shape col-xs-12">
                        <legend>SHAPE <i>형태</i></legend>
                        <div class="shape-list">
                            <ul>
                                <li><label class="btn btn-block">
                                    <input type="checkbox">
                                    <span class="en">ROUND</span>
                                    <span class="ko">라운드</span>
                                </label></li>
                                <li><label class="btn btn-block">
                                    <input type="checkbox">
                                    <span class="en">PRINCESS</span>
                                    <span class="ko">프린세스</span>
                                </label></li>
                                <li><label class="btn btn-block">
                                    <input type="checkbox">
                                    <span class="en">CUSHION</span>
                                    <span class="ko">쿠션</span>
                                </label></li>
                                <li><label class="btn btn-block">
                                    <input type="checkbox">
                                    <span class="en">RADIENT</span>
                                    <span class="ko">라디언트</span>
                                </label></li>
                                <li><label class="btn btn-block">
                                    <input type="checkbox">
                                    <span class="en">EMERALD</span>
                                    <span class="ko">에메랄드</span>
                                </label></li>
                                <li><label class="btn btn-block">
                                    <input type="checkbox">
                                    <span class="en">ASSCHER</span>
                                    <span class="ko">어셔</span>
                                </label></li>
                                <li><label class="btn btn-block">
                                    <input type="checkbox">
                                    <span class="en">OVAL</span>
                                    <span class="ko">오발</span>
                                </label></li>
                                <li><label class="btn btn-block">
                                    <input type="checkbox">
                                    <span class="en">MARQUISE</span>
                                    <span class="ko">마퀴즈</span>
                                </label></li>
                                <li><label class="btn btn-block">
                                    <input type="checkbox">
                                    <span class="en">PEAR</span>
                                    <span class="ko">피어</span>
                                </label></li>
                                <li><label class="btn btn-block">
                                    <input type="checkbox">
                                    <span class="en">HEART</span>
                                    <span class="ko">하트</span>
                                </label></li>
                                <li><label class="btn btn-block">
                                    <input type="checkbox">
                                    OTHER<br>SHAPE
                                </label></li>
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
                    <fieldset class="fancy-intensity col-xs-12 col-lg-8">
                        <legend>FANCY INTENSITY <i>팬시 컬러 등급</i></legend>
                        <ul class="btn-list" data-toggle="buttons">
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> FAINT
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> FAINT LIGHT
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> FANCY
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> FANCY INTENSE
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> FANCY DEEP
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> FANCY VIVID
                            </label></li>
                        </ul>
                    </fieldset>
                    <fieldset class="imgdata col-xs-12 col-lg-4">
                        <legend>IMAGE DATA <i>이미지 정보</i></legend>
                        <ul class="check-list">
                            <li><label class="check">
                                <input type="checkbox"> 감정서
                            </label></li>
                            <li><label class="check">
                                <input type="checkbox"> 360 Video
                            </label></li>
                            <li><label class="check">
                                <input type="checkbox"> 다이아몬드 사진
                            </label></li>
                        </ul>
                    </fieldset>
                </form>
                <div class="btn-area">
                    <button class="btn" type="button">상세검색 <span class="glyphicon glyphicon-menu-down"></span></button>
                </div>
            </div>

            <!-- 결과 목록 -->
            <section class="result">
                <header class="row">
                    <div class="col-xs-7 col-md-10"><h5><b>100개</b>의 다이아몬드가 검색되었습니다.</h5></div>
                    <div class="col-xs-5 col-md-2">
                        <select class="form-control">
                            <option value="">가격높은 순</option>
                            <option value="">가격낮은 순</option>
                        </select>
                    </div>
                </header>
                <div class="dia-list table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>형태<br><small>SHAPE</small></th>
                                <th>중량<br><small>CARAT</small></th>
                                <th>색상<br><small>COLOR</small></th>
                                <th>선명도<br><small>CLARITY</small></th>
                                <th>컷팅<br><small>CUT</small></th>
                                <th>연마<br><small>POLISH</small></th>
                                <th>대칭<br><small>SYMMETRY</small></th>
                                <th>형광성<br><small>FLUORESCENCE</small></th>
                                <th>감정서<br><small>REPORT</small></th>
                                <th>가격<br><small>PRICE</small></th>
                                <th>선택</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td>1.13</td>
                                <td>D</td>
                                <td>I1</td>
                                <td>Very Good</td>
                                <td>Exellent</td>
                                <td>Good</td>
                                <td>None</td>
                                <td>GIA</td>
                                <td>￦123,000,000</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            다이아몬드 선택하기
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">다이아몬드 상세보기</a></li>
                                            <li><a href="#">반지에 셋팅하기</a></li>
                                            <li><a href="#">목걸이에 셋팅하기</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>1.13</td>
                                <td>D</td>
                                <td>I1</td>
                                <td>Very Good</td>
                                <td>Exellent</td>
                                <td>Good</td>
                                <td>None</td>
                                <td>GIA</td>
                                <td>￦123,000,000</td>
                                <td>
                                    <?php require($_SERVER["DOCUMENT_ROOT"].'/product/_dia_list_dropdown.php'); ?>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>1.13</td>
                                <td>D</td>
                                <td>I1</td>
                                <td>Very Good</td>
                                <td>Exellent</td>
                                <td>Good</td>
                                <td>None</td>
                                <td>GIA</td>
                                <td>￦123,000,000</td>
                                <td>
                                    <?php require($_SERVER["DOCUMENT_ROOT"].'/product/_dia_list_dropdown.php'); ?>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>1.13</td>
                                <td>D</td>
                                <td>I1</td>
                                <td>Very Good</td>
                                <td>Exellent</td>
                                <td>Good</td>
                                <td>None</td>
                                <td>GIA</td>
                                <td>￦123,000,000</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>1.13</td>
                                <td>D</td>
                                <td>I1</td>
                                <td>Very Good</td>
                                <td>Exellent</td>
                                <td>Good</td>
                                <td>None</td>
                                <td>GIA</td>
                                <td>￦123,000,000</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>1.13</td>
                                <td>D</td>
                                <td>I1</td>
                                <td>Very Good</td>
                                <td>Exellent</td>
                                <td>Good</td>
                                <td>None</td>
                                <td>GIA</td>
                                <td>￦123,000,000</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
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
