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
    <main id="content" tabindex="-1" class="company cafe water">
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
                    <a class="btn" href="./cafe_menu.php">메뉴 안내</a>
                </li>
                <li role="presentation" class="col-xs-6 col-sm-4 col-md-2">
                    <a class="btn" href="./cafe_room.php">미팅룸&amp;프로포즈룸 대여</a>
                </li>
                <li role="presentation" class="col-xs-6 col-sm-4 col-md-2">
                    <span class="btn">다이아몬드 미네랄 워터</span>
                </li>
                <li role="presentation" class="col-xs-6 col-sm-4 col-md-2">
                    <a class="btn" href="./cafe_location.php">위치 안내</a>
                </li>
            </ul>
        </div>
        <div class="container">
            <div class="section-content">
                <div class="section-head">
                    <h3 class="section-title">다이아몬드 미네랄 워터</h3>
                    <hr>
                    <p>
                        500캐럿 천연 다이아몬드 보석수 / 500 CARATS DIAMOND MINERAL WATER
                    </p>
                </div>
                <div class="section-body row">
                    <div class="col-md-7">
                        <p class="figure"><img class="img-responsive" src="/assets/images/company/img_water.jpg" alt=""></p>
                    </div>
                    <div class="col-md-5">
                        <div class="details">
                            <h4>다이아몬드 힐링 효과</h4>
                            <ol>
                                <li>
                                    <blockquote>
                                        <p><span>01</span> 나노 크기의 다이아몬드 입자는 피부 속에 머무르면서 장시간 보습 항산화 효과를 준다.</p>
                                        <p>Moisturizing antioxidant effects, for long periods of time as staying
        in the nanoscale particles in the skin diamonds.</p>
                                        <cite>SCI 국제학술지 게제</cite>
                                    </blockquote>
                                </li>
                                <li>
                                    <blockquote>
                                        <p>
                                            <span>02</span> 전통적으로 다이아몬드는 해독에 사용되었다.<br>
                                            알레르기와 만성 질환을 치유하고 신진대사를 재조정한다.<br>
                                            다이아몬드는 녹내장을 치료하고 시력을 맑게 하고 뇌에 좋다.
                                        </p>
                                        <p>
                                            Traditionally diamonds are being used to decipher.<br>
                                            Rebalancing metabolism to treat allergies and chronic diseases.<br>
                                            Diamonds are clear vision and good the brain to treat glaucoma.
                                        </p>
                                        <cite>출처 : 크리스탈 바이블</cite>
                                    </blockquote>
                                </li>
                            </ol>
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
