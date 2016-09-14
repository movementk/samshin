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
                # 디자인 확인 필요
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
            <div class="gia filter">
                <form class="row" action="#">
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
                                <input type="checkbox"> D
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> E
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> F
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> G
                            </label></li>
                        </ul>
                    </fieldset>
                    <fieldset class="clarity col-xs-12">
                        <legend>CLARITY <i>선명도</i></legend>
                        <ul class="btn-list" data-toggle="buttons">
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> IF
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> VVS1
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> VVS2
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> VS1
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> VS2
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> SI1
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> SI2
                            </label></li>
                        </ul>
                    </fieldset>
                    <fieldset class="cut col-xs-12 col-lg-6">
                        <legend>CUT <i>컷팅</i></legend>
                        <ul class="btn-list" data-toggle="buttons">
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> Exellent
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> Very Good
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> Good
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
