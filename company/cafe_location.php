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
    <main id="content" tabindex="-1" class="company cafe location">
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
                    <a class="btn" href="./cafe_water.php">다이아몬드 미네랄 워터</a>
                </li>
                <li role="presentation" class="col-xs-6 col-sm-4 col-md-2">
                    <span class="btn">위치 안내</span>
                </li>
            </ul>
        </div>
        <div class="container">
            <div class="section-content">
                <div class="section-head">
                    <h3 class="section-title">카페 다이아만티노 위치 안내</h3>
                    <hr>
                    <p>
                        Health Life 를 컨샙으로 다양한 건강 음료와 국내산 식자재만을 사용!<br>
                        소중한 사람과 기억에 남을 시간을 만들어 드립니다.
                    </p>
                </div>
                <div class="section-body">
                    <div class="contact">
                        <div class="map">
                            <p><img class="img-responsive" src="/assets/images/company/img_map_dummy.jpg" alt=""></p>
                        </div>
                        <dl>
                            <dt><i class="icon-home"></i> 주소</dt>
                            <dd><address>서울 강남구 논현로 836 삼신빌딩 1층 카페 다이아만티노</address></dd>
                            <dt><i class="icon-phone"></i> 전화번호</dt>
                            <dd>02.517.5195</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/footer.php'); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/docfoot.php'); ?>
</body>
</html>
