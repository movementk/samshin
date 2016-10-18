<?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/dochead_sub.php'); ?>
<link href="/assets/css/product.css" rel="stylesheet">
<link href="/assets/css/jquery-ui.min.css" rel="stylesheet">
<link href="/assets/css/jquery-ui.structure.min.css" rel="stylesheet">
<link href="/assets/css/jquery-ui.theme.min.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/header.php'); ?>
    <main id="content" tabindex="-1">

        <!-- 스텝
            클래스 명 구분
            - 스텝#1: step-1, 스텝#2: step-2
            - 링선택: select-ring, 목걸이선택: select-necklace, 귀걸이선택: select-earring
        -->
        <section class="select-steps step-2 select-ring">
            <div class="container">
                <ol>
                    <li>
                        <div>
                            <h3><small>SELECT YOUR</small><br>DIAMOND</h3>
                            <div class="info">
                                <span class="price">529,000<span>원</span></span>
                                <ul class="menu">
                                    <li><a href="#">VIEW</a></li>
                                    <li><a href="#">CHANGE</a></li>
                                </ul>
                            </div>
                            <div class="icon"></div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <h3><small>SELECT YOUR</small><br>SETTING</h3>
                            <div class="info">
                                <span class="price">529,000<span>원</span></span>
                                <ul class="menu">
                                    <li><a href="#">VIEW</a></li>
                                    <li><a href="#">CHANGE</a></li>
                                </ul>
                            </div>
                            <div class="icon"></div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <h3><small>COMPLETE</small><br>YOUR RING</h3>
                            <div class="icon"></div>
                        </div>
                    </li>
                </ol>
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
                    <li class="col-xs-6 col-sm-3 col-sm-offset-3 col-lg-2 col-lg-offset-4 active"><a class="btn btn-block" href="./dia_list.php">다이아몬드</a></li>
                    <li class="col-xs-6 col-sm-3 col-lg-2"><a class="btn btn-block" href="./fancy_list.php">팬시컬러 다이아몬드</a></li>
                </ul>
            </div>

            <!-- 검색 영역 -->
            <div class="dia filter">
                <form class="row" action="#">
                    <fieldset class="shape col-xs-12">
                        <legend>SHAPE<i>형태</i><a class="help-link" href="./modal/shape.php" data-toggle="modal" data-target="#help-modal"></a></legend>
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
                        <legend>PRICE<i>가격</i><a class="help-link" href="./modal/price.php" data-toggle="modal" data-target="#help-modal"></a></legend>
                        <div class="slider"><div></div></div>
                        <div class="values row">
                            <div class="col-xs-6"><input class="form-control minium" type="text" placeholder="₩0" readonly></div>
                            <div class="col-xs-6"><input class="form-control maxium" type="text" placeholder="₩500" readonly></div>
                        </div>
                    </fieldset>
                    <fieldset class="carat col-xs-12 col-lg-6">
                        <legend>CARAT<i>중량</i><a class="help-link" href="./modal/carat.php" data-toggle="modal" data-target="#help-modal"></a></legend>
                        <div class="slider"><div></div></div>
                        <div class="values row">
                            <div class="col-xs-6"><input class="form-control minium" type="text" placeholder="0.1" readonly></div>
                            <div class="col-xs-6"><input class="form-control maxium" type="text" placeholder="99" readonly></div>
                        </div>
                    </fieldset>
                    <fieldset class="color col-xs-12">
                        <legend>COLOR<i>색상</i><a class="help-link" href="./modal/color.php" data-toggle="modal" data-target="#help-modal"></a></legend>
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
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> H
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> I
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> J
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> K
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> L
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> M
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> N~Z
                            </label></li>
                        </ul>
                    </fieldset>
                    <fieldset class="clarity col-xs-12">
                        <legend>CLARITY<i>선명도</i><a class="help-link" href="./modal/clarity.php" data-toggle="modal" data-target="#help-modal"></a></legend>
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
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> SI3
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> I1
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> I2~I3
                            </label></li>
                        </ul>
                    </fieldset>
                    <fieldset class="cut col-xs-12 col-lg-6">
                        <legend>CUT <i>컷팅</i></legend>
                        <ul class="btn-list" data-toggle="buttons">
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> Excellent
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> Very Good
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> Good
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> Fair
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> Pool
                            </label></li>
                        </ul>
                    </fieldset>
                    <fieldset class="lap col-xs-12 col-lg-6">
                        <legend>LAP <i>감정서</i></legend>
                        <ul class="btn-list" data-toggle="buttons">
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> GIA
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> HRD
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> GEL
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> IGI
                            </label></li>
                            <li><label class="btn btn-block btn-round">
                                <input type="checkbox"> AGS
                            </label></li>
                        </ul>
                    </fieldset>
                    <fieldset class="polish col-xs-12 col-lg-6">
                        <legend>POLISH <i>연마</i></legend>
                        <ul class="check-list">
                            <li><label class="check">
                                <input type="checkbox"> Exellent
                            </label></li>
                            <li><label class="check">
                                <input type="checkbox"> Very Good
                            </label></li>
                            <li><label class="check">
                                <input type="checkbox"> Good
                            </label></li>
                            <li><label class="check">
                                <input type="checkbox"> Fair
                            </label></li>
                            <li><label class="check">
                                <input type="checkbox"> Poor
                            </label></li>
                        </ul>
                    </fieldset>
                    <fieldset class="symmetry col-xs-12 col-lg-6">
                        <legend>SYMMETRY <i>대칭</i></legend>
                        <ul class="check-list">
                            <li><label class="check">
                                <input type="checkbox"> Exellent
                            </label></li>
                            <li><label class="check">
                                <input type="checkbox"> Very Good
                            </label></li>
                            <li><label class="check">
                                <input type="checkbox"> Good
                            </label></li>
                            <li><label class="check">
                                <input type="checkbox"> Fair
                            </label></li>
                            <li><label class="check">
                                <input type="checkbox"> Poor
                            </label></li>
                        </ul>
                    </fieldset>
                    <fieldset class="fluorescence col-xs-12 col-lg-6">
                        <legend>FLUORESCENCE <i>형광성</i></legend>
                        <ul class="check-list">
                            <li><label class="check">
                                <input type="checkbox"> None
                            </label></li>
                            <li><label class="check">
                                <input type="checkbox"> Faint
                            </label></li>
                            <li><label class="check">
                                <input type="checkbox"> Mideum
                            </label></li>
                            <li><label class="check">
                                <input type="checkbox"> Strong
                            </label></li>
                            <li><label class="check">
                                <input type="checkbox"> Very Strong
                            </label></li>
                        </ul>
                    </fieldset>
                    <fieldset class="imgdata col-xs-12 col-lg-6">
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
                                <td>Very <br class="visible-xs">Good</td>
                                <td>GIA</td>
                                <td><a href="#">￦123,000,000</a></td>
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
                                <td>Very <br class="visible-xs">Good</td>
                                <td>GIA</td>
                                <td><a href="#">￦123,000,000</a></td>
                                <td>
                                    <?php require($_SERVER["DOCUMENT_ROOT"].'/product/_dia_list_dropdown.php'); ?>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>1.13</td>
                                <td>D</td>
                                <td>I1</td>
                                <td>Very <br class="visible-xs">Good</td>
                                <td>GIA</td>
                                <td><a href="#">￦123,000,000</a></td>
                                <td>
                                    <?php require($_SERVER["DOCUMENT_ROOT"].'/product/_dia_list_dropdown.php'); ?>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>1.13</td>
                                <td>D</td>
                                <td>I1</td>
                                <td>Very <br class="visible-xs">Good</td>
                                <td>GIA</td>
                                <td><a href="#">￦123,000,000</a></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>1.13</td>
                                <td>D</td>
                                <td>I1</td>
                                <td>Very <br class="visible-xs">Good</td>
                                <td>GIA</td>
                                <td><a href="#">￦123,000,000</a></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>1.13</td>
                                <td>D</td>
                                <td>I1</td>
                                <td>Very <br class="visible-xs">Good</td>
                                <td>GIA</td>
                                <td><a href="#">￦123,000,000</a></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

        </div>
    </main>

    <div id="help-modal" class="modal fade" tabindex="-1" role="dialog" data-show="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!--
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="sr-only">닫기</span></button>
                    <h4 class="modal-title">SHAPE <i>형태</i></h4>
                </div>
                <div class="modal-body">
                    <p>One fine body&hellip;</p>
                </div>
                -->
            </div>
        </div>
    </div>

    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/footer.php'); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/docfoot.php'); ?>
    <script src="/assets/js/jquery-ui.min.js"></script>
    <script src="/assets/js/jquery.ui.touch-punch.min.js"></script>
    <script src="/assets/js/filter_dia.js"></script>
    <script>
        (function($) {
            $('#help-modal').on('show.bs.modal', function (e) {
                $(this).find('.modal-content').load($(e.relatedTarget).attr('href'));
            });
        })(jQuery);
    </script>
</body>
</html>
