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
    <main id="content" tabindex="-1" class="company cafe menu">
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
                    <a class="btn" href="./cafe_intro.php">카페 다이아만티노 소개</a>
                </li>
                <li role="presentation" class="col-xs-6 col-sm-4 col-md-2">
                    <span class="btn" href="./cafe_menu.php">메뉴 안내</span>
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
                <h3 class="section-title">다이아만티노 메뉴 안내</h3>
                <hr>
                <p>
                    다이아만티노는 Health Life를 컨샙으로 국내산 식자재와 호주 청정우를 사용, 건강한 음식을 선보이고 있습니다.
                </p>
            </div>
            <div class="section-content">
                <div>
                    <div class="section-body row">
                        <div class="col-md-5 col-md-offset-1">
                            <div class="figure figure-1">
                                <p><img class="img-responsive" src="/assets/images/company/img_food_1.jpg" alt=""></p>
                            </div>
                            <div class="details">
                                <h4><img class="img-responsive" src="/assets/images/company/h_cafe_diamantino.gif" alt=""></h4>
                                <strong>CAFÉ &amp; BISTRO <i class="icon-diamond"></i> LUXURY LOUNGE</strong>
                                <p>다이아만티노는 Health Life를 컨샙으로 국내산 식자재와 호주 청정우를 사용, 건강한 음식을 선보이고 있습니다.</p>
                                <a class="btn" href="#">메뉴 자세히 보기</a>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <hr>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="figure figure-2">
                                        <p><img class="img-responsive" src="/assets/images/company/img_food_2.jpg" alt=""></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="figure figure-3">
                                        <p><img class="img-responsive" src="/assets/images/company/img_food_3.jpg" alt=""></p>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="figure figure-4">
                                        <p><img class="img-responsive" src="/assets/images/company/img_food_4.jpg" alt=""></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="figure figure-5">
                                        <p><img class="img-responsive" src="/assets/images/company/img_food_5.jpg" alt=""></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/footer.php'); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/docfoot.php'); ?>
</body>
</html>
